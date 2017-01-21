<?php
include_once(getabspath("classes/files.php"));

/**
 * Abstract base class for all pages. Contains main functionality 
 */
class RunnerPage
{
	/**
     * Id on page.
     *
     * @var integer
     * @intellisense
     */
	var $id = 1;
	/**
     * Use tool tips or not
     *
     * @var bool
     * @intellisense
     */
	var $isUseToolTips = false;
	/**
	 * If use Ajax Suggest js file or not
	 *
	 * @var bool
	 * @intellisense
	 */
	var $isUseAjaxSuggest = true;
	/**
     * Type of page
     *
     * @var string
     * @intellisense
     */
	var $pageType = "";
	/**
     * Mode of page
     *
     * @var integer
     * @intellisense
     */
	var $mode = 0;
	/**
 	  * If use display loading or not
	  *
	  * @var bool
	  * @intellisense
	  */
	var $isDisplayLoading = false;
	/**
     * Original table name
     *
     * @var string
     * @intellisense
     */
	var $strOriginalTableName = "";
	/**
	 * String caption of table
	 *
	 * @var string
	 * @intellisense
	 */
	var $strCaption = "";
	
	/**
     * Short table name
     *
     * @var string
     * @intellisense
     */
	var $shortTableName = '';
	/**
     * Prefix for session variable
     *
     * @var integer
     * @intellisense
     */
	var $sessionPrefix = "";
	/**
     * Name of current table
     *
     * @var string
     * @intellisense
     */	
	var $tName = "";
	/**
     * Connect to database
     *
     * @var string
     * @intellisense
     */
	var $conn = "";
	/**
     * Array of order index in table
     *
     * @var array()
     * @intellisense
     */
	var $gOrderIndexes = array();
	/**
     * String of OrderBy for query
     *
     * @var string
     * @intellisense
     */
	var $gstrOrderBy = "";
	/**
     * Page size
     *
     * @var integer
     * @intellisense
     */
	var $gPageSize = 0;
	/**
     * Instance of class Xtempl
     *
     * @var object
     * @objtype{XTempl}
     * @intellisense
     */
	var $xt = null;
	/**
	 * Instance of SearchClause class
	 *
	 * @var object
	 * @objtype{SearchClause}
	 * @intellisense
	 */
	var $searchClauseObj = null;
	/**
     * Need use search clause object or not 
     *
     * @var boolean
     * @intellisense
     */
	var $needSearchClauseObj = true;
	
	var $flyId = 1;
	/**
	 *	The list of including js files 
	 * @intellisense
	 */	  
	var $includes_js = array();
	/**
	 *	The list of including js files 
	 * @intellisense
	 */
	var $includes_jsreq = array();
	/**
	 *	The list of including css files
	 * @intellisense
	 */
	var $includes_css = array();
	/**
	 *	Locale tunes
	 * @intellisense
	 */
	var $locale_info = array();
	/**
	 * Id of record
	 * @var integer
	 * @intellisense
	 */
	var $recId = 0;
	/**
	 * Google maps default settings
	 * @var array
	 * @intellisense
	 */
	var $googleMapCfg = array();
	/**
	 * Array of permissions for pages
	 * @var array
	 * @intellisense
	 */
	var $permis = array();
	/**
	 * If use group scurity or not
	 * @var bool
	 * @intellisense
	 */
	var $isGroupSecurity = true;
	/**
	 * Use or not debug mode for js
	 *
	 * @var bool
	 * @intellisense
	 */
	var $debugJSMode = false;
	/**
	 * Array of record ??? for lookup with search
	 *
	 * @var array
	 */
	var $recIds = array();
	/**
	 * Use mode ajax for simple listPage
	 *
	 * @var boolean
	 * @intellisense
	 */
	var $listAjax = false;
	/**
	 * Use subqueries or not
	 *
	 * @var bool
	 */
	var $subQueriesSupp = true;
	/**
	 * String of part query Where for make sql "select" string
	 *
	 * @var string
	 */
	var $subQueriesSupAccess = false;
	/**
	 * Is the same detail and master fields type or not
	 *
	 * @var boolean
	 */
	var $theSameFieldsType = false;

	/**
	 * Array of body begin, end code and body attributs
	 *
	 * @var array
	 * @intellisense
	 */
	var $body = array('begin' => '', 'end'=> '');
	
	/**
	 * Master table name
	 *
	 * @var string
	 * @intellisense
	 */
	var $masterTable = "";
	/**
	 * Master table requested keys
	 *
	 * @var array
	 */
	var $masterKeysReq = array();
	/**
	 * Master table record data
	 *
	 * @var object
	 * @intellisense
	 */
	var $masterRecordData = null;
	/**
	 * If use Details Preview js file or not
	 *
	 * @var bool
	 * @intellisense
	 */
	var $useDetailsPreview = false;
	/**
	 * Array of all details tables data
	 *
	 * @var array
	 * @intellisense
	 */	
	var $allDetailsTablesArr = array();
	/**
	 * Array of java script settings for page
	 *
	 * @var array
	 * @intellisense
	 */	
	var $jsSettings = array();
	/**
	 * Array of controls HTML map
	 *
	 * @var array
	 * @intellisense
	 */	
	var $controlsHTMLMap = array();
	/**
	 * Array of view controls HTML map
	 *
	 * @var array
	 * @intellisense
	 */	
	var $viewControlsHTMLMap = array();
	/**
	 * Array of controls map
	 *
	 * @var array
	 * @intellisense
	 */	
	var $controlsMap = array();
	/**
	 * Array of view controls map
	 *
	 * @var array
	 * @intellisense
	 */	
	var $viewControlsMap = array();
	/**
	 * Array of field settings for use it in javascript settings
	 *
	 * @var array
	 * @intellisense
	 */	
	var $settingsMap = array();
	/**
	 * Is add page show as inlineAdd or not
	 *
	 * @var array
	 * @intellisense
	 */
	var $pageAddLikeInline = false;
	/**
	 * Is edit page show as inlineEdit or not
	 *
	 * @var array
	 * @intellisense
	 */ 
	var $pageEditLikeInline = false;
	/**
	 * Array of tabs and sections for add page
	 *
	 * @var array
	 * @intellisense
	 */	
	var $arrAddTabs = array();
	/**
	 * Use Tabs and Setctions on add page or not
	 *
	 * @var boolean
	 * @intellisense
	 */
	var $useTabsOnAdd = false;
	/**
	 * Array of tabs and sections for edit page
	 *
	 * @var array
	 * @intellisense
	 */	
	var $arrEditTabs = array();
	/**
	 * Use Tabs and Setctions on edit page or not
	 *
	 * @var boolean
	 * @intellisense
	 */
	var $useTabsOnEdit = false;
	/**
	 * Array of tabs and sections for edit page
	 *
	 * @var array
	 * @intellisense
	 */	
	var $arrViewTabs = array();
	/**
	 * Use Tabs and Setctions on edit page or not
	 *
	 * @var boolean
	 * @intellisense
	 */
	var $useTabsOnView = false;
	/**
	 * Array of records per page for list and report without group fields
	 *
	 * @var array
	 * @intellisense
	 */	
	var $arrRecsPerPage = array();
	/**
	 * Array of groups per page for report with group fields
	 *
	 * @var array
	 * @intellisense
	 */	
	var $arrGroupsPerPage = array();
	/**
	 * Use group fields on report page or not
	 *
	 * @var boolean
	 * @intellisense
	 */
	var $reportGroupFields = false;
	/**
	 * Number of page size
	 *
	 * @var integer
	 * @intellisense
	 */
	var $pageSize = 0;
	/**
	 * The page's table type: list, report or chart
	 * @var string
	 * @intellisense
	 */
	var $tableType = "";
	/**
	 * Events object for the current table
	 *
	 * @var object
	 * @intellisense
	 */	
	var $eventsObject;
	/**
	 * Detail keys by master table
	 *
	 * @var array
	 * @intellisense
	 */
	var $detailKeysByM = array();
	/**
	 * Is captcha ok after submit or not
	 *
	 * @var boolean
	 * @intellisense
	 */
	var $isCaptchaOk = true;
	/**
	 * Captcha ID
	 *
	 * @var string
	 * @intellisense
	 */
	var $captchaId = "";
	/**
	 * Locking object
	 *
	 * @var object
	 * @intellisense
	 */
	var $lockingObj = null;
	/**
	 * Is use Video player or not
	 *
	 * @var boolean
	 * @intellisense
	 */
	var $isUseVideo = false;
	/**
	 * Is use Audio player or not
	 *
	 * @var boolean
	 * @intellisense
	 */
	var $isUseAudio = false;
	/**
	 * Is show add page like popUp or not
	 *
	 * @var boolean
	 * @intellisense
	 */
	var $showAddInPopup = false;
	/**
	 * Is show edit page like popUp or not
	 *
	 * @var boolean
	 * @intellisense
	 */
	var $showEditInPopup = false;
	/**
	 * Is show view page like popUp or not
	 *
	 * @var boolean
	 * @intellisense
	 */
	var $showViewInPopup = false;
	/**
	 * Is columns will be resizable or not
	 *
	 * @var boolean
	 * @intellisense
	 */
	var $isResizeColumns = false;
	/**
	 * Is use CKeditor or not
	 *
	 * @var boolean
	 * @intellisense
	 */
	var $isUseCK = false;
	/**
	 * Is display detail data on page or not
	 *
	 * @var boolean
	 * @intellisense
	 */
	var $isShowDetailTables = false;
	/**
	*	arrays of files to process after adding or editing a record
	* @intellisense
	*/
    var $filesToSave = array();
	var $filesToMove = array();
	var $filesToDelete = array();
	/**
	 * Master keys by detail table
	 *
	 * @var array
	 * @intellisense
	 */
	var $masterKeysByD = array();
	/**
	 * Indicator is permissions dynamic
	 *
	 * @var bool
	 * @intellisense
	 */
	var $isDynamicPerm = false;
	/**
	 * If nedd add web report or not
	 *
	 * @var bool
	 * @intellisense
	 */
	var $isAddWebRep = true;
	/**
	 * Indicator, is used section 508 
	 *
	 * @var bool
	 * @intellisense
	 */
	var $is508 = false;
	/**
	 * Indicator, is encryption enabled 
	 *
	 * @var bool
	 * @intellisense
	 */	
	var $isEncryptionEnabled = false;
	/**
	 * Indicator, is encryption via PHP enabled 
	 *
	 * @var bool
	 * @intellisense
	 */
	var $isEncryptionByPHPEnabled = false;
	/**
	 * Instance of Cypher class for encoding/decoding fields values
	 *
	 * @var object
	 * @intellisense
	 */
	var $cipherer = null;
	/**
	 * Project settings
	 *
	 * @var object
	 * @intellisense
	 */
	var $pSet = null;
	/**
	 * Project settings for edit controls
	 *
	 * @var object
	 * @intellisense
	 */
	var $pSetEdit = null;
	/**
	 * Number of rows
	 *
	 * @var integer
	 * @intellisense
	 */
	var $numRowsFromSQL = 0;	
	/**
	 * Index of my page
	 *
	 * @var integer
	 * @intellisense
	 */
	var $myPage = 0;
	var $recordsOnPage = 0;
	/**
	 * Number of records per row list
	 *
	 * @var integer
	 * @intellisense
	 */
	var $recsPerRowList = 0;
	/**
	 * grid layout - gltHORIZONTAL, gltVERTICAL or gltCOLUMNS
	 *
	 * @var bool
	 */
	var $listGridLayout = false;

	var $colsOnPage = 1;
	/**
	 * Number of founed rows
	 *
	 * @var bool
	 * @intellisense
	 */
	var $rowsFound = false;
	/**
	  * Constructor, set initial params
	  *
	  * @param array $params
	  * @intellisense
	  */
	var $deleteMessage = '';
	/**
	 * Number of maximum pages
	 *
	 * @var integer
	 * @intellisense
	 */
	var $maxPages = 1;
	/**
	 * Name of the templete file
	 * @var string
	 * @intellisense
	 */
	var $templatefile = "";
	/**
	 * Array of menu nodes
	 * @var array
	 * @intellisense
	 */	
	var $menuNodes = array();
	/**
	 * Refferense to sqlquery object 
	 * @var object
	 * @intellisense
	 */
	var $gQuery = null;
	/**
	 * Flag. True if fillSetCntrlMaps already called 
	 * @intellisense
	 */
	var $isControlsMapFilled = false;
	/**
	 * Instance of EditControlsContainer
	 * @var {object}
	 * @intellisense
	 */
	public $controls = null;
	/**
	 * Instance of ViewControlsContainer
	 * @var {object}
	 * @intellisense
	 */
	public $viewControls = null;	
	/**
	 * Associative array of readonly fields for add, edit and register page
	 * @var array
	 * @intellisense
	 */
	public $readOnlyFields = array();
	
	/**
	 * It indicates if the searchpanel brick id added to the page's layout
	 */
	var $searchPanelActivated = false;
	
	/**
	* the instance of the "projectSettings" object 
	* It differs from the pSet (and is set as a pSet for the Search panel's searh table)
	* in case the Search panel is activated on the non table page
	*/
	var $pSetSearch = null;
	
	/**
	* The real Search panel's searh table name.
	* It differs from the tName in case the Search panel is activated on the non table page
	*/
	var $searchTableName = "";

	/**
	* Page layout object
	*/
	var $pageLayout = null;
	
	var $warnLeavingPages = null;
	/**
	* Indicator showing if It's neccessary to add the search panel fields's settings
	* It's set equal to true when the Search panel is added on the non table page
	*/
	var $tableBasedSearchPanelAdded = false;
	var $mainTable = "";
	var $mainField = "";
	
	/**
	*  Cached results of getWhereComponents function
	*/
	var $_cachedWhereComponents = null;
	
	/**
	* the local time format regexp
	*/ 
	var $timeRegexp;
	var $dispNoneStyle = 'style="display: none;"';
	var $dbType = null;
	var $detailKeysByD = array();
	/**
	 * The page's searchParamsLogger class instance
	 * @type Object
	 */
	public $searchLogger = null;

	/**
	 * @type Boolean
	 */
	public $searchSavingEnabled = false;
	
	/**
	 * @type Boolean
	 */
	public $pageHasSavedSearches = false;	
	
	/**
	 * The base page's name
	 * @type String
	 */
	public $baseTableName = "";
	
	/**
	 * The 'form' logic elements
	 * @type Array
	 */
	protected $formBricks = array();
	
