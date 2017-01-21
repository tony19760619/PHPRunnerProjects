<?php
include_once(getabspath("classes/files.php"));

/**
 * Abstract base class for all pages. Contains main functionality 
 */
class RunnerPage
{
	/**
     * Id on page.
     * @var integer
     * @intellisense
     */
	public $id = 1;
	
	/**
     * Use tool tips or not
     * @var bool
     * @intellisense
     */
	protected $isUseToolTips = false;
	
	/**
	 * If use Ajax Suggest js file or not
	 * @var bool
	 * @intellisense
	 */
	protected $isUseAjaxSuggest = true;
	
	/**
     * Type of page
     * @var string
     * @intellisense
     */
	public $pageType = "";
	
	/**
     * Mode of page
     * @var integer
     * @intellisense
     */
	public $mode = 0;
	
	/**
 	 * If use display loading or not
	 * @var bool
	 * @intellisense
	 */
	public $isDisplayLoading = false;
	
	/**
     * Original table name
     * @var string
     * @intellisense
     */
	public $strOriginalTableName = ""; //fix it
	
	/**
	 * String caption of table
	 * @var string
	 * @intellisense
	 */
	protected $strCaption = "";
	
	/**
     * Short table name
     * @var string
     * @intellisense
     */
	public $shortTableName = '';
	
	/**
     * Prefix for session variable
     * @var integer
     * @intellisense
     */
	public $sessionPrefix = "";
	
	/**
     * Name of current table
     * @var string
     * @intellisense
     */	
	public $tName = "";

	/**
     * Array of order index in table
     * @var array()
     * @intellisense
     */
	public $gOrderIndexes = array();
	
	/**
     * String of OrderBy for query
     * @var string
     * @intellisense
     */
	public $gstrOrderBy = "";
	
	/**
     * Instance of class Xtempl
     * @var object
     * @objtype{XTempl}
     * @intellisense
     */
	public $xt = null;
	
	/**
	 * Instance of SearchClause class
	 * @var object
	 * @objtype{SearchClause}
	 * @intellisense
	 */
	public $searchClauseObj = null;
	
	/**
     * Need use search clause object or not 
     * @var boolean
     * @intellisense
     */
	public $needSearchClauseObj = true;
	
	public $flyId = 1;
	
	/**
	 *	The list of including js files 
	 * @intellisense
	 */	  
	public $includes_js = array();
	
	/**
	 *	The list of including js files 
	 * @intellisense
	 */
	public $includes_jsreq = array();
	
	/**
	 *	The list of including css files
	 * @intellisense
	 */
	public $includes_css = array();

	/**
	 * Id of record
	 * @var integer
	 * @intellisense
	 */
	public $recId = 0;
	
	/**
	 * Google maps default settings
	 * @var array
	 * @intellisense
	 */
	public $googleMapCfg = array();
	
	/**
	 * Array of permissions for pages
	 * @var array
	 * @intellisense
	 */
	public $permis = array();
	
	/**
	 * If use group scurity or not
	 * @var bool
	 * @intellisense
	 */
	public $isGroupSecurity = true;
	
	/**
	 * Use or not debug mode for js
	 * @var bool
	 * @intellisense
	 */
	protected $debugJSMode = false;
	
	/**
	 * Array of record ??? for lookup with search
	 * @var array
	 */
	protected $recIds = array();
	
	/**
	 * Use mode ajax for simple listPage
	 * @var boolean
	 * @intellisense
	 */
	public $listAjax = false;

	/**
	 * Array of body begin, end code and body attributs
	 * @var array
	 * @intellisense
	 */
	public $body = array('begin' => '', 'end'=> '');
	
	/**
	 * Master table name
	 * @var string
	 * @intellisense
	 */
	public $masterTable = "";

	/**
	 * Master table record data
	 * @var object
	 * @intellisense
	 */
	protected $masterRecordData = null;
	
	/**
	 * If use Details Preview js file or not
	 * @var bool
	 * @intellisense
	 */
	protected $useDetailsPreview = false; //fix it
	
	/**
	 * Array of all details tables data
	 * @var array
	 * @intellisense
	 */	
	public $allDetailsTablesArr = array();
	
	/**
	 * Array of java script settings for page
	 * @var array
	 * @intellisense
	 */	
	public $jsSettings = array();
	
	/**
	 * Array of controls HTML map
	 * @var array
	 * @intellisense
	 */	
	public $controlsHTMLMap = array();
	
	/**
	 * Array of view controls HTML map
	 * @var array
	 * @intellisense
	 */	
	public $viewControlsHTMLMap = array();
	
	/**
	 * Array of controls map
	 * @var array
	 * @intellisense
	 */	
	public $controlsMap = array();
	
	/**
	 * Array of view controls map
	 * @var array
	 * @intellisense
	 */	
	public $viewControlsMap = array();
	
	/**
	 * Array of field settings for use it in javascript settings
	 * @var array
	 * @intellisense
	 */	
	public $settingsMap = array();
	
	/**
	 * Array of records per page for list and report without group fields
	 * @var array
	 * @intellisense
	 */	
	public $arrRecsPerPage = array();

	/**
	 * Number of page size
	 * @var integer
	 * @intellisense
	 */
	public $pageSize = 0;
	
	/**
	 * The page's table type: list, report or chart
	 * @var string
	 * @intellisense
	 */
	protected $tableType = "";
	
	/**
	 * Events object for the current table
	 * @var object
	 * @intellisense
	 */	
	protected $eventsObject;
	
	/**
	 * Master table requested keys
	 * @var array
	 */
	public $masterKeysReq = array();
	
	/**
	 * Detail keys by master table
	 * @var array
	 * @intellisense
	 */
	public $detailKeysByM = array();
	
	/**
	 * Is captcha ok after submit or not
	 * @var boolean
	 * @intellisense
	 */
	public $isCaptchaOk = true;
	
	/**
	 * Captcha ID
	 *
	 * @var string
	 * @intellisense
	 */
	public $captchaId = "";
	
	/**
	 * Locking object
	 * @var object
	 * @intellisense
	 */
	public $lockingObj = null;
	
	/**
	 * Is use Video player or not
	 * @var boolean
	 * @intellisense
	 */
	protected $isUseVideo = false;
	
	/**
	 * Is columns will be resizable or not
	 * @var boolean
	 * @intellisense
	 */
	protected $isResizeColumns = false;
	
	/**
	 * Is use CKeditor or not
	 * @var boolean
	 * @intellisense
	 */
	protected $isUseCK = false;
	
	/**
	 * Is display detail data on page or not
	 * @var boolean
	 * @intellisense
	 */
	public $isShowDetailTables = false;
	
	/**
	 * arrays of files to process after adding or editing a record
	 * @intellisense
	 */
    public $filesToSave = array(); //FileFieldSingle
	public $filesToMove = array(); 
	public $filesToDelete = array(); 
	
	/**
	 * Master keys by detail table
	 * @var array
	 * @intellisense
	 */
	protected $masterKeysByD = array();
	
	/**
	 * Indicator is permissions dynamic
	 * @var bool
	 * @intellisense
	 */
	public $isDynamicPerm = false;
	
	/**
	 * If nedd add web report or not
	 * @var bool
	 * @intellisense
	 */
	protected $isAddWebRep = true;
	
	/**
	 * Indicator, is used section 508 
	 * @var bool
	 * @intellisense
	 */
	protected $is508 = false;
	
	/**
	 * Instance of Cypher class for encoding/decoding fields values
	 * @var object
	 * @intellisense
	 */
	public $cipherer = null;
	
	/**
	 * Project settings
	 * @type ProjectSettings
	 * @intellisense
	 */
	public $pSet = null;
	
	/**
	 * Project settings for edit controls
	 * @type ProjectSettings
	 * @intellisense
	 */
	public $pSetEdit = null;
	
	/**
	 * Number of rows
	 * @var integer
	 * @intellisense
	 */
	protected $numRowsFromSQL = 0;	
	
	/**
	 * Index of my page
	 * @var integer
	 * @intellisense
	 */
	protected $myPage = 0;
	
	protected $recordsOnPage = 0;
	
	/**
	 * Number of records per row list
	 * @var integer
	 * @intellisense
	 */
	public $recsPerRowList = 0;

	/**
	 * Number of records per row print
	 * @var integer
	 * @intellisense
	 */
	public $recsPerRowPrint = 0;
	
	/**
	 * grid layout - gltHORIZONTAL, gltVERTICAL or gltCOLUMNS
	 * @type bool
	 */
	public $listGridLayout = false;

	/**
	 * grid layout - gltHORIZONTAL, gltVERTICAL or gltCOLUMNS
	 * @type bool
	 */
	public $printGridLayout = false;
	
	/**
	 * An array that keys are different field's css rules
	 * @type array
	 */
	protected $fieldCssRules = array();
	
	/**
	 * Cells' custom css rules
	 * @type string
	 */
	protected $cell_css_rules = "";
	
	/**
	 * Rows' custom css rules
	 * @type string
	 */
	protected $row_css_rules = "";

	/**
	 * css rules to hide fields on mobile devices columns
	 * It could be also applied to the desktop version	 
	 * @type string
	 */
	protected $mobile_css_rules = "";

	protected $colsOnPage = 1;
	
	/**
	 * Array of field names that used for totals
	 * @type array
	 * array['totalsFields']= array('fName'=>"@f.strName s", 'totalsType'=>'@f.strTotalsType', 'viewFormat'=>"@f.strViewFormat");
	 */
	public $totalsFields = array();


	/**
	 * Number of founed rows
	 * @var bool
	 * @intellisense
	 */
	public $rowsFound = false;
	
	/**
	 * Constructor, set initial params
	 * @param array $params
	 * @intellisense
	 */
	protected $deleteMessage = '';
	
	/**
	 * Number of maximum pages
	 * @var integer
	 * @intellisense
	 */
	protected $maxPages = 1;
	
	/**
	 * Name of the templete file
	 * @var string
	 * @intellisense
	 */
	public $templatefile = "";
	
	/**
	 * Array of menu nodes
	 * @var array
	 * @intellisense
	 */	
	public $menuNodes = array();
	
	/**
	 * Refferense to sqlquery object 
	 * @var object
	 * @intellisense
	 */
	protected $gQuery = null;
	
	/**
	 * Flag. True if fillSetCntrlMaps already called 
	 * @intellisense
	 */
	protected $isControlsMapFilled = false;
	
	/**
	 * Instance of EditControlsContainer
	 * @var {object}
	 * @intellisense
	 */
	protected $controls = null;
	
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
	protected $searchPanelActivated = false;
	
	/**
	 * the instance of the "projectSettings" object 
	 * It differs from the pSet (and is set as a pSet for the Search panel's searh table)
	 * in case the Search panel is activated on the non table page
	 * @type ProjectSettings	 
	 */
	public $pSetSearch = null;
	
	/**
	 * The real Search panel's searh table name.
	 * It differs from the tName in case the Search panel is activated on the non table page
	 */
	public $searchTableName = "";

	/**
	 * Page layout object
	 */
	protected $pageLayout = null;
	
	protected $warnLeavingPages = null;
	
	/**
	 * Indicator showing if It's neccessary to add the search panel fields's settings
	 * It's set equal to true when the Search panel is added on the non table page
	 */
	public $tableBasedSearchPanelAdded = false;
	
	public $mainTable = ""; //fix it
	public $mainField = ""; //fix it
	
	/**
	 * Cached results of getWhereComponents function
	 */
	protected $_cachedWhereComponents = null;
	
	/**
	 * the local time format regexp
	 * @type String
	 */ 
	protected $timeRegexp;
	
	protected $dispNoneStyle = 'style="display: none;"';

	/**
	 * Detail keys by detail table
	 */
	protected $detailKeysByD = array();
	
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
	
	/**
	 * The instance of class representing a db connection
	 * @type Connection 
	 */
	public $connection = null;
	
	/**
	 * Dashboard name
	 * @type string 
	 */
	public $dashTName = '';
	
