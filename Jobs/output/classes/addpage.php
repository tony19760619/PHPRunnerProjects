<?php
class AddPage extends RunnerPage
{
	/**
	 * The page's message
	 * @type String
	 */	
	protected $message;
	
	/**
	 * The page's message type
	 * @type Number
	 */	
	protected $messageType = MESSAGE_ERROR;

	protected $auditObj = null;	
	
	/**
	 * The page's fields array
	 */
	protected $addFields = array();

	protected $readAddValues = false;	
	
	/**
	 * The record is being added through the 'List page with search' InlineAdd controls
	 */
	protected $insertedSuccessfully = false;
	
	/**
	 * The new added record keys
	 * The property is set after record is added	
	 */
	protected $keys = array();
	
	protected $defvalues = array();
	
	protected $newRecordData = array();
	
	protected $newRecordBlobFields = array();

	/**
	 * It could be set up in ADD_MASTER mode only
	 */
	public $afterAdd_id = ''; 	
	
	/**
	 * The page's action
	 * @type String
	 */
	public $action = "";
	
	/**
	 * It's set up in inline add mode only
	 */
	public $screenWidth = 0;
	/**
	 * It's set up in inline add mode only
	 */	
	public $screenHeight = 0;	
	/**
	 * It's set up in inline add mode only
	 */	
	public $orientation = '';	
			
	/**
	 * It's equal to true when a record is added
	 * through the 'List page with search' InlineAdd controls
	 */ 
	public $forListPageWithSearch = false;
	
	/**
	 * Is's set up properly in inline add mode only
	 */
	public $masterPageType = "";	
	
	/**
	 * It's set up properly when a record is being added 
	 * in a lookup 'Add new' popup 
	 * or through the 'List page with search' InlineAdd controls
	 */
	public $mainTable = "";
	
	/**
	 * It's set up properly when a record is being added 
	 * in a lookup 'Add new' popup 
	 * or through the 'List page with search' InlineAdd controls
	 */
	public $mainField = "";

	/**
	 * It's set up properly when a record is being added 
	 * in a lookup 'Add new' popup 
	 * or through the 'List page with search' InlineAdd controls
	 */
	public $mainPageType = "";	
	
	/**
	 * It's set up properly when a record is being added through a dependent lookup
	 * It contains parent control's value
	 */
	public $category = "";

	/**
	 * The name of the dashboard element where the page is displayed on
	 * It's set up correctly in dash mode only
	 */
	public $dashElementName = "";
	
	/**
	 * The corresponding dashboard name
	 * It's set up correctly in dash mode only	 
	 */
	public $dashTName = "";
	
	
	/**
	 * @constructor
	 */ 
	function AddPage(&$params)
	{
		parent::RunnerPage($params);
		
		$this->addFields = $this->getPageFields();
		$this->auditObj = GetAuditObject($this->tName);
			
		$this->formBricks["header"] = "addheader";
		$this->formBricks["footer"] = "addbuttons";
		$this->assignFormFooterAndHeaderBricks( true );		
	}

	/**
	 * Assign session prefix
	 */
	protected function assignSessionPrefix()
	{	
		if( $this->mode == ADD_DASHBOARD )
		{
			$this->sessionPrefix = $this->dashTName."_".$this->tName;
			return;
		}
		
		parent::assignSessionPrefix();
			
		if( $this->mode == ADD_ONTHEFLY )
			$this->sessionPrefix.= "_add";
	}

	/**
	 * Set template file
	 */
	public function setTemplateFile()
	{
		if( $this->mode == ADD_INLINE )
			$this->templatefile = GetTemplateName($this->shortTableName, "inline_add");
			
		parent::setTemplateFile();
	}	

	/**
	 * Get the page's fields list	
	 * @return Array
	 */
	protected function getPageFields()
	{
		if( $this->mode == ADD_INLINE )
			return $this->pSet->getInlineAddFields();
			
		return $this->pSet->getAddFields();
	}
	

	/**
	 * Process a broken request
	 */
	public static function handleBrokenRequest()
	{
		if( sizeof($_POST) != 0 || !postvalue('submit') )
			return;		

		if( postvalue("inline") ) 
		{
			$returnJSON = array();
			$returnJSON['success'] = false;
			$returnJSON['message'] = "Error occurred";
			$returnJSON['fatalError'] = true;
			echo printJSON($returnJSON);
			exit();
		}
		
		if( postvalue("fly") )
		{
			echo -1;
			exit();
		}
		 
		$_SESSION["message_add"] = "<< "."Error occurred"." >>";		
	}

	/**
	 * Redirect after details saved
	 */
	public function redirectAfterAdd()
	{
		HeaderRedirect($this->pSet->getShortTableName(), PAGE_ADD);
		if( $this->eventsObject->exists("AfterAdd") && isset($_SESSION['after_add_data'][ $this->afterAdd_id ]) )
		{
			$data = $_SESSION['after_add_data'][ $this->afterAdd_id ];
			$this->eventsObject->AfterAdd( $data['avalues'], $data['keys'], $data['inlineadd'], $this );
		
		}
		unset( $_SESSION['after_add_data'][ $this->afterAdd_id ] );
		
		foreach( is_array($_SESSION['after_add_data']) ? $_SESSION['after_add_data'] : array() as $k => $v)
		{
			if( !is_array($v) or !array_key_exists('time', $v) ) 
			{
				unset( $_SESSION['after_add_data'][ $k ] );
				continue;
			}
			
			if( $v['time'] < time() - 3600 )
				unset($_SESSION['after_add_data'][ $k ]);
		}
	}
	