	function RunnerPage(&$params)
	{
		global $locale_info, $cCharset, $page_layouts;
		
		// copy properties to object
		RunnerApply($this, $params);
		
		$this->pSet = new ProjectSettings($this->tName, $this->pageType);
		$this->pSetEdit = $this->pSet;
		$this->pSetSearch = new ProjectSettings($this->tName, PAGE_SEARCH); 
		$this->searchTableName = $this->tName; 
		
		$this->cipherer = new RunnerCipherer($this->tName, $this->pSet);
		include_once getabspath("classes/controls/EditControlsContainer.php");
		$this->controls = new EditControlsContainer($this, $this->pSetEdit, $this->pageType);
		include_once getabspath("classes/controls/ViewControlsContainer.php");
		$this->viewControls = new ViewControlsContainer($this->pSet, $this->pageType, $this);
		
		$this->gQuery = $this->pSet->getSQLQuery();
		
		//set google map configuration
		$this->googleMapCfg = array('isUseMainMaps'=>false, 'isUseFieldsMaps'=> false, 'isUseGoogleMap'=>false, 'APIcode'=>GetGlobalData("apiGoogleMapsCode",""), 'mainMapIds'=>array(), 'fieldMapsIds'=>array(), 'mapsData'=>array());
		
				$this->debugJSMode = false;
		
		if($this->flyId < $this->id+1)
			$this->flyId = $this->id+1;
		
		// get permissions 
		if ($this->tName)
		{
			$this->permis[$this->tName]= $this->getPermissions();
			$this->eventsObject = &getEventObject($this->tName);
		}
		
		if( !$this->sessionPrefix )
			$this->assingSessionPrefix();
		
		//init settingMap globalSettings
		$this->settingsMap["globalSettings"] = array();
		$this->settingsMap["globalSettings"]["shortTNames"] = array();
		
		$this->searchPanelActivated = $this->isBrickSet( isMobile() ? "searchpanel_mobile" : "searchpanel" );
		//global settings including "shortTNames" might be updated
		$this->setParamsForSearchPanel();
		
		$this->searchSavingEnabled = $this->isSearchSavingEnabled() && $this->needSearchClauseObj;
		
		$this->setSessionVariables();
		
		//	get locking object
		$this->lockingObj = GetLockingObject($this->tName);	
		$this->warnLeavingPages = $this->pSet->warnLeavingPages(); 
		$this->is508 = isEnableSection508();
		$this->isEncryptionEnabled = isEncryptionEnabled();
		$this->isEncryptionByPHPEnabled = isEncryptionByPHPEnabled();
		
		$this->isUseVideo = $this->pSet->isUseVideo();
		$this->isUseAudio = $this->pSet->isUseAudio();
		$this->strCaption = GetTableCaption(GoodFieldName($this->tName));
		
		$this->tableType = $this->pSet->getTableType();
		$this->isAddWebRep = GetGlobalData("isAddWebRep",false);
		//	get details keys by master table
		$this->detailKeysByM = $this->getDetailKeysByMasterTable();
		$this->isDynamicPerm = GetGlobalData("isDynamicPerm",false);
		$this->shortTableName = $this->pSet->getShortTableName();
		$this->showAddInPopup = $this->pSet->isShowAddInPopup();
		$this->showEditInPopup = $this->pSet->isShowEditInPopup();
		$this->showViewInPopup = $this->pSet->isShowViewInPopup();
		$this->isResizeColumns = $this->pSet->isResizeColumns();
		$this->isUseAjaxSuggest = $this->pSetSearch->isUseAjaxSuggest();
		$this->useDetailsPreview = $this->pSet->isUseDetailsPreview();
		$this->isShowDetailTables = displayDetailsOn($this->tName,$this->pageType);
		//	get all details table for current table
		$this->allDetailsTablesArr = $this->pSet->getDetailTablesArr();
		
		//	set template file
		$this->setTemplateFile();
		
		//	init jsSettings
		$this->jsSettings = array();
		$this->jsSettings["tableSettings"] = array();
		$this->jsSettings["tableSettings"][$this->tName] = array();
		$this->jsSettings["tableSettings"][$this->tName]["proxy"] = array("proxy" => "");
		$this->jsSettings["tableSettings"][$this->tName]['fieldSettings'] = array();
	
		$this->settingsMap["globalSettings"]["webRootPath"] = GetWebRootPath();
		$this->settingsMap["globalSettings"]["ext"] = "php";
		$this->settingsMap["globalSettings"]["charSet"] = $cCharset;
		$this->settingsMap["globalSettings"]["debugMode"] = $this->debugJSMode;
		$this->settingsMap["globalSettings"]["googleMapsApiCode"] = $this->googleMapCfg['APIcode'];
		$this->settingsMap["globalSettings"]["shortTNames"][$this->tName] = $this->shortTableName;
		
		$globalPopupPagesLayoutNames = GetGlobalData("popupPagesLayoutNames", array());
		if( count( $globalPopupPagesLayoutNames ) ) 
			$this->settingsMap["globalSettings"]["popupPagesLayoutNames"] = $globalPopupPagesLayoutNames;
		
				
		//isMobile 
		$this->settingsMap["globalSettings"]["isMobile"] = isMobile();
		$this->settingsMap["globalSettings"]["mobileDeteced"] = detectMobileDevice();
		
		// s508 must be in global settings
		$this->settingsMap['globalSettings']['s508'] = $this->is508;
		
		$this->settingsMap["globalSettings"]["locale"] = array();
		$this->settingsMap["globalSettings"]["locale"]["dateFormat"] = $locale_info["LOCALE_IDATE"];
		$this->settingsMap["globalSettings"]["locale"]["startWeekDay"] = $locale_info["LOCALE_IFIRSTDAYOFWEEK"];
		$this->settingsMap["globalSettings"]["locale"]["dateDelimiter"] = $locale_info["LOCALE_SDATE"];
		
		$this->settingsMap["tableSettings"] = array();
		$this->settingsMap['tableSettings']['hasEvents'] = array("default"=>false,"jsName"=>"hasEvents");
		$this->settingsMap["tableSettings"]["strCaption"] = array("default"=>"","jsName"=>"strCaption");
		$this->settingsMap["tableSettings"]["isUseAudio"] = array("default"=>false,"jsName"=>"isUseAudio");
		$this->settingsMap["tableSettings"]["isUseVideo"] = array("default"=>false,"jsName"=>"isUseVideo");
		$this->settingsMap['tableSettings']['listGridLayout'] = array("default"=> gltHORIZONTAL, "jsName"=>"listGridLayout");
		$this->settingsMap["tableSettings"]["rowHighlite"] = array("default"=>false,"jsName"=>"isUseHighlite");
		$this->settingsMap["tableSettings"]["isUseToolTips"] = array("default"=>false,"jsName"=>"isUseToolTips");
		$this->settingsMap['tableSettings']['recsPerRowList'] = array("default"=>1,"jsName"=>"recsPerRowList");
		$this->settingsMap["tableSettings"]["showAddInPopup"] = array("default"=>false, "jsName"=>"showAddInPopup");
		$this->settingsMap["tableSettings"]["showEditInPopup"] = array("default"=>false,"jsName"=>"showEditInPopup");
		$this->settingsMap["tableSettings"]["showViewInPopup"] = array("default"=>false,"jsName"=>"showViewInPopup");
		$this->settingsMap["tableSettings"]["isResizeColumns"] = array("default"=>false,"jsName"=>"isUseResize");
		$this->settingsMap["tableSettings"]["useDetailsPreview"] = array("default"=>false,"jsName"=>"isUseDP");
		$this->settingsMap['tableSettings']['isUsebuttonHandlers'] = array("default"=>false,"jsName"=>"isUseButtons");
		
		//if the Search panel added to the non table based page ajax suggests should be configured according to the search table's settings
		$ajaxSuggestDefault = $this->tableBasedSearchPanelAdded ? !$this->isUseAjaxSuggest : true;
		$this->settingsMap["tableSettings"]["isUseAjaxSuggest"] = array("default"=>$ajaxSuggestDefault,"jsName"=>"ajaxSuggest");
		
		if ($this->pageType == PAGE_REGISTER || $this->pageType == PAGE_CHANGEPASS)
			$this->pageLayout = GetPageLayout('', $this->pageType);
		else 
			$this->pageLayout = GetPageLayout($this->shortTableName, $this->pageType);
		if($this->pageLayout)
		{
			$this->jsSettings['tableSettings'][$this->tName]['pageSkinStyle'] = $this->pageLayout->style." page-".$this->pageLayout->name;
			$this->AddCSSFile($this->pageLayout->getCSSFiles(isRTL(), isMobile()));
		}
		$this->controlsMap["oldLayout"] = $this->isOldLayout();
		$this->controlsMap["layoutName"] = $this->getLayoutName();
		
		$this->settingsMap["fieldSettings"] = array();
		$this->settingsMap["fieldSettings"]["UseTimestamp"] = array("default"=>false,"jsName"=>"isUseTimeStamp");
		$this->settingsMap["fieldSettings"]["strName"] = array("default"=>"","jsName"=>"strName");
		$this->settingsMap["fieldSettings"]["ShowTime"] = array("default"=>false,"jsName"=>"showTime");
		$this->settingsMap["fieldSettings"]["EditFormat"] = array("default"=>"","jsName"=>"editFormat");
		$this->settingsMap["fieldSettings"]["DateEditType"] = array("default"=>EDIT_DATE_SIMPLE,"jsName"=>"dateEditType");
		$this->settingsMap["fieldSettings"]["RTEType"] = array("default"=>"","jsName"=>"RTEType");
		$this->settingsMap["fieldSettings"]["ViewFormat"] = array("default"=>"","jsName"=>"viewFormat");
		$this->settingsMap["fieldSettings"]["validateAs"] = array("default"=>null,"jsName"=>"validation");
		$this->settingsMap["fieldSettings"]["strEditMask"] = array("default"=>null,"jsName"=>"mask");
		$this->settingsMap["fieldSettings"]["LastYearFactor"] = array("default"=>10,"jsName"=>"lastYear");
		$this->settingsMap["fieldSettings"]["InitialYearFactor"] = array("default"=>100,"jsName"=>"initialYear");
		$this->settingsMap["fieldSettings"]["ShowListOfThumbnails"] = array("default"=>false,"jsName"=>"showListOfThumbnails");
		$this->settingsMap["fieldSettings"]["ImageWidth"] = array("default"=>0,"jsName"=>"imageWidth");
		$this->settingsMap["fieldSettings"]["ImageHeight"] = array("default"=>0,"jsName"=>"imageHeight");
		
		$this->jsSettings["tableSettings"][$this->tName]["strCaption"] = $this->strCaption;
		$this->jsSettings["tableSettings"][$this->tName]["pageMode"] = $this->mode;
		
		if ($this->listAjax)
			$this->jsSettings['tableSettings'][$this->tName]['pageMode'] = LIST_AJAX;
		
		if($this->lockingObj)
			$this->jsSettings['tableSettings'][$this->tName]['locking'] = true;
		
		if( $this->warnLeavingPages && ($this->pageType ==PAGE_REGISTER || $this->pageType ==PAGE_ADD || $this->pageType ==PAGE_EDIT) )
			$this->jsSettings['tableSettings'][$this->tName]['warnOnLeaving'] = true;
		
		//If current table has detail tables
		if(count($this->allDetailsTablesArr))
		{
			if($this->pageType==PAGE_LIST)
				$this->jsSettings['tableSettings'][$this->tName]['detailTables'] = array();
			
			$this->jsSettings['tableSettings'][$this->tName]['isShowDetails'] = $this->isShowDetailTables;
			
			for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
			{
				$this->settingsMap["globalSettings"]['shortTNames'][ $this->allDetailsTablesArr[$i]['dDataSourceTable'] ] = $this->allDetailsTablesArr[$i]['dShortTable'];
				if(($this->pageType==PAGE_LIST) || ($this->pageType==PAGE_REPORT) || ($this->pageType==PAGE_CHART))
				{
					unset($_SESSION[$this->allDetailsTablesArr[$i]['dDataSourceTable'].'_advsearch']);
					$this->jsSettings['tableSettings'][$this->tName]['detailTables'][$this->allDetailsTablesArr[$i]['dDataSourceTable']] = 
						array(
							'pageType' => $this->allDetailsTablesArr[$i]['dType'],
							'dispChildCount' => $this->allDetailsTablesArr[$i]['dispChildCount'], 
							'hideChild' => $this->allDetailsTablesArr[$i]['hideChild'],
							'listShowType'=>$this->allDetailsTablesArr[$i]['previewOnList'],
							'addShowType'=>$this->allDetailsTablesArr[$i]['previewOnAdd'],
							'editShowType'=>$this->allDetailsTablesArr[$i]['previewOnEdit'],
							'viewShowType'=>$this->allDetailsTablesArr[$i]['previewOnView']				  
						);
						
					if($this->allDetailsTablesArr[$i]['previewOnList'] == DP_POPUP)
						$this->jsSettings['tableSettings'][$this->tName]['isUsePopUp'] = true;
						
					// field names of master keys of current table for passed details table name
					$this->masterKeysByD[$i] = $this->allDetailsTablesArr[$i]['masterKeys'];		
				}
			}
			
			if( ($this->pageType==PAGE_ADD || $this->pageType==PAGE_EDIT) && $this->isShowDetailTables )
				$this->controlsMap["dControlsMap"] = array();
		}
		$this->controlsMap["video"] = array();
		$this->controlsMap['toolTips'] = array();
		$this->addLookupSettings();
		$this->addMultiUploadSettings();
		
		$this->controlsMap["searchPanelActivated"] = $this->searchPanelActivated;

		if($this->pageType != PAGE_LIST || $this->mode != LIST_DETAILS)
		{
			$this->controlsMap["controls"] = array();
			if(!$this->pageAddLikeInline && !$this->pageEditLikeInline)
			{
				$allSearchFields = $this->pSetSearch->getAllSearchFields();
				$this->controlsMap["search"] = array();
				$this->controlsMap["search"]["searchBlocks"] = array();
				$this->controlsMap["search"]["allSearchFields"] = $allSearchFields;
				$this->controlsMap["search"]["allSearchFieldsLabels"] = $this->getSearchFieldsLabels( $allSearchFields );				
				$this->controlsMap["search"]["panelSearchFields"] = $this->pSetSearch->GetPanelSearchFields();
				$this->controlsMap["search"]["googleLikeFields"] = $this->pSetSearch->getGoogleLikeFields();
				$this->controlsMap["search"]["inflexSearchPanel"] = !$this->pSetSearch->isFlexibleSearch();
				$this->controlsMap["search"]["requiredSearchFields"] = $this->pSetSearch->getSearchRequiredFields();
				$this->controlsMap["search"]["isSearchRequired"] = $this->pSetSearch->noRecordsOnFirstPage();
				$this->controlsMap["search"]["searchTableName"] = $this->searchTableName;
				$this->controlsMap["search"]["shortSearchTableName"] = $this->pSetSearch->getShortTableName();
					
				if($this->pageType!=PAGE_SEARCH)
					$this->controlsMap["search"]["submitPageType"] = $this->pageType;
				else
				{
					if(postvalue("rname")){
						$this->controlsMap["search"]["submitPageType"] = "dreport";
						$this->controlsMap["search"]["baseParams"]["rname"] = postvalue("rname");
						if($_SESSION["crossLink"])
						{
							if(substr($_SESSION["crossLink"],0,1)=="&")
								$_SESSION["crossLink"]=substr($_SESSION["crossLink"],1);
							$alink=explode("&",$_SESSION["crossLink"]);
							foreach($alink as $param)
							{
								$arrtmp=explode("=",$param);
								$this->controlsMap["search"]["baseParams"][$arrtmp[0]] = $arrtmp[1];
							}
						}
					}elseif(postvalue("cname")){
						$this->controlsMap["search"]["submitPageType"] = "dchart";
						$this->controlsMap["search"]["baseParams"]["cname"] = postvalue("cname");
					}else{
						$this->controlsMap["search"]["submitPageType"] = $this->tableType;
					}
				}
			}
		}
			
		$this->isUseToolTips = $this->isUseToolTips || $this->pSet->isUseToolTips(); 
		
		$this->googleMapCfg["APIcode"] = "";
		if($this->xt)
			$this->xt->assign("pagetitle", $this->getPageTitle( $this->pageType, $this->tName == NOT_TABLE_BASED_TNAME ? "" : GoodFieldName($this->tName) ));	

		$this->assignSearchLogger();	
	}	

	/**
	 * Init the page's functionality.
	 * The method is invoked just after the constructor has been called
	 */
	function init() 
	{
		if( ($this->pageType != PAGE_ADD || $this->mode != ADD_INLINE) && ($this->pageType != PAGE_EDIT || $this->mode != EDIT_INLINE ) )
		{
			//build the Search panel if the "searchpanel" brick is added to the page's layout
			$this->buildSearchPanel();
		}
		
		if( $this->pageType == PAGE_LIST && ($this->mode == LIST_AJAX || $this->mode == LIST_SIMPLE) || ( $this->pageType == PAGE_REPORT || $this->pageType == PAGE_CHART ) && $this->mode === LIST_SIMPLE )
		{
			$this->buildFilterPanel();
			$this->initLogin();
		}
	}
	
	/**
	 * Init form login
	 */
	function initLogin()
	{
		$this->xt->assign("security_block", true);
		// The user might rewrite $_SESSION["UserName"] value with HTML code in an event, so no encoding will be performed while printing this value.
		$this->xt->assign("username", $_SESSION["UserName"]);
		$this->xt->assign("logoutlink_attrs", 'id="logoutButton'.$this->id.'"');
		
		$loggedAsGuest = isLoggedAsGuest();
		$this->xt->assign("loggedas_message", !$loggedAsGuest); 
		$this->xt->assign("guestloginbutton", $loggedAsGuest);
		$this->xt->assign("logoutbutton", isSingleSign() && !$loggedAsGuest);
		
		if(isMobile())
		{
			$this->xt->assign("guestloginlink_attrs", 'id="loginButtonLink'.$this->id.'"');
			return;
		}
		 // login Separate page
		$this->xt->assign("guestloginlink_attrs", 'id="loginButtonLink'.$this->id.'"');
			}
	
	protected function assingSessionPrefix()
	{
		$this->sessionPrefix = $this->tName;
	}
	
	/**
	 * Check if the 'Search saving' is enabled basing on
	 * the project settings and the current page's type
	 * @return Boolean
	 */
	public function isSearchSavingEnabled()
	{
		$searchSavingEnabled = $this->pSet->isSearchSavingEnabled();
		
		if( !$searchSavingEnabled )
			return false;
			
		return $this->pageType == PAGE_LIST && ($this->mode == LIST_AJAX || $this->mode == LIST_SIMPLE) 
			   || $this->pageType == PAGE_REPORT 
			   || $this->pageType == PAGE_CHART; 
	}

	/**
	 * Assign the page's 'searchLogger' object 
	 * if the 'Search saving' is enabled
	 */
	protected function assignSearchLogger()
	{		
		if( !$this->searchSavingEnabled || !$this->searchClauseObj )
			return;
		
		include_once getabspath("classes/searchParamsLogger.php");	
		$this->searchLogger = new searchParamsLogger( $this->tName );
		
		$this->jsSettings['tableSettings'][$this->tName]['searchSaving'] = true;
		$savedSearches = $this->searchLogger->getSavedSeachesParams();
		if( count($savedSearches) )
		{
			$this->pageHasSavedSearches = true;
			$this->controlsMap["search"]["savedSearches"] = $savedSearches;
			$this->controlsMap["search"]["savedSearchIsRun"] = $this->searchClauseObj->savedSearchIsRun;
		}
	
		$this->assignSearchSavingButtons();
	}

	/**
	 * Assign search saving buttons block
	 */
	protected function assignSearchSavingButtons()
	{
		$this->xt->assign('searchsaving_block', true);
		
		if( $this->searchClauseObj->isSearchFunctionalityActivated() && !$this->searchClauseObj->savedSearchIsRun ) 
			$this->xt->assign("saveSeachButton", true);

		$this->xt->assign("savedSeachesButton", true);
		
		if( !$this->pageHasSavedSearches )
			$this->xt->assign('saveSearchButtonAttrs', $this->dispNoneStyle); 
	}	
	
	/**
	 * The searchClauseObj method wrapper
	 * @return Array
	 */
	public function getSearchParamsForSaving()
	{
		return $this->searchClauseObj->getSearchParamsForSaving();
	}
	
	/**
	 * Get the search fields labels array
	 * @param Array
	 * @return Array
	 */
	protected function getSearchFieldsLabels($searchFields)
	{
		$sFieldLabels = array();
		foreach($searchFields as $sField)
		{
			$sFieldLabels[ $sField ] = $this->pSetSearch->label($sField);
		}
		return $sFieldLabels;
	}
	
	/**
	 * Get the page layout's name
	 * @return string
	 */
	function getLayoutName() 
	{
		if($this->pageLayout)
			return $this->pageLayout->style;
		else
			return "";
	}
	
	/**
	 * addMultiUploadSettings
	 * Adding js-settings for FileField
	 * @intellisense
	 */
	function addMultiUploadSettings()
	{
		$this->settingsMap["fieldSettings"]["autoUpload"] = array("default"=>false, "jsName"=>"autoUpload");
		$this->settingsMap["fieldSettings"]["acceptFileTypes"] = array("default"=>".+$", "jsName"=>"acceptFileTypes");
		$this->settingsMap["fieldSettings"]["CompatibilityMode"] = array("default"=>false, "jsName"=>"compatibilityMode");
		$this->settingsMap["fieldSettings"]["maxFileSize"] = array("default"=>null, "jsName"=>"maxFileSize");
		$this->settingsMap["fieldSettings"]["maxTotalFilesSize"] = array("default"=>null, "jsName"=>"maxTotalFilesSize");
		$this->settingsMap["fieldSettings"]["maxNumberOfFiles"] = array("default"=>1, "jsName"=>"maxNumberOfFiles");
	}

	/**
	 * Display the 'Back to Master' link and master table info
	 */
	public function displayMasterTableInfo() 
	{
		$masterTablesInfoArr = $this->pSet->getMasterTablesArr($this->tName);
		if( !count($masterTablesInfoArr)  )
			return;
			
		$this->jsSettings["tableSettings"][$this->tName]["hasMasterList"] = true;
		
		foreach( $masterTablesInfoArr as $masterTableData )
		{
			if( $this->masterTable != $masterTableData['mDataSourceTable'] ) 
				continue;
				
			if( $masterTableData['dispInfo'] ) 
			{
				$detailKeys = $masterTableData['detailKeys'];
				$masterKeys = array();
				for($j = 0; $j < count($detailKeys); $j ++)
				{
					$masterKeys[]= @$_SESSION[$this->sessionPrefix."_masterkey".($j + 1)];
				}
				
				$master = array();
				$params = array("detailtable" => $this->tName, "keys" => $masterKeys, "detailPageObj" => $this);
				AssignFunction($master, "DisplayMasterTableInfo_".$masterTableData['mShortTable'], $params);
				$this->xt->assignbyref("showmasterfile", $master);
			}
			
			$this->xt->assign("mastertable_block", true);
			$backButtonHref = GetTableLink($masterTableData['mShortTable'], $masterTableData["type"], "a=return"); 
			$this->xt->assign("backtomasterlink_attrs", "href=\"".$backButtonHref."\"");
			$this->xt->assign("backtomasterlink_caption", GetTableCaption( GoodFieldName($masterTableData['mDataSourceTable']) ));		
		}		
	}
	