	/**
	 * Element from dashboard
	 * @type string 
	 */
	public $dashElementName = '';
	
	
	/**
	 *	PDF rendering mode. 
	 *  empty - regular page display
	 * 	"build" - build page and return PDF
	 * 	"prepare" - build page and return HTML for browser post-processing
	 *	"convert" - convert post-processed HTML to PDF
	 */
	public $pdfMode = "";
	
	function RunnerPage(&$params)
	{
		global $locale_info, $cCharset, $page_layouts;
		
		// copy properties to object
		RunnerApply($this, $params);
		
		$this->setTableConnection();
		
		$this->pSet = new ProjectSettings($this->tName, $this->pageType);
		$this->pSetEdit = $this->pSet;
		$this->pSetSearch = new ProjectSettings($this->tName, PAGE_SEARCH); 
		$this->searchTableName = $this->tName; 
		
		$this->assignCipherer();
		
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
			$this->assignSessionPrefix();
		
		$this->isDisplayLoading = $this->pSet->displayLoading();
		
		//init settingMap globalSettings
		$this->settingsMap["globalSettings"] = array();
		$this->settingsMap["globalSettings"]["shortTNames"] = array();
				
		$this->searchPanelActivated = $this->checkIfSearchPanelActivated( isMobile() );
		//global settings including "shortTNames" might be updated
		$this->setParamsForSearchPanel();
		
		$this->searchSavingEnabled = $this->isSearchSavingEnabled() && $this->needSearchClauseObj;
		
		$this->setSessionVariables();
		
		//	get locking object
		$this->lockingObj = GetLockingObject($this->tName);	
		$this->warnLeavingPages = $this->pSet->warnLeavingPages(); 
		$this->is508 = isEnableSection508();
		
		$this->isUseVideo = $this->pSet->isUseVideo();
		$this->strCaption = GetTableCaption(GoodFieldName($this->tName));
		
		$this->tableType = $this->pSet->getTableType();
		$this->isAddWebRep = GetGlobalData("isAddWebRep",false);
		//	get details keys by master table
		$this->detailKeysByM = $this->getDetailKeysByMasterTable();
		$this->isDynamicPerm = GetGlobalData("isDynamicPerm",false);
		$this->shortTableName = $this->pSet->getShortTableName();

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
		$this->settingsMap["tableSettings"]["isUseAudio"] = array("default"=>false,"jsName"=>"isUseAudio"); //fix it
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
			$this->jsSettings['tableSettings'][$this->tName]['pageSkinStyle'] = array();
			$this->jsSettings['tableSettings'][$this->tName]['pageSkinStyle'][ $this->pageType ] = $this->pageLayout->style." page-".$this->pageLayout->name;
			$this->AddCSSFile( $this->pageLayout->getCSSFiles(isRTL(), isPageLayoutMobile( $this->templatefile )) );
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
				if(($this->pageType == PAGE_LIST) || ($this->pageType == PAGE_REPORT) || ($this->pageType == PAGE_CHART))
				{
					unset($_SESSION[$this->allDetailsTablesArr[$i]['dDataSourceTable'].'_advsearch']);
					
					$dPermission = $this->getPermissions( $this->allDetailsTablesArr[$i]['dDataSourceTable'] );
					if( $dPermission["search"] ) 
					{
						$this->jsSettings['tableSettings'][$this->tName]['detailTables'][ $this->allDetailsTablesArr[$i]['dDataSourceTable'] ] = 
							array(
								'pageType' => $this->allDetailsTablesArr[$i]['dType'],
								'dispChildCount' => $this->allDetailsTablesArr[$i]['dispChildCount'], 
								'hideChild' => $this->allDetailsTablesArr[$i]['hideChild'],
								'listShowType'=>$this->allDetailsTablesArr[$i]['previewOnList'],
								'addShowType'=>$this->allDetailsTablesArr[$i]['previewOnAdd'],
								'editShowType'=>$this->allDetailsTablesArr[$i]['previewOnEdit'],
								'viewShowType'=>$this->allDetailsTablesArr[$i]['previewOnView']				  
							);
					}	
					
					if( $this->allDetailsTablesArr[$i]['previewOnList'] == DP_POPUP )
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
			if( !($this->pageType == PAGE_ADD && $this->mode == ADD_INLINE) && !($this->pageType == PAGE_EDIT && $this->mode == EDIT_INLINE) )
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

		$this->processMasterKeyValue();
		$this->assignSearchLogger();	
	}
	

	/**
	 * Init the page's functionality.
	 * The method is invoked just after the constructor has been called
	 */
	function init() 
	{
		if($this->xt)
			$this->xt->assign("pagetitle", $this->getPageTitle( $this->pageType, $this->tName == NOT_TABLE_BASED_TNAME ? "" : GoodFieldName($this->tName) ));	
		if( !($this->pageType == PAGE_ADD && $this->mode == ADD_INLINE) && !($this->pageType == PAGE_EDIT && $this->mode == EDIT_INLINE ) )
		{
			//build the Search panel if the "searchpanel" brick is added to the page's layout
			$this->buildSearchPanel();
		}

		if( $this->pageType == PAGE_LIST && ($this->mode == LIST_AJAX || $this->mode == LIST_SIMPLE) || $this->pageType == PAGE_DASHBOARD
			|| ( $this->pageType == PAGE_REPORT && $this->mode === REPORT_SIMPLE || $this->pageType == PAGE_CHART && $this->mode == CHART_SIMPLE ) )
		{
			$this->buildFilterPanel();
			$this->initLogin();
		}
	}	
	
	/**
	 * Set the 'connection' property if the table is page based #9875
	 */
	protected function setTableConnection()
	{
		global $cman;
		if( $this->tName != NOT_TABLE_BASED_TNAME )
			$this->connection = $cman->byTable( $this->tName );			
	}

	/**
	 * Set the 'cipherer' property
	 */
	protected function assignCipherer()
	{
		$this->cipherer = new RunnerCipherer($this->tName, $this->pSet);
	}
	
	/**
	 * Init login form
	 */
	function initLogin()
	{
		$this->settingsMap["globalSettings"]["loginFormType"] = GetGlobalData("nLoginForm", 0);
		
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
			$this->xt->assign("guestloginlink_attrs", 'id="loginButton'.$this->id.'"');
			return;
		}
		
		$this->xt->assign("guestloginlink_attrs", 'id="loginButton'.$this->id.'"');
			return;
	}
	
	/**
	 * Makes assigns for admin
	 */
	function assignAdmin() 
	{
		if($this->isAdminTable()) 
		{
			$this->xt->assign("exitadminarea_link", true);
			$this->xt->assign("exitaalink_attrs", "id=\"exitAdminArea".$this->id."\"");
		}
		
		if($this->isDynamicPerm && IsAdmin()) 
		{
			$this->xt->assign("adminarea_link", true);
			$this->xt->assign("adminarealink_attrs", "id=\"adminArea".$this->id."\"");
		}
	}
	
	protected function assignSessionPrefix()
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
			   || $this->pageType == PAGE_REPORT && $this->mode == REPORT_SIMPLE
			   || $this->pageType == PAGE_CHART && $this->mode == CHART_SIMPLE; 
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
	 * Add css rules
	 * Wrapper function
	 * 
	 * @param &Array data
	 * @param &Array row
	 * @param &Array record
	 */
	function spreadRowStyles(&$data, &$row, &$record)
	{
		$this->spreadRowStyle($data, $row, $record);
		$this->spreadRowCssStyle($data, $row, $record);
	}
	
	/**
	 * Add css rules to the record fields' "_style" elements if the row's "rowstyle" attribute is set
	 * 
	 * @param &Array data
	 * @param &Array row
	 * @param &Array record
	 */
	protected function spreadRowStyle(&$data, &$row, &$record)
	{
		if(!array_key_exists("rowstyle",$row))
			return;
		$style = extractStyle($row["rowstyle"]);
		if($style=="")
			return;
		foreach(array_keys($data) as $field)
		{
			$record[GoodFieldName($field)."_style"] = injectStyle($record[GoodFieldName($field)."_style"], $style);
		}
	}
	
	/**
	 * Add css rules to the record fields' "_css" elements if the row's "style" attribute is set
	 * 
	 * @param &Array data
	 * @param &Array row
	 * @param &Array record	 
	 */	
	protected function spreadRowCssStyle(&$data, &$row, &$record)
	{
		if( !isset($row["style"]) ) 
			return;	
			
		$style = $row["style"];
		if( trim($style) == "" )
		{
			return;
		}
		foreach(array_keys($data) as $field)
		{
			$record[GoodFieldName($field)."_css"] = $style."; ".$record[GoodFieldName($field)."_css"];
		}			
	}
	
	/**
	 * Set the custom css rules for the current record in process adding 
	 * corresponding css rules to the "row_css_rules" string property 
	 * 
	 * @param string $rowCssRule
	 */
	protected function setRowCssRule($rowCssRule)
	{
		$selectors = ' td[data-record-id="'.$this->recId.'"]';
		if( $this->listGridLayout == gltVERTICAL ) 	
			$selectors.= ' td'; 
			
		$this->row_css_rules.= $selectors.'{'.$this->getCustomCSSRule( $rowCssRule ).'}';
	}
	
	/**
	 * Form a cell's custom css rule string	 	
	 * @param String unprocessedCss
	 * @return String
	 */	
	protected function getCustomCSSRule($unprocessedCss)
	{
		$cssRules = array();
		$rules = explode(";", $unprocessedCss);
		
		for($i = 0; $i < count($rules); $i++) 
		{
			if(trim($rules[$i]) != "") 
				$cssRules[] = $rules[$i] . " !important" ;
		}
		
		return implode(";", $cssRules);
	}
	
	/**
	 * Check whether such a css rule exists. If It does get the existing class's name.
	 * If It doesn't form a new class name, add a rule to the "fieldCssRules" array and 
	 * add a prepared css rule to the "cell_css_rules" string property
	 *
	 * @param String fieldCssRule
	 * @param String fieldName
	 * @return String
	 */	
	protected function setFieldCssRule($fieldCssRule, $fieldName)
	{
		if( isset($this->fieldCssRules[ $fieldCssRule ]) )
			return $this->fieldCssRules[ $fieldCssRule ];
		
		$className = 'rnr-style'.$this->recId.'-'.$fieldName;
		$this->fieldCssRules[ $fieldCssRule ] = $className;
		
		if( $this->listGridLayout == gltVERTICAL )	
			$selectors = ' td[data-record-id] td.'.$className.', .'.$className;
		else
			$selectors = ' td[data-record-id].'.$className.', .'.$className;
			
		$this->cell_css_rules.= $selectors.'{'.$this->getCustomCSSRule( $fieldCssRule ).'}';

		return $className;
	}
	
	/**
	 * Add a cells' custom style block at the beginning of grid_block
	 */	
	function addCustomCSS() 
	{
		if( !$this->cell_css_rules && !$this->row_css_rules && !$this->mobile_css_rules )
			return;
		
		$gbl = $this->xt->getVar("grid_block");
		if( $gbl ) 
		{
			$rules = $this->row_css_rules.$this->cell_css_rules."\n".$this->mobile_css_rules;
			
			if( !is_array($gbl) ) 
				$gbl = array("begin" => '<style class="rnr-cells-css" type="text/css"> '.$rules.' </style>');
			else 
				$gbl["begin"] = $gbl["begin"]. '<style class="rnr-cells-css" type="text/css"> '.$rules.' </style>';
			
			$this->xt->assign("grid_block", $gbl);
		}
	}
	
	/**
	 * Set row css rules
	 * 
	 * @param &Array $record
	 */
	function setRowCssRules(&$record)
	{
		if( $record["css"] )
			$this->setRowCssRule( $record["css"] );
		
		if( $record["hovercss"] )
			$this->setRowHoverCssRule( $record["hovercss"] );
	}
	