	/**
	 * Process the page
	 */
	public function process()
	{
		if( strlen($this->afterAdd_id) )
		{
			$this->redirectAfterAdd();
			return;	
		}
		
		//	Before Process event
		if( $this->eventsObject->exists("BeforeProcessAdd") )
			 $this->eventsObject->BeforeProcessAdd( $this );		
		
		if( $this->captchaExists() )
			$this->doCaptchaCode();
		
		if( $this->action == "added" )
		{
			// insert new record if we have to
			$this->processDataInput();

			$this->readAddValues = !$this->insertedSuccessfully;
			
			if( $this->mode != ADD_SIMPLE && $this->mode != ADD_DASHBOARD )
			{ 
				$this->reportSaveStatus();
				return; 
			}
			
			if( $this->prgRedirect() )
				return; 
		}
		
		$this->prgReadMessage();
		
		$this->prepareDefvalues();

		if( $this->eventsObject->exists("ProcessValuesAdd") )
			$this->eventsObject->ProcessValuesAdd( $this->defvalues, $this );
		
		$this->prepareReadonlyFields();

		$this->prepareEditControls();

		$this->prepareButtons();
		
		//fill tab groups name and sections name to controls
		$this->fillCntrlTabGroups();
		
		$this->prepareDetailsTables(); 

		// add button events if exist
		if( $this->mode == ADD_SIMPLE || $this->mode == ADD_ONTHEFLY )
			$this->addButtonHandlers();		
		
		$this->addCommonJs();

		$this->fillSetCntrlMaps();

		$this->doCommonAssignments();	
		
		$this->displayAddPage();
	}

	/**
	 * Insert a new record to db
	 */
	protected function processDataInput()
	{
		if( $this->action != "added" )
			return;
			
		$this->buildNewRecordData();
		
		if( !$this->checkCaptcha() )
			return;
		
		if( !$this->recheckUserPermissions() )
			return;
		
		if( !$this->callBeforeAddEvent() )
			return;

		//add or set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked
		$this->setUpdatedLatLng( $this->newRecordData );
			
		if( !$this->checkDeniedDuplicatedValues() )
			return;
		
		if( $this->callCustomAddEvent() )	
			$this->insertedSuccessfully = DoInsertRecordOnAdd( $this );
		
		if( !$this->insertedSuccessfully )
		{			
			return false;
		}	

		$this->ProcessFiles();
		
		$this->messageType = MESSAGE_INFO;
		
		$this->prepareTableKeysAfterInsert();
		
		$this->mergeNewRecordData();
		
		if( $this->auditObj )
			$this->auditObj->LogAdd( $this->tName, $this->newRecordData, $this->keys );

		$this->callAfterSuccessfulSave();

		$this->callAfterAddEvent();	
		
		$this->setSuccessfulUpdateMessage();	
	}

	/**
	 * Fill newRecordData, newRecordBlobFields properties
	 */
	protected function buildNewRecordData()
	{
		$avalues = array();
		$blobfields = array();		
		$afilename_values = array();
			
		foreach($this->addFields as $f)
		{
			$control = $this->getControl( $f, $this->id );
			$control->readWebValue($avalues, $blobfields, NULL, NULL, $afilename_values);			
		}		

		$securityType = $this->pSet->getAdvancedSecurityType();
		if( !$this->isAdminTable() && ($securityType == ADVSECURITY_EDIT_OWN || $securityType == ADVSECURITY_VIEW_OWN) )
		{
			$tableOwnerIdField = $this->pSet->getTableOwnerIdField();
			// insert owner id value if it exists an It hasn't already set by user
			if( $this->checkIfToAddOwnerIdValue( $tableOwnerIdField, $avalues[ $tableOwnerIdField ] ) )
				$avalues[ $tableOwnerIdField ] = prepare_for_db( $tableOwnerIdField, $_SESSION["_".$this->tName."_OwnerID"] );		
		}
		$masterTables = $this->pSet->getMasterTablesArr( $this->tName );
		// insert master key value if exists and if not specified
		foreach( $masterTables as $mTableData )
		{
			if( @$_SESSION[$this->sessionPrefix."_mastertable"] == $mTableData["mDataSourceTable"] )
			{
				foreach( $mTableData["detailKeys"] as $idx => $dk )
				{
					$masterkeyIdx = "masterkey".($idx + 1);
					if( postvalue($masterkeyIdx) )
						$_SESSION[ $this->sessionPrefix."_".$masterkeyIdx ] = postvalue($masterkeyIdx);
					
					if( !isset( $avalues[ $dk ] ) || $avalues[ $dk ] == "" )
						$avalues[ $dk ] = prepare_for_db( $dk, $_SESSION[ $this->sessionPrefix."_".$masterkeyIdx ] );				
				}				
			}
		}	
		
		$lookupMainSettings = getLookupMainTableSettings($this->tName, $this->mainTable, $this->mainField);
		if( $lookupMainSettings )
		{
			if( $lookupMainSettings->useCategory($this->mainField) && !isset($avalues[ $lookupMainSettings->getCategoryFilter($this->mainField) ]) )
				$avalues[ $lookupMainSettings->getCategoryFilter($this->mainField) ] = $this->category;
		}

		foreach($afilename_values as $fileFName => $value)
		{
			$avalues[ $fileFName ] = $value;
		}
		
		$this->newRecordData = $avalues;
		$this->newRecordBlobFields = $blobfields;		
	}
	
	/**
	 * Process captcha
	 * @return Boolean	 
	 */
	protected function checkCaptcha() 
	{
		if( $this->mode == ADD_ONTHEFLY && $this->mode == ADD_INLINE || !$this->captchaExists() )
			return true;
		
		if( $this->isCaptchaOk )
			$_SESSION[ $this->tName."_count_captcha" ] = $_SESSION[ $this->tName."_count_captcha" ] + 1;
		
		return $this->isCaptchaOk;
	}	

	/**
	 * @return Boolean
	 */
	protected function recheckUserPermissions()
	{
		if( CheckTablePermissions($this->tName, "A") )
			return true;
		
		if( isLoggedAsGuest() || !isLogged() ) 
		{
			$this->setMessage( "Your session has expired." 
				. "<a href='#' id='loginButtonContinue" . $this->id . "'>" . "Login" . "</a>" 
				. " to save data." );
		}
		else
		{
			$this->setMessage( 'You have no permissions to complete this action.' );
		}
		
		return false;	
	}