	/**
	 * Get master record
	 *
	 * User function
	 * Using only in events by users
	 * @return{array}
	 * @intellisense
	 */
	function getMasterRecord()
	{
		if (!is_null($this->masterRecordData))
			return $this->masterRecordData;
		
		if(!$this->masterTable)
			return null;
			
	
		global $detailsTablesData, $masterTablesData;	
		$settings = new ProjectSettings($this->masterTable, PAGE_LIST);
		
		$where = "";
		$masterTablesInfoArr = $this->pSet->getMasterTablesArr($this->tName);
		for($i=0; $i < count($masterTablesInfoArr); $i++) 
		{
			if($this->masterTable == $masterTablesInfoArr[$i]['mDataSourceTable']) 
			{
				$masterKeys = $this->getActiveMasterKeys();
				$cipherer = new RunnerCipherer($this->masterTable);
				for($j=0; $j < count($masterTablesInfoArr[$i]['masterKeys']); $j++)
				{
					if($j)
						$where.= " and ";
					$mKey = $masterTablesInfoArr[$i]['masterKeys'][$j];
					$where.= $settings->getFullNameField($mKey)."=".$cipherer->MakeDBValue($mKey, $masterKeys[$j], "", "", true);
				}
			}
		}
		
		if(!$where)
			return null;
					
		$masterQuery = $settings->getSQLQuery();
		
		$str = SecuritySQL("Search");
		if(strlen($str))
			$where.= " and ".$str;
		
		$strWhere = whereAdd($masterQuery->WhereToSql(),$where);
		if(strlen($strWhere))
			$strWhere = " where ".$strWhere." ";
		$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
		
		global $conn;
		
		LogInfo($strSQL);
		$rs = db_query($strSQL,$conn);
		$this->masterRecordData = $cipherer->DecryptFetchedArray($rs);
		return $this->masterRecordData;
	}
	
	/**
	 * Set Proxy Value 
	 * Fill array serverData for using in js OnLoad event
	 *
	 * User function
	 * Using only in events by users
	 *
	 * @param{string} name of data
	 * @param{string} value of data
	 * @intellisense
	 */
	function setProxyValue($name, $value)
	{
		if(!$name)
			return;
		$this->jsSettings["tableSettings"][$this->tName]["proxy"][$name] = $value;
	}
	
	/**
	 * Get Proxy Value 
	 *
	 * User function
	 * Using only in events by users
	 *
	 * @param{string} name of data
	 * @return{}
	 * @intellisense
	 */
	function getProxyValue($name)
	{
		if(array_key_exists($name, $this->jsSettings['tableSettings'][$this->tName]['proxy']))
			return $this->jsSettings["tableSettings"][$this->tName]["proxy"][$name];
		return null;	
	}
	
	/**
	 * Set template file if it empty
	 * @intellisense
	 */
	function setTemplateFile()
	{
		if(!$this->templatefile)
		{
			$this->templatefile	= GetTemplateName($this->shortTableName, $this->pageType);
		}
		$this->xt->set_template($this->templatefile);
	}
	/**
	 * Get menu nodes if use menu on page
	 * @intellisense
	 */	
	function &getMenuNodes($name = 'main')
	{
		if(!count($this->menuNodes[$name]))
		{
			global $menuNodesObject;
			$menuNodesObject  = &$this;
			require_once(getabspath("include/menunodes_".$name.".php"));
			
			if($name == 'main')
			{
				getMenuNodes_main($menuNodesObject);
				return $this->menuNodes[$name];
			}
				if($name == 'adminarea')
			{
				getMenuNodes_adminarea($menuNodesObject);
				return $this->menuNodes[$name];
			}
			
			
		}
		return $this->menuNodes[$name];
	}
	/**
	 * Check is use menu on page
	 * @intellisense
	 */
	function isUseMenu()
	{
		$menuBricks = array('vmenu', 'vmenu_mobile', 'hmenu', 'quickjump');
		if($this->xt->isExistBricks($menuBricks))
		{
			return true;
		}
		return false;
	}
	
	/**
	 * Check is need to show menu
	 * @intellisense
	 */
	function isShowMenu()
	{
		if(!$this->isUseMenu() && $this->pageType!=PAGE_MENU && $this->pageType!=PAGE_ADD)
			return false;
			
		$menuNodes = $this->getMenuNodes();
		$allowedMenuItems = 0;
		for($i=0;$i<count($menuNodes);$i++)
		{
			if($menuNodes[$i]["linkType"] == "Internal")
			{
				if($this->isUserHaveTablePerm($menuNodes[$i]["table"], $menuNodes[$i]["pageType"]))
					$allowedMenuItems++;
			}
			else 
				$allowedMenuItems++;
		}
		if($this->isDynamicPerm && IsAdmin() && $this->pageType==PAGE_MENU) 
			$allowedMenuItems++;
		if($this->isAddWebRep) 
			$allowedMenuItems++;
		if($allowedMenuItems > 1)
			return true;
		return false;
	}
	
	/**
	 * Check if user have permission for link
	 * @param {string} table name
	 * @param {string} page type
	 * @return {boolean}
	 * @intellisense
	 */
	function isUserHaveTablePerm($tName, $pageType)
	{
		if($pageType == "WebReports")
			return true;
		if(!strlen($tName))
			return false;
		$type = $this->getPermisType($pageType);
		$strPerm = GetUserPermissions($tName);	
		if(strpos($strPerm,$type)!==false)
			return true;
		else
			return false;
	}
	/**
	 * Get type of permission
	 * @return {string}
	 * @intellisense
	 */
	function getPermisType($pageType)
	{
		$type = '';
		if ($pageType == "List" || $pageType == "Search" || $pageType == "Report" || $pageType == "Chart")
			$type = "S";
		elseif ($pageType == "Add")
			$type = "A";
		elseif ($pageType == "Edit")
			$type = "E";
		elseif ($pageType == "Print" || $pageType == "Export")
			$type = "P";
		elseif ($pageType == "Import")
			$type = "I";
		return $type;
	}
	
	/**
	 * Get redirect location for menu page
	 * @return {string}
	 * @intellisense
	 */
	function getRedirectForMenuPage() 
	{
		if($this->isShowMenu())
			return '';
		
		$redirect = '';
		$menuNodes = $this->getMenuNodes();
		for($i=0;$i<count($menuNodes);$i++)
		{
			if($menuNodes[$i]["linkType"] == "Internal")
			{
				if($this->isUserHaveTablePerm($menuNodes[$i]["table"], $menuNodes[$i]["pageType"]))
				{	
					$type = $this->getPermisType($menuNodes[$i]['pageType']);
					if($type == "A")
						$redirect = "add";
					elseif($menuNodes[$i]["pageType"] == "List" && $type == "S")
						$redirect = "list";
					elseif($menuNodes[$i]["pageType"] == "Report" && $type == "S")
						$redirect = "report";
					elseif($menuNodes[$i]["pageType"] == "Chart" && $type == "S")
						$redirect = "chart";	
					$redirect = GetTableLink(GetTableURL($menuNodes[$i]["table"]), $redirect);	
				}	
			}
		}
		if($this->isDynamicPerm && IsAdmin()) 
			$redirect = GetTableLink("admin_rights", "list");
			
		if($this->isAddWebRep) 
			$redirect = GetTableLink("webreport");
		
		return $redirect;
	}

	/**
	 * Clear session kyes
	 * @intellisense
	 */
	function clearSessionKeys() 
	{
		if($this->pageType == PAGE_LIST && !count($_POST) && (!count($_GET) || count($_GET) == 1 && isset($_GET["menuItemId"]) || isset($_GET["mastertable"]) && @$_GET["mode"]!="listdetails") || @$_GET["editType"] == ADD_ONTHEFLY)
		{
			$sess_unset = array();
			foreach($_SESSION as $key => $value)
				if(substr($key, 0, strlen($this->sessionPrefix) + 1) == $this->sessionPrefix."_" && strpos(substr($key, strlen($this->sessionPrefix) + 1), "_") === false)
					$sess_unset[]= $key;
			
			foreach($sess_unset as $key)
				unset($_SESSION[$key]);
		}
		
		if( $this->pageType == PAGE_LIST && ( $this->mode === LIST_DETAILS || $this->mode === LIST_LOOKUP ) || ( $this->pageType == PAGE_REPORT || $this->pageType == PAGE_CHART ) && $this->mode !== LIST_SIMPLE )
		{
			unset( $_SESSION[$this->sessionPrefix."_filters"] );
		}
	}
	/**
	 * Set session variables
	 * @intellisense
	 */	
	function setSessionVariables() 
	{
		//clear session keys
		$this->clearSessionKeys();
		
		// Process master table value
		if($this->masterTable!="")
			$_SESSION[$this->sessionPrefix."_mastertable"] = $this->masterTable;
		else
			$this->masterTable = $_SESSION[$this->sessionPrefix."_mastertable"];
			
		// SearchClause class stuff
		$allSearchFields = $this->pSetSearch->getAllSearchFields();
		if($this->needSearchClauseObj && !$this->searchClauseObj)
		{
			if (isset($_SESSION[$this->sessionPrefix.'_advsearch']))
			{
				$this->searchClauseObj = SearchClause::UnserializeObject($_SESSION[$this->sessionPrefix.'_advsearch']);
			}
			else
			{
				$params = array();
				$params['tName'] = $this->tName;
				$params['cipherer'] = $this->cipherer;
				$params['searchFieldsArr'] = $allSearchFields;
				$params['sessionPrefix'] = $this->sessionPrefix;
				$params['panelSearchFields'] = $this->pSetSearch->getPanelSearchFields();
				$params['googleLikeFields'] = $this->pSetSearch->getGoogleLikeFields();
				$params['requiredSearchFields'] = $this->pSetSearch->getSearchRequiredFields();
				$params['searchSavingEnabled'] = $this->searchSavingEnabled;
				$this->searchClauseObj = new SearchClause($params);
			}
			
			$this->searchClauseObj->parseRequest();
		}
		
		if( $this->searchSavingEnabled && $this->searchClauseObj )
			$this->searchClauseObj->storeSearchParamsForLogging();
		
		//set session page size
		if(@$_REQUEST["pagesize"]) 
		{
			$_SESSION[$this->sessionPrefix."_pagesize"] = @$_REQUEST["pagesize"];
			$_SESSION[$this->sessionPrefix."_pagenumber"] = 1;
		}
		//set page size
		$this->pageSize = (integer) $_SESSION[$this->sessionPrefix."_pagesize"];
	}
	
	/**
	 * Add lookup settings to settings map
	 * Use on list and add pages
	 * @intellisense
	 */
	function addLookupSettings()
	{
		$this->settingsMap["fieldSettings"]["CategoryControl"] = array("default" => "", "jsName" => "categoryField");
		$this->settingsMap["fieldSettings"]["DependentLookups"] = array("default" => array(), "jsName" => "depLookups");
		$this->settingsMap["fieldSettings"]["LCType"] = array("default" => LCT_DROPDOWN, "jsName" => "lcType");
		$this->settingsMap["fieldSettings"]["LookupTable"] = array("default" => "", "jsName" => "lookupTable");
		$this->settingsMap["fieldSettings"]["SelectSize"] = array("default" => 1, "jsName" => "selectSize");
		$this->settingsMap["fieldSettings"]["Multiselect"] = array("default" => false, "jsName" => "Multiselect");
		$this->settingsMap["fieldSettings"]["LinkField"] = array("default" => "", "jsName" => "linkField");
		$this->settingsMap["fieldSettings"]["DisplayField"] = array("default" => "", "jsName" => "dispField");
		$this->settingsMap["fieldSettings"]["freeInput"] = array("default" => false, "jsName" => "freeInput");
		$this->settingsMap["fieldSettings"]["HorizontalLookup"] = array("default" => false, "jsName" => "HorizontalLookup");
		$this->settingsMap["fieldSettings"]["autoCompleteFields"] = array("default" => array(), "jsName" => "autoCompleteFields");
	}
	
	/**
	 * Fill global settings
	 * @intellisense
	 */
	function fillGlobalSettings()
	{
		$this->jsSettings["global"] = array();
		foreach($this->settingsMap["globalSettings"] as $key => $val)
			$this->jsSettings["global"][$key] = $val;
		// start augment id from this value	
		$this->jsSettings["global"]['idStartFrom'] = $this->flyId;	
	}
	
	/**
	 * Fill table settings
	 * @intellisense
	 */
	function fillTableSettings() 
	{
		foreach($this->settingsMap["tableSettings"] as $key => $val)
		{
			$tData = $this->pSet->getTableData(".".$key);

			$isDefault = false;
			if(is_array($tData))
				$isDefault = !count($tData);
			else if(!is_array($val['default']))
				$isDefault = ($tData == $val['default']);
			
			if(!$isDefault)
				$this->jsSettings['tableSettings'][$this->tName][$val['jsName']] = $tData;		
		}	
	}
	