	/**
	 * Set row class names
	 * 
	 * @param &Array $record
	 * @param string $field
	 */
	function setRowClassNames(&$record, $field)
	{
		$gFieldName = GoodFieldName( $field );
		$record[ $gFieldName."_class" ] .= $this->fieldClass( $field );
				
		if( $record[ $gFieldName."_css" ] ) 
		{
			$className = $this->setFieldCssRule( $record[ $gFieldName."_css" ], $gFieldName );
			$record[ $gFieldName."_class" ] .= " ".$className;
		}

		if( $record[ $gFieldName."_hovercss" ] ) 
		{
			$classNameHover = $this->setRowHoverCssRule( $record[ $gFieldName."_hovercss" ], $gFieldName );
			if( $classNameHover !== $className)
				$record[ $gFieldName."_class" ] .= " ".$classNameHover;
		}
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
	 * Process master key value. 
	 * Copy master keys values to SESSION
	 */
	function processMasterKeyValue() 
	{
		if(count($this->masterKeysReq))
		{
			//	copy keys to session
			for($i = 1; $i <= count($this->masterKeysReq); $i++)
			{
				$_SESSION[$this->sessionPrefix."_masterkey".$i] = $this->masterKeysReq[$i];
			}
			
			if( isset($_SESSION[$this->sessionPrefix."_masterkey".$i]) )
				unset($_SESSION[$this->sessionPrefix."_masterkey".$i]);
		}
		elseif( count($this->detailKeysByM) )
		{
			for($i = 0; $i < count($this->detailKeysByM); $i++)
			{
				if( isset($_SESSION[$this->sessionPrefix."_masterkey".($i + 1)]) )
					$this->masterKeysReq[$i + 1] = $_SESSION[$this->sessionPrefix."_masterkey".($i + 1)];
			}	
		}
	}
	
	/**
	 * Display the 'Back to Master' link and master table info
	 */
	public function displayMasterTableInfo() 
	{
		$masterTablesInfoArr = $this->pSet->getMasterTablesArr( $this->tName );
		if( !count($masterTablesInfoArr)  )
			return;
			
		$this->jsSettings["tableSettings"][$this->tName]["hasMasterList"] = true;
		
		foreach( $masterTablesInfoArr as $masterTableData )
		{
			if( $this->masterTable != $masterTableData['mDataSourceTable'] ) 
				continue;
				
			if( $masterTableData['dispInfo'] ) 
			{
				include_once( getabspath("include/".GetTableLink( $masterTableData['mShortTable'], "master".$masterTableData['type'] )) );
				
				$detailKeys = $masterTableData['detailKeys'];
				$masterKeys = array();
				for($j = 0; $j < count($detailKeys); $j ++)
				{
					$masterKeys[]= @$_SESSION[$this->sessionPrefix."_masterkey".($j + 1)];
				}
				
				$this->addMasterInfoJSAndCSS( $masterTableData["type"], $masterTableData["mDataSourceTable"], $masterTableData["mShortTable"] );
				
				$master = array();
				$params = array("detailtable" => $this->tName, "keys" => $masterKeys);
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
	 * Add to the page master info page's extra js/css files
	 * @param String mPageType			the master page type
	 * @param String mTableName			the master page data source table name
	 * @param String mShortTableName	the master page short table name
	 */
	protected function addMasterInfoJSAndCSS( $mPageType, $mTableName, $mShortTableName )
	{
		if( $mPageType == PAGE_CHART )
			$mastertype = "masterchart";
		elseif( $mPageType == PAGE_REPORT )
			$mastertype = "masterreport";
		else // $mPageType == PAGE_LIST
			$mastertype = "masterlist";
		
		if( $mPageType != PAGE_CHART ) 
		{
			include_once getabspath('classes/controls/ViewControlsContainer.php');
			$viewControls = new ViewControlsContainer(new ProjectSettings($mTableName, $mPageType), $mPageType);	
			
			$viewControls->addControlsJSAndCSS();
			$this->includes_js = array_merge($this->includes_js, $viewControls->includes_js);
			$this->includes_jsreq = array_merge($this->includes_jsreq, $viewControls->includes_jsreq);
			$this->includes_css = array_merge($this->includes_css, $viewControls->includes_css);

			$this->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;			
		}
		
		$layout = GetPageLayout( $mShortTableName, $mastertype );
		$layoutMobile = isPageLayoutMobile( GetTemplateName($mShortTableName, $mastertype) );
		$this->AddCSSFile( $layout->getCSSFiles(isRTL(), $layoutMobile) );		
	}
	
	/**
	 * Get master record
	 * User API function
	 *
	 * @return Array
	 * @intellisense
	 */
	function getMasterRecord()
	{
		if (!is_null($this->masterRecordData))
			return $this->masterRecordData;
		
		if(!$this->masterTable)
			return null;
	
	
		global $detailsTablesData, $masterTablesData, $cman;	
		$settings = new ProjectSettings($this->masterTable, PAGE_LIST);
		$masterConnection = $cman->byTable( $this->masterTable );
		
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
					$where.= RunnerPage::_getFieldSQL($mKey, $masterConnection, $settings)."=".$cipherer->MakeDBValue($mKey, $masterKeys[$j], "", true);
				}
			}
		}
		
		if(!$where)
			return null;
					
		$masterQuery = $settings->getSQLQuery();
		
		$str = SecuritySQL("Search", $this->masterTable);
		if(strlen($str))
			$where.= " and ".$str;
		
		$strWhere = whereAdd($masterQuery->WhereToSql(),$where);
		if(strlen($strWhere))
			$strWhere = " where ".$strWhere." ";
		$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
		LogInfo($strSQL);
		
		$this->masterRecordData = $cipherer->DecryptFetchedArray( $masterConnection->query( $strSQL )->fetchAssoc() );
		return $this->masterRecordData;
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
		global $menuAssignments;
		
		if( !$this->isUseMenu() && $this->pageType != PAGE_MENU && $this->pageType != PAGE_ADD  && $this->pageType != PAGE_VIEW && $this->pageType != PAGE_EDIT )
			return false;
			
		$allowedMenuItems = $this->getAllowedMenuItems();
		if( $allowedMenuItems > 1 )
			return true;
		
		foreach($menuAssignments as $menuSelector)
		{
			$menuName = $menuSelector["name"];	
			
			if( $menuSelector["page"] != $templateName && $menuName == "main" )
				continue;
						
			$allowedMenuItems = $this->getAllowedMenuItems( $menuName );
				
			if( $allowedMenuItems > 0 )
				return true;
		}
		
		return false;	
	}
	
	/**
	 * @param String menuName (optional)
	 * @return Number
	 */
	function getAllowedMenuItems( $menuName = "main" )
	{
		$menuNodes = $this->getMenuNodes( $menuName );
		
		$allowedMenuItems = 0;
		for($i = 0; $i < count($menuNodes); $i++)
		{
			if( $menuNodes[$i]["linkType"] == "Internal" )
			{
				if( $this->isUserHaveTablePerm($menuNodes[$i]["table"], $menuNodes[$i]["pageType"]) )
					$allowedMenuItems++;
			}
			elseif( $menuNodes[$i]["linkType"] != "None" || $menuNodes[$i]["type"] != "Group" )
				$allowedMenuItems++;
		}
		
		if( $this->isDynamicPerm && IsAdmin() && $this->pageType == PAGE_MENU ) 
			$allowedMenuItems++;
			
		if( $this->isAddWebRep ) 
			$allowedMenuItems++;

		return $allowedMenuItems;	
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
		
		if( !strlen($type) ) //temporary #9784 fix
			return false;
		
		if(strpos($strPerm, $type) !== false)
			return true;

		return false;
	}
	
	/**
	 * Get type of permission
	 * @param String pageType
	 * @return String
	 * @intellisense
	 */
	function getPermisType($pageType)
	{
		$type = '';
		if ($pageType == "List" || $pageType == "View" || $pageType == "Search" || $pageType == "Report" || $pageType == "Chart" || $pageType == "Dashboard")
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
					if($type == "E")
						$redirect = "edit";						
					elseif($menuNodes[$i]["pageType"] == "List" && $type == "S")
						$redirect = "list";
					elseif($menuNodes[$i]["pageType"] == "Report" && $type == "S")
						$redirect = "report";
					elseif($menuNodes[$i]["pageType"] == "Chart" && $type == "S")
						$redirect = "chart";
					elseif($menuNodes[$i]["pageType"] == "View" && $type == "S")
						$redirect = "view";						
					elseif($menuNodes[$i]["pageType"] == "Dashboard" && $type == "S")
						$redirect = "dashboard";
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
		if( $this->pageType == PAGE_LIST && !count($_POST) && (!count($_GET) || count($_GET) == 1 && isset($_GET["menuItemId"]) || $this->masterTable && $this->mode != LIST_DETAILS ) 
			|| ($this->pageType == PAGE_CHART || $this->pageType == PAGE_REPORT || $this->pageType == PAGE_DASHBOARD) && !count($_POST) && !count($_GET)
			|| @$_GET["editType"] == ADD_ONTHEFLY )
		{
			$this->unsetAllPageSessionKeys();
		}
		
		if( $this->pageType == PAGE_LIST && ( $this->mode === LIST_DETAILS || $this->mode === LIST_LOOKUP ) 
			|| ( $this->pageType == PAGE_REPORT && $this->mode == REPORT_SIMPLE || $this->pageType == PAGE_CHART && $this->mode == CHART_SIMPLE ) )
		{
			unset( $_SESSION[$this->sessionPrefix."_filters"] );
		}
	}

	/**
	 * Unset all session keys started with the page's session prefix
	 * @param String sessionPrefix
	 */
	protected function unsetAllPageSessionKeys( $sessionPrefix = "" )
	{
		if( !$sessionPrefix )
			$sessionPrefix = $this->sessionPrefix;
		
		$prefixLength =	strlen($sessionPrefix);	
			
		$sess_unset = array();
		
		foreach($_SESSION as $key => $value)
		{
			if( substr($key, 0, $prefixLength + 1) == $sessionPrefix."_" && strpos(substr($key, $prefixLength + 1), "_") === false )
				$sess_unset[] = $key;
		}
		
		foreach($sess_unset as $key)
		{
			unset( $_SESSION[ $key ] );
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
				$params['dashTName'] = $this->dashTName;
				$params['dashElementName'] = $this->dashElementName;
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
	protected function fillTableSettings() 
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
	 * Add fields settings for the fields with names contained in array of fields
	 *
	 * @param array		$arrFields The array of fields
	 * @param object	$pSet The project settings
	 * @param boolean	$pageBased 
	 * @param string	$pageType The page type
	 */
	function addFieldsSettings($arrFields, $pSet, $pageBased, $pageType)
	{
		foreach($arrFields as $fName)
		{
			if( !array_key_exists($fName, $this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings']) )
				$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fName ] = array();
			
			if( !array_key_exists($pageType, $this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fName ]) )
				$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fName ][ $pageType ] = array();
						
			$matchDK = $this->matchWithDetailKeys($fName) && $this->pageType != PAGE_SEARCH && $this->pageType != PAGE_LIST && $pageBased;
			
			foreach($this->settingsMap["fieldSettings"] as $key => $val)
			{
				$fData = $pSet->getFieldData($fName, $key);
				
				if( $key == "validateAs" && !$matchDK )
				{
					if( $pageType == PAGE_ADD || $pageType == PAGE_EDIT || $pageType == PAGE_REGISTER ) 
						$this->fillValidation($fData, $val, $this->jsSettings['tableSettings'][ $this->tName]['fieldSettings'][ $fName ][ $pageType ]);
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
						$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fName ][ $pageType ]['nWidth'] = $pSet->getNCols($fName);
						$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fName ][ $pageType ]['nHeight'] = $pSet->getNRows($fName);
					}	
				}
				elseif( $key == "autoCompleteFields" )
					$fData = $pSet->getAutoCompleteFields($fName);

				
				$isDefault = false;
				if( is_array($fData) )
					$isDefault = !count($fData);
				else if( !is_array($val['default']) )
					$isDefault = $fData === $val['default'];
				
				if( !$isDefault && !$matchDK )
					$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fName ][ $pageType ][ $val['jsName'] ] = $fData;
				else if( $matchDK && ($key == "EditFormat" || $key == "strName" || $key == "autoCompleteFields" || $key == "LinkField") )
					$this->jsSettings['tableSettings'][ $this->tName ]['fieldSettings'][ $fName ][ $pageType ][ $val['jsName'] ] = $fData;
			}
			