	/**
	 * Execute before Add event
	 * @return Boolean
	 */
	protected function callBeforeAddEvent()
	{
		if( !$this->eventsObject->exists("BeforeAdd") )
			return true;

		$usermessage = "";		
		$ret = $this->eventsObject->BeforeAdd( $this->newRecordData, $usermessage, $this->mode == ADD_INLINE, $this );
		if( !$ret )
			$this->setMessage( $usermessage );
		
		return $ret; 	
	}

	/**
	 * Check if some values are duplicated for the fields not allowing duplicates
	 * @return Boolean
	 */
	public function checkDeniedDuplicatedValues()
	{
		$usermessage = "";
		$ret = $this->hasDeniedDuplicateValues( $this->newRecordData, $usermessage );	
		if( $ret )
			$this->setMessage( $usermessage );
		
		return !$ret;	
	}	
	
	/**
	 * #7374
	 * @return Boolean	 
	 */
	protected function callCustomAddEvent()
	{
		if( !$this->eventsObject->exists("CustomAdd") )
			return true;
		
		$keys = array();		
		$customAddError = "";
		$ret = $this->eventsObject->CustomAdd( $this->newRecordData, $keys, $customAddError, $this->mode == ADD_INLINE, $this );
					
		if( strlen($customAddError) > 0 )
		{
			$this->insertedSuccessfully = false;
			$this->setMessage( $customAddError );
			$this->keys = array();
			return false;
		}
		
		$this->insertedSuccessfully = !$ret;
		
		$keyFields = $this->pSet->getTableKeys();
		
		if( is_array($keys) )
		{
			$allKeysFilled = true;
			foreach( $keyFields as $kf )
			{
				if( !strlen( $keys[$kf] ) )
				{
					$allKeysFilled = false;
					break;
				}
			}
			
			if( $allKeysFilled )
				$this->keys = $keys;	
			else
				$this->prepareTableKeysAfterInsert();
		}
		else
		{
			if( $keys && count($keyFields) == 1 )
				$this->keys = array( $keyFields[0] => $keys );
			else
				$this->prepareTableKeysAfterInsert();	
		}	
		
		return $ret;
	}
	
	/**
	 * Replace key fields values in newRecordData with current key values
	 */
	protected function mergeNewRecordData()
	{
		if( !$this->auditObj && !$this->eventsObject->exists("AfterAdd") )
			return;
			
		foreach($this->keys as $keyFName => $keyValue)
		{
			$this->newRecordData[ $keyFName ] = $keyValue;
		}			
	}

	/**
	 * Give possibility to all edit controls to clean their data
	 */
	protected function callAfterSuccessfulSave()
	{			
		foreach($this->addFields as $f)
		{
			$this->getControl( $f, $this->id )->afterSuccessfulSave();			
		}		
	}
	
	/**
	 * Execute After Add event or prepare all necessary data for its execution after redirect
	 */
	protected function callAfterAddEvent()
	{
		if( !$this->eventsObject->exists("AfterAdd") )
			return;
			
		if( $this->mode != ADD_MASTER )
		{
			$this->eventsObject->AfterAdd( $this->newRecordData, $this->keys, $this->mode == ADD_INLINE, $this );
			return;
		}
	
		$this->afterAdd_id = generatePassword(20);	
	
		$_SESSION['after_add_data'][ $this->afterAdd_id ] = array(
			'avalues' => $this->newRecordData,
			'keys'=> $this->keys,
			'inlineadd' => $this->mode == ADD_INLINE,
			'time' => time()
		);			
	}

	/**
	 * Set a successful update message.
	 * Add the corresponding edit/view links to the info message
	 */
	protected function setSuccessfulUpdateMessage()
	{
		if ( $this->mode == ADD_INLINE ) 
			$infoMessage = ""."Record was added"."";
		else
			$infoMessage = "<<< "."Record was added"." >>>";

		if( $this->mode != ADD_SIMPLE && $this->mode != ADD_MASTER && $this->mode != ADD_MASTER_POPUP || !count($this->keys) )
		{
			$this->setMessage( $infoMessage );
			return;
		}
		
		$k = 0;
		$keyParams = array();
		foreach( $this->keys as $idx => $val )
		{
			$keyParams[] = "editid".( ++$k )."=".runner_htmlspecialchars(rawurlencode(@$val));	
		}						
		$keylink = implode("&", $keyParams);
		
		$infoMessage.= "<br>";
		
		if( $this->pSet->hasEditPage() && $this->permis[ $this->tName ]['edit'] )
			$infoMessage.= "&nbsp;<a href='".GetTableLink( $this->pSet->getShortTableName(), "edit", $keylink )."'>"."Edit"."</a>&nbsp;";
			
		if( $this->pSet->hasViewPage() && $this->permis[ $this->tName ]['search'] )
			$infoMessage.= "&nbsp;<a href='".GetTableLink( $this->pSet->getShortTableName(), "view", $keylink )."'>"."View"."</a>&nbsp;";
		
		$this->setMessage( $infoMessage );				
	}	

	/**
	 * Print JSON containing a saved record data on ajax-like request
	 */
	protected function reportSaveStatus()
	{			
		echo printJSON( $this->getSaveStatusJSON() );
		exit();		
	}	