	/**
	 * Add fields settings for the fields with names contained in $arrFields
	 */
	function addFieldsSettings($arrFields, $pSet, $pageBased, $pageType)
	{
		foreach($arrFields as $fName)
		{
			if( !array_key_exists($fName, $this->jsSettings['tableSettings'][$this->tName]['fieldSettings']) )
				$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$fName] = array();
			
			if( !array_key_exists($pageType, $this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$fName]) )
				$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$fName][$pageType] = array();
						
			$matchDK = ( $this->matchWithDetailKeys($fName) && $this->pageType != PAGE_SEARCH && $this->pageType != PAGE_LIST && $pageBased );
			
			foreach($this->settingsMap["fieldSettings"] as $key => $val)
			{
				$fData = $pSet->getFieldData($fName, $key);
				
				if($key == "validateAs" && !$matchDK)
				{
					$this->fillValidation($fData, $val, $this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$fName][$pageType]);
					continue;
				}
				
				if( $key == "EditFormat" )
				{
					if($matchDK)
						$fData = EDIT_FORMAT_READONLY;
				}
				elseif( $key == "RTEType" )
				{
					$fData = $pSet->getRTEType($fName);
					if($fData == "RTECK")
					{
						$this->isUseCK = true;
						$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$fName][$pageType]['nWidth'] = $pSet->getNCols($fName);
						$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$fName][$pageType]['nHeight'] = $pSet->getNRows($fName);
					}	
				}
				elseif( $key == "autoCompleteFields" )
					$fData = $pSet->getAutoCompleteFields($fName);

				
				$isDefault = false;
				if(is_array($fData))
					$isDefault = !count($fData);
				else if(!is_array($val['default']))
					$isDefault = ($fData === $val['default']);
				
				if(!$isDefault && !$matchDK)
					$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$fName][$pageType][$val['jsName']] = $fData;
				else if( $matchDK && ($key == "EditFormat" || $key == "strName" || $key == "autoCompleteFields" || $key == "LinkField") )
					$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$fName][$pageType][$val['jsName']] = $fData;
			}
			
			$this->jsSettings['tableSettings'][$this->tName]['isUseCK'] = $this->isUseCK;
			
			if(count($this->googleMapCfg) != 0 && $this->googleMapCfg['isUseGoogleMap'])
			{
				$this->jsSettings['tableSettings'][$this->tName]['isUseGoogleMap'] = true;
				$this->jsSettings['tableSettings'][$this->tName]['googleMapCfg'] = $this->googleMapCfg;	
			}
			
			$lookupTableName = $pSet->getLookupTable($fName);
			if( $lookupTableName )
				$this->jsSettings['global']['shortTNames'][$lookupTableName] = GetTableURL($lookupTableName);
				
			if( $pSet->getEditFormat($fName) == 'Time' )
				$this->fillTimePickSettings($fName, "", $pSet, $pageType);
		}
	}
		
	/**
	 * Fill field settings for current table 
	 * @intellisense
	 */
	function fillFieldSettings()
	{		
		$arrFields = $this->pSet->getFieldsList();
		$this->addFieldsSettings($arrFields, $this->pSet, true, $this->pageType);
				
		if( $this->pageType == PAGE_REGISTER )
			$this->addConfirmToFieldSettings();
		
				
		if( $this->searchPanelActivated && $this->permis[$this->searchTableName]["search"] )
		{
			$arrFields = $this->pSetSearch->getAllSearchFields();
			$this->addFieldsSettings($arrFields, $this->pSetSearch, true, PAGE_SEARCH);	
		}
	}
	/**
	 * Match field with details keys
	 * return boolean true or false
	 *
	 * @param string $fName - field name
	 * @return boolean
	 * @intellisense
	 */
	function matchWithDetailKeys($fName)
	{
		$match = false;
		if($this->detailKeysByM)
		{
			for($j=0;$j<count($this->detailKeysByM);$j++)
			{
				if($this->detailKeysByM[$j]==$fName)
				{
					$match = true;
					break;
				}
			}
		}
		return $match;
	}		
	/**
	 * Fill preload array for js settings
	 * Use on Add, Edit, Register pages and for search fields only
	 *
	 * @param string fName 						field name
	 * @param array vals 						dependent and main fields' values
	 * @param Object controls (optional)		An instance of the 'EditControlsContainer' class
	 * @return false or array of preload data
	 * @intellisense
	 */
	function fillPreload($fName, $vals, $controls = null)
	{
		$preload = false;
		if(!$this->matchWithDetailKeys($fName) && $this->pSet->useCategory($fName))
		{
			if($this->pageType == PAGE_ADD || $this->pageType == PAGE_EDIT || $this->pageType == PAGE_REGISTER)
				$preload = $this->getPreloadArr($fName, $vals);
			else
				$preload = $this->getSearchPreloadArr($fName, $vals, $controls);
		}
		return $preload;
	}
	
	/**
	 * Get for the dependent lookup field its main lookup control's field name 
	 * @param string fName 	The field name
	 * @return String 		The category control field's name
	 * @intellisense
	 */
	function getMainLookupFieldNameForDependant($fName)
	{
		if( ($this->pSet->getEditFormat($fName) != EDIT_FORMAT_LOOKUP_WIZARD || $this->pSet->getEditFormat($fName) != EDIT_FORMAT_RADIO) && !$this->pSet->useCategory($fName) )
			return "";
		
		return $this->pSet->getCategoryControl($fName);	
	}
	
	/**
	 * Return JS for preload dependent ctrl 
	 *
	 * @param string fName 	the field name
	 * @param string vals  	dependent and main fields' values
	 * @return Mixed
	 * @intellisense
	 */
	function getPreloadArr($fName, $vals)
	{
		// category control field
		$strCategoryControl = $this->getMainLookupFieldNameForDependant($fName);
		if( $strCategoryControl === "" )
			return false;
		
		// Is field appear or not
		$fieldAppear = true;
		if( $this->pageType == PAGE_ADD )
		{
			if( !$this->pSet->appearOnInlineAdd($fName) )
				$fieldAppear = $this->mode != ADD_INLINE;
			elseif( !$this->pSet->appearOnAddPage($fName) )
				$fieldAppear = $this->mode == ADD_INLINE;
			
			// Is category control appear or not
			$categoryFieldAppear = $this->mode == ADD_INLINE ? $this->pSet->appearOnInlineAdd($strCategoryControl) 
				: $this->pSet->appearOnAddPage($strCategoryControl);
		}	
		elseif( $this->pageType == PAGE_EDIT )
		{
			if( !$this->pSet->appearOnInlineEdit($fName) )
				$fieldAppear = $this->mode != EDIT_INLINE;
			elseif( !$this->pSet->appearOnEditPage($fName) )
				$fieldAppear = $this->mode == EDIT_INLINE;
				
			$categoryFieldAppear = true;	
		}
		
		if( !$fieldAppear )
			return false;
			
		$output = array();	
		if( !$this->pSet->isFreeInput($fName) )
			$output = $this->getControl($fName)->loadLookupContent( @$vals[$strCategoryControl], @$vals[$fName], $categoryFieldAppear );
		else if( isset($vals[ $fName ]) )
			$output = array(0 => @$vals[$fName], 1 => @$vals[$fName]);
		
		if( !count($output) )
			return false;
			
		$fVal = "";
		if( strlen($vals[ $fName ]) )
			$fVal = $vals[ $fName ];
		
		if( $this->pageType == PAGE_EDIT && $this->pSet->multiSelect($fName) )
			$fVal = splitvalues($fVal);
		
		return array("vals" => $output, "fVal" => $fVal);
	}	
	
	/**
	 * Common assign for diferent mode on list page
	 * Branch classes add to this method its individualy code
	 * @intellisense
	 */
	function commonAssign() 
	{
		$this->xt->displayBrickHidden("searchpanel");
		if( isMobile() )
		{
			$this->xt->displayBrickHidden("vmenu");
			$this->xt->displayBrickHidden("backbutton");
			$this->xt->displayBrickHidden("fulltext_mobile");
			$this->xt->displayBrickHidden("searchpanel_mobile");
			//$this->xt->displayBrickHidden("vsearch2");
		}
	}
	
	/**
	 * Return name of parent field
	 *
	 * @param string $fName
	 * @return string
	 * @intellisense
	 */
	function getParentCtrlName($fName) {
		return $this->pSet->getCategoryControl($fName); 
	}
	
	/**
	 * Return parent value for dependent ctrl
	 * Used value of first parent field
	 *
	 * @param string $fName
	 * @return string
	 * @intellisense
	 */
	function getParentVal($fName)
	{		
		$categoryFieldParams = $this->searchClauseObj->getSearchCtrlParams($this->getParentCtrlName($fName));
		if (count($categoryFieldParams))
			return $categoryFieldParams[0]['value1'];
		else
			return false;	
	}
	
	/**
	 * Return JS for preload dependent ctrl for search fields
	 *
	 * @param String fName 		field name
	 * @param Array vals 		dependent and main fields' values
	 * @param Object contorls	 
	 * @return array
	 * @intellisense
	 */
	function getSearchPreloadArr($fName, $vals, $controls)
	{
		if( is_null($controls) ) 
			return false;
		
		// if no parent in project settings
		if( $this->pSet->getEditFormat($fName) != EDIT_FORMAT_LOOKUP_WIZARD && !$this->pSet->useCategory($fName) )
			return false;
		
		$parentVal = $this->getParentVal($fName);
		$doFilter = $parentVal !== false && $parentVal !== '';	
		$output = $controls->getControl($fName)->loadLookupContent( $parentVal, $vals[$fName], $doFilter );
		
		if( !count($output) )
			return false;
		
		$fVal = $vals[ $fName ];
		if( $this->pSet->multiSelect($fName) )
			$fVal = splitvalues($fVal);	
		
		return array("vals" => $output, "fVal" => $fVal);	
	}
	
	/**
	 * Add confirm field to field settings
	 * Use for register page only
	 * @intellisense
	 */	
	function addConfirmToFieldSettings()
	{
		$arrSetVals = array();
		$arrSetVals['strName'] = 'confirm';
		$arrSetVals['EditFormat'] = 'Password';
		$arrSetVals['validation']['validationArr'][] = 'IsRequired';
		$this->jsSettings['tableSettings'][$this->tName]['fieldSettings']['confirm'][$this->pageType] = $arrSetVals;
	}
	
	/**
	 * Add fields to  field settings
	 * Use for admin members page with Active Directory
	 * @intellisense
	 */
	function addFieldsToFieldSettingsforAD()
	{
		$arrSetVals = array();
		$arrSetVals['strName'] = 'displayname';
		$arrSetVals['EditFormat'] = 'Text Field';
		$arrSetVals['validation']['validationArr'][] = 'IsRequired';
		$this->jsSettings['tableSettings'][$this->tName]['fieldSettings']['displayname'][$this->pageType] = $arrSetVals;
		
		$arrSetVals = array();
		$arrSetVals['strName'] = 'name';
		$arrSetVals['EditFormat'] = 'Text Field';
		$arrSetVals['validation']['validationArr'][] = 'IsRequired';
		$this->jsSettings['tableSettings'][$this->tName]['fieldSettings']['name'][$this->pageType] = $arrSetVals;
		
		$arrSetVals = array();
		$arrSetVals['strName'] = 'category';
		$arrSetVals['EditFormat'] = 'Text Field';
		$arrSetVals['validation']['validationArr'][] = 'IsRequired';
		$this->jsSettings['tableSettings'][$this->tName]['fieldSettings']['category'][$this->pageType] = $arrSetVals;
	}
	
	
	/**
	 * Add captcha field to field settings
	 * Use for register page only
	 * @intellisense
	 */	
	function addCaptchaToFieldSettings()
	{
		$arrSetVals = array();
		$arrSetVals['strName'] = 'captcha';
		$arrSetVals['EditFormat'] = 'Text Field';
		$arrSetVals['validation']['validationArr'][] = 'IsRequired';
		$this->jsSettings['tableSettings'][$this->tName]['fieldSettings']['captcha'][$this->pageType] = $arrSetVals;
	}

	/**
	 * Fill validation for current field
	 * @intellisense
	 */
	function fillValidation($fData, $val, &$arrSetVals)
	{
		if( !count($fData) )
			return;
		
		$arrSetVals[ $val['jsName'] ]["validationArr"] = $fData['basicValidate'];
		
		if( array_key_exists("regExp",$fData) ) 
			$arrSetVals[ $val['jsName'] ]["regExp"] = $fData["regExp"];
		
		if( array_key_exists("customMessages", $fData) )
			$arrSetVals[ $val['jsName'] ]["customMessages"] = $fData["customMessages"];	
			
		if( in_array("IsTime", $fData['basicValidate']) )
		{
			if( !$this->timeRegexp ) 
				$this->timeRegexp = $this->getTimeRegexp();
			
			$arrSetVals[ $val['jsName'] ]["regExp"] = $this->timeRegexp;
		}		
	}
	
	/**
	 * Get the local time format regexp
	 */	
	function getTimeRegexp()
	{
		global $locale_info;
		
		$timeDelimiter = $locale_info["LOCALE_STIME"];
		$timeFormat = $locale_info["LOCALE_STIMEFORMAT"];
		$is24hoursFormat = $locale_info["LOCALE_ITIME"] == "1";
		$leadingZero = $locale_info["LOCALE_ITLZERO"] == "1";
        if($locale_info["LOCALE_ITIME"] == "0") 
			$designators = preg_quote($locale_info["LOCALE_S1159"],"")."|".preg_quote($locale_info["LOCALE_S2359"],"");
			
		if($is24hoursFormat)
		{
			if($leadingZero)
				$timeFormat = str_replace("HH", "(?:0[0-9]|1[0-9]|2[0-3])" ,$timeFormat);
			else
				$timeFormat = str_replace("H", "(?:[1-9]|1[0-9]|2[0-3])", $timeFormat);
		} 
		else
		{
			if($leadingZero)
				$timeFormat = str_replace("hh", "(?:0[1-9]|1[0-2])",$timeFormat);
			else
				$timeFormat = str_replace("h", "(?:[1-9]|1[0-2])",$timeFormat);
				
			$timeFormat = str_replace("tt", "[\s]{0,2}(?:".$designators."|am|pm)[\s]{0,2}", $timeFormat);	
        }
		$timeSep = $timeDelimiter == ":" ? ":" : "(?:".$timeDelimiter."|:)";
		$timeFormat = str_replace($timeDelimiter."mm".$timeDelimiter."ss", "(?:".$timeSep."[0-5][0-9](?:".$timeSep."[0-5][0-9])?)?", $timeFormat);
        $timeFormat = "^".str_replace(" ", "[\s]{0,2}", $timeFormat)."$"; 
		return $timeFormat;	
	}
	
	/**
	 * Get array of fields by current page type
	 * return array - of fields
	 * @intellisense
	 */
	function getFieldsByPageType()
	{
		$useInline = false;
		if($this->pageType == PAGE_EDIT)
		{
			if($this->pageEditLikeInline)
			{
				$useInline = true;
				$allfields = $this->pSet->getInlineEditFields();
			}else	
				$allfields = $this->pSet->getEditFields();
		}
		else if($this->pageType == PAGE_ADD)
		{
			if($this->pageAddLikeInline)
			{	
				$useInline = true;
				$allfields = $this->pSet->getInlineAddFields();
			}else
				$allfields = $this->pSet->getAddFields();
		}
		else if($this->pageType == PAGE_LIST)
		{
			$allfields = $this->pSet->getListFields();
		}
		else
			$allfields = $this->pSet->getFieldsList();
		$arrFields = array();
		foreach($allfields as $fName)
		{
			if($useInline)
				$app = $this->pSet->appearOnCurrentPage($fName, $this->pageType, true);
			else
				$app = $this->pSet->appearOnCurrentPage($fName, $this->pageType);
			if($app === 'break')
				break;
			elseif(!$app)
				continue;
			$arrFields[] = $fName;
		}	
		return $arrFields;	
	}
	
	/**
	 * Fill all settings for current table 
	 * @intellisense
	 */
	function fillSettings()
	{
		$this->fillGlobalSettings();
		$this->fillTableSettings();
		$this->fillFieldSettings();	
	}
	
	/**
	 * Fill tool tips for current table fields
	 * @param $fName - filed name
	 * @intellisense
	 */
	function fillFieldToolTips($fName)
	{
		$toolTipText = GetFieldToolTip($this->tName, $fName);
		if( strlen($toolTipText) ) 
			$this->controlsMap['toolTips'][$fName] = $toolTipText;
	}
	
	/**
	 * Fill controls map 
	 * For add, edit, search pages - controls
	 * 
	 * @param Array arr			an array of settings for one control
	 * @param Boolean addSet  	indicates if to add additional settings to control or not
	 * @param String fName 		(optional) a field's name
	 * @intellisense
	 */		
	function fillControlsMap($arr, $addSet = false, $fName="")
	{
		if(!$addSet)
		{
			foreach($arr as $key=>$val)
			{
				initArray($this->controlsMap, $key);
				$this->controlsMap[$key][] = $val;
			}
			
			return;
		}

		foreach($arr as $key=>$val)
		{
			foreach($val as $vkey=>$vval)
			{
				if(!$fName)
					$this->controlsMap[$key][ count($this->controlsMap[$key]) - 1 ][$vkey] = $vval;
				else
				{
					for($i = 0; $i < count($this->controlsMap[$key]); $i++)
					{
						if($this->controlsMap[$key][$i]['fieldName']==$fName)
						{
							$this->controlsMap[$key][$i][$vkey] = $vval;
							break;
						}	
					}		
				}		
			}	
		}				
	}
	
	/**
	 * Fill field settings for current table 
	 * @intellisense
	 */	
	function fillControlsHTMLMap()
	{
		$this->controlsHTMLMap[$this->tName] = array();
		$this->controlsHTMLMap[$this->tName][$this->pageType] = array();
		$this->controlsHTMLMap[$this->tName][$this->pageType][$this->id] = array();
		
		$this->controlsMap['gMaps'] = $this->googleMapCfg;
		if($this->searchClauseObj)
		{
			if(!isset($this->controlsMap["search"]))
			{
				$this->controlsMap["search"] = array();
			}
			$this->controlsMap["search"]["usedSrch"] = $this->searchClauseObj->isUsedSrch();
		}
			
		foreach($this->controlsMap as $key=>$val)
		{
			$this->controlsHTMLMap[$this->tName][$this->pageType][$this->id][$key] = $val;
		}
			
		$this->viewControlsHTMLMap[$this->tName] = array();
		$this->viewControlsHTMLMap[$this->tName][$this->pageType] = array();
		$this->viewControlsHTMLMap[$this->tName][$this->pageType][$this->id] = array();
		
		foreach($this->viewControlsMap as $key => $val)
			$this->viewControlsHTMLMap[$this->tName][$this->pageType][$this->id][$key] = $val;
	}
	
	/**
	 * Fill jsSettings and controlsHTMLMap arrays for current table 
	 * @intellisense
	 */	
	function fillSetCntrlMaps()
	{
		if($this->isControlsMapFilled)
			return;
		$this->fillSettings();
		$this->fillControlsHTMLMap();
		$this->isControlsMapFilled = true;
	}
	
	/**
	 * Fill arrays of names tab group and section to controlsHTMLMap for current table
	 * @intellisense
	 */		
	function fillCntrlTabGroups()
	{
		$arrTabs = $this->getArrTabs();
		$this->controlsMap['tabs'] = array();
		$this->controlsMap['sections'] = array();
		
		if(!$arrTabs)
			return false;
		
		$beginGroup = false;
		$tabGroupName = "";
		
		for($i=0;$i<count($arrTabs);$i++)
		{
			$tabC = $arrTabs[$i];//current tab
			$tabN = (($i+1)<count($arrTabs) ? $arrTabs[$i+1] : false);//next tab
			if(!$tabC['nType'])
			{
				if(!$beginGroup)
				{
					$beginGroup = true;
					$tabGroupName = $tabC['tabId'];
				}
				
				if($beginGroup)
				{
					if(!$tabN || $tabN['nType'] || $tabN['tabGroup']!=$tabC['tabGroup'])
					{
						//fill array of tabs with name of tab groups
						$tabsAndFields = array();
						for($j=0;$j<count($arrTabs);$j++)
						{
							if($arrTabs[$j]['tabGroup'] == $tabC['tabGroup'])
							{
								$tabsAndFields[$arrTabs[$j]['tabId']] = array();
								for($f=0;$f<count($arrTabs[$j]['arrFields']);$f++)
									$tabsAndFields[$arrTabs[$j]['tabId']][] = $arrTabs[$j]['arrFields'][$f];
							}
						}
						$this->controlsMap['tabs']['tabGroup_'.$tabGroupName] = $tabsAndFields;
						$beginGroup = false;
					}	
				}
			}
			else{
					//fill array of sections with name sections
					$this->controlsMap['sections']['section_'.$tabC['tabId']] = array();
					for($f=0;$f<count($arrTabs[$i]['arrFields']);$f++)
						$this->controlsMap['sections']['section_'.$tabC['tabId']][] = $arrTabs[$i]['arrFields'][$f];
				}
		}
	}
	
	/**
	 * Check are fields appaer in tabs for current page or not
	 * return boolean
	 * @intellisense
	 */	
	function isAppearOnTabs($fName)
	{
		$match = false;
		$arrTabs = $this->getArrTabs();
		if(!$arrTabs)
			return $match;
		foreach($arrTabs as $tab=>$val){
			if(in_array($fName, $val['arrFields'])){
				$match = true;
				break;
			}
		}
		return $match;
	}
	/**
	 * Get array of tabs in accordance with page type
	 * return boolean
	 * @intellisense
	 */	
	function getArrTabs()
	{
		if($this->pageType == PAGE_EDIT)
			return $this->arrEditTabs;
		elseif($this->pageType == PAGE_ADD)
			return $this->arrAddTabs;
		elseif($this->pageType == PAGE_VIEW)
			return $this->arrViewTabs;
		else
			return false;
	}
	
	/**
	 * Fill timepicker settings for current field
	 * @intellisense
	 */		
	function fillTimePickSettings($field,  $value = "", $pSet = null, $pageType = "")
	{
		if(is_null($pSet))
			$pSet = $this->pSet;
		if($pageType == "")
			$pageType = $this->pageType;
		
		$timeAttrs = $pSet->getFormatTimeAttrs($field);
		if(count($timeAttrs) && $timeAttrs["useTimePicker"])
		{
			$convention = $timeAttrs["hours"];
			$locAmPm = getLacaleAmPmForTimePicker($convention, true);
			$tpVal = getValForTimePicker($pSet->getFieldType($field),$value,$locAmPm['locale']);
			
			$range = array();
			if($convention==24)
			{
				for($h = 0;$h < $convention;$h ++)
					$range[]= $h;
			}
			else
			{
				for($h = 1;$h <= $convention;$h ++)
					$range[] = $h;
			}
			
			$minutes = array();
			for($m = 0; $m < 60; $m += $timeAttrs["minutes"])
				$minutes[] = $m;
			
			//settings
			$timePickSet = array('convention'=>$convention,
								 'range'=>$range,
								 'apm'=>array($locAmPm['am'],$locAmPm['pm']),
								 'rangeMin'=>$minutes,
								 'locale'=>$locAmPm['locale'],
								 'showSec'=>$timeAttrs["showSeconds"]);
			
			if(count($tpVal['dbtime'])>0)
				$timePickSet['hover'] = array('0'=>$tpVal['dbtime'][3],'1'=>$tpVal['dbtime'][4],'2'=>$tpVal['dbtime'][5]);
			
			if(!array_key_exists($field,$this->jsSettings['tableSettings'][$this->tName]['fieldSettings']))	
			{
				$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$field] = array();
				$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$field][$pageType] = array();
				$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$field][$pageType]['timePick'] = $timePickSet;
			}
			elseif(!array_key_exists("timePick",$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$field][$pageType]))
				$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$field][$pageType]['timePick'] = $timePickSet;
			
			$this->fillControlsMap(array('controls'=>array('open'=>($tpVal['val'] ? true : false))),true,$field);
		}
	}
		
	/**
	 * Assign body end
	 * @intellisense
	 */	
	function assignBodyEnd($params = "") 
	{
		$this->fillSetCntrlMaps();
		echo "<script>
			window.controlsMap = ".my_json_encode($this->controlsHTMLMap).";
			window.viewControlsMap = ".my_json_encode($this->viewControlsHTMLMap).";
			window.settings = ".my_json_encode($this->jsSettings)."; 
			</script>\r\n";
				echo "<script language=\"JavaScript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>\r\n";
		echo "<script>".$this->PrepareJS()."</script>";
	}
		
	/**
	 * Generates new id, same as flyId on front-end
	 *
	 * @return int
	 * @intellisense
	 */
	function genId()
	{
		$this->flyId++;
		$this->recId = $this->flyId;
		return $this->flyId;
	}
	
	/**
	 * Get page type
	 * @intellisense
	 */
	function getPageType()
	{
		return $this->pageType;
	}
	
	/**
	 * Add js files for page
	 * @intellisense
	 */
	function AddJSFileNoExt($file)
	{
		$this->includes_js[] = GetRootPathForResources($file);
	}
	
	function AddJSFile($file, $req1 = "", $req2 = "", $req3 = "")
	{
		$rootPath = GetRootPathForResources($file);
		$this->includes_js[] = $rootPath;
		if($req1!="")
		{
			$this->includes_jsreq[$rootPath] = array(GetRootPathForResources($req1));
		}
		if($req2!="")
		{
			$this->includes_jsreq[$rootPath][] = GetRootPathForResources($req2);
		}
		if($req3!="")
		{
			$this->includes_jsreq[$rootPath][] = GetRootPathForResources($req3);
		}
	}
	
	/**
	 * Grab all js files
	 * @intellisense
	 */
	function grabAllJsFiles()
	{
		$jsFiles = array();
		foreach($this->includes_js as $file)
		{
			$jsFiles[$file] = array();
			if(array_key_exists($file, $this->includes_jsreq))
				$jsFiles[$file] = $this->includes_jsreq[$file];
		}
		$this->includes_js = array();
		$this->includes_jsreq = array();
		return $jsFiles;
	}
	
	/**
	 * Grab all css files
	 * @intellisense
	 */
	function copyAllJsFiles($jsFiles)
	{
		foreach($jsFiles as $file=>$reqFiles)
		{
			$this->includes_js[] = $file;
			
			if(array_key_exists($file,$this->includes_jsreq)){
				foreach($reqFiles as $rFile){
					if(array_key_exists($rFile,$this->includes_jsreq[$file]))
						continue;
					$this->includes_jsreq[$file][] = $rFile;
				}
			}else
				$this->includes_jsreq[$file] = $reqFiles;
		}
	}
	
	/**
	 * Add css files for page
	 * @intellisense
	 */
	function AddCSSFile($file)
	{
		if(is_array($file))
		{
			foreach($file as $f)
			{
				$this->includes_css[] = $f;
			}
		}
		else
			$this->includes_css[] = $file;
	}
	
	/** 
	 * Replace the pageLayout object with a new obtained by t
	 * the table name and page's layout suffix. 
	 * Update the page's css files
	 * @param String tName
	 * @param String	The layout suffix
	 */
	function updatePageLayoutAndCSS( $tName, $suffix )
	{
		$this->pageLayout = GetPageLayout( $tName, $this->pageType, $suffix );
		
		$this->includes_css = array();
		$this->AddCSSFile( $this->pageLayout->getCSSFiles(isRTL(), isMobile()) );
	}
	
	/**
	 * Grab all css files
	 * @intellisense
	 */
	function grabAllCSSFiles()
	{
		$cssFiles = $this->includes_css;
		$this->includes_css = array();
		return $cssFiles;
	}
	/**
	 * Copy all css files
	 * @intellisense
	 */
	function copyAllCssFiles($cssFiles)
	{
		foreach($cssFiles as $file)
			$this->AddCSSFile($file);
	}
	
	/**
	 * Load js and css files
	 * @intellisense
	 */
	function LoadJS_CSS()
	{
		$this->includes_js = array_unique($this->includes_js);
		$this->includes_css = array_unique($this->includes_css);
		$out = "";
		foreach($this->includes_js as $file)
		{
			$out .= "Runner.util.ScriptLoader.addJS(['".$file."']";
			if(array_key_exists($file,$this->includes_jsreq))
			{
				foreach($this->includes_jsreq[$file] as $req)
					$out.=",'".$req."'";
			}
			$out.=");\r\n";
		}
		$out.= " Runner.util.ScriptLoader.load();";
		return $out;
	}
	
	/**
	 * Set languge params for page
	 * @intellisense
	 */
	function setLangParams()
	{
	}
	
	/**
	 * Add general js or css files for pages
	 * @intellisense
	 */
	function addCommonJs() 
	{
		if ($this->debugJSMode === true)
		{
			$this->AddJSFile("include/runnerJS/ControlConstants.js");
			$this->AddJSFile("include/runnerJS/RunnerEvent.js");
			$this->AddJSFile("include/runnerJS/Validate.js","include/runnerJS/RunnerEvent.js");
			$this->AddJSFile("include/runnerJS/ControlManager.js","include/runnerJS/Validate.js");
			$this->AddJSFile("include/runnerJS/button.js", "include/runnerJS/ControlManager.js");	
			$this->AddJSFile("include/runnerJS/Control.js", "include/runnerJS/ControlManager.js");
			$this->AddJSFile("include/runnerJS/ViewControl.js", "include/runnerJS/ControlManager.js");
			$this->AddJSFile("include/runnerJS/ReadOnly.js", "include/runnerJS/Control.js");				
			$this->AddJSFile("include/runnerJS/TextAreaControl.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/TextFieldControl.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/TimeFieldControl.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/RteControl.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/FileControl.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/MultiUploadControl.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/DateFieldControl.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/LookupWizard.js", "include/runnerJS/Control.js");
			$this->AddJSFile("include/runnerJS/RadioControl.js", "include/runnerJS/LookupWizard.js");
			$this->AddJSFile("include/runnerJS/DropDown.js", "include/runnerJS/LookupWizard.js");
			$this->AddJSFile("include/runnerJS/CheckBox.js", "include/runnerJS/LookupWizard.js");
			$this->AddJSFile("include/runnerJS/TextFieldLookup.js", "include/runnerJS/LookupWizard.js");
			$this->AddJSFile("include/runnerJS/EditBoxLookup.js", "include/runnerJS/TextFieldLookup.js");
			$this->AddJSFile("include/runnerJS/ListPageLookup.js", "include/runnerJS/TextFieldLookup.js");
			$this->AddJSFile("include/runnerJS/InlineEdit.js");
			
			$this->AddJSFile("include/runnerJS/pages/PageConstants.js", "include/runnerJS/ListPageLookup.js");	
			$this->AddJSFile("include/runnerJS/pages/RunnerDefaults.js", "include/runnerJS/pages/PageConstants.js");	
			$this->AddJSFile("include/runnerJS/pages/PageManager.js", "include/runnerJS/pages/RunnerDefaults.js");
			$this->AddJSFile("include/runnerJS/pages/PageSettings.js", "include/runnerJS/pages/PageManager.js");
			$this->AddJSFile("include/runnerJS/DetPreview.js", "include/runnerJS/pages/PageSettings.js");			
			$this->AddJSFile("include/runnerJS/pages/RunnerPage.js", "include/runnerJS/pages/PageSettings.js");
			$this->AddJSFile("include/runnerJS/pages/SearchPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/ViewPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/LoginPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/RemindPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/EditorPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/AddPageFly.js", "include/runnerJS/pages/AddPage.js");
			$this->AddJSFile("include/runnerJS/pages/AddPage.js", "include/runnerJS/pages/EditorPage.js");
			$this->AddJSFile("include/runnerJS/pages/EditPage.js", "include/runnerJS/pages/EditorPage.js");
			
			$this->AddJSFile("include/runnerJS/pages/DataPageWithSearch.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/ListPageCommon.js", "include/runnerJS/pages/DataPageWithSearch.js");
			$this->AddJSFile("include/runnerJS/pages/ListPageFly.js", "include/runnerJS/pages/ListPageCommon.js");
			$this->AddJSFile("include/runnerJS/pages/ListPage.js", "include/runnerJS/pages/ListPageCommon.js", "include/runnerJS/DetPreview.js");
		
			if (isMobile()) 
			{
				$this->AddJSFile("include/runnerJS/pages/ListPageMobile.js", "include/runnerJS/pages/ListPage.js");
				$this->AddJSFile("include/runnerJS/pages/ReportPageMobile.js", "include/runnerJS/pages/ListPageMobile.js");
				$this->AddJSFile("include/runnerJS/pages/ChartPageMobile.js", "include/runnerJS/pages/ListPageMobile.js");
			}
			else 
			{
				$this->AddJSFile("include/runnerJS/pages/ReportPage.js", "include/runnerJS/pages/DataPageWithSearch.js");
				$this->AddJSFile("include/runnerJS/pages/ChartPage.js", "include/runnerJS/pages/DataPageWithSearch.js");
				$this->AddJSFile("include/runnerJS/pages/ChartPageDP.js", "include/runnerJS/pages/ChartPage.js");
				$this->AddJSFile("include/runnerJS/pages/ReportPageDP.js", "include/runnerJS/pages/ReportPage.js");
			}
			
			$this->AddJSFile("include/runnerJS/pages/ListPageAjax.js", "include/runnerJS/pages/ListPage.js");
			$this->AddJSFile("include/runnerJS/pages/ListPageDP.js", "include/runnerJS/pages/ListPage.js");
			
			$this->AddJSFile("include/runnerJS/pages/CheckboxesPage.js", "include/runnerJS/pages/ListPage.js");
			$this->AddJSFile("include/runnerJS/pages/MembersPage.js", "include/runnerJS/pages/CheckboxesPage.js");
			$this->AddJSFile("include/runnerJS/pages/RightsPage.js", "include/runnerJS/pages/CheckboxesPage.js");
						$this->AddJSFile("include/runnerJS/pages/ExportPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/ImportPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/RegisterPage.js", "include/runnerJS/pages/RunnerPage.js");
			
			$this->AddJSFile("include/runnerJS/FilterControl.js", "include/runnerJS/DateFieldControl.js");
			$this->AddJSFile("include/runnerJS/SearchForm.js");	
			$this->AddJSFile("include/runnerJS/SearchField.js");
			$this->AddJSFile("include/runnerJS/SearchFormWithUI.js", "include/runnerJS/SearchForm.js");
			$this->AddJSFile("include/runnerJS/SearchController.js", "include/runnerJS/SearchFormWithUI.js");
			$this->AddJSFile("include/runnerJS/SearchParamsLogger.js", "include/runnerJS/SearchController.js");
			$this->AddJSFile("include/runnerJS/RunnerForm.js");
			
			$this->AddJSFile("include/runnerJS/RunnerBricks.js");
			$this->AddJSFile("include/runnerJS/RunnerMenu.js");
			if($this->lockingObj)
				$this->AddJSFile("include/runnerJS/RunnerLocking.js");
			if($this->is508)
				$this->AddJSFile("include/runnerJS/RunnerSection508.js");	
			
			if ($this->pSet->isAddPageEvents())
			{
				$this->AddJSFile("include/runnerJS/events/pageevents_".$this->shortTableName.".js", "include/runnerJS/pages/PageSettings.js", 
					"include/runnerJS/button.js");
			}
		
				}
		else
		{
			if ($this->pSet->isAddPageEvents())
			{
			 	if( $this->mode != LIST_DETAILS)
			 	{
					$this->AddJSFile("include/runnerJS/events/pageevents_".$this->shortTableName.".js");
			 	}
			 	else
			 		$this->AddJSFile("include/runnerJS/events/pageevents_".$this->shortTableName.".js");
			}
				}
		$this->AddJSFile("include/yui/yui-min.js");
		
		if ($this->isUseAjaxSuggest) 
		{
			$this->AddJSFile("include/ajaxsuggest.js");
		}
		elseif(count($this->allDetailsTablesArr))
		{
			for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
			{
				if($this->allDetailsTablesArr[$i]['previewOnList'] == DP_POPUP)
					$this->AddJSFile("include/ajaxsuggest.js");
					break;
			}
		}
			
		if($this->isUseToolTips)
			$this->AddJSFile("include/jquery.inputhintbox.js");
		
		if($this->isUseCK)
		{
			$this->AddJSFile("plugins/ckeditor/ckeditor.js");
		}
		
		$this->addControlsJSAndCSS();
	}
	
	function addControlsJSAndCSS()
	{
		$this->controls->addControlsJSAndCSS();
		$this->viewControls->addControlsJSAndCSS();
	}
	
	/**
	 * Prepare js code
	 * @intellisense
	 */
	function PrepareJS()
	{
		return $this->LoadJS_CSS();
	}
	
	function addButtonHandlers()
	{	
		if (!$this->pSet->isUsebuttonHandlers())
		{
			return false;
		}
		if ($this->debugJSMode === true)
		{
			$this->AddJSFile("include/runnerJS/events/pageevents_".$this->shortTableName.".js", "include/runnerJS/pages/PageSettings.js");
		}
		else 
		{
			$this->AddJSFile("include/runnerJS/events/pageevents_".$this->shortTableName.".js");
		}
		return true;
	}
	
	function setGoogleMapsParams($fieldsArr) 
	{
		$this->googleMapCfg['isUseMainMaps'] = $this->pSet->isUseMainMaps();
		$this->googleMapCfg['isUseFieldsMaps'] = $this->pSet->isUseFieldsMaps();
		if ($this->googleMapCfg['isUseFieldsMaps'])
		foreach($fieldsArr as $f)
		{
			if ($f['viewFormat'] == FORMAT_MAP)
			{
				$this->googleMapCfg['fieldsAsMap'][$f['fName']] = array();
				$fieldMap = $this->pSet->getMapData($f['fName']);
				
				$this->googleMapCfg['fieldsAsMap'][$f['fName']]['width'] = $fieldMap['width'] ? $fieldMap['width'] : 0;
				$this->googleMapCfg['fieldsAsMap'][$f['fName']]['height'] = $fieldMap['height'] ? $fieldMap['height'] : 0;
				$this->googleMapCfg['fieldsAsMap'][$f['fName']]['addressField'] = $fieldMap['address'];
				$this->googleMapCfg['fieldsAsMap'][$f['fName']]['latField'] = $fieldMap['lat'];
				$this->googleMapCfg['fieldsAsMap'][$f['fName']]['lngField'] = $fieldMap['lng'];
				$this->googleMapCfg['fieldsAsMap'][$f['fName']]['descField'] = $fieldMap['desc'];
				if (isset($fieldMap['zoom'])){
					$this->googleMapCfg['fieldsAsMap'][$f['fName']]['zoom'] = $fieldMap['zoom'];
				}
			}
		}
		$this->googleMapCfg['isUseGoogleMap'] = $this->googleMapCfg['isUseMainMaps'] || $this->googleMapCfg['isUseFieldsMaps'] || $this->mapsExists();
		$this->googleMapCfg['tName'] = $this->tName;
	}
	
	function addBigGoogleMapMarkers(&$data, $keys, $editLink = '') 
	{
		foreach ($this->googleMapCfg['mainMapIds'] as $mapId)
		{
			$latF = $this->googleMapCfg['mapsData'][$mapId]['latField'];
			$lngF = $this->googleMapCfg['mapsData'][$mapId]['lngField'];
			$addressF = $this->googleMapCfg['mapsData'][$mapId]['addressField'];
			$descF = $this->googleMapCfg['mapsData'][$mapId]['descField'];
			$markerAsEditLink = $this->googleMapCfg['mapsData'][$mapId]['markerAsEditLink'];
			
			$markerArr = array();
			$markerArr['lat'] = str_replace(",", ".", ($data[$latF] ? $data[$latF] : ''));
			$markerArr['lng'] = str_replace(",", ".", ($data[$lngF] ? $data[$lngF] : ''));
			$markerArr['address'] = $data[$addressF] ? $data[$addressF] : '';
			$markerArr['desc'] = $data[$descF] ? $data[$descF] : $markerArr['address'];
			
			$markerArr['link'] = $markerAsEditLink ? GetTableLink($this->shortTableName, "edit", $editLink) : GetTableLink($this->shortTableName, "view", $editLink);
			
			$markerArr['recId'] = $this->recId;
			$markerArr['keys'] = $keys; 
			
			$this->googleMapCfg['mapsData'][$mapId]['markers'][] = $markerArr;
		}
	}
	// call addGoogleMapData before call  proccessRecordValue!!!
	function addGoogleMapData($fName, &$data, $keys = '', $editLink = '')
	{
		$fieldMap = $this->pSet->getMapData($fName);
		
		$mapData = array();
		$mapData['mapFieldValue'] = $data[$fName];
		$address = $data[$fieldMap['address']] ? $data[$fieldMap['address']] : "";
		$lat =  str_replace(",", ".", ($data[$fieldMap['lat']] ? $data[$fieldMap['lat']] : ''));
		$lng =  str_replace(",", ".", ($data[$fieldMap['lng']] ? $data[$fieldMap['lng']] : ''));
		$desc = $data[$fieldMap['desc']] ? $data[$fieldMap['desc']] : $address;
		if (isset($fieldMap['zoom'])){
			$zoom = $fieldMap['zoom'];
		}else{
			$zoom = '';
		}
		  
		$mapData['fName'] = $fName;
		$mapData['zoom'] = $zoom;
		$mapData['type'] = 'FIELD_MAP';
		
		$viewLink = GetTableLink($this->shortTableName, "view", $editLink);
		$mapData['markers'][] = array('address'=> $address, 'lat'=>$lat, 'lng'=>$lng, 'link'=>$viewLink, 'desc'=>$desc, 'recId'=>$this->recId, 'keys'=>$keys); 
		
		$this->googleMapCfg['mapsData']['littleMap_'.GoodFieldName($fName).'_'.$this->recId] = $mapData;
		$this->googleMapCfg['fieldMapsIds'][] = 'littleMap_'.GoodFieldName($fName).'_'.$this->recId;
		
		return $this->googleMapCfg['mapsData']['littleMap_'.GoodFieldName($fName).'_'.$this->recId];
	}
	
	function initGmaps()
	{
		if ($this->googleMapCfg['isUseGoogleMap'])
		{	
			foreach ($this->googleMapCfg['mainMapIds'] as $mapId)
			{
				if ($this->googleMapCfg['mapsData'][$mapId]['showCenterLink'] === 1)
				{
					$this->googleMapCfg['centerLinkText'] = $this->googleMapCfg['mapsData'][$mapId]['centerLinkText'];
					break;
				}
			}
			$this->googleMapCfg['id'] = $this->id;
			//$this->AddJSFile("include/json.js");
			$this->AddJSFile("include/runnerJS/gmap.js");
			if (!$this->googleMapCfg['APIcode'])
			{
				$this->googleMapCfg['APIcode'] = '';	
			}
			$this->controlsMap['gMaps'] = &$this->googleMapCfg;	
			//$this->AddJSFileNoExt('http://maps.google.com/maps?file=api&v=2&sensor=true&key='.$this->googleMapCfg['APIcode']);
		}
	}
	
	function addCenterLink(&$value, $fName)
	{
		if ($this->googleMapCfg['isUseMainMaps'])
		{
			foreach ($this->googleMapCfg['mainMapIds'] as $mapId)
			{
				// if no center link than continue;
				if ($this->googleMapCfg['mapsData'][$mapId]['addressField'] != $fName || !$this->googleMapCfg['mapsData'][$mapId]['showCenterLink'])
					continue;
				
				// if use user defined link if prop = 1 or use value if prop = 2				
				if($this->googleMapCfg['mapsData'][$mapId]['showCenterLink'] === 1)
					$value = $this->googleMapCfg['mapsData'][$mapId]['centerLinkText'];					
				
				return '<a href="#" type="centerOnMarker'.$this->id.'" recId="'.$this->recId.'">'.$value.'</a>';				
			}
		}
		return $value;
	}
	
	/**
	 * @intellisense
	 * @return Boolean
	 */
	function isTableGeoUpdatable() 
	{
		foreach($this->pSet->getEditFields() as $field) 
		{
		   if($this->pSet->isUpdateLatLng($field)) 
				return true;
		}	
		return false;
	}

	/**
	 * Update 'latitude' and 'longitude' field's values
	 * according to fields maps settings
	 * @intellisense
	 * @param &Array values
	 * @param Array oldvalues (optional)
	 */
	function setUpdatedLatLng(&$values, $oldvalues = null) 
	{
		if($oldvalues) 
		{ 	//get Edit page's fields 	
			$formFields = $this->pSet->getEditFields();
		} 
		else 
		{ 	//get Add page's fields
			$formFields = $this->pSet->getAddFields(); 
		}
		
		foreach($formFields as $field) 
		{
			//check if 'UpdateLatLng' is ticked for a field
			if( !$this->pSet->isUpdateLatLng($field) ) 
				continue;

			$mapData = $this->pSet->getMapData($field);
			
			 //check if the actual map's address value were added/changed 
			if( !isset($values[ $mapData['address'] ]) || $oldvalues && $values[ $mapData['address'] ] == $oldvalues[ $mapData['address'] ] ) 
				continue;
		
			//get updated coordinates
			$location = getLatLngByAddr($values[ $mapData['address'] ]);	
			if( !$location ) 
				continue; 

			//check if the actual non emty lat value is added/updated by a user
			if( !isset($values[ $mapData['lat'] ]) || ( isset($values[ $mapData['lat'] ]) &&  
			   ($values[ $mapData['lat'] ] == "" || $oldvalues && $values[ $mapData['lat'] ] == $oldvalues[ $mapData['lat'] ]) ) ) 
			{
				$values[ $mapData['lat'] ] = $location['lat'];
			}

			//check if the actual non emty lng value is added/updated by a user
			if( !isset($values[ $mapData['lng'] ]) || ( isset($values[ $mapData['lng'] ]) && 
			   ($values[ $mapData['lng'] ] == "" || $oldvalues && $values[ $mapData['lng'] ] == $oldvalues[ $mapData['lng'] ]) ) ) 
			{	
				$values[ $mapData['lng'] ] = $location['lng'];
			}	
		}
	}
	
	/**
	 * Get permissions for pages
	 * @intellisense
	 */
	function getPermissions($tName = "") 
	{
		$resArr = array();
		
		if(!$tName)
			$tName = $this->tName;
		$strPerm = GetUserPermissions($tName);
		
		if(isLogged())
		{
			$resArr["add"]=(strpos($strPerm, "A") !== false);
			$resArr["delete"]=(strpos($strPerm, "D") !== false);
			$resArr["edit"]=(strpos($strPerm, "E") !== false);
		}
		$resArr["search"]=(strpos($strPerm, "S") !== false);
		$resArr["export"]=(strpos($strPerm, "P") !== false);
		$resArr["import"]=(strpos($strPerm, "I") !== false);
		
		return $resArr;
	}
		
	/**
	 * Check is event exists on current page
	 * @param {string} - event name
	 * @intellisense
	 */
	function eventExists($name)
	{
		if(!$this->eventsObject)
			return false;
		return $this->eventsObject->exists($name);
	}
	
	/**
	 * Check is captcha exists on current page
	 *
	 * @intellisense
	 */	
	function captchaExists()
	{
		if(!$this->eventsObject)
			return false;
		return $this->eventsObject->existsCAPTCHA($this->pageType);
	}
	
	/**
	 * Check is googlemaps exists on current page
	 *
	 * @intellisense
	 */	
	function mapsExists()
	{
		if(!$this->eventsObject)
			return false;
		return $this->eventsObject->existsMap($this->pageType);
	}
	
