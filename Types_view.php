<?php
// This script and data application were generated by AppGini 5.70
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/Types.php");
	include("$currDir/Types_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('Types');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "Types";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = array(   
		"`Types`.`id`" => "id",
		"`Types`.`Name`" => "Name",
		"`Types`.`tt`" => "tt",
		"`Types`.`CC`" => "CC",
		"`Types`.`ID_N`" => "ID_N",
		"`Types`.`n`" => "n"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`Types`.`id`',
		2 => 2,
		3 => 3,
		4 => 4,
		5 => '`Types`.`ID_N`',
		6 => '`Types`.`n`'
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = array(   
		"`Types`.`id`" => "id",
		"`Types`.`Name`" => "Mã Nhà Cung Cấp",
		"`Types`.`tt`" => "Nhà Cung Cấp",
		"`Types`.`CC`" => "Email",
		"`Types`.`ID_N`" => "Số Điện Thoại",
		"`Types`.`n`" => "Mã Số Thuế"
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters = array(   
		"`Types`.`id`" => "id",
		"`Types`.`Name`" => "Mã Nhà Cung Cấp",
		"`Types`.`tt`" => "Nhà Cung Cấp",
		"`Types`.`CC`" => "Email",
		"`Types`.`ID_N`" => "Số Điện Thoại",
		"`Types`.`n`" => "Mã Số Thuế"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS = array(   
		"`Types`.`id`" => "id",
		"`Types`.`Name`" => "Mã Nhà Cung Cấp",
		"`Types`.`tt`" => "Nhà Cung Cấp",
		"`Types`.`CC`" => "Email",
		"`Types`.`ID_N`" => "Số Điện Thoại",
		"`Types`.`n`" => "Mã Số Thuế"
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array();

	$x->QueryFrom = "`Types` ";
	$x->QueryWhere = '';
	$x->QueryOrder = '';

	$x->AllowSelection = 1;
	$x->HideTableView = ($perm[2]==0 ? 1 : 0);
	$x->AllowDelete = $perm[4];
	$x->AllowMassDelete = true;
	$x->AllowInsert = $perm[1];
	$x->AllowUpdate = $perm[3];
	$x->SeparateDV = 1;
	$x->AllowDeleteOfParents = 0;
	$x->AllowFilters = 1;
	$x->AllowSavingFilters = 1;
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = 1;
	$x->AllowCSV = 1;
	$x->RecordsPerPage = 10;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation["quick search"];
	$x->ScriptFileName = "Types_view.php";
	$x->RedirectAfterInsert = "Types_view.php?SelectedID=#ID#";
	$x->TableTitle = "Danh Sách Nhà Cung Cấp";
	$x->TableIcon = "resources/table_icons/books.png";
	$x->PrimaryKey = "`Types`.`id`";

	$x->ColWidth   = array(  150,150,150,150,150);
	$x->ColCaption = array(" Mã Nhà Cung Cấp","Nhà Cung Cấp","Email","Số Điện Thoại","Mã Số Thuế");
	$x->ColFieldName = array('Name','tt','CC','ID_N','n');
	$x->ColNumber  = array(2,3,4,5,6);

	// template paths below are based on the app main directory
	$x->Template = 'templates/Types_templateTV.html';
	$x->SelectedTemplate = 'templates/Types_templateTVS.html';
	$x->TemplateDV = 'templates/Types_templateDV.html';
	$x->TemplateDVP = 'templates/Types_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->ShowRecordSlots = 0;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HighlightColor = '#FFF0C2';

	// mm: build the query based on current member's permissions
	$DisplayRecords = $_REQUEST['DisplayRecords'];
	if(!in_array($DisplayRecords, array('user', 'group'))){ $DisplayRecords = 'all'; }
	if($perm[2]==1 || ($perm[2]>1 && $DisplayRecords=='user' && !$_REQUEST['NoFilter_x'])){ // view owner only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `Types`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='Types' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `Types`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='Types' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`Types`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: Types_init
	$render=TRUE;
	if(function_exists('Types_init')){
		$args=array();
		$render=Types_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: Types_header
	$headerCode='';
	if(function_exists('Types_header')){
		$args=array();
		$headerCode=Types_header($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$headerCode){
		include_once("$currDir/header.php"); 
	}else{
		ob_start(); include_once("$currDir/header.php"); $dHeader=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%HEADER%%>', $dHeader, $headerCode);
	}

	echo $x->HTML;
	// hook: Types_footer
	$footerCode='';
	if(function_exists('Types_footer')){
		$args=array();
		$footerCode=Types_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>