	/**
	 * Get an array containing the record save status
	 * @return Array
	 */
	protected function getSaveStatusJSON()
	{
		$returnJSON = array();
		
		if( $this->action != "added" || $this->mode == ADD_SIMPLE )
			return $returnJSON;

		$returnJSON['success'] = $this->insertedSuccessfully;
		$returnJSON['message'] = $this->message;
		
		if( !$this->isCaptchaOk )
		{
			$returnJSON['captcha'] = false;		
		}
		elseif( $this->mode == ADD_POPUP || $this->mode == ADD_MASTER || $this->mode == ADD_MASTER_POPUP )
		{
			if( isset($_SESSION[$this->tName."_count_captcha"]) || $_SESSION[$this->tName."_count_captcha"] > 0 || $_SESSION[$this->tName."_count_captcha"] < 5 )
				$respJSON['hideCaptcha'] = true;						
		}

		if( !$this->insertedSuccessfully )
			return $returnJSON;		
			
		$jsKeys = array();
		$keyFields = $this->pSet->getTableKeys();
		foreach( $keyFields as $idx => $f)
		{
			$jsKeys[ $idx ] = $this->keys[ $f ]; 
		}
			
		if( $this->mode == ADD_ONTHEFLY ) 
		{			
			$addedData = $this->GetAddedDataLookupQuery( false, $this->mainTable, $this->mainField, $this->mainPageType );
			$data =& $addedData[0];	
			
			if( count($data) )
				$respData = array($addedData[1]["linkField"] => @$data[ $addedData[1]["linkFieldIndex"] ], $addedData[1]["displayField"] => @$data[ $addedData[1]["displayFieldIndex"] ]);
			else
				$respData = array($addedData[1]["linkField"] => @$this->newRecordData[ $addedData[1]["linkField"] ], $addedData[1]["displayField"] => @$this->newRecordData[ $addedData[1]["displayField"] ]);
					
			$returnJSON['keys'] = $jsKeys;
			$returnJSON['vals'] = $respData;			
			$returnJSON['keyFields'] = $keyFields;
		
			return $returnJSON;
		}
		
		//	get current values and show edit controls
		$data = array();
		$haveData = true;
		$linkAndDispVals = array();
		if( count($this->keys) )
		{
			$where = $this->keysSQLExpression($this->keys);						
				//	select only owned records
			if( $this->pSet->getAdvancedSecurityType() != ADVSECURITY_ALL )
				$where = whereAdd($where, SecuritySQL("Search", $this->tName));
			
			if( $this->mode == ADD_INLINE && $this->forListPageWithSearch )
			{
				$addedData = $this->GetAddedDataLookupQuery( true, $this->mainTable, $this->mainField, $this->mainPageType );
				$data =& $addedData[0];
				$linkAndDispVals = array('linkField' => $addedData[0][ $addedData[1]["linkField" ]], 'displayField' => $addedData[0][ $addedData[1]["displayField"] ]);
			}
			else
			{
				$strSQL = $this->gQuery->gSQLWhere_having_fromQuery('', $where, '');					
				$data = $this->cipherer->DecryptFetchedArray( $this->connection->query( $strSQL )->fetchAssoc() );
			}
		}
	
		if( !$data )
		{
			$data = $this->newRecordData;
			$haveData = false;
		}
		
		$showDetailKeys = array();	
		foreach( $this->pSet->getDetailTablesArr() as $dt )
		{
			foreach( $dt["masterKeys"] as $idx => $dk)
			{
				$showDetailKeys[ $dt['dDataSourceTable'] ][ "masterkey".($idx + 1) ] = $data[ $dk ];	
			}
		}
	
		$keyParams = array();
		foreach( $this->pSet->getTableKeys() as $i => $kf )
		{
			$keyParams[] = "key".($i + 1). "=".runner_htmlspecialchars(rawurlencode( @$data[ $kf ] ));
		}
		$keylink = "&" . implode("&", $keyParams);
	
		$showValues = array();
		$showFields = array();
		$showRawValues = array();
		$allFields = $this->pSet->getFieldsList();
		foreach( $allFields as $f )
		{
			if( ($this->mode == ADD_MASTER || $this->mode == ADD_MASTER_POPUP) && $this->pSet->appearOnAddPage($f) || $this->pSet->appearOnListPage($f) )
			{
				$showValues[ $f ] = $this->showDBValue($f, $data, $keylink);
				$showFields[] = $f;
			}
			
			if( IsBinaryType( $this->pSet->getFieldType( $f ) ) )
				$showRawValues[ $f ] = "";
			else
				$showRawValues[ $f ] = substr($data[ $f ], 0, 100);
		}	
	
		if( $this->mode == ADD_INLINE || $this->mode == ADD_POPUP || $this->mode == ADD_DASHBOARD )
		{	
			$returnJSON['keys'] = $jsKeys;
			$returnJSON['vals'] = $showValues;
			$returnJSON['noKeys'] = !$haveData;				
			$returnJSON['fields'] = $showFields;
			$returnJSON['keyFields'] = $keyFields;
			$returnJSON['rawVals'] = $showRawValues;
			$returnJSON['detKeys'] = $showDetailKeys;
			$returnJSON['hrefs'] = $this->buildDetailGridLinks($showDetailKeys);
			// add link and display value if list page is lookup with search
			if( count( $linkAndDispVals ) )
			{
				$returnJSON['linkValue'] = $linkAndDispVals['linkField'];
				$returnJSON['displayValue'] = $linkAndDispVals['displayField'];
			}
			if( $this->eventsObject->exists("IsRecordEditable", $this->tName) )
			{ 
				if( !$this->eventsObject->IsRecordEditable($showRawValues, true, $this->tName) )
					$returnJSON['nonEditable'] = true;
			}
			
			return $returnJSON;
		}		
		
		if( $this->mode == ADD_MASTER || $this->mode == ADD_MASTER_POPUP ) 
		{
			$_SESSION["message_add"] = $this->message ? $this->message : "";
			
			$returnJSON['afterAddId'] = $this->afterAdd_id;
			$returnJSON['fields'] = $showFields;
			$returnJSON['vals'] = $showValues;
			if( $this->mode == ADD_MASTER_POPUP )
			{
				$returnJSON['keys'] = $jsKeys;
				$returnJSON['noKeys'] = !$haveData;					
				$returnJSON['keyFields'] = $keyFields;
				$returnJSON['rawVals'] = $showRawValues;
				$returnJSON['detKeys'] = $showDetailKeys;
				$returnJSON['hrefs'] = $this->buildDetailGridLinks($showDetailKeys);
				
				if( $this->eventsObject->exists("IsRecordEditable", $this->tName) )
				{
					if( !$this->eventsObject->IsRecordEditable($showRawValues, true, $this->tName) )
						$returnJSON['nonEditable'] = true;
				}
			}
			
			$dpParams = array();
			if( $this->isShowDetailTables && !isMobile() )
				$dpParams = $this->getDetailsParams( $this->id );
			
			$returnJSON['mKeys'] = array();
			for($i = 0; $i < count($dpParams['ids']); $i++)
			{
				$data = 0;
				if( count($this->keys) )
				{
					$where = KeyWhere($this->keys);
								//	select only owned records
					if( $this->pSet->getAdvancedSecurityType() != ADVSECURITY_ALL )
						$where = whereAdd($where, SecuritySQL("Search", $this->tName));
					$strSQL = $this->gQuery->gSQLWhere($where);
					LogInfo($strSQL);

					$data = $this->cipherer->DecryptFetchedArray( $this->connection->query( $strSQL )->fetchAssoc() );
				}
				if( !$data )
					$data = $this->newRecordData;
				
				$mKeyId = 1;
				$mKeys = $this->pSet->getMasterKeysByDetailTable( $dpParams['strTableNames'][$i] );
				foreach($mKeys as $mk)
				{
					if( $data[ $mk ] )
						$returnJSON['mKeys'][ $dpParams['strTableNames'][$i] ]['masterkey'.$mKeyId++] = $data[ $mk ];
					else
						$returnJSON['mKeys'][ $dpParams['strTableNames'][$i] ]['masterkey'.$mKeyId++] = '';
				}
			}

			return $returnJSON;
		}		
	}		
	