			$this->jsSettings['tableSettings'][ $this->tName ]['isUseCK'] = $this->isUseCK;
			
			if( count($this->googleMapCfg) != 0 && $this->googleMapCfg['isUseGoogleMap'] )
			{
				$this->jsSettings['tableSettings'][ $this->tName ]['isUseGoogleMap'] = true;
				$this->jsSettings['tableSettings'][ $this->tName ]['googleMapCfg'] = $this->googleMapCfg;	
			}
			
			$lookupTableName = $pSet->getLookupTable($fName);
			if( $lookupTableName )
				$this->jsSettings['global']['shortTNames'][ $lookupTableName ] = GetTableURL($lookupTableName);
				
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
		
		$this->addExtraFieldsToFieldSettings();	
				
		if( $this->searchPanelActivated && $this->permis[$this->searchTableName]["search"] )
		{
			$arrFields = $this->pSetSearch->getAllSearchFields();
			$this->addFieldsSettings($arrFields, $this->pSetSearch, true, PAGE_SEARCH);	
		}
	}
	
	/**
	 * Match field with details keys
	 *
	 * @param string	$fName The field name
	 * 
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
	 * @param string  	$fName The field name
	 * @param array  	$vals Dependent and main fields' values
	 * @param object 	$controls An instance of the 'EditControlsContainer' class OPTIONAL
	 *
	 * @return boolean|array 
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
	 * 
	 * @param string	$fName The field name
	 * 
	 * @return String 	The category control field's name
	 * @intellisense
	 */
	function getMainLookupFieldNameForDependant($fName)
	{
		if( ($this->pSet->getEditFormat($fName) != EDIT_FORMAT_LOOKUP_WIZARD || $this->pSet->getEditFormat($fName) != EDIT_FORMAT_RADIO) && !$this->pSet->useCategory($fName) )
			return "";
		
		return $this->pSet->getCategoryControl($fName);	
	}
	
	/**
	 * Get lookup display field with wrappers if needed
	 * Used only when we create SQL to access lookup table
	 *
	 * @param string	$field The field
	 * @param object	$connection The connection object
	 * @param object	$pSet The project settings object
	 *
	 * @return String
	 */
	static function sqlFormattedDisplayField($field, $connection, $pSet)
	{
		$displayField = $pSet->getDisplayField($field);
		
		if(strlen($displayField) && !$pSet->getCustomDisplay( $field ))
			return $connection->addFieldWrappers( $displayField );
		
		return $displayField;
	}

	/**
	 * Get field underlying SQL as it's defined in the original SQL string.
	 * 
	 *
	 * @param string	$field The field name - can be NULL
	 * @param object	$connection The connection object - can be NULL
	 * @param object	$pSet The settings object - can be NULL
	 *
	 * @return string
	 */
	static function _getFieldSQL($field, $connection, $pSet)
	{
		$fname = "";
		if( $pSet )
			$fname = $pSet->getFullFieldName($field);
		global $cman;
		if( !$connection )
			$connection = $cman->getDefault();
		if ( $fname == "" )
			return $connection->addFieldWrappers($field);
		
		if (!$pSet->isSQLExpression($field))
			return $connection->addTableWrappers( $pSet->getStrOriginalTableName() ).".".$connection->addFieldWrappers( $fname );
		return $fname;
		
	}

	/**
	 * Get field underlying SQL as it's defined in the original SQL string.
	 * Add decryption clause if Database-based Encryption is set for the field.
	 * 
	 *
	 * @param string	$field The field name
	 * @param object	$connection The connection object - can be NULL
	 * @param object	$pSet The settings object - can be NULL
	 * @param object	$cipherer The cypherer object - can be NULL
	 *
	 * @return string
	 */
	static function _getFieldSQLDecrypt($field, $connection, $pSet, $cipherer)
	{
		$fname = RunnerPage::_getFieldSQL( $field, $connection, $pSet );
		
		if( $cipherer && $pSet )
		{
			if ( $pSet->hasEncryptedFields() && !isEncryptionByPHPEnabled() ) 
				return $cipherer->GetFieldName($fname, $field);
		}
		
		return $fname;
	}

	/**
	 * Get field underlying SQL as it's defined in the original SQL string.
	 * Add decryption clause if Database-based Encryption is set for the field.
	 * Use current page connection and settings
	 * 
	 * @param string	$field The field name
	 *
	 * @return string
	 */
	function getFieldSQLDecrypt($field)
	{
		return RunnerPage::_getFieldSQLDecrypt( $field, $this->connection, $this->pSet, $this->cipherer );
	}

	/**
	 * Get field underlying SQL as it's defined in the original SQL string.
	 * Use current page connection and settings
	 *
	 * @param string	$field The field name
	 *
	 * @return string
	 */
	function getFieldSQL($field)
	{
		return RunnerPage::_getFieldSQL( $field, $this->connection, $this->pSet );
	}
	
	/**
	 * Returns just the wrapped underlying field name - to be used only in SQL UPDATE and INSERT clauses.
	 * Add wrappers if needed.
	 *
	 * Example
	 ************************************************
	 * Original SQL: 
	 * select cars.make as carmake from cars
	 * 
	 * getTableField("carmake") -> "`make`"
	 * 
	 * Insert/Update SQL:
	 * insert into cars ( `make` ) values ("aaa")
	 * update cars set `make`="aaa"
	 ************************************************
	 * @param string $field The field name
	 *
	 * @return string
	 */
	function getTableField($field)
	{
		$strField = $this->pSet->getStrField($field);
		
		if( $strField != "" )
			return $this->connection->addFieldWrappers( $strField );
		
		return $this->getFieldSQL($field);
	}
		
	/**
	 * Return JS for preload dependent ctrl 
	 *
	 * @param string	$fName The field name
	 * @param string	$vals Dependent and main fields' values
	 *
	 * @return mixed
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
		}
	}
	
	/**
	 * Return name of parent field
	 *
	 * @param string $fName
	 * @return string
	 * @intellisense
	 */
	function getParentCtrlName($fName) 
	{
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
	 * Add additional fields to field settings
	 * Use only for: 
	 * 		register page,
	 * 		changepwd page,	
	 * 		admin members page with Active Directory
	 * @intellisense
	 */	
	function addExtraFieldsToFieldSettings($isCaptcha = false)
	{
		$extraParams = array('fields' => array());
		
		if($isCaptcha)
		{
			$extraParams['fields'] = array('captcha');
			$extraParams['format'] = 'Text Field';
		}
		else if($this->pageType == PAGE_REGISTER )
		{
			$extraParams['fields'] = array('confirm');
			$extraParams['format'] = 'Password';
		}	
		else if($this->pageType == PAGE_CHANGEPASS)
		{
			$extraParams['fields'] = array('oldpass', 'newpass', 'confirm');
			$extraParams['format'] = 'Password';
		}
		else if((GetGlobalData("nLoginMethod", 0) == SECURITY_AD) && ($this->mode == MEMBERS_PAGE))
		{
			$extraParams['fields'] = array('displayname', 'name', 'category');
			$extraParams['format'] = 'Text Field';
		}
		
		foreach($extraParams['fields'] as $fName)
		{
			$arrSetVals = array();
			$arrSetVals['strName'] = $fName;
			$arrSetVals['EditFormat'] = $extraParams['format'];
			$arrSetVals['validation']['validationArr'][] = 'IsRequired';
			$this->jsSettings['tableSettings'][$this->tName]['fieldSettings'][$fName][$this->pageType] = $arrSetVals;
		}	
	}

	/**
	 * Fill validation for current field
	 * @intellisense
	 */
	function fillValidation($fData, $val, &$arrSetVals)
	{
		if( !count($fData) )
			return;
		
		if( count( $fData['basicValidate'] ) )
			$arrSetVals[ $val['jsName'] ]["validationArr"] = $fData['basicValidate'];
		
		if( array_key_exists("regExp", $fData) ) 
			$arrSetVals[ $val['jsName'] ]["regExp"] = $fData["regExp"];
		
		if( array_key_exists("customMessages", $fData) && count( $fData["customMessages"] ) )
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
			else
			{
				//fill array of sections with name sections
				$this->controlsMap['sections']['section_'.$tabC['tabId']] = array();
				for($f = 0; $f < count($arrTabs[$i]['arrFields']); $f++)
				{
					$this->controlsMap['sections']['section_'.$tabC['tabId']][] = $arrTabs[$i]['arrFields'][$f];
				}
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
	 * @return Array | Boolean
	 * @intellisense
	 */	
	function getArrTabs()
	{
		if($this->pageType == PAGE_EDIT)
			return $this->pSet->getEditTabs();
		elseif($this->pageType == PAGE_ADD)
			return $this->pSet->getAddTabs();
		elseif($this->pageType == PAGE_VIEW)
			return $this->pSet->getViewTabs();
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
			
			if(array_key_exists($file,$this->includes_jsreq))
			{
				foreach($reqFiles as $rFile)
				{
					if(array_key_exists($rFile,$this->includes_jsreq[$file]))
						continue;
					$this->includes_jsreq[$file][] = $rFile;
				}
			}
			else
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
		$this->AddCSSFile( $this->pageLayout->getCSSFiles(isRTL(), isPageLayoutMobile( $this->templatefile )) );
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
			
			$this->AddJSFile("include/runnerJS/pages/PageConstants.js", "include/runnerJS/ListPageLookup.js");	
			$this->AddJSFile("include/runnerJS/InlineEdit.js", "include/runnerJS/pages/PageConstants.js");
			
			$this->AddJSFile("include/runnerJS/pages/RunnerDefaults.js", "include/runnerJS/pages/PageConstants.js");	
			$this->AddJSFile("include/runnerJS/pages/PageManager.js", "include/runnerJS/pages/RunnerDefaults.js");
			$this->AddJSFile("include/runnerJS/pages/PageSettings.js", "include/runnerJS/pages/PageManager.js");
			$this->AddJSFile("include/runnerJS/DetPreview.js", "include/runnerJS/pages/PageSettings.js");			
			$this->AddJSFile("include/runnerJS/pages/RunnerPage.js", "include/runnerJS/pages/PageSettings.js");
			$this->AddJSFile("include/runnerJS/pages/SearchPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/ViewPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/LoginPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/RemindPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/PrintPageCommon.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/PrintPage.js", "include/runnerJS/pages/PrintPageCommon.js");
			$this->AddJSFile("include/runnerJS/pages/ReportPrintPage.js", "include/runnerJS/pages/PrintPageCommon.js");
			
			$this->AddJSFile("include/runnerJS/pages/EditorPage.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/AddPage.js", "include/runnerJS/pages/EditorPage.js");
			$this->AddJSFile("include/runnerJS/pages/AddPageFly.js", "include/runnerJS/pages/AddPage.js");
			$this->AddJSFile("include/runnerJS/pages/AddPageDash.js", "include/runnerJS/pages/AddPage.js");
			$this->AddJSFile("include/runnerJS/pages/EditPage.js", "include/runnerJS/pages/EditorPage.js");
			$this->AddJSFile("include/runnerJS/pages/EditPageDash.js", "include/runnerJS/pages/EditPage.js");
			
			$this->AddJSFile("include/runnerJS/pages/DataPageWithSearch.js", "include/runnerJS/pages/RunnerPage.js");
			$this->AddJSFile("include/runnerJS/pages/ListPageCommon.js", "include/runnerJS/pages/DataPageWithSearch.js");
			$this->AddJSFile("include/runnerJS/pages/ListPageFly.js", "include/runnerJS/pages/ListPageCommon.js");
			$this->AddJSFile("include/runnerJS/pages/ListPage.js", "include/runnerJS/pages/ListPageCommon.js", "include/runnerJS/DetPreview.js");
			$this->AddJSFile("include/runnerJS/pages/ListPageDash.js", "include/runnerJS/pages/ListPage.js");
			
			$this->AddJSFile("include/runnerJS/pages/DashboardPage.js", "include/runnerJS/pages/RunnerPage.js");
							
			if (isMobile()) 
			{
				$this->AddJSFile("include/runnerJS/pages/ListPageMobile.js", "include/runnerJS/pages/ListPage.js");
				$this->AddJSFile("include/runnerJS/pages/ListPageMobileDP.js", "include/runnerJS/pages/ListPageDP.js");
				$this->AddJSFile("include/runnerJS/pages/ReportPageMobile.js", "include/runnerJS/pages/ListPageMobile.js");
				$this->AddJSFile("include/runnerJS/pages/ChartPageMobile.js", "include/runnerJS/pages/ListPageMobile.js");
				$this->AddJSFile("include/runnerJS/pages/ChartPageMobileDP.js", "include/runnerJS/pages/ChartPageMobile.js");
				$this->AddJSFile("include/runnerJS/pages/DashboardPageMobile.js", "include/runnerJS/pages/DashboardPage.js");
				$this->AddJSFile("include/runnerJS/pages/ReportPageMobileDP.js", "include/runnerJS/pages/ReportPageDP.js");
			}
			else 
			{
				$this->AddJSFile("include/runnerJS/pages/ChartPage.js", "include/runnerJS/pages/DataPageWithSearch.js");
				$this->AddJSFile("include/runnerJS/pages/ChartPageDP.js", "include/runnerJS/pages/ChartPage.js");
				$this->AddJSFile("include/runnerJS/pages/ChartPageDash.js", "include/runnerJS/pages/ChartPage.js");
			}
			
			$this->AddJSFile("include/runnerJS/pages/ReportPageDP.js", "include/runnerJS/pages/ReportPage.js");			
			$this->AddJSFile("include/runnerJS/pages/ReportPage.js", "include/runnerJS/pages/DataPageWithSearch.js");			
			$this->AddJSFile("include/runnerJS/pages/ListPageAjax.js", "include/runnerJS/pages/ListPage.js");
			$this->AddJSFile("include/runnerJS/pages/ListPageDP.js", "include/runnerJS/pages/ListPage.js");
			
			$this->AddJSFile("include/runnerJS/pages/CheckboxesPage.js", "include/runnerJS/pages/ListPage.js");
			$this->AddJSFile("include/runnerJS/pages/MembersPage.js", "include/runnerJS/pages/CheckboxesPage.js");
			$this->AddJSFile("include/runnerJS/pages/RightsPage.js", "include/runnerJS/pages/CheckboxesPage.js");
			
				$this->AddJSFile("include/runnerJS/pages/ChangePwdPage.js", "include/runnerJS/pages/RunnerPage.js");
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
			
			if ($this->pSet->isAddPageEvents() && $this->pageType != PAGE_LOGIN && $this->shortTableName != "")
			{
				$this->AddJSFile("include/runnerJS/events/pageevents_".$this->shortTableName.".js", "include/runnerJS/pages/PageSettings.js", 
					"include/runnerJS/button.js");
			}
		
			}
		else
		{
			if ($this->pSet->isAddPageEvents() && $this->pageType != PAGE_LOGIN && $this->shortTableName != "")
			{
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
			$this->AddJSFile("plugins/ckeditor/ckeditor.js");
		
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
		if (!$this->pSet->isUsebuttonHandlers() || $this->shortTableName == "")
			return false;

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
		{
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
	
	/**
	 * call addGoogleMapData before call  proccessRecordValue!!!
	 */
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
		if( !$this->googleMapCfg['isUseGoogleMap'] )
			return;
			
		foreach ($this->googleMapCfg['mainMapIds'] as $mapId)
		{
			if ($this->googleMapCfg['mapsData'][$mapId]['showCenterLink'] === 1)
			{
				$this->googleMapCfg['centerLinkText'] = $this->googleMapCfg['mapsData'][$mapId]['centerLinkText'];
				break;
			}
		}
		
		$this->AddJSFile("include/runnerJS/gmap.js");
		
		$this->googleMapCfg['id'] = $this->id;
		
		if( !$this->googleMapCfg['APIcode'] )
			$this->googleMapCfg['APIcode'] = '';	

		$this->controlsMap['gMaps'] = &$this->googleMapCfg;			
	}
	
	function addCenterLink(&$value, $fName)
	{
		if( !$this->googleMapCfg['isUseMainMaps'] )
			return $value;

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
	
	/**
	 * @param &Array data
	 * @param String securityMode	
	 * @param &Array next	
	 * @param &Array prev
	 * @param Boolean onDash
	 */
	function getNextPrevRecordKeys(&$data, $securityMode, &$next, &$prev, $onDash = false)
	{
		$next = array();
		$prev = array();
	
		if( @$_SESSION[$this->sessionPrefix."_noNextPrev"] )
			return;
			
		$prevExpr = "";
		$nextExpr = "";
		$where_next = "";
		$where_prev = "";
		$order_next = "";
		$order_prev = "";

		require_once(getabspath('classes/orderclause.php'));
		$orderClause = new OrderClause($this);
		$orderClause->init();
		
		if( !$this->pSet->hasListPage() || !count($orderClause->fieldsList) )
			$orderClause->adjustFiledList();
		
		if( !count($orderClause->fieldsList) )
		{
			$_SESSION[$this->sessionPrefix."_noNextPrev"] = 1;
			return;
		}	
		
		$query = $this->pSet->getQueryObject();
		if( $query === null )
			return;
		
		//	make  next & prev ORDER BY strings
		for($i = 0; $i < count($orderClause->fieldsList); $i++)
		{
			$field = $orderClause->fieldsList[$i];
			if( !$this->pSet->GetFieldByIndex($field->fieldIndex) )
				continue;
				
			$order_next = $order_next == "" ? " ORDER BY " : $order_next.",";
			$order_prev = $order_prev == "" ? " ORDER BY " : $order_prev.",";

			$order_next.= $field->fieldIndex." ".$field->orderDirection;
			$order_prev.= $field->fieldIndex." ".($field->orderDirection == "DESC" ? "ASC" : "DESC");
		}

		// make next & prev where expressions		
		$tail = "";
		for($i = 0; $i < count($orderClause->fieldsList); $i++)
		{
			$field = $orderClause->fieldsList[$i];
			$fieldName = $this->pSet->GetFieldByIndex($field->fieldIndex);
			if(!$fieldName)
				continue;
				
			if( !$query->HasGroupBy() )
				$fullName = $this->getFieldSQLDecrypt( $fieldName );
			else
				$fullName = $this->connection->addFieldWrappers( $fieldName );
			
			$asc = $field->orderDirection == "ASC";
			
			if( !is_null($data[ $fieldName ]) )
			{
			//	current field value is not null
				$value = $this->cipherer->MakeDBValue($fieldName, $data[ $fieldName ], "", true);

				$nextExpr = $fullName. ($asc ? ">" : "<") .$value;
				$prevExpr = $fullName. ($asc ? "<" : ">") .$value;
				
				if( !$asc )
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
			
			if( $nextExpr == "" )
				$nextExpr = " 1=0 ";
			if( $prevExpr == "" )
				$prevExpr = " 1=0 ";
			
			// append expression to where clause
			if( $i > 0 )
			{
				$where_next.= " AND ";
				$where_prev.= " AND ";
			}
			$where_next.= "(".$nextExpr;
			$where_prev.= "(".$prevExpr;
			
			$tail.= ")";
		}
		$where_next = $where_next.$tail;
		$where_prev = $where_prev.$tail;

		if($where_next == "" or $order_next == "" or $where_prev == "" or $order_prev == "")
		{
			$_SESSION[$this->sessionPrefix."_noNextPrev"] = 1;
			return;
		}
		
		$where = $_SESSION[$this->sessionPrefix."_where"];
		if( $onDash && $this->searchClauseObj->bIsUsedSrch )
		{
			$whereComponents = $this->getWhereComponents();
			
			$where = SecuritySQL($securityMode, $this->tName);
			$where = whereAdd($where, $whereComponents["searchWhere"]);
			$_SESSION[$this->sessionPrefix."_where"] = $where;
		}
		elseif( !$onDash && !strlen($where) )
		{
			$where = SecuritySQL($securityMode, $this->tName);		
		}
		
		$where = whereAdd($where, $query->Where()->toSql($query));
		
		$joinFromPart = $_SESSION[$this->sessionPrefix."_joinFromPart"];
		
		$query->ReplaceFieldsWithDummies( $this->pSet->getBinaryFieldsIndices() );	
		if( !$query->HasGroupBy() )
		{		
			$where_next = whereAdd($where_next, $where);
			$where_prev = whereAdd($where_prev, $where);

			$sql_next = $query->toSql($where_next, $order_next, null, false, $joinFromPart);
			$sql_prev = $query->toSql($where_prev, $order_prev, null, false, $joinFromPart);
		}
		else
		{
			$having = $_SESSION[$this->sessionPrefix."_having"];
			if( $onDash && $this->searchClauseObj->bIsUsedSrch )
			{
				$whereComponents = $this->getWhereComponents();
				$having = whereAdd($having, $whereComponents["searchHaving"]);
				$_SESSION[$this->sessionPrefix."_having"] = $having;
			} 

			$having = whereAdd($having, $query->Having()->toSql($query));		
			
			$sql = "select * from (".$query->toSql($where, "", $having, false, $joinFromPart).") prevnextquery"; 
			
			$sql_next = $sql." WHERE ".$where_next.$order_next;
			$sql_prev = $sql." WHERE ".$where_prev.$order_prev;
		}
		
		if( $this->connection->dbType != nDATABASE_MSSQLServer ) 
		{
			//return to actual list page
			if( $prevExpr == " 1=0 " )
				$_SESSION[$this->sessionPrefix."_pagenumber"] = 1;
			else
			{
				$pageSQL = "select count(*) from (".$sql_prev.") tcount";
				$pageRow = $this->connection->query( $pageSQL )->fetchNumeric();
				$currentRow = $pageRow[0];
				
				if( $this->pageSize > 0 )
					$pageSize = $this->pageSize;
				else
					$pageSize = $this->pSet->getInitialPageSize();
				
				$this->myPage = floor($currentRow / $pageSize) + 1;
				$_SESSION[$this->sessionPrefix."_pagenumber"] = $this->myPage;
			}
		}
		
		$tKeys = $this->pSet->getTableKeys();
		
		//	add record count options	
		$sql_next = applyDBrecordLimit( $sql_next, 1, $this->connection->dbType );	
		$sql_prev = applyDBrecordLimit( $sql_prev, 1, $this->connection->dbType );

		$next = $this->getKeysDataForPrevNext( $sql_next, $tKeys );
		$prev = $this->getKeysDataForPrevNext( $sql_prev, $tKeys );
	}

	
	/**
	 * Get an ORDER BY clause set on the corresponding list page 
	 * to retrieve the right record on the edit/view pages 
	 * without 'editid' params passed 
	 * @return String
	 */
	protected function getOrderByClause()
	{
		require_once(getabspath('classes/orderclause.php'));
		$orderClause = new OrderClause($this);
		$orderClause->init();

		$orderByList = array();
		
		foreach( $orderClause->fieldsList as $fieldObj )
		{
			$fieldName = $this->pSet->GetFieldByIndex($fieldObj->fieldIndex);
			if( !$fieldName )
				continue;
				
			if( ! $this->gQuery->HasGroupBy() )
				$fullName = $this->getFieldSQLDecrypt( $fieldName );
			else
				$fullName = $this->connection->addFieldWrappers( $fieldName );
				
			$orderByList[] = $fullName." ".$fieldObj->orderDirection;	
		}
		
		if( count($orderByList) )
			return " ORDER BY ".implode(",", $orderByList);
		
		return "";	
	}	
	
	/**
	 * @param String sql
	 * @param Array tKeys
	 * @return Array
	 */
	protected function getKeysDataForPrevNext($sql, $tKeys)
	{
		$qResult = $this->connection->query( $sql );

		$data = array();
		if( $row = $this->cipherer->DecryptFetchedArray( $qResult->fetchAssoc() ) )
		{
			foreach($tKeys as $i => $k)
			{
				$data[$i] = $row[$k];
			}
		}	

		$qResult->closeQuery();
		
		return $data;
	}

	/**
	 * Assign xt variables connected to the'Prev/Next' buttons
	 * @param Boolean showNext
	 * @param Boolean showPrev
	 */
	public function assignPrevNextButtons( $showNext, $showPrev )
	{	
		if( !$this->pSet->useMoveNext() )
			return;
			
		if( $showNext )
		{
			$this->xt->assign("next_button", true);			
			$this->xt->assign("nextbutton_attrs", 'id="nextButton'.$this->id.'"');
		}
		else if( $showPrev )
		{
			$this->xt->assign("next_button", true);
			$this->xt->assign("nextbutton_class", "rnr-invisible-button");
		}
		else 
			$this->xt->assign("next_button", false);	
				
		if( $showPrev )
		{
			$this->xt->assign("prev_button", true);	
			$this->xt->assign("prevbutton_attrs", 'id="prevButton'.$this->id.'"');
		}
		else if( $showNext )
		{
			$this->xt->assign("prev_button", true);
			$this->xt->assign("prevbutton_class", "rnr-invisible-button");
		}
		else
			$this->xt->assign("prev_button", false);			
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
			$this->addExtraFieldsToFieldSettings(true);
		}
		elseif($sbmPage) 
			$this->isCaptchaOk = true;	
	}
	
	function createCaptcha($params)
	{	
		$path = GetCaptchaPath();
		$swfPath = GetCaptchaSwfPath();
		$typeCodeMessage = "Type the code you see above";
		
		$captchaHTML = '<div class="captcha_block">
			<object width="210" height="65" data="'.$swfPath.'?path='.$path.'" type="application/x-shockwave-flash">
				<param value="'.$swfPath.'?path='.$path.'" name="movie"/>
				<param value="opaque" name="wmode"/>
				<a href="http://www.macromedia.com/go/getflashplayer"><img alt="Download Flash" src=""/></a>
			</object>
			<div style="white-space: nowrap;">'.$typeCodeMessage.':</div>
			<span id="edit'.$this->id.'_captcha_0">
				<input type="text" value="" name="value_captcha_'.$this->id.'" style="" id="value_captcha_'.$this->id.'"/>
				<font color="red">*</font>
			</span>';
		
		if(isset($this->isCaptchaOk) && !$this->isCaptchaOk)
			$captchaHTML .= '<div class="error">'."Invalid security code.".'</div>';
			
		$captchaHTML.='</div>';
		echo $captchaHTML;
	}
	
	/**
	 * Assign the recsPerPage xt variable 
	 */
	function createPerPage()
	{
		$rpp = "<select id=\"recordspp".$this->id."\">";
		
		for($i=0;$i<count($this->arrRecsPerPage);$i++)
		{
			if($this->arrRecsPerPage[$i]!=-1)
				$rpp.= "<option value=\"".$this->arrRecsPerPage[$i]."\" ".($this->pageSize == $this->arrRecsPerPage[$i] ? "selected" : "").">".$this->arrRecsPerPage[$i]."</option>";
			else
				$rpp.= "<option value=\"-1\" ".($this->pageSize == $this->arrRecsPerPage[$i] ? "selected" : "").">"."Show all"."</option>";
		}

		$rpp.="</select>";
		
		$this->xt->assign("recsPerPage", $rpp);
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
		global $tables_data, $masterTablesData, $detailsTablesData, $allDetailsTablesArr, $cman;

		$dDataSourceTable = $this->allDetailsTablesArr[ $dInd ]['dDataSourceTable'];
		
		$detPSet = $this->pSet->getTable($dDataSourceTable);
		$detCipherer = new RunnerCipherer( $dDataSourceTable, $detPSet );
		$detConnection = $cman->byTable( $dDataSourceTable );

		$detailsQuery = $detPSet->getSQLQuery();
		$dSqlWhere = $detailsQuery->WhereToSql();
			
		$detailKeys = $detPSet->getDetailKeysByMasterTable($this->tName);
		
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
			$mastervalue = $detCipherer->MakeDBValue($detailKeys[$idx], $detailid[$idx], "", true);
			
			if($mastervalue == "null")
				$masterwhere .= RunnerPage::_getFieldSQL($detailKeys[$idx], $detConnection, $detPSet)." is NULL ";
			else
				$masterwhere .= RunnerPage::_getFieldSQLDecrypt($detailKeys[$idx], $detConnection, $detPSet, $detCipherer)."=".$mastervalue;
		}
		
		return SQLQuery::gSQLRowCount_int( $detailsQuery->HeadToSql(), $detailsQuery->FromToSql(), $dSqlWhere, $detailsQuery->GroupByToSql()
			, $detailsQuery->Having()->toSql($detailsQuery), $masterwhere, "", $detConnection );	
		
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
			
			if($this->listAjax || $this->mode == LIST_LOOKUP)
			{
				$this->xt->assign("pagination_block", true);
				$this->xt->displayBrickHidden("pagination");
			}
		} 
		else
		{
			$this->rowsFound = true;
			$this->xt->assign("message_block",false);
			if($this->listAjax || $this->mode == LIST_LOOKUP)
			{
				$this->xt->assign("message_block",true);
				$this->xt->displayBrickHidden("message");
			}
			else if ($this->deleteMessage != ''){
				$this->xt->assign("message_block",true);
			}
			
			$this->xt->assign("records_found", $this->numRowsFromSQL);
			$this->jsSettings["tableSettings"][$this->tName]['maxPages'] = $this->maxPages;
			$this->xt->assign("page", $this->myPage);
			$this->xt->assign("maxpages", $this->maxPages);
			
			$this->xt->assign("pagination_block", false);
			
			//	write pagination
			if($this->maxPages > 1) 
			{
				$this->xt->assign("pagination_block", true);
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
				$pagination = "<div data-function=\"pagination" . $this->id . "\">" . $pagination . "</div>";
				$this->xt->assign("pagination", $pagination);
			}
			else
			{
							if($this->listAjax || $this->mode == LIST_LOOKUP)
				{
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
		
		foreach($this->allDetailsTablesArr as $detailsData)
		{
			$dShortTable = $detailsData['dShortTable'];
			$masterquery = "mastertable=".rawurlencode($this->tName);
			
			for($idx = 1; $idx <= count($detailsData["masterKeys"]); $idx ++)
			{
				$masterquery.= "&masterkey".($idx)."=".rawurlencode( $data[ $detailsData['dDataSourceTable'] ]["masterkey".$idx] );
			}
			
			$hrefs[] = array("id" => $this->pSet->getDPType( $detailsData['dDataSourceTable'] ) == DP_INLINE 
					? $dShortTable."_preview" : "master_".$dShortTable."_"
				, "href" => GetTableLink($dShortTable, $detailsData["dType"], $masterquery));			
		}

		return $hrefs;
	}
	
	/**
	 * Create new control (if needed) for edit field, and return it
	 * @param {string} field					field name
	 * @param {string} id (optional)			field id
	 * @param {array} extraParams (optional)
	 * @return {object} edit control
	 * @intellisense
	 */
	function getControl($field, $id = "", $extraParams = array())
	{
		return $this->controls->getControl($field, $id, $extraParams);
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
	 * @return Boolean 
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
	 * Check if the search panel brick is set in the current layout
	 * $param Boplean mobile
	 * @return Boolean
	 */
	protected function checkIfSearchPanelActivated( $mobile )
	{			
		if( $mobile && $this->pageType == PAGE_LIST ) 
			return $this->isBrickSet( "searchpanel_mobile" );
		
		if( $mobile && $this->pageType == PAGE_DASHBOARD )
			return $this->isBrickSet( "search_dashboard_m" );		
		
		if( $this->pageType == PAGE_DASHBOARD )
			return $this->isBrickSet( "search_dashboard" );
		
		return $this->isBrickSet( "searchpanel" );
	}
	
	/**
	 * Build the activated Search panel
	 */
	public function buildSearchPanel()
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
		if( $this->cipherer->isFieldEncrypted($fieldName) )
		{
			$value = $this->cipherer->MakeDBValue($fieldName, $value, "", true);	
		}
		else
		{ 
			$value = add_db_quotes($fieldName, $value);
		}
		
		$where = $this->getFieldSQLDecrypt( $fieldName ) . '=' . $value; 
		$sql = "SELECT count(*) from ".$this->connection->addTableWrappers( $this->pSet->getOriginalTableName() )." where ".$where;
		$data = $this->connection->query( $sql )->fetchNumeric();
	
		if( !$data[0] )
			return false;

		return true;
	}
	
	/**
	 * Fetch blocks ( {BEGIN ...} {END ...} ) content
	 * @param Array|String blocks
	 * @param Boolean dash			(optional)
	 * @return String
	 */
	function fetchBlocksList( $blocks, $dash = false )
	{
		if( !is_array( $blocks ) )
			return $this->xt->fetch_loaded( $blocks );
			
		$fetchedBlocks = "";
		$firstRightAligned = true;
		foreach( $blocks as $b )
		{
			$align="";
			if( is_array($b) )
			{
				$name = $b["name"];
				$align= $b["align"];
			}
			else
			{
				$name = $b;
			}
			$fetched = $this->xt->fetch_loaded( $name );
			if( !$fetched )
				continue;
			
			if( $dash )
			{
				$alignClass = "";
				if( $align == "right" )
					$alignClass = "rnr-dberight";
				$fetched = '<span class="rnr-dbebrick ' . $alignClass .'">' . $fetched . "</span>";
				if( $align == "right" && $firstRightAligned)
				{
					$fetched = "<div class=\"rnr-dbefiller\"></div>" . $fetched;
					$firstRightAligned = false;
				}
			}
				
			$fetchedBlocks.= $fetched;
		}
		
		return $fetchedBlocks;
	}
	
	/**
	 * @param String templatefile
	 * @param Number id
	 */
	function displayAJAX($templatefile, $id)
	{
		$returnJSON = array();
		$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;
		$returnJSON['settings'] = $this->jsSettings;	

		if( count($this->includes_css) )
			$returnJSON['CSSFiles'] = array_unique($this->includes_css);

		$returnJSON['additionalJS'] = $this->grabAllJsFiles();
		$returnJSON['idStartFrom'] = $id;	

		if( $this->formBricks['header'] )
			$returnJSON['headerCont'] = $this->fetchBlocksList( $this->formBricks['header'] );					
		if( $this->formBricks['footer'] )
			$returnJSON['footerCont'] = $this->fetchBlocksList( $this->formBricks['footer'] );		
		
		$this->assignFormFooterAndHeaderBricks( false );
		$this->xt->load_template($templatefile);
		$returnJSON['html'] = $this->xt->fetch_loaded('body');
		
		$extraParams = $this->getExtraAjaxPageParams();
		if( count($extraParams) ) 
		{
			foreach( $extraParams as $param => $paramValue )
			{
				$returnJSON[ $param ] = $paramValue;
			}
		}
		
		echo printJSON($returnJSON);
	}
	
	/**
	 * A stub.
	 * Get extra JSON params to display the page on AJAX-like request	
	 * @return Array
	 */
	protected function getExtraAjaxPageParams()
	{
		return array();
	}
	
	/**
	 * Assign 'form' footer and header elements
	 * @param Boolean assignValue
	 */
	public function assignFormFooterAndHeaderBricks( $assignValue = true )
	{
		if( $this->formBricks["header"] )
		{
			if( !is_array( $this->formBricks["header"] ) )
			{
				$this->formBricks["header"] = array( $this->formBricks["header"] );
			}
			foreach( $this->formBricks["header"] as $b )
			{
				$name = $b;
				if( is_array($b) )
					$name = $b["name"];
				$this->xt->assign( $name, $assignValue );
			}
		}
			
		if( $this->formBricks["footer"] )
		{
			if( !is_array( $this->formBricks["footer"] ) )
			{
				$this->formBricks["footer"] = array( $this->formBricks["footer"] );
			}
			foreach( $this->formBricks["footer"] as $b )
			{
				$name = $b;
				if( is_array($b) )
					$name = $b["name"];
				$this->xt->assign( $name, $assignValue );
			}
		}
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
					$mValue = make_db_value($this->detailKeysByM[$i], $_SESSION[$this->sessionPrefix."_masterkey".($i + 1)], "", "", $this->tName);
				if(strlen($mValue) != 0)
					$where.= $this->getFieldSQLDecrypt( $this->detailKeysByM[$i] ) . "=" . $mValue;
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
			, $this->connection, $this->getMasterTableSQLClause(), $this->SecuritySQL("Search", $this->tName) );
		return $this->_cachedWhereComponents;
	}
	
	/**
	 * Get and array of WHERE and HAVING components
	 */
	static function sGetWhereComponents($query, $pSet, $searchObj, $controls, $connection, $masterTableSQLClause = "", $secSQL = false)
	{
		$whereComponents = array();
		$whereComponents["commonWhere"] = combineSQLCriteria( array( $query->WhereToSql(), $masterTableSQLClause, $secSQL !== false ? $secSQL : SecuritySQL("Search", $pSet->getTableName()) ) ); 
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
		

		$searchObj->processFiltersWhere( $connection );
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
	
	/**
	 * A wrapper for the SecuritySQL function
	 * @param String strAction
	 * @paran String table
	 * @return String
	 */
	function SecuritySQL($strAction, $table="")
	{
		return SecuritySQL($strAction, $table);
	}

	/**
	 * Show a detail preview page
     * @param Array params - asp compatibility issue
	 */
	function showPageDp($params = "")
	{
		global $page_layouts;
		$layout =& $page_layouts[$this->shortTableName.'_'.$this->pageType];
		$pageSkinStyle = $layout->style.' page-'.$layout->name;
		
		//set bricks, which	must be shown on details preview page
		if( $this->pageType == PAGE_CHART )
			$bricksExcept = array('chart');
		else
			$bricksExcept = array('grid', 'pagination');

		// if we use details inline. We don't need show the header/footer.
		$this->xt->unassign('header');
		$this->xt->unassign('footer');
		
		$this->xt->hideAllBricksExcept($bricksExcept);
		
		$this->xt->prepare_template($this->templatefile);
		$contents = $this->xt->fetch_loaded('body');	

		echo '<div id="detailPreview'.$this->id.'" class="'.$pageSkinStyle.' rnr-pagewrapper dpStyle">'.$contents.'</div>';
	}
	
	/**
	 * Proccess master-details
	 *
	 * @param array $record
	 * @param array $data
	 * @param Number gridRowInd
	 */
	function proccessDetailGridInfo(&$record, &$data, $gridRowInd)
	{
		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
		{
			$detailTableData = $this->allDetailsTablesArr[$i];
			$dDataSourceTable = $detailTableData['dDataSourceTable'];
			
			if( $detailTableData['dType'] == PAGE_LIST && !$this->permis[ $dDataSourceTable ]["search"] )
				continue;
				
			$dShortTable = $detailTableData['dShortTable'];
			$masterquery = "mastertable=".rawurlencode($this->tName);
			
			initArray($this->controlsMap, 'gridRows');
			initArray($this->controlsMap['gridRows'], $gridRowInd);
			initArray($this->controlsMap['gridRows'][ $gridRowInd ], 'masterKeys');
			$this->controlsMap['gridRows'][ $gridRowInd ]['masterKeys'][ $dDataSourceTable ] = array();
			
			$detailid = array();
			foreach($this->masterKeysByD[$i] as $idx => $m) 
			{
				$curM = $m;
				if ($this->pageType==PAGE_REPORT)
				{	
					$curM = goodFieldName($curM);
					$curM .= '_dbvalue';
				}
				$masterquery.= "&masterkey".($idx + 1)."=".rawurlencode( $data[ $curM ] );
				// Don't need to use here make_db_value func, it use in countDetailsRecsNoSubQ func
				$detailid[] = $data[ $curM ];
				$this->controlsMap['gridRows'][ $gridRowInd ]['masterKeys'][ $dDataSourceTable ]["masterkey".($idx + 1)] = $data[ $curM ];
			}
			
			//	add count of child records to SQL
			if( ($detailTableData['dispChildCount'] || $detailTableData['hideChild']) && !$this->isDetailTableSubquerySupported( $dDataSourceTable, $i ) )
			{
				$data[ $dDataSourceTable."_cnt" ] = $this->countDetailsRecsNoSubQ($i, $detailid);
			}
			
			//detail tables
			$record[ $dShortTable."_dtable_link" ] = $this->permis[ $dDataSourceTable ]['add'] || $this->permis[ $dDataSourceTable ]['search'];
			
			if( $detailTableData['dispChildCount'] ) 
			{
				if( $data[ $dDataSourceTable."_cnt" ]+ 0)
					$record[ $dShortTable."_childcount" ] = true;
					
				$record[ $dShortTable."_childnumber" ] = $data[ $dDataSourceTable."_cnt" ];
				$record[ $dShortTable."_childnumber_attr" ] = " id='cntDet_".$dShortTable."_".$this->recId."'";
				$this->controlsMap['gridRows'][ $gridRowInd ]['childNum'] = $data[ $dDataSourceTable."_cnt" ];
			}
					
			if( $this->pSet->getDPType($dDataSourceTable) == DP_INLINE ) 
			{
				$record[ $dShortTable."_dtablelink_attrs" ] = "id = \"".$dShortTable."_preview".$this->recId."\" 
					caption = \"".runner_htmlspecialchars( GetTableCaption(GoodFieldName($dDataSourceTable)) )."\"".
					"href = \"".GetTableLink($dShortTable, $detailTableData['dType'], $masterquery)."\"";
			}
			else 
				$record[ $dShortTable."_dtablelink_attrs" ] = "id=\"master_".$dShortTable."_".$this->recId."\" href=\"".GetTableLink($dShortTable, $detailTableData['dType'], $masterquery)."\"";
			
			if( $detailTableData['hideChild'] ) 
			{
				if( !($data[ $dDataSourceTable."_cnt" ] + 0) ) 
					$record[ $dShortTable."_dtablelink_attrs" ] .= " class=\"".$this->makeClassName("hiddenelem")."\"";
			}
		}
	}
	
	/**
	 * A stub #9875
	 * @param String dDataSourceTable	The detail datasource table name
	 * @param Number dTableIndex	The detail table index in the allDetailsTablesArr prop
	 * @return Boolean
	 */
	protected function isDetailTableSubquerySupported( $dDataSourceTName, $dTableIndex )
	{	
		return false;
	}
	
	/**
	 * Get details params
	 * @param Number ids
	 * @return Array
	 */
	public function getDetailsParams( $ids )
	{
		$dpParams = array();
		
		if( $this->pageType != PAGE_VIEW && $this->pageType != PAGE_EDIT && $this->pageType != PAGE_ADD )
			return $dpParams;
		
		foreach( $this->allDetailsTablesArr as $detailData )
		{
			if( !( $this->pageType == PAGE_VIEW && $detailData["previewOnView"] || $this->pageType == PAGE_EDIT && $detailData["previewOnEdit"]  
				|| $this->pageType == PAGE_ADD && $detailData["previewOnAdd"] ) )
			{
				continue;
			}
			
			$strDetTableName = $detailData["dDataSourceTable"];
			$dpPermis = $this->getPermissions( $strDetTableName );
			if( ($this->pageType == PAGE_VIEW || $this->pageType == PAGE_EDIT) && $dpPermis['search'] || $this->pageType == PAGE_EDIT && $dpPermis['edit']  
				|| $this->pageType == PAGE_ADD && $dpPermis['add'] )
			{
				$dpParams['ids'][] = ++$ids;
				$dpParams['strTableNames'][] = $strDetTableName;
				$dpParams['type'][] = $detailData["dType"];
			}	
		}

		return $dpParams;
	}
	
	/**
	 * Prepare the detail preview data, fille coresssponding controls maps and 
	 * assign all required xt variables 
	 * @param String dpType
	 * @param String dpTableName
	 * @param Number dpId
	 * @param &Array data
	 */
	public function setDetailPreview( $dpType, $dpTableName, $dpId, &$data)
	{
		if( $this->pageType != PAGE_EDIT && $this->pageType != PAGE_VIEW && $this->pageType != PAGE_ADD || !CheckTablePermissions($dpTableName, "S") )
			return;
			
		if( $dpType == PAGE_CHART )
			$this->setDetailChartOnEditView( $dpTableName, $dpId, $data );
		elseif( $dpType == PAGE_REPORT )		
			$this->setDetailReportOnEditView( $dpTableName, $dpId, $data );
		else // $dpType == PAGE_LIST
			$this->setDetailList( $dpTableName, $dpId, $data );			
	}
	
	/**
	 * @param String listTName
	 * @param Number listId
	 * @param &Array data
	 */
	protected function setDetailList( $listTName, $listId, &$data )
	{
		include_once( getabspath('classes/listpage.php') );
		include_once( getabspath('classes/listpage_embed.php') );
		include_once( getabspath('classes/listpage_dpinline.php') );		
		
		//array of params for classes
		$options = array();
		$options["id"] = $listId;
		$options["firstTime"] = 1;	
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterTable"] = $this->tName;
		$options["masterPageType"] = $this->pageType;
		$options["mainMasterPageType"] = $this->pageType;					
		$options["xt"] = new Xtempl( true ); //#9607 1. Temporary fix
		$options["flyId"] = $this->genId() + 1;
		$options["masterKeysReq"] = array();
		
		$mkr = 1;
		$mKeys = $this->pSet->getMasterKeysByDetailTable( $listTName );
		$masterKeys = array(); //for PAGE_EDIT only
		
		foreach($mKeys as $mk)
		{
			$options["masterKeysReq"][ $mkr ] = $data[ $mk ];
			$masterKeys["masterKey".$mkr] = $data[ $mk ];
			$mkr++;
		}

		$listPageObject = ListPage::createListPage($listTName, $options);	
		$listPageObject->prepareForBuildPage();
		
		if( $listPageObject->isDispGrid() )
		{
			//set page events
			foreach( $listPageObject->eventsObject->events as $event => $name )
			{
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			}
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			
			$this->copyDetailPreviewJSAndCSS( $listPageObject ); 

			$this->assignDisplayDetailTableXtVariable( $listPageObject );
		
			$this->updateSettingsWidthDPData( $listPageObject );		
			
			
			$this->viewControlsMap["dViewControlsMap"][ $listTName ] = $listPageObject->viewControlsMap;
		
			$this->controlsMap["dControlsMap"][ $listTName ] = $listPageObject->controlsMap;
			if( $this->pageType == PAGE_EDIT ) 
				$this->controlsMap["dControlsMap"]["masterKeys"] = $masterKeys;
							
			$this->controlsMap["dpTablesParams"][] = array("tName" => $listTName, "id" => $options["id"], "pType" => PAGE_LIST);
		}

		$this->flyId = 	$listPageObject->recId + 1;
	}
	
	/**
	 * @param String reportTName
	 * @param Number reportId
	 * @param &Array data
	 */
	protected function setDetailReportOnEditView( $reportTName, $reportId, &$data  )
	{
		include_once( getabspath('classes/reportpage.php') );
		
		//array of params for ReportPage constructor
		$options = array();
		$options["id"] = $reportId;		
		$options["mode"] = REPORT_DETAILS;	
		$options["tName"] = $reportTName;
		$options["pageType"] = PAGE_REPORT;
		$options["masterTable"] = $this->tName;
		$options["xt"] = new Xtempl( true ); //#9607 1. Temporary fix
		$options["flyId"] = $this->genId() + 1; //fix it!
		$options["masterKeysReq"] = array();
		
		$mkr = 1;
		$mKeys = $this->pSet->getMasterKeysByDetailTable( $reportTName );
		foreach($mKeys as $mk)
		{
			$options["masterKeysReq"][ $mkr++ ] = $data[ $mk ];
		}
					
		$reportPageObject = new ReportPage( $options );
		$reportPageObject->init();
		
		if (isMobile())
			$reportPageObject->pageSize = -1;
		
		
		$reportPageObject->prepareDetailsForEditViewPage();
				
		//add detail settings to master settings
		$reportPageObject->addControlsJSAndCSS();
		$reportPageObject->fillSetCntrlMaps();		

		
		$this->copyDetailPreviewJSAndCSS( $reportPageObject ); 

		$this->assignDisplayDetailTableXtVariable( $reportPageObject );

		$this->updateSettingsWidthDPData( $reportPageObject );
		
		
		$this->viewControlsMap["dViewControlsMap"][ $reportTName ] = $reportPageObject->viewControlsMap;
		$this->controlsMap["dControlsMap"][ $reportTName ] = $reportPageObject->controlsMap;
		$this->controlsMap["dpTablesParams"][] = array("tName" => $reportTName, "id" => $options["id"], "pType" => PAGE_REPORT);		
	}
	
	/**
	 * @param String cartTName
	 * @param Number chartId
	 * @param &Array data
	 */
	protected function setDetailChartOnEditView( $cartTName, $chartId, &$data )
	{
		global $useFlashChartLibrary;
		
		include_once( getabspath('classes/chartpage.php') );
		
		$xt = new Xtempl( true ); //#9607 1. Temporary fix
		
		$options = array();
		$options["xt"] = &$xt;
		$options["id"] = $chartId;
		$options["tName"] = $cartTName;
		$options["mode"] = CHART_DETAILS; //	
		$options["pageType"] = PAGE_CHART;
		$options["masterTable"] = $this->tName;
		$options["flyId"] = $this->genId() + 1; //fix it

		$mkr = 1;
		$mKeys = $this->pSet->getMasterKeysByDetailTable( $cartTName );
		foreach($mKeys as $mk)
		{
			$options["masterKeysReq"][ $mkr++ ] = $data[ $mk ];
		}
		
		$masterKeysReq = $options["masterKeysReq"];
		if(count($masterKeysReq))
		{
			//	copy keys to session
			for($i = 1; $i <= count($masterKeysReq); $i++)
				$_SESSION[ $cartTName."_masterkey".$i ] = $masterKeysReq[ $i ];

			if( isset($_SESSION[ $cartTName."_masterkey".$i ]) )
				unset( $_SESSION[ $cartTName."_masterkey".$i ] );
		}
		
		$chartPageObject = new ChartPage($options);
		$chartPageObject->init();
		
		$chartXtParams["id"] = $options["flyId"];
		$chartXtParams["table"] = $cartTName;
		$chartXtParams["ctype"] =  $chartPageObject->pSet->getChartType(); 
		$chartXtParams["chartname"] = $chartPageObject->shortTableName;
		$chartXtParams["singlePage"] = true;
		$xt->assign_function( $chartPageObject->shortTableName."_chart","xt_showchart", $chartXtParams );			

		$xt->assign("body", $chartPageObject->body);
		$xt->assign("chart_block", true);

		$chartPageObject->addControlsJSAndCSS();
		$chartPageObject->fillSetCntrlMaps();			
		
		$this->AddJSFile('libs/js/AnyChart.js');
		$this->AddJSFile('libs/js/AnyChartHTML5.js');			
		
		$this->copyDetailPreviewJSAndCSS( $chartPageObject ); 
		
		$this->assignDisplayDetailTableXtVariable( $chartPageObject );

		//add detail settings to master settings
		$this->updateSettingsWidthDPData( $chartPageObject );
		
		
		$this->viewControlsMap["dViewControlsMap"][ $cartTName ] = $chartPageObject->viewControlsMap;

		$this->controlsMap["dControlsMap"][ $cartTName ] = $chartPageObject->controlsMap;
		$this->controlsMap["dControlsMap"]["useFlashChartLibrary"] = $useFlashChartLibrary;		
		$this->controlsMap["dpTablesParams"][] = array("tName" => $cartTName, "id" => $options['id'], "pType" => PAGE_CHART, "pParam" => $chartXtParams);		
	}

	/**
	 * Get the key values array form the record data array passed
	 * // It's used on the edit/view pages only
	 * @param Array data
	 * @return Array
	 */
	protected function getKeysFromData( $data )
	{
		$keys = array();
		
		$keyFields = $this->pSet->getTableKeys();
		foreach( $keyFields as $keyField )
		{
			$keys[ $keyField ] = $data[ $keyField ];
		}		
		return $keys;
	}
	
	/**
	 * Add detail JS and CSS files to the master's files list
	 * @param &RunnerPage dtPageObject
	 */	
	protected function copyDetailPreviewJSAndCSS( &$dtPageObject )
	{
		$layout = GetPageLayout( GoodFieldName( $dtPageObject->tName ), $dtPageObject->pageType );
		if($layout)
			$this->AddCSSFile( $layout->getCSSFiles(isRTL(), isPageLayoutMobile($this->templatefile)) );				
		
		//Add detail's js files to master's files
		$this->copyAllJSFiles( $dtPageObject->grabAllJSFiles() );
		//Add detail's css files to master's files
		$this->copyAllCSSFiles( $dtPageObject->grabAllCSSFiles() );			
	}
	
	/**
	 * Add detail settings to master settings
	 * @param &RunnerPage dtPageObject
	 */
	protected function updateSettingsWidthDPData( &$dtPageObject )
	{
		$tName = $dtPageObject->tName;
		
		$this->jsSettings["tableSettings"][ $tName ] = $dtPageObject->jsSettings["tableSettings"][ $tName ];
		foreach($dtPageObject->jsSettings["global"]["shortTNames"] as $keySet => $val)
		{
			if( !array_key_exists($keySet, $this->settingsMap["globalSettings"]["shortTNames"]) )
				$this->settingsMap["globalSettings"]["shortTNames"][ $keySet ] = $val;
		}		
	}
	
	/**
	 * @param &RunnerPage dtPageObject
	 */
	protected function assignDisplayDetailTableXtVariable( &$dtPageObject )
	{
		$this->xt->assign("details_".GoodFieldName($dtPageObject->tName), true);
		
		$xtParams = array("params" => false);
		AssignMethod($xtParams, 'showPageDp', $dtPageObject);
		$this->xt->assign("displayDetailTable_".GoodFieldName($dtPageObject->tName), $xtParams);		
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
			return GetTableCaption($table).", "."Import";
		if( $page == "search" )
			return GetTableCaption($table)." - "."Advanced search";
		if( $page == "print" )
			return GetTableCaption($table);
		if( $page == "rprint" )
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
		if( $page == "dashboard" )
			return GetTableCaption($table);	
		if( $page == "menu" )
			return "Menu";
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
	 * @param String field name (A good field name case-sensitive)
	 * @param String label value
	 * @return Boolean
	 */
	public function setFieldLabel($field, $label)
	{
		global $field_labels;
		if(isset($field_labels[GoodFieldName($this->tName)][mlang_getcurrentlang()][GoodFieldName($field)]))
		{
			$field_labels[GoodFieldName($this->tName)][mlang_getcurrentlang()][GoodFieldName($field)] = $label;
			return true;
		}
		else return false;
	}
	
	protected function assignBody()
	{
		$this->body["begin"] .= GetBaseScriptsForPage(false);
		if( !isMobile() )
			$this->body["begin"] .= "<div id=\"search_suggest".$this->id."\"></div>\r\n";
		
		$this->body['end'] = array();
		AssignMethod($this->body['end'], "assignBodyEnd", $this);
		$this->xt->assign("body", $this->body);
	}
	
	/**
	 *
	 */
	public function getInputElementId( $field, $pSet = null )
	{
		if( !$pSet )
			$pSet = $this->pSet;
		$format = $pSet->getEditFormat( $field );
		if($format == EDIT_FORMAT_DATE)
		{
			$type = $pSet->getDateEditType($field);
			if($type==EDIT_DATE_DD || $type==EDIT_DATE_DD_DP)
				return "dayvalue_".GoodFieldName($field)."_".$this->id;
			else
				return "value_".GoodFieldName($field)."_".$this->id;
		}
		else if($format==EDIT_FORMAT_RADIO)
			return "radio_".GoodFieldName($field)."_".$this->id."_0";
		else if($format==EDIT_FORMAT_LOOKUP_WIZARD)	
		{
			$lookuptype=$pSet->lookupControlType($field);
			if($lookuptype==LCT_AJAX || $lookuptype==LCT_LIST)
				return "display_value_".GoodFieldName($field)."_".$this->id;
			else
				return "value_".GoodFieldName($field)."_".$this->id;
		}	
		else
			return "value_".GoodFieldName($field)."_".$this->id;		
	}
	
	/**
	 * Get the current record data to build correct edit controls (xt_buildeditcontrol)
	 * @return Array
	 */
	public function getFieldControlsData()
	{
		return array();
	}
	
	/**
	 * @return Boolean
	 */
	public function isSearchPanelActivated()
	{
		return $this->searchPanelActivated;
	}
	
	/**
	 *	Builds SQL expression based on key values:
	 * 	key1=1 and key2='a'
	 *	
	 *	@return String
	 */
	public function keysSQLExpression( $keys )
	{
		$keyFields = $this->pSet->getTableKeys();
		$chunks = array();
		foreach($keyFields as $kf)
		{
			$value = $this->cipherer->MakeDBValue($kf, $keys[ $kf ], "", true);
			
			if( $this->connection->dbType == nDATABASE_Oracle )
				$valueisnull = $value === "null" || $value == "''";
			else
				$valueisnull = $value === "null";
			
			if( $valueisnull )
				$chunks[] = $this->getFieldSQL( $kf )." is null";
			else
				$chunks[] = $this->getFieldSQLDecrypt( $kf )."=".$this->cipherer->MakeDBValue($kf, $keys[ $kf ], "", true);
		}
		return implode( " and ", $chunks );
	}
	/**
	 * Counts totals, depending on theirs type
	 *
	 * @param array $totals
	 * @param array $data
	 */
	function countTotals(&$totals, &$data) 
	{
		for($i = 0; $i < count($this->totalsFields); $i ++)
		{
			if($this->totalsFields[$i]['totalsType'] == 'COUNT')
			{
				if(0 != strlen($data[$this->totalsFields[$i]['fName']]))
					$totals[$this->totalsFields[$i]['fName']]++;
			}
			else if($this->totalsFields[$i]['viewFormat'] == "Time") 
			{
				$time = GetTotalsForTime($data[$this->totalsFields[$i]['fName']]);
				$totals[$this->totalsFields[$i]['fName']] += $time[2]+$time[1]*60 + $time[0]*3600;
			}
			else
				$totals[$this->totalsFields[$i]['fName']]+=($data[$this->totalsFields[$i]['fName']]+ 0);
		
			if($this->totalsFields[$i]['totalsType'] == 'AVERAGE')
			{
				if(!is_null($data[$this->totalsFields[$i]['fName']]) && $data[$this->totalsFields[$i]['fName']]!=="")
					$this->totalsFields[$i]['numRows']++;
			}
		}
	}
}

$menuNodesObject = null;
?>