//	move this functions to viewpage or editpage class when they will be created
	function getNextPrevRecordKeys(&$data,$securityMode,&$next,&$prev)
	{
		global $conn;
		$next=array();
		$prev=array();
	
		if(@$_SESSION[$this->sessionPrefix."_noNextPrev"])
			return;
		$prevExpr = "";
		$nextExpr = "";
		$where_next="";
		$where_prev="";
		$order_next="";
		$order_prev="";

		require_once(getabspath('classes/orderclause.php'));
		$orderClause = new OrderClause($this);
		$orderClause->init();

		$query = $this->pSet->getQueryObject();
		
		$where = $_SESSION[$this->sessionPrefix."_where"];
		if(!strlen($where))
			$where = SecuritySQL($securityMode);
		$having = $_SESSION[$this->sessionPrefix."_having"];
		
		$joinFromPart = $_SESSION[$this->sessionPrefix."_joinFromPart"];
		
		$tKeys = $this->pSet->getTableKeys();

		if(!count($orderClause->fieldsList))
		{
			$_SESSION[$this->sessionPrefix."_noNextPrev"] = 1;
			return;
		}
		//	make  next & prev ORDER BY strings
		for($i = 0; $i < count($orderClause->fieldsList); $i++)
		{
			$field = $orderClause->fieldsList[$i];
			if(!$this->pSet->GetFieldByIndex($field->fieldIndex))
				continue;
			if($order_next == "")
			{
				$order_next = " ORDER BY ";
				$order_prev = " ORDER BY ";
			}
			else
			{
				$order_next .= ",";
				$order_prev .= ",";
			}
			$order_next .= $field->fieldIndex." ".$field->orderDirection;
			$order_prev .= $field->fieldIndex." ".($field->orderDirection == "DESC" ? "ASC" : "DESC");
		}

		// make next & prev where expressions
		
		$tail="";
		for($i = 0; $i < count($orderClause->fieldsList); $i++)
		{
			$field = $orderClause->fieldsList[$i];
			$fieldName = $this->pSet->GetFieldByIndex($field->fieldIndex);
			if(!$fieldName)
				continue;
			if(!$query->HasGroupBy())
				$fullName = GetFullFieldName($fieldName, $this->tName, false);
			else
				$fullName = AddFieldWrappers($fieldName);
			$asc = ($field->orderDirection == "ASC");
			if(!is_null($data[$fieldName]))
			{
			//	current field value is not null
				$value = $this->cipherer->MakeDBValue($fieldName, $data[$fieldName], "", "", true);
				$nextop = ($asc ? ">" : "<");
				$prevop = ($asc ? "<" : ">");
				$nextExpr = $fullName.$nextop.$value;
				$prevExpr = $fullName.$prevop.$value;
				if($nextop=="<")
					$nextExpr .= " or ".$fullName." IS NULL";
				else
					$prevExpr .= " or ".$fullName." IS NULL";
				if($i < count($orderClause->fieldsList) - 1)
				{
					$nextExpr .= " or ".$fullName."=".$value;
					$prevExpr .= " or ".$fullName."=".$value;
				}
			}
			else
			{
				$nextExpr = "";
				$prevExpr = "";				
			//	current field value is null
				if($asc)
					$nextExpr = $fullName." IS NOT NULL";
				else
					$prevExpr = $fullName." IS NOT NULL";
				
				if($i < count($orderClause->fieldsList) - 1)
				{
					if($nextExpr != "")
						$nextExpr.=" or ";
					$nextExpr .= $fullName." IS NULL";
					if($prevExpr != "")
						$prevExpr.=" or ";
					$prevExpr .= $fullName." IS NULL";
				}
			}
			if($nextExpr == "")
				$nextExpr = " 1=0 ";
			if($prevExpr == "")
				$prevExpr = " 1=0 ";
			
			// append expression to where clause
			if($i>0)
			{
				$where_next .= " AND ";
				$where_prev .= " AND ";
			}
			$where_next .= "(".$nextExpr;
			$where_prev .= "(".$prevExpr;
			
			$tail .=")";
		}
		$where_next = $where_next.$tail;
		$where_prev = $where_prev.$tail;

		if($where_next=="" or $order_next=="" or $where_prev=="" or $order_prev=="")
		{
			$_SESSION[$this->sessionPrefix."_noNextPrev"] = 1;
			return;
		}
//		make the resulting query
		if($query === null)
			return;
		
		if(!$query->HasGroupBy())
		{
			$oWhere = $query->Where();
			$where = whereAdd($where,$oWhere->toSql($query));
			$where_next = whereAdd($where_next,$where);
			$where_prev = whereAdd($where_prev,$where);
			$query->ReplaceFieldsWithDummies($this->pSet->getBinaryFieldsIndices());
			$sql_next = $query->toSql($where_next, $order_next, null, false, $joinFromPart);
			$sql_prev = $query->toSql($where_prev, $order_prev, null, false, $joinFromPart);
		}
		else
		{
			$oWhere = $query->Where();
			$oHaving = $query->Having();
			$where = whereAdd($where,$oWhere->toSql($query));
			$having = whereAdd($having,$oHaving->toSql($query));
			$query->ReplaceFieldsWithDummies($this->pSet->getBinaryFieldsIndices());
			$sql = "select * from (".$query->toSql($where, "", $having, false, $joinFromPart).") prevnextquery"; 
			$sql_next = $sql." WHERE ".$where_next.$order_next;
			$sql_prev = $sql." WHERE ".$where_prev.$order_prev;
		}
		if(GetGlobalData("returnToActualListPage", false))
		{
			if($prevExpr == " 1=0 ")
				$_SESSION[$this->sessionPrefix."_pagenumber"] = 1;
			else{
				$pageSQL = "select count(*) from (".$sql_prev.") tcount";
				$pageRes = db_query($pageSQL, $conn);
				$pageRow = db_fetch_numarray($pageRes);
				$currentRow = $pageRow[0];
				if($this->pageSize > 0)
					$pageSize = $this->pageSize;
				else
					$pageSize = $this->pSet->getInitialPageSize();
				$this->myPage = floor($currentRow / $pageSize) + 1;
				$_SESSION[$this->sessionPrefix."_pagenumber"] = $this->myPage;
			}
		}

		//	add record count options
		
					$sql_next.=" limit 1";
			$sql_prev.=" limit 1";
		$res_next = db_query($sql_next,$conn);
		if($res_next)
		{
			if($row_next = $this->cipherer->DecryptFetchedArray($res_next))
			{
				foreach($tKeys as $i=>$k)
				{
					$next[$i] = $row_next[$k];
				}
			}
			db_closequery($res_next);
		}
		$res_prev = db_query($sql_prev,$conn);
		if($row_prev = $this->cipherer->DecryptFetchedArray($res_prev))
		{
			foreach($tKeys as $i=>$k)
			{
				$prev[$i] = $row_prev[$k];
			}
		}
		db_closequery($res_prev);
	}

	function doCaptchaCode()
	{
		global $globalEvents;
		
		if((!isset($_SESSION[$this->tName."_count_captcha"])) or ($_SESSION[$this->tName."_count_captcha"]>4)) 
			$_SESSION[$this->tName."_count_captcha"]=0;
				
		if(($this->pageType==PAGE_EDIT && @$_POST["a"]=="edited") || ($this->pageType==PAGE_ADD && @$_POST["a"]=="added") || ($this->pageType==PAGE_REGISTER && @$_POST["btnSubmit"] == "Register"))
			$sbmPage = true;
		else
			$sbmPage = false;
			
		if(($_SESSION[$this->tName."_count_captcha"]==0) or ($_SESSION[$this->tName."_count_captcha"]>4))
		{
			if($sbmPage)
			{	
				if(@strtolower(postvalue("value_captcha_".$this->id))!=strtolower(@$_SESSION["captcha"]))
				{
					if($this->pageType == PAGE_REGISTER)
					{
						$this->captchaId = $globalEvents->captchas[$this->pageType]['strName'];
						$globalEvents->callCAPTCHA($this);
					}
					else{
							$this->captchaId = $this->eventsObject->captchas[$this->pageType]['strName'];
							$this->eventsObject->callCAPTCHA($this);
						}
					$this->isCaptchaOk = false;
				}
				else
					$this->isCaptchaOk = true;
			}
			else{
					if($this->pageType == PAGE_REGISTER)
					{
						$this->captchaId = $globalEvents->captchas[$this->pageType]['strName'];
						$globalEvents->callCAPTCHA($this);
					}
					else{
							$this->captchaId = $this->eventsObject->captchas[$this->pageType]['strName'];
							$this->eventsObject->callCAPTCHA($this);
						}	
				}
			
			//create control and settings for captcha field, if it show on page 
			$controls = array('controls'=>array());
			$controls['controls']['ctrlInd'] = 0;
			$controls['controls']['id'] = $this->id;
			$controls['controls']['fieldName'] = 'captcha';
			$controls['controls']['mode'] = $this->pageType;
			$this->fillControlsMap($controls);
			$this->addCaptchaToFieldSettings();
		}
		elseif($sbmPage) 
			$this->isCaptchaOk = true;	
	}
	
	function createCaptcha($params)
	{	
		$path = GetCaptchaPath();
		$swfPath = GetCaptchaSwfPath();
		$captchaHTML = '<div class="captcha_block">
			<object width="210" height="65" data="'.$swfPath.'?path='.$path.'" type="application/x-shockwave-flash">
				<param value="'.$swfPath.'?path='.$path.'" name="movie"/>
				<param value="opaque" name="wmode"/>
				<a href="http://www.macromedia.com/go/getflashplayer"><img alt="Download Flash" src=""/></a>
			</object>
				<div style="white-space: nowrap;">'."Type the code you see above".':</div>
			<span id="edit'.$this->id.'_captcha_0">
				<input type="text" value="" name="value_captcha_'.$this->id.'" style="" id="value_captcha_'.$this->id.'"/>
				<font color="red">*</font>
			</span>';
		
		if(isset($this->isCaptchaOk) && !$this->isCaptchaOk)
			$captchaHTML .= '<div class="error">'."Invalid security code.".'</div>';
			
		$captchaHTML.='</div>';
		echo $captchaHTML;
		return $captchaHTML; // .net compatibility
	}
	
	function createPerPage()
	{
		$rpp = "";
		if($this->tableType == "report" && $this->reportGroupFields)
		{
			$rpp.= "<select onChange=\"javascript: document.location='"
				.GetTableLink(runner_htmlspecialchars(rawurlencode($this->shortTableName)), "report")
				."?pagesize='+this.options[this.selectedIndex].value;\">";
			for($i=0;$i<count($this->arrGroupsPerPage);$i++)
			{			
				if($this->arrGroupsPerPage[$i]!=-1)
					$rpp.= "<option value=\"".$this->arrGroupsPerPage[$i]."\" ".($this->pageSize == $this->arrGroupsPerPage[$i] ? "selected" : "").">".$this->arrGroupsPerPage[$i]."</option>";
				else	
					$rpp.= "<option value=\"-1\" ".($this->pageSize == $this->arrGroupsPerPage[$i] ? "selected" : "").">"."Show all"."</option>";
			}	
		}	
		else{
				if($this->tableType == "report")
					$rpp.= "<select onChange=\"javascript: document.location='"
						.GetTableLink(runner_htmlspecialchars(rawurlencode($this->shortTableName)), "report")."?pagesize='+this.options[this.selectedIndex].value;\">";
				else
					$rpp.= "<select id=\"recordspp".$this->id."\">";
				
				for($i=0;$i<count($this->arrRecsPerPage);$i++)
				{
					if($this->arrRecsPerPage[$i]!=-1)
						$rpp.= "<option value=\"".$this->arrRecsPerPage[$i]."\" ".($this->pageSize == $this->arrRecsPerPage[$i] ? "selected" : "").">".$this->arrRecsPerPage[$i]."</option>";
					else
						$rpp.= "<option value=\"-1\" ".($this->pageSize == $this->arrRecsPerPage[$i] ? "selected" : "").">"."Show all"."</option>";
				}
			}
		$rpp.="</select>";
		
		if($this->tableType == "report" && $this->reportGroupFields)
			$this->xt->assign("grpsPerPage",$rpp);
		else
			$this->xt->assign("recsPerPage",$rpp);
	}
	
	function ProcessFiles()
	{
		foreach($this->filesToDelete as $f)
		{
			$f->Delete();
		}
		foreach($this->filesToMove as $f)
		{
			$f->Move();
		}
		foreach($this->filesToSave as $f)
		{
			$f->Save();
		}
	}
	
	/**
	 * Use for count details recs number, if subQueryes not supported, or keys have different types
	 *
	 * @param integer $i
	 * @param array $detailid
	 * @intellisense
	 */
	function countDetailsRecsNoSubQ($dInd, &$detailid) 
	{
		global $tables_data;
        global $masterTablesData;
        global $detailsTablesData;
		global $allDetailsTablesArr;
		$dDataSourceTable = $this->allDetailsTablesArr[$dInd]['dDataSourceTable'];

		$masterPSet = $this->pSet->getTable($dDataSourceTable);

		$detailsQuery = $masterPSet->getSQLQuery();
		$dSqlWhere = $detailsQuery->WhereToSql();
			
		$detailKeys = $masterPSet->getDetailKeysByMasterTable($this->tName);
		
		$securityClause = SecuritySQL("Search", $dDataSourceTable);
		
		// add where 
		if(strlen($securityClause))
			$dSqlWhere = whereAdd($dSqlWhere, $securityClause);
			
		$masterwhere = "";
		foreach($this->masterKeysByD[$dInd] as $idx => $val) 
		{
			if($masterwhere)
			{
				$masterwhere.= " and ";
			}
			$mastervalue = $this->cipherer->MakeDBValue($detailKeys[$idx], $detailid[$idx], "", $dDataSourceTable, true);
			
			if($mastervalue == "null")
				$masterwhere .= GetFullFieldNameForInsert($masterPSet, $detailKeys[$idx])." is NULL ";
			else
				$masterwhere .= GetFullFieldName($detailKeys[$idx], $dDataSourceTable, false)."=".$mastervalue;
		}
		return SQLQuery::gSQLRowCount_int($detailsQuery->HeadToSql(), $detailsQuery->FromToSql(), $dSqlWhere, $detailsQuery->GroupByToSql()
			, $detailsQuery->Having()->toSql($detailsQuery), $masterwhere,"");	
		
	}
	
	/**
	 * Calcs pagination info
	 *
	 * @intellisense
	 */
	function buildPagination() 
	{
		//	hide colunm headers if needed
		if($this->pageSize && $this->pageSize!=-1)
			$this->maxPages = ceil($this->numRowsFromSQL / $this->pageSize);
		if($this->myPage > $this->maxPages)
			$this->myPage = $this->maxPages;
		if($this->myPage < 1)
			$this->myPage = 1;
		$this->recordsOnPage = $this->numRowsFromSQL -($this->myPage - 1) * $this->pageSize;
		if($this->recordsOnPage > $this->pageSize && $this->pageSize!=-1)
			$this->recordsOnPage = $this->pageSize;
		
		$this->colsOnPage = $this->recsPerRowList;
		if($this->colsOnPage > $this->recordsOnPage && $this->listGridLayout != gltVERTICAL)
			$this->colsOnPage = $this->recordsOnPage;
		if($this->colsOnPage < 1)
			$this->colsOnPage = 1;
			
		//	 Pagination:
		if((! $this->numRowsFromSQL) && ($this->deleteMessage == ''))
		{
			$this->rowsFound = false;
			$message = ($this->is508 == true ? "<a name=\"skipdata\"></a>" : "")."No records found";
			$message= "<span name=\"notfound_message".$this->id."\">".$message."</span>";
			$this->xt->assign("message",$message);
			$this->xt->assign("message_block",true);
			
			if($this->listAjax || $this->mode == LIST_LOOKUP){
				$this->xt->assign("pagination_block", true);
				$this->xt->displayBrickHidden("pagination");
			}
		} 
		else
		{
			$this->rowsFound = true;
			$this->xt->assign("message_block",false);
			if($this->listAjax || $this->mode == LIST_LOOKUP){
				$this->xt->assign("message_block",true);
				$this->xt->displayBrickHidden("message");
			}
			else if ($this->deleteMessage != ''){
				$this->xt->assign("message_block",true);
			}
			
			$this->xt->assign("records_found", $this->numRowsFromSQL);
			$this->jsSettings["tableSettings"][$this->tName]['maxPages'] = $this->maxPages;
			$this->maxRecs = $this->pageSize;
			$this->xt->assign("page", $this->myPage);
			$this->xt->assign("maxpages", $this->maxPages);
			
			$this->xt->assign("pagination_block", false);
			
			//	write pagination
			if($this->maxPages > 1) 
			{
				$this->xt->assign("pagination_block", true);
				/*$pagination = "<table rows='1' cols='1' align='center' width='auto' border='0' name='paginationTable".$this->id."'>";
				$pagination.= "<tr valign='center'><td align='center'>";*/
				$pagination = '';
				$counterstart = $this->myPage - 9;
				if($this->myPage % 10 != 0)
					$counterstart = $this->myPage -($this->myPage % 10) + 1;
				$counterend = $counterstart + 9;
				if($counterend > $this->maxPages)
					$counterend = $this->maxPages;
				if($counterstart != 1) 
				{
					$pagination.= $this->getPaginationLink(1,"First")."&nbsp;:&nbsp;";
					$pagination.= $this->getPaginationLink($counterstart - 1,"Previous")."&nbsp;";
				}
				$pagination.= "<b>[</b>";
				
				if(isRTL())
				{
					for($counter = $counterend; $counter >= $counterstart; $counter --) 
					{
						if($counter != $this->myPage)
							$pagination.= "&nbsp;".$this->getPaginationLink($counter,$counter,true);
						else
							$pagination.= "&nbsp;<b>".$counter."</b>";
					}
				}
				else
				{
					for($counter = $counterstart; $counter <= $counterend; $counter ++) 
					{
						if($counter != $this->myPage)
							$pagination.= "&nbsp;".$this->getPaginationLink($counter,$counter,true);
						else
							$pagination.= "&nbsp;<b>".$counter."</b>";
					}
				}
				
				$pagination.= "&nbsp;<b>]</b>";
				if($counterend != $this->maxPages) 
				{
					$pagination.= "&nbsp;".$this->getPaginationLink($counterend + 1,"Next")."&nbsp;:&nbsp;";
					$pagination.= $this->getPaginationLink($this->maxPages,"Last");
				}
				/*$pagination.= "</td></tr></table>";*/
				$this->xt->assign("pagination", $pagination);
			}
			else
			{
							if($this->listAjax || $this->mode == LIST_LOOKUP){
					$this->xt->assign("pagination_block", true);
					$this->xt->displayBrickHidden("pagination");
				}
			}
		}
	}
	
	/**
	 * Get pagination link for build pagination block
	 *
	 * @return string
	 * @intellisense
	 */
	function getPaginationLink($pageNum,$linkText,$cls=false)
	{
		return '<a href="#" pageNum="'.$pageNum.'" '.($cls ? 'class="pag_n"' : '').' style="TEXT-DECORATION: none;">'.$linkText.'</a>';
	}
	
	/**
	 * Check is current table is admin table
	 *
	 * @return bool
	 * @intellisense
	 */
	function isAdminTable()
	{
		if($this->tName)
			return $this->tName === 'admin_rights' || $this->tName === 'admin_members' || $this->tName === 'admin_users';
		else
			return false;
	}

	/**
	 * Get the field's class name to align the field's value 
	 * basing on its edti and view formats
	 * @param String f
	 * @return String
	 */
	function fieldClass($f)
	{
		if( $this->pSet->getEditFormat($f) == FORMAT_LOOKUP_WIZARD )
			return '';
			
		$format = $this->pSet->getViewFormat($f);
		
		if( $format == FORMAT_FILE ) 
			return ' rnr-field-file';
		if( $format == FORMAT_AUDIO )
			return ' rnr-field-audio';
		if( $format == FORMAT_CHECKBOX )
			return ' rnr-field-checkbox';
		if( $format == FORMAT_NUMBER || IsNumberType( $this->pSet->getFieldType($f) ) )
			return ' rnr-field-number';
			
		return "rnr-field-text";
	}
		
	/**
	 * buildDetailGridLinks
	 * Build master-details links href-attribute on list grid
	 * @param {array} master key values
	 * @return {array} array of links hrefs and ids
	 * @intellisense
	 */
	function buildDetailGridLinks(&$data)
	{
		$hrefs = array();
		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
		{
			$dShortTable = $this->allDetailsTablesArr[$i]['dShortTable'];
			$masterquery = "mastertable=".rawurlencode($this->tName);
			
			for($idx = 1; $idx <= count($this->allDetailsTablesArr[$i]["masterKeys"]); $idx ++){
				$masterquery.= "&masterkey".($idx)."=".rawurlencode($data[$this->allDetailsTablesArr[$i]['dDataSourceTable']]["masterkey".$idx]);
			}
			
			$hrefs[] = array("id" => $this->pSet->getDPType($this->allDetailsTablesArr[$i]['dDataSourceTable']) == DP_INLINE 
					? $dShortTable."_preview" : "master_".$dShortTable."_"
				, "href" => GetTableLink($dShortTable, $this->allDetailsTablesArr[$i]["dType"], $masterquery));
		}
		return $hrefs;
	}
	
	/**
	 * Create new control (if needed) for edit field, and return it
	 * @param {string} field name
	 * @param {string} field id
	 * @return {object} edit control
	 * @intellisense
	 */
	function getControl($field, $id = "")
	{
		return $this->controls->getControl($field, $id);
	}
	
	/**
	 * Create new control (if needed) for view field, and return it
	 * @param {string} field name
	 * @param {string} predefined view format 
	 * @intellisense
	 */
	function getViewControl($field, $format = null)
	{
		return $this->viewControls->getControl($field, $format);
	}
	
	function setForExportVar($forExport)
	{
		$this->viewControls->setForExportVar($forExport);
	}
	
	/**
	 * showDBValue
	 * Wrapper for ViewControl creation and showDBValue call on it
	 * @param {string} field name
	 * @param {array} associative array with record data
	 * @param {string} string with record keys and values
	 * @intellisense
	 */
	function showDBValue($field, &$data, $keylink = "")
	{
		return $this->getViewControl($field)->showDBValue($data, $keylink);
	}
	
	/**
	 * Wrapper for the ViewControl's getExportValue method
	 * @param String field
	 * @param Array &data
	 * @param String keylink (optional)
	 * @return String
	 */
	function getExportValue($field, &$data, $keylink = "")
	{
		return $this->getViewControl($field)->getExportValue($data, $keylink);
	}
	
	/**
	 * Create pasword or confirm field control (if needed)
	 * @param {string} field name
	 * @intellisense
	 */
	function addConfirmFieldControl($field, $id, $isConfirm = false)
	{
		if(!array_key_exists($field, $this->controls))
		{
			include_once(getabspath("classes/controls/Control.php"));
			include_once(getabspath("classes/controls/PasswordField.php"));
			$this->controls->controls[$field] = new PasswordField($field, $this, $id);
			if($isConfirm)
				$this->controls->controls[$field]->field = GetPasswordField();
		}
	}
	
	/**
	 * Hide the field on the page
	 * @param String fieldName
	 */
	function hideField($fieldName)
	{
		if(!is_null($this->xt))
			$this->xt->hideField($fieldName);
	}

	/**
	 * Show the hidden field on the page
	 * @param String fieldName	 
	 */
	function showField($fieldName)
	{
		if(!is_null($this->xt))
			$this->xt->showField($fieldName);
	}

	/**
	 * The settings object 'getDetailKeysByMasterTable' method's wrapper
	 * @return Array
	 */
	function getDetailKeysByMasterTable()
	{
		if( $this->baseTableName && $this->baseTableName != $this->masterTable && $this->baseTableName != $this->tName )
			return array();
			
		return $this->pSet->getDetailKeysByMasterTable($this->masterTable);
	}
	
	/**
	 * Get the page's layout
	 * @return {string}
	 */
	function getPageLayout($tName="", $pageType="", $suffix = "")
	{
		global $page_layouts;
		if(!$tName)
			$tName = $this->tName;
		if(!$pageType)
			$pageType = $this->pageType;
	
		$templateName = GetTableURL($tName)."_".$pageType;
		if($suffix)
			$templateName = $templateName."_".$suffix;
		if(!$this->isPageTableBased() || $this->pageType == PAGE_REGISTER) 
		{
			//the name of the non table page's layout
			$templateName = $pageType;
		}
		return $page_layouts[$templateName];
	}
	
	/**
	 * Check if the pabe is table based or not
	 * @return {Boolean} 
	 */
	function isPageTableBased()
	{
		if($this->pageType == PAGE_MENU || $this->pageType == PAGE_LOGIN || $this->pageType == PAGE_REMIND || $this->pageType == PAGE_CHANGEPASS)
		{
			return false;
		}		
		return true;
	}
	
	/**
	 * Check if the brick is set in the layout or not
	 *
	 * @param {string} $brickName
	 * @return {boolean} 	
	 */
	function isBrickSet($brickName)
	{
		$layout = $this->getPageLayout();
		if($layout) 
		{
			return $layout->isBrickSet($brickName);
		}
		return false;	
	}
	
	/**
	 * Get the brick's table name (if it's set)
	 *
	 * @param {string} $brickName
	 * @return {string} 
	 */
	function getBrickTableName($brickName)
	{
		$layout = $this->getPageLayout();
		if($layout) 
		{
			return $layout->getBrickTableName($brickName);
		}
		return "";
	}
	
	/**
	 * Sets all necessary params for the Search panel added to the non table page
	 */
	function setParamsForSearchPanel() 
	{
		if(!$this->searchPanelActivated)
		{
			return;
		}
		
		include_once(getabspath("classes/searchclause.php"));
		$this->needSearchClauseObj = true;	
		
		$seachTableName = $this->getBrickTableName("searchpanel");
		if($seachTableName)
		{
			//if the brick's table name is set it'll used as the table name for the searchpanel's ProjectSettings object
			$this->pSetSearch = new ProjectSettings($seachTableName, PAGE_SEARCH);
			//set the correct search table's name
			$this->searchTableName = $seachTableName;
			//add some globale settings for the search table
			$this->settingsMap["globalSettings"]["shortTNames"][$seachTableName] = $this->pSetSearch->getShortTableName();
			$this->permis[$this->searchTableName] = $this->getPermissions($seachTableName);
			
			if( $this->permis[$this->searchTableName]["search"] && (!$this->isPageTableBased() || $this->pageType == PAGE_REGISTER) )
			{
				//for edit controls to render correctly
				$this->tableBasedSearchPanelAdded = true;
			}
		}
	}
	
	/**
	 * Build the activated Search panel
	 */
	function buildSearchPanel()
	{
		if( !$this->searchPanelActivated || !$this->permis[$this->searchTableName]["search"] )
		{
			return;
		}
		
		include_once(getabspath("classes/searchpanel.php"));
		include_once(getabspath("classes/searchpanelsimple.php"));	
		include_once(getabspath("classes/searchcontrol.php"));
		include_once(getabspath("classes/panelsearchcontrol.php"));
		
		$params = array();
		$params['pageObj'] = &$this; 
		
		$searchPanelObj = new SearchPanelSimple($params);
		$searchPanelObj->buildSearchPanel();		
	}
	
	/**
	 * Build and show the Filter panel on the page
	 * if there are corresponding search permissions 
	 */
	function buildFilterPanel() 
	{
		if( !$this->permis[$this->tName]["search"] 
			|| $this->pSetEdit->isSearchRequiredForFiltering() && !$this->isRequiredSearchRunning() )
		{
			return;
		}
		
		include_once getabspath("classes/filterpanel.php");	
		$params = array();
		$params["pageObj"] = &$this;
	    $filterPanel = new FilterPanel($params);
		$filterPanel->buildFilterPanel();
	}	

	/**
	 * Search clause method wrapper
	 * @return Boolean
	 */
	function isRequiredSearchRunning() 
	{
		if( !$this->searchClauseObj )
			return false;
			
		return $this->searchClauseObj->isRequiredSearchRunning();
	}
	
	/**
     * Get the filters WHERE condition
	 * @return String
	 */
	function getFiltersWhere() 
	{
		$whereClause = "";
		$whereComponents = $this->getWhereComponents();
		foreach($whereComponents["filterWhere"] as $fWhere)
		{
			$whereClause = whereAdd($whereClause, $fWhere);
		}
		
		return $whereClause;
	}

	/**
     * Get the filters HAVING condition
	 * @return String
	 */	
	function getFiltersHaving() 
	{
		$havingClause = "";
		$whereComponents = $this->getWhereComponents();
		foreach($whereComponents["filterHaving"] as $fHaving)
		{
			$whereClause = whereAdd($havingClause, $fHaving);
		}
		
		return $whereClause;
	}
	
	/**
	 * Check whether the page's layout is table-based
	 */
	function isOldLayout()
	{
		if(!$this->pageLayout)
			return false;
		return ($this->pageLayout->version == 1);
	}
	
	/**
	 * Forms class name with an appropriate prefix
	 */
	function makeClassName($name)
	{
		if($this->isOldLayout())
			return "runner-".$name;
		return "rnr-".$name;
	}
	
	/**
	 * Check if the fieldData array contains at least one duplicated field's value 
	 *
	 * @param {Array} $fieldsData
	 * @param {String} $message
	 * @return {Boolean}
	 */
	function hasDeniedDuplicateValues($fieldsData, &$message) 
	{
		foreach($fieldsData as $fieldName => $value)
		{
			if($this->pSet->allowDuplicateValues($fieldName)) 
				continue;
			
			if($this->hasDuplicateValue($fieldName, $value)) 
			{
				if($this->mode != EDIT_POPUP && $this->mode != ADD_POPUP)
					$message = $fieldName." "."Field should not contain a duplicate value";
				
				return true;
			}	
			
		}
		return false;
	}
	
	/**
	 * Check if the field's value duplicates with any of database field's values
	 *
	 * @param {String} $fieldName
	 * @param {String | Number} $value
	 * @retrun {Boolean}
	 */
	function hasDuplicateValue($fieldName, $value)
	{
		global $conn;
		if($this->cipherer->isFieldEncrypted($fieldName))
		{ 
			$value = $this->cipherer->MakeDBValue($fieldName, $value, "", "", true);	
		}
		else
		{ 
			$value = add_db_quotes($fieldName, $value);
		}
		$where = GetFullFieldName($fieldName, $this->tName, false).'='.$value; 
		$sql = "SELECT count(*) from ".AddTableWrappers($this->pSet->getOriginalTableName())." where ".$where;
		
		$rs = db_query($sql, $conn);
		$data = db_fetch_numarray($rs);
	
		if(!$data[0])
		{
			return false;
		}
		return true;
	}
	
	function displayAJAX($templatefile, $id)
	{
		$returnJSON = array();
		$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;
		$returnJSON['settings'] = $this->jsSettings;	

		if( count($this->includes_css) )
			$returnJSON['CSSFiles'] = array_unique($this->includes_css);

		$returnJSON["additionalJS"] = $this->grabAllJsFiles();
		$returnJSON['idStartFrom'] = $id;	

		$this->xt->load_template($templatefile);
		$returnJSON['html'] = $this->xt->fetch_loaded('style_block').$this->xt->fetch_loaded('body');
		
		$this->assignFormFooterAndHeaderBricks(true);
		
		if( $this->formBricks["header"] )
			$returnJSON['headerCont'] = $this->xt->fetch_loaded( $this->formBricks["header"] );					
		
		if( $this->formBricks["footer"] )
			$returnJSON['footerCont'] = $this->xt->fetch_loaded( $this->formBricks["footer"] );
		
		echo printJSON($returnJSON);
	}
	
	/**
	 * Assing 'form' footer and header elements
	 * @param Boolean assignValue
	 */
	public function assignFormFooterAndHeaderBricks( $assignValue = true )
	{
		if( $this->formBricks["header"] )
			$this->xt->assign( $this->formBricks["header"], $assignValue );
			
		if( $this->formBricks["footer"] )
			$this->xt->assign( $this->formBricks["footer"], $assignValue );
	}
	
	/**
	 * Assign styles to the page
	 * @param Boolean isPdfPage  (optional)
	 */
	function assignStyleFiles( $isPdfPage = false )
	{
		if(isIE8() && !$isPdfPage)
		{
			$newIncludes = array();
			foreach($this->includes_css as $i => $f)
			{
				$newIncludes[$i] = GetTableLink("ie8css", "", $f);
				
			}
			
			foreach($newIncludes as $i => $incl)
			{
				$this->includes_css[$i] = $incl;
			}
		}
		$this->xt->assign_array("styleCSSFiles", "stylepath", array_unique($this->includes_css));
		$this->includes_css = array();
	}
	
	/**
	 * Displays the page using $templatefile
	 */
	function display($templatefile)
	{
		$this->assignStyleFiles();
		$this->xt->display($templatefile);
	}

	/**
	 * returns where clause for active master-detail relationship
	 *
	 * @return string
	 */
	function getMasterTableSQLClause() 
	{
		$where = "";
		if(count($this->detailKeysByM)) 
		{
			for($i=0;$i<count($this->detailKeysByM);$i++) 
			{
				if($i != 0) 
					$where.= " and ";
					
				if($this->cipherer && isEncryptionByPHPEnabled())
					$mValue = $this->cipherer->MakeDBValue($this->detailKeysByM[$i], $_SESSION[$this->sessionPrefix."_masterkey".($i + 1)]);
				else 
					$mValue = make_db_value($this->detailKeysByM[$i], $_SESSION[$this->sessionPrefix."_masterkey".($i + 1)]);
				if(strlen($mValue) != 0)
					$where.= GetFullFieldName($this->detailKeysByM[$i], "", false)."=".$mValue;
				else 
					$where.= "1=0";
			}
		}
		return $where;
	}
	
	/**
	* Returns array of WHERE and HAVING components organized as array:
	* array(
	*   "commonWhere" => <string with original WHERE clause and security clause and master clause> 
	*   "commonHaving" => <string with original HAVING clause> 
	*   "searchWhere" => <string with WHERE expression from searching>
	*   "searchHaving" => <string with HAVING expression from searching>
	*   "searchUnionRequired" => <boolean value, true if search condition choosed is ANY CRITERIA and there are both non-empty searchWhere and searchHaving expressions>
	*   "filterWhere" => <array with Fieldname => Where string pairs for non aggregated filtered fields>
	*                    array( "Field1" => "Field1 = 'aaa'",
	*                           "Field2" => "Field2 = 'bbb'")
	*   "filterHaving" => <the same as "filterWhere" for aggregated filtered fields>
	*  )
	*  Function results are cached.
	*/
	function getWhereComponents()
	{
		if($this->_cachedWhereComponents)
			return $this->_cachedWhereComponents;
			
		$this->_cachedWhereComponents = RunnerPage::sGetWhereComponents( $this->gQuery, $this->pSet, $this->searchClauseObj, $this->controls
			, $this->getMasterTableSQLClause(), $this->SecuritySQL("Search", $this->tName) );
		return $this->_cachedWhereComponents;
	}
	
	static function sGetWhereComponents($query, $pSet, $searchObj, $controls, $masterTableSQLClause = "", $secSQL = false)
	{
		$whereComponents = array();
		$whereComponents["commonWhere"] = combineSQLCriteria( array( $query->WhereToSql(), $masterTableSQLClause, $secSQL ? $secSQL : SecuritySQL("Search", $pSet->getTableName()) ) ); 
		$whereComponents["commonHaving"] = combineSQLCriteria( array( $query->Having()->toSql($query) ) );
		
		$nonaggregatedFields = $pSet->getListOfFieldsByExprType(false);
		$aggregatedFields = $pSet->getListOfFieldsByExprType(true);

		$searchObj->haveAgregateFields = count($agregateFields) > 0;
		
		$whereComponents["searchWhere"] = $searchObj->getWhere($nonaggregatedFields, $controls);
		$whereComponents["searchHaving"] = $searchObj->getWhere($aggregatedFields, $controls);
		$whereComponents["joinFromPart"] = $searchObj->getCommonJoinFromParts($controls);	
		
		$whereComponents["searchUnionRequired"] = ( "or" === $searchObj->getCriteriaCombineType()
			&& 0 != strlen($whereComponents["searchHaving"]) 
			&& 0 != strlen($whereComponents["searchWhere"]) );
		

		$searchObj->processFiltersWhere();
		$filters = $searchObj->filteredFields;
		
		$whereComponents["filterWhere"] = array();
		foreach($nonaggregatedFields as $f)
		{
			if(isset($filters[$f]))
			{
				$whereComponents["filterWhere"][$f] = $filters[$f]["where"];
			}
		}

		$whereComponents["filterHaving"] = array();
		foreach($aggregatedFields as $f)
		{
			if(isset($filters[$f]))
			{
				$whereComponents["filterHaving"][$f] = $filters[$f]["where"];
			}
		}
		
		return $whereComponents;
	}
	
	function SecuritySQL($strAction, $table="")
	{
		return SecuritySQL($strAction, $table);
	}

	// params - asp compatibility issue
	
	function showPageDp($params = "")
	{
		global $page_layouts;
		$layout =& $page_layouts[$this->shortTableName.'_'.$this->pageType];
		$pageSkinStyle = $layout->style." page-".$layout->name;
		
		//set bricks, which	must be shown on details preview page
		$bricksExcept = array("grid","pagination");

		// if we use details inline. We don't need show the header/footer.
		$this->xt->unassign('header');
		$this->xt->unassign('footer');
		
		$this->xt->hideAllBricksExcept($bricksExcept);
		
		$this->xt->prepare_template($this->templatefile);
		$contents = $this->xt->fetch_loaded("body");	

		echo '<div id="detailPreview'.$this->id.'" class="'.$pageSkinStyle.' rnr-pagewrapper dpStyle">'.$contents.'</div>';
	}
	
	/**
	 * Proccess master-details on list grid
	 *
	 * @param array $record
	 * @param array $data
	 */
	function proccessDetailGridInfo(&$record, &$data, $gridRowInd)
	{
		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
		{
			$dDataSourceTable = $this->allDetailsTablesArr[$i]['dDataSourceTable'];
			$dShortTable = $this->allDetailsTablesArr[$i]['dShortTable'];
			$masterquery = "mastertable=".rawurlencode($this->tName);
			initArray($this->controlsMap, 'gridRows');
			initArray($this->controlsMap['gridRows'], $gridRowInd);
			initArray($this->controlsMap['gridRows'][$gridRowInd], 'masterKeys');
			$this->controlsMap['gridRows'][$gridRowInd]['masterKeys'][$dDataSourceTable] = array();
			$detailid = array();
			foreach($this->masterKeysByD[$i] as $idx => $m) 
			{
				$curM = $m;
				if ($this->pageType==PAGE_REPORT)
				{	
					$curM = goodFieldName($curM);
					$curM .= '_dbvalue';
				}
				$masterquery.= "&masterkey".($idx + 1)."=".rawurlencode($data[$curM]);
				// Don't need to use here make_db_value func, it use in countDetailsRecsNoSubQ func
				$detailid[]= $data[$curM];
				$this->controlsMap['gridRows'][$gridRowInd]['masterKeys'][$dDataSourceTable]["masterkey".($idx + 1)] = $data[$curM];
			}
			//	add count of child records to SQL
			if(($this->allDetailsTablesArr[$i]['dispChildCount']|| $this->allDetailsTablesArr[$i]['hideChild']) && (!$this->subQueriesSupp || !$this->subQueriesSupAccess || $this->theSameFieldsType) ) 
				$data[$dDataSourceTable."_cnt"] = $this->countDetailsRecsNoSubQ($i, $detailid);
			
			//detail tables
			$record[$dShortTable."_dtable_link"]=($this->permis[$dDataSourceTable]['add'] || $this->permis[$dDataSourceTable]['search']);
			
			if($this->allDetailsTablesArr[$i]['dispChildCount']) 
			{
				if($data[$dDataSourceTable."_cnt"]+ 0)
					$record[$dShortTable."_childcount"]= true;
				$record[$dShortTable."_childnumber"] = $data[$dDataSourceTable."_cnt"];
				$record[$dShortTable."_childnumber_attr"] = " id='cntDet_".$dShortTable."_".$this->recId."'";
				$this->controlsMap['gridRows'][$gridRowInd]['childNum'] = $data[$dDataSourceTable."_cnt"];
			}
					
			if($this->pSet->getDPType($dDataSourceTable) == DP_INLINE) 
			{
				$record[$dShortTable."_dtablelink_attrs"] = "
					id = \"".$dShortTable."_preview".$this->recId."\" 
					caption = \"".runner_htmlspecialchars(GetTableCaption(GoodFieldName($dDataSourceTable)))."\"".
					"href = \"".GetTableLink($dShortTable, $this->allDetailsTablesArr[$i]['dType'], $masterquery)."\"";
			}
			else 
				$record[$dShortTable."_dtablelink_attrs"] = "id=\"master_".$dShortTable."_".$this->recId."\" href=\"".GetTableLink($dShortTable, $this->allDetailsTablesArr[$i]['dType'], $masterquery)."\"";
			
			if($this->allDetailsTablesArr[$i]['hideChild']) 
			{
				if( !($data[$dDataSourceTable."_cnt"] + 0) ) 
					$record[$dShortTable."_dtablelink_attrs"] .= " class=\"".$this->makeClassName("hiddenelem")."\"";
			}
		}
	}
	
	/**
	 * Check details and master tables field for types.They must be the same type.
	 * return true if they are same or if database is mySQL, otherwise returns false
	 * @return bool
	 */
	function checkDetailAndMasterFieldTypes() 
	{
		if($this->dbType == nDATABASE_MySQL) 
		{
			return false;
		} 

		// all details tables for which current table is master
		//$allDetailsTablesArr = GetDetailTablesArr($this->tName);
		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
		{
			foreach($this->masterKeysByD[$i] as $idx => $val) 
			{
				// get field types
				$masterFieldType = $this->pSet->getFieldType($this->masterKeysByD[$i][$idx]);
				$detailsFieldType = $this->pSet->getFieldType($this->detailKeysByD[$i][$idx]/*, $this->allDetailsTablesArr[$i]['dDataSourceTable']*/);
				// if different data types we can't use subQ
				if($masterFieldType != $detailsFieldType)
					return true;
			}
		}
		return false;
	}

	/**
	 * Remove columns hidden on the current device from the inline control fields list 
	 * @param &Array inlineControlFields
	 * @param Number screenWidth
	 * @param Number screenHeight
	 * @param String orientation		The current device orientation identifier
	 */
	public function removeHiddenColumnsFromInlineFields( &$inlineControlFields, $screenWidth, $screenHeight, $orientation ) 
	{
		$devices = array( DESKTOP, TABLET_10_IN, SMARTPHONE_LANDSCAPE, SMARTPHONE_PORTRAIT, TABLET_7_IN );
		foreach( $devices as $d )
		{
			$columnsToHide = $this->pSet->getHiddenFields( $d );
			if( !count($columnsToHide) || !$this->isColumnHiddenForDevice( $d, $screenWidth, $screenHeight, $orientation ) )
				continue;
				
			foreach( $columnsToHide as $hiddenField => $status )
			{
				$fieldPos = array_search( $hiddenField, $inlineControlFields );
				if( $fieldPos !== FALSE )
					array_splice( $inlineControlFields, $fieldPos, 1);
			}
			
			return;		
		}		
	}
	
	/**
	 * Check if some columns must be hidden on a device of particular type 
	 * if the current device has certain screen width and height params. 
	 * See also ProjectSettings::getDeviceMediaClause method
	 * @param Number d				Device identifier
	 * @param Number screenWidth
	 * @param Number screenHeight
	 * @param String orientation	 
	 */
	protected function isColumnHiddenForDevice( $d, $screenWidth, $screenHeight, $orientation )
	{
		if( $d == DESKTOP )
			return $screenWidth >= 1280 && $screenHeight >= 1024 || $screenWidth >= 1360;
			
		if( $d == TABLET_10_IN )	
			return $screenWidth == 768 && $screenHeight == 1024 || $screenWidth >= 1025 && $screenWidth <= 1280 && $screenHeight <= 1023 || $screenHeight >= 1025 && $screenHeight <= 1280 && $screenWidth <= 1023;
			
		if( $d == TABLET_7_IN )	
			return $screenWidth <= 1024 && $screenHeight <= 800 || $screenHeight <= 1024 && $widht <= 800;
			
		if( $d == SMARTPHONE_LANDSCAPE )	
			return $screenHeight <= 400 && $orientation == 'landscape' || $screenWidth <= 400 && $orientation == 'landscape' ;

		if( $d == SMARTPHONE_PORTRAIT )		
			return $screenHeight <= 400 && $orientation == 'portrait' || $screenWidth <= 400 && $orientation == 'portrait';
			
		return false;
	}
		
	static function reloginAndLogoutProcess($permission)
	{
		global $strTableName;
				
		include_once(getabspath('classes/loginpage.php'));
		$loginXt = new Xtempl();
		
		$loginParams = array("pageType" => PAGE_LOGIN);
		$loginParams['xt'] = &$loginXt;
		$loginParams["tName"]= NOT_TABLE_BASED_TNAME;
		$loginParams['needSearchClauseObj'] = false;
		$loginPageObject = new LoginPage($loginParams); 
		$loginPageObject->init();

		// login automatically, if username and password are in cookies.
		if( !isLogged() || isLoggedAsGuest() ) 
		{
			$username = $_COOKIE["username"];
			$password = $_COOKIE["password"];
			if( $username != "" && $password != "" ) 
			{
				$loginPageObject->LogIn($username, $password);
			}
		}
		
		$url = $_SERVER["SCRIPT_NAME"].(!empty($_SERVER["QUERY_STRING"]) ? "?".$_SERVER["QUERY_STRING"] : '');
		if (!postvalue("onFly")) 
		{
			$_SESSION["MyURL"] = $url;
		}
		
		if (postvalue("a")=="logout") 
		{
			$_SESSION["MyURL"] = $_SERVER["SCRIPT_NAME"];
			if (!CheckTablePermissions($strTableName, $permission) || !isLogged()) 
			{
				HeaderRedirect("login", "", "");
				exit();
			}
			if (isLogged() && !isLoggedAsGuest()) 
			{
				$loginPageObject->LogoutAndRedirect($url);
			}
		}
	}

	/**
	 * @param String table				A table name
	 * @param ProjectSettings pSet
	 * @return STring
	 */
	protected function getKeysTitleTemplate($table, $pSet)
	{
		$keys = $pSet->getTableKeys();
		$str = "";
		foreach($keys as $k)
		{
			if( strlen($str) )
				$str .= ", ";

			$str .= GetFieldLabel( $table, GoodFieldName( $k ) );
			$str .= ":";
			$str .= "{%". GoodFieldName( $k ). "}";
		}
		return $str;
	}
	
	/**
	 * Get the default page's title template
	 * @param String page
	 * @param String table				A good table name
	 * @param ProjectSettings pSet	 
	 * @return STring
	 */	
	protected function getDefaultPageTitle($page, $table, $pSet)
	{
		if( $page == "add" )
			return GetTableCaption($table).", "."Add new record";
		if( $page == "edit" )
			return GetTableCaption($table).", "."Edit record"." [". $this->getKeysTitleTemplate( $table, $pSet ). "]";
		if( $page == "view" )
			return GetTableCaption($table).", "."View record"." [". $this->getKeysTitleTemplate( $table, $pSet ). "]";
		if( $page == "export" )
			return "Export";
		if( $page == "import" )
			return "Import";
		if( $page == "search" )
			return GetTableCaption($table)." - "."Advanced search";
		if( $page == "print" )
			return GetTableCaption($table);
		if( $page == "list" )
			return GetTableCaption($table);
		if( $page == "masterlist" )
			return GetTableCaption($table).": [". $this->getKeysTitleTemplate( $table, $pSet ). "]";
		if( $page == "masterchart" )
			return GetTableCaption($table);
		if( $page == "masterreport" )
			return GetTableCaption($table).": [". $this->getKeysTitleTemplate( $table, $pSet ). "]";			
		if( $page == "masterprint" )
			return GetTableCaption($table).": [". $this->getKeysTitleTemplate( $table, $pSet ). "]";		
		if( $page == "login" )
			return "Login";
		if( $page == "register" )
			return "Register";
		if( $page == "changepwd" )
			return "Change password";
		if( $page == "remind" )
			return "Password reminder";	
		if( $page == "chart" )
			return GetTableCaption($table); 
		if( $page == "report" )
			return GetTableCaption($table);	
	}
	
	/**
	 * Get a page's title template
	 * @param String page
	 * @param String table						A good table name
	 * @param ProjectSettings pSet (optional)
	 * @return String
	 */
	protected function getPageTitleTemplate( $page, $table, $pSet )
	{
		global $page_titles;
		
		if( !$table || $page == PAGE_REGISTER ) 
			$table = ".global";
		
		$templ = "";
		if( array_key_exists($table, $page_titles) )
		{
			$templ = @$page_titles[ $table ][ mlang_getcurrentlang() ][ $page ];
		}		
		if( strlen($templ) )
			return $templ;
		
		return $this->getDefaultPageTitle( $page, $table, $pSet );
	}
	
	/**
	 * @param String page
	 * @param String table (optional)				A good table name
	 * @param Array record (optional)				A source record data
	 * @param ProjectSettings settings (optional)
	 * @return String	 
	 */	
	public function getPageTitle($page, $table = "", $record = null, $settings = null)
	{
		$pSet = is_null( $settings ) ? $this->pSet : $settings;
		$templ = $this->getPageTitleTemplate($page, $table, $pSet);
		
		$matches = array();
		if( !preg_match_all('/{\%([\w\.\s\-]*)\}/', $templ,  $matches) )
			return $templ;
		
		$currentRecord = $record;
		$masterRecord = null;
		foreach( $matches[0] as $m )
		{
			if( !strcasecmp( substr($m, 0, 9), "{%master." ) )
			{
				$mSettings = new ProjectSettings($this->masterTable, PAGE_LIST);
				$field = $mSettings->getFieldByGoodFieldName( trim(substr( $m, 9, strlen($m) - 10 )) );
				if(!$masterRecord)
				{
					$masterRecord = $this->getMasterRecord();
				}
				$templ = str_replace($m, $masterRecord ? $masterRecord[ $field ] : "", $templ);
			}
			else
			{
				$field = $pSet->getFieldByGoodFieldName( trim(substr( $m, 2, strlen($m) - 3 )) );
				if(!$currentRecord)
				{
					$currentRecord = $this->getCurrentRecord();
				}
				$templ = str_replace($m, $currentRecord ? $currentRecord[ $field ] : "", $templ);
			}
		}
		return $templ;
	}

	function getCurrentRecord()
	{
		return array();
	}
	/**
	 * Returns the list of master key values read from either request or session
	 * @return Array
	 */	
	function getActiveMasterKeys() 
	{
		$i = 1;
		$ret = array();
		while(true)
		{
			if( isset( $this->masterKeysReq[$i] ) )
				$ret[] = $this->masterKeysReq[$i];
			else if( isset( $_SESSION[$this->sessionPrefix."_masterkey".$i] ) )
				$ret[] = $_SESSION[$this->sessionPrefix."_masterkey".$i];
			else
				break;
			++$i;
		}
		return $ret;
	}
}

$menuNodesObject = null;
?>