	/**
	 *	POST-REDIRECT-GET 
	 *	Redirect after saving the data to avoid saving again on refresh.
	 */	 
	protected function prgRedirect()
	{
		if( !$this->insertedSuccessfully || $this->mode != ADD_SIMPLE || !no_output_done() )
			return false;
		// saving message		
		$_SESSION["message_add"] = $this->message ? $this->message : "";
		// redirect
		HeaderRedirect( $this->pSet->getShortTableName(), $this->pageType );
		// turned on output buffering, so we need to stop script
		return true;	
	}	

	/**
	 *	POST-REDIRECT-GET 
	 *	Read the saved message on the GET step.
	 */	
	protected function prgReadMessage()
	{			
		// for PRG rule, to avoid POSTDATA resend. Saving mess in session
		if( $this->mode == ADD_SIMPLE && isset( $_SESSION["message_add"] ) )
		{
			$this->message = $_SESSION["message_add"];
			$this->messageType = MESSAGE_INFO;
			unset( $_SESSION["message_add"] );
		}	
	}
	
	/**
	 * Set the defvalues property
	 */
	protected function prepareDefvalues()
	{
		if( ( array_key_exists("copyid1", $_REQUEST) || array_key_exists("editid1", $_REQUEST) ) && $this->mode != ADD_DASHBOARD )
		{
			//	copy record
			$copykeys = array();
			$keyFields = $this->pSet->getTableKeys();
			$prefix = array_key_exists("copyid1", $_REQUEST) ? "copyid" : "editid";
			
			foreach( $keyFields as $idx => $k )
			{
				$copykeys[ $k ] = postvalue( $prefix . ($idx + 1) );
			}

			$strWhere = KeyWhere( $copykeys );
				if( $this->pSet->getAdvancedSecurityType() != ADVSECURITY_ALL )
				$strWhere = whereAdd( $strWhere, SecuritySQL("Search", $this->tName) );
			$strSQL = $this->gQuery->gSQLWhere( $strWhere );
			
			$this->defvalues = $this->cipherer->DecryptFetchedArray( $this->connection->query( $strSQL )->fetchAssoc() );
			if( !$this->defvalues )
				$this->defvalues = array();
			
			// clear key fields	
			foreach( $keyFields as $idx => $k )
			{
				$this->defvalues[ $k ] = "";
			}
			
			foreach( $this->addFields as $f )
			{
				if( $this->pSet->getEditFormat( $f ) == EDIT_FORMAT_FILE ) //#10023
					$this->defvalues[ $f ] = $this->getControl($f, $this->id)->getFieldValueCopy( $this->defvalues[ $f ] );
			}
			
			// call CopyOnLoad event
			if( $this->eventsObject->exists("CopyOnLoad") )
				$this->eventsObject->CopyOnLoad( $this->defvalues, $strWhere, $this );
		}
		else
		{
			foreach( $this->addFields as $f )
			{				
				$defaultValue = GetDefaultValue($f, PAGE_ADD);
				if( strlen($defaultValue) )
					$this->defvalues[ $f ] = $defaultValue;	
			}
		}

		$securityType = $this->pSet->getAdvancedSecurityType();
		if( !$this->isAdminTable() && ($securityType == ADVSECURITY_EDIT_OWN || $securityType == ADVSECURITY_VIEW_OWN) )
		{
			$tableOwnerIdField = $this->pSet->getTableOwnerIdField();
			// insert default owner id value if exists			
			if( $this->checkIfToAddOwnerIdValue( $tableOwnerIdField, '' ) )	
				$this->defvalues[ $tableOwnerIdField ] = prepare_for_db( $tableOwnerIdField, $_SESSION["_".$this->tName."_OwnerID"] );		
		}

		$masterTables = $this->pSet->getMasterTablesArr( $this->tName );
		// set default values for the foreign keys
		foreach( $masterTables as $mTableData )
		{
			if( @$_SESSION[$this->sessionPrefix."_mastertable"] == $mTableData["mDataSourceTable"] )
			{
				foreach( $mTableData["detailKeys"] as $idx => $dk )
				{
					$masterkeyIdx = "masterkey".($idx + 1);
					if( postvalue($masterkeyIdx) )
						$_SESSION[ $this->sessionPrefix."_".$masterkeyIdx ] = postvalue($masterkeyIdx);
					
					if( $this->masterPageType != PAGE_ADD )
						$this->defvalues[ $dk ] = @$_SESSION[ $this->sessionPrefix."_".$masterkeyIdx ];					
				}				
			}
		}

		$lookupMainSettings = getLookupMainTableSettings( $this->tName, $this->mainTable, $this->mainField );
		if( $lookupMainSettings )
		{
			if( $lookupMainSettings->useCategory( $this->mainField ) && !isset($this->newRecordData[ $lookupMainSettings->getCategoryFilter($this->mainField) ]) )
			{
				$this->defvalues[ $lookupMainSettings->getCategoryFilter( $this->mainField ) ] = $this->category;
			}
		}

		if( $this->readAddValues )
		{
			foreach( $this->addFields as $fName )
			{
				$editFormat = $this->pSet->getEditFormat($fName);
				if( $editFormat != EDIT_FORMAT_DATABASE_FILE && $editFormat != EDIT_FORMAT_DATABASE_IMAGE && $editFormat != EDIT_FORMAT_FILE )
					$this->defvalues[ $fName ] = @$this->newRecordData[ $fName ];
			}
		}			
	}

	/**
	 * Set read-only fields
	 */
	protected function prepareReadonlyFields()
	{
		foreach( $this->addFields as $f )
		{
			if( $this->pSet->getEditFormat( $f ) == EDIT_FORMAT_READONLY )
				$this->readOnlyFields[ $f ] = $this->showDBValue($f, $this->defvalues);
		}
	}

	/**
	 * Assign buttons xt variables
	 */
	protected function prepareButtons()
	{
		if( $this->mode == ADD_INLINE )
			return;
		
		$this->xt->assign("save_button", true);

	//	legacy assignment used in the Invoice template
		$this->xt->assign("savebutton_attrs", "id=\"saveButton".$this->id."\"");
		
		
		if( $this->mode == ADD_DASHBOARD )
		{		
			$this->xt->assign("reset_button", true);			
			return;
		}
		
		if( $this->mode != ADD_ONTHEFLY && $this->mode != ADD_POPUP )
		{			
			if( $this->pSet->hasListPage() )
				$this->xt->assign("back_button", true);
			else if( $this->isShowMenu() )
				$this->xt->assign("backToMenu_button", true);
		}
		else
			$this->xt->assign("cancel_button", true);
	}

	/**
	 * Prepare edit controls 
	 */
	protected function prepareEditControls()
	{
		$controlFields = $this->addFields;
		
		if( $this->mode == ADD_INLINE ) //#9069
			$this->removeHiddenColumnsFromInlineFields( $controlFields, $this->screenWidth, $this->screenHeight, $this->orientation );			
		
		$control = array();
		
		foreach($controlFields as $fName)
		{
			$gfName = GoodFieldName($fName);
			$isDetKeyField = in_array($fName, $this->detailKeysByM);
			
			$control[ $gfName ] = array();
			
			$controls = array();
			$controls["controls"] = array();
			$controls["controls"]["id"] = $this->id;
			$controls["controls"]["ctrlInd"] = 0;
			$controls["controls"]["fieldName"] = $fName;
			
			$parameters = array();
			$parameters["id"] = $this->id;
			$parameters["ptype"] = PAGE_ADD;
			$parameters["field"] = $fName;
			$parameters["value"] = @$this->defvalues[ $fName ];
			$parameters["pageObj"] = $this;
			
			if( !$isDetKeyField || $fName == $this->category )
			{				
				$parameters["validate"] = $this->pSet->getValidation($fName);
				
				if( $this->pSet->isUseRTE($fName) )
					$_SESSION[ $this->sessionPrefix."_".$fName."_rte" ] = @$this->defvalues[ $fName ];				
			}
			
			//if richEditor for field
			if( $this->pSet->isUseRTE($fName) )
			{
				$parameters["mode"] = "add";	
				$controls["controls"]["mode"] = "add";
			}
			else
			{
				$controlMode = $this->mode == ADD_ONTHEFLY || $this->mode == ADD_POPUP ? "inline_add" : "add";
				$parameters["mode"] = $controlMode;					
				$controls["controls"]["mode"] = $controlMode;
			}
			
			if( $isDetKeyField && $fName != $this->category )
			{
				$controls["controls"]["value"] = @$this->defvalues[ $fName ];
				
				$parameters["extraParams"] = array();
				$parameters["extraParams"]["getDetKeyReadOnlyCtrl"] = true;
			
				// to the ReadOnly control show the detail key control's value	
				$this->readOnlyFields[ $fName ] = $this->showDBValue($fName, $this->defvalues);				
			}
			
			AssignFunction( $control[ $gfName ], "xt_buildeditcontrol", $parameters );
			$this->xt->assignbyref( $gfName."_editcontrol", $control[ $gfName ] );
			
			// category control field
			$strCategoryControl = $this->getMainLookupFieldNameForDependant($fName);		
			if( strlen($strCategoryControl) && in_array($strCategoryControl, $controlFields) )
				$vals = array($fName => @$this->defvalues[ $fName ], $strCategoryControl => @$this->defvalues[ $strCategoryControl ]);
			else
				$vals = array($fName => @$this->defvalues[ $fName ]);
						
			$preload = $this->fillPreload($fName, $vals);
			if( $preload !== false )
			{
				$controls["controls"]["preloadData"] = $preload;
				if( !@$this->defvalues[ $fName ] && count($preload["vals"]) > 0 )
					$this->defvalues[ $fName ] = $preload["vals"][0];
			}
			
			$this->fillControlsMap( $controls );
			$this->fillFieldToolTips( $fName );
			
			// fill special settings for a time picker
			if( $this->pSet->getEditFormat($fName) == "Time" )
				$this->fillTimePickSettings( $fName, @$this->defvalues[$fName] );
		}		
	}

	/**
	 * Set details preview on the add master page 
	 */
	protected function prepareDetailsTables()
	{		
		if( !$this->isShowDetailTables || $this->mode != ADD_SIMPLE && $this->mode != ADD_POPUP || isMobile() )
			return;
		
		$dpParams = $this->getDetailsParams( $this->id );
		
		$this->jsSettings['tableSettings'][ $this->tName ]['isShowDetails'] = count( $dpParams ) > 0;
		$this->jsSettings['tableSettings'][ $this->tName ]['dpParams'] = array('tableNames' => $dpParams['strTableNames'], 'ids' => $dpParams['ids']);			
		
		if( !count($dpParams['ids']) )
			return;
			
		$this->xt->assign("detail_tables", true);
		
		for($d = 0; $d < count($dpParams['ids']); $d++)
		{	
			$this->setDetailPreview( "list", $dpParams['strTableNames'][ $d ], $dpParams['ids'][ $d ], $this->defvalues );
		}
	}

	/**
	 * Assign basic page's xt variables
	 */
	protected function doCommonAssignments()
	{
		$this->xt->assign("id", $this->id);
		
		$this->xt->assign("message_block", true);
		
		if( strlen($this->message) )
		{
			$mesClass = $this->messageType == MESSAGE_ERROR ? "message rnr-error" : "message" ;
			$this->xt->assign("message", "<div class='".$mesClass."'>" . $this->message . "</div>" );
		}
		else
		{		
			$this->xt->displayBrickHidden("message");	
		}

		if( $this->mode != ADD_INLINE )
			$this->assignAddFieldsBlocksAndLabels();
		
		if( $this->mode == ADD_SIMPLE )
		{
			$this->assignBody();		
			$this->xt->assign("flybody", true);				
		}

		if( $this->mode == ADD_ONTHEFLY /*|| $this->mode == ADD_MASTER*/ || $this->mode == ADD_POPUP || $this->mode == ADD_DASHBOARD )
		{ 
			$this->xt->assign("body", true);
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("flybody", $this->body);		
		}				
	}

	/**
	 * Assign add fields' blocks and labels variables
	 */
	public function assignAddFieldsBlocksAndLabels()
	{		
		foreach($this->addFields as $fName)
		{
			$gfName = GoodFieldName($fName);
			
			if( !$this->isAppearOnTabs($fName) )
				$this->xt->assign($gfName."_fieldblock", true);
			else
				$this->xt->assign($gfName."_tabfieldblock", true);
			
			$this->xt->assign($gfName."_label", true);
			
			if( $this->is508 )
				$this->xt->assign_section($gfName."_label", "<label for=\"" . $this->getInputElementId( $fName ) . "\">", "</label>");
		}			
	}	
	
	/**
	 * Display the add page basing on its mode
	 */
	protected function displayAddPage()
	{
		$templatefile = $this->templatefile;
		
		if( $this->eventsObject->exists("BeforeShowAdd") )
			$this->eventsObject->BeforeShowAdd($this->xt, $templatefile, $this);		

		if( $this->mode == ADD_SIMPLE /*|| $this->mode ==ADD_MASTER */)	
		{
			$this->display( $templatefile );
			return;
		}

		if( $this->mode == ADD_ONTHEFLY || $this->mode == ADD_POPUP || $this->mode == ADD_DASHBOARD )
		{
			$this->displayAJAX($templatefile, $this->id + 1);
			exit();
		}

		if( $this->mode == ADD_INLINE )
		{
			$returnJSON = array();			
			$returnJSON['settings'] = $this->jsSettings;	
			$returnJSON['controlsMap'] = $this->controlsHTMLMap;
			$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;			
			
			$this->xt->load_template( $templatefile );
			
			$returnJSON["html"] = array();
			foreach($this->addFields as $fName)
			{
				$returnJSON["html"][ $fName ] = $this->xt->fetchVar(GoodFieldName($fName)."_editcontrol");	
			}	
			
			$returnJSON["additionalJS"] = $this->grabAllJsFiles();
			$returnJSON["additionalCSS"] = $this->grabAllCSSFiles();
			
			echo printJSON($returnJSON); 
			exit();
		}
	}
	
	/**
	 * Get extra JSON params to display the page on AJAX-like request
	 * @return Array
	 */
	protected function getExtraAjaxPageParams()
	{
		return $this->getSaveStatusJSON();
	}
	
	/**
	 * @param Boolean forLookup
	 * @param String mainTableShortName
	 * @param String mainField
	 * @param String pageType
	 * @return Array
	 */
	protected function GetAddedDataLookupQuery( $forLookup, $mainTableShortName, $mainField, $pageType )
	{	
		$lookupMainSettings = getLookupMainTableSettings($this->tName, $mainTableShortName, $mainField, $pageType);
		if( !$lookupMainSettings )
			return array();
	
		$LookupSQL = "";
		$mainTable = $lookupMainSettings->getTableName();
		$linkFieldName = $lookupMainSettings->getLinkField( $mainField );
		$dispfield = $lookupMainSettings->getDisplayField( $mainField );
		
		if( $lookupMainSettings->getCustomDisplay( $mainField ) )
			$this->pSet->getSQLQuery()->AddCustomExpression($dispfield, $this->pSet, $mainTable, $mainField);
		$lookupQueryObj = $this->pSet->getSQLQuery()->CloneObject();
			
		$data = array();
		$lookupIndexes = array("linkFieldIndex" => 0, "displayFieldIndex" => 0);
		if( count($this->keys) )
		{
			$where = KeyWhere($this->keys);
			$LookupSQL = $lookupQueryObj->toSql( whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $where) );
				
			$lookupIndexes = GetLookupFieldsIndexes($lookupMainSettings, $mainField);
			LogInfo($LookupSQL);
			
			if( $forLookup )
			{
				$data = $this->cipherer->DecryptFetchedArray( $this->connection->query( $LookupSQL )->fetchAssoc() );
			}
			else if( $LookupSQL )
			{
				$data = $this->connection->query( $LookupSQL )->fetchNumeric();
				$data[ $lookupIndexes["linkFieldIndex"] ] = $this->cipherer->DecryptField($linkFieldName, $data[ $lookupIndexes["linkFieldIndex"] ]);
				$data[ $lookupIndexes["displayFieldIndex"] ] = $this->cipherer->DecryptField($dispfield, $data[ $lookupIndexes["displayFieldIndex"] ]);		
			}
		}

		return array($data, array("linkField" => $linkFieldName, "displayField" => $dispfield
			, "linkFieldIndex" => $lookupIndexes["linkFieldIndex"], "displayFieldIndex" => $lookupIndexes["displayFieldIndex"]));
	}

	/**
	 * Check if to add session owner id value
	 * @param String ownerField
	 * @param String currentValue
	 * @return Boolean
	 */
	public function checkIfToAddOwnerIdValue( $ownerField, $currentValue )
	{
		return $this->pSet->getOriginalTableName() == $this->pSet->getOwnerTable( $ownerField ) && !$this->isAutoincPrimaryKey( $ownerField ) 
			&& ( !CheckTablePermissions($this->tName, 'M') || !strlen($currentValue) );
	}

	/**
	 * Check if field is auto-incremented primary key
	 * @param String field
	 * @return Boolean
	 */
	protected function isAutoincPrimaryKey( $field )
	{
		$keyFields = $this->pSet->getTableKeys();
		return count($keyFields) == 1 && in_array($field, $keyFields) && $this->pSet->isAutoincField( $field );
	}

	/**
	 * Set the keys array
	 */
	function prepareTableKeysAfterInsert()
	{
		$table = $this->pSet->getOriginalTableName();
		$keyFields = $this->pSet->getTableKeys();
		
		foreach($keyFields as $k)
		{
			if( array_key_exists($k, $this->newRecordData) )
			{
				$this->keys[ $k ] = $this->newRecordData[ $k ];	
			}
			elseif( $this->pSet->isAutoincField($k) )
			{
				if( $this->connection->dbType == nDATABASE_MySQL )
				{
					$this->keys[ $k ] = GetMySQLLastInsertID( $this->connection );
				}
				elseif( $this->connection->dbType == nDATABASE_MSSQLServer || $this->connection->dbType == nDATABASE_PostgreSQL )
				{
					$this->keys[ $k ] = $this->connection->getInsertedId();
				}
				else
				{
					if( $this->connection->dbType == nDATABASE_Oracle )
					{
						$OraSequenceName = $this->pSet->getOraSequenceName($k);
						if( $OraSequenceName )
							$lastIdSQL = "SELECT ".$OraSequenceName.".CURRVAL FROM DUAL";
						else
							$lastIdSQL = "SELECT MAX(".$this->connection->addFieldWrappers($k).") FROM ".$this->connection->addTableWrappers( $table );
					}				
					else
						$lastIdSQL = "SELECT MAX(".$this->connection->addFieldWrappers($k).") FROM ".$this->connection->addTableWrappers( $table );

					$keyData = $this->connection->query( $lastIdSQL )->fetchNumeric();
					if( count($keyData) );
						$this->keys[ $k ] = $keyData[0];
				}
			}
		}
	}
	
	/**
	 * Set the page's message
	 * @param String message
	 */
	public function setMessage( $message ) 
	{
		$this->message = $message;
	}
	
	/**
	 * Set a database error message
	 * @param String message
	 */
	public function setDatabaseError( $message )
	{
		if( $this->mode != ADD_INLINE )
		{
			$this->message = "&lt;&lt;&lt; "."Record was NOT added"." &gt;&gt;&gt;<br><br>".$message;
		}
		else
		{
			$this->message = "Record was NOT added".". ".$message;
		}
		
		$this->messageType = MESSAGE_ERROR;
	}
	
	/**
	 * @return Array
	 */
	public function getNewRecordData()
	{
		return $this->newRecordData;
	}
	
	/**
	 * @return Array
	 */	
	public function getBlobFields()
	{
		return $this->newRecordBlobFields;
	}

	/**
	 * @param String table
	 */
	public static function processAddPageSecurity( $table )
	{
		//	user has necessary permissions
		if( Security::checkPagePermissions( $table, "A" ) )
			return true;
			
		// display entered data. Give the user chance to relogin. Do nothing for now.
		if( postvalue("a") == "added" )
			return true;
		
		//	page can not be displayed. Redirect or return error
		
		//	return error if the page is requested by AJAX
		$pageMode = AddPage::readAddModeFromRequest();
		if( $pageMode != ADD_SIMPLE )
		{
			Security::sendPermissionError();
			return false;
		}
		
		// The user is logged in but lacks necessary permissions
		// redirect to List page or Menu.
		if( isLogged() && !isLoggedAsGuest() )
		{
			Security::redirectToList( $table );
			return false;
		}

		redirectToLogin();
		return false;
	}
	
	public static function readAddModeFromRequest()
	{
		$editType = postvalue("editType");
		
		if( $editType == "inline" )
			return ADD_INLINE;
		elseif( $editType == ADD_POPUP )
			return ADD_POPUP;
		elseif( $editType == ADD_MASTER )
			return ADD_MASTER;
		elseif( $editType == ADD_MASTER_POPUP )
			return ADD_MASTER_POPUP;
		elseif( $editType == ADD_ONTHEFLY )
			return ADD_ONTHEFLY;
		elseif( postvalue("mode") == "dashrecord" )
			return ADD_DASHBOARD;
		else
			return ADD_SIMPLE;
	}
}
?>