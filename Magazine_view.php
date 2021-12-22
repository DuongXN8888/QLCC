<?php
// This script and data application were generated by AppGini 5.70
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/Magazine.php");
	include("$currDir/Magazine_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('Magazine');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "Magazine";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = array(   
		"`Magazine`.`id`" => "id",
		"`Magazine`.`Type`" => "Type",
		"`Magazine`.`Name`" => "Name",
		"if(`Magazine`.`Date_Of_Receipt`,date_format(`Magazine`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Date_Of_Receipt",
		"if(`Magazine`.`Date_Published`,date_format(`Magazine`.`Date_Published`,'%d/%m/%Y'),'')" => "Date_Published",
		"`Magazine`.`Pages`" => "Pages",
		"`Magazine`.`Price`" => "Price",
		"`Magazine`.`Publisher`" => "Publisher"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`Magazine`.`id`',
		2 => 2,
		3 => 3,
		4 => '`Magazine`.`Date_Of_Receipt`',
		5 => '`Magazine`.`Date_Published`',
		6 => '`Magazine`.`Pages`',
		7 => '`Magazine`.`Price`',
		8 => 8
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = array(   
		"`Magazine`.`id`" => "id",
		"`Magazine`.`Type`" => "Họ Và Tên",
		"`Magazine`.`Name`" => "Giới Tính",
		"if(`Magazine`.`Date_Of_Receipt`,date_format(`Magazine`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Năm Sinh",
		"if(`Magazine`.`Date_Published`,date_format(`Magazine`.`Date_Published`,'%d/%m/%Y'),'')" => "Ngày Chuyển Tới",
		"`Magazine`.`Pages`" => "Ngày Rời Đi",
		"`Magazine`.`Price`" => "Quê Quán",
		"`Magazine`.`Publisher`" => "Số Điện Thoại"
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters = array(   
		"`Magazine`.`id`" => "ID",
		"`Magazine`.`Type`" => "Họ Và Tên",
		"`Magazine`.`Name`" => "Giới Tính",
		"`Magazine`.`Date_Of_Receipt`" => "Năm Sinh",
		"`Magazine`.`Date_Published`" => "Ngày Chuyển Tới",
		"`Magazine`.`Pages`" => "Ngày Rời Đi",
		"`Magazine`.`Price`" => "Quê Quán",
		"`Magazine`.`Publisher`" => "Số Điện Thoại"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS = array(   
		"`Magazine`.`id`" => "id",
		"`Magazine`.`Type`" => "Họ Và Tên",
		"`Magazine`.`Name`" => "Giới Tính",
		"if(`Magazine`.`Date_Of_Receipt`,date_format(`Magazine`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Năm Sinh",
		"if(`Magazine`.`Date_Published`,date_format(`Magazine`.`Date_Published`,'%d/%m/%Y'),'')" => "Ngày Chuyển Tới",
		"`Magazine`.`Pages`" => "Ngày Rời Đi",
		"`Magazine`.`Price`" => "Quê Quán",
		"`Magazine`.`Publisher`" => "Số Điện Thoại"
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array();

	$x->QueryFrom = "`Magazine` ";
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
	$x->ScriptFileName = "Magazine_view.php";
	$x->RedirectAfterInsert = "Magazine_view.php?SelectedID=#ID#";
	$x->TableTitle = "Dân Cư Rời Đi";
	$x->TableIcon = "resources/table_icons/application_side_expand.png";
	$x->PrimaryKey = "`Magazine`.`id`";

	$x->ColWidth   = array(  150, 150, 150, 150, 150, 80, 150);
	$x->ColCaption = array("Họ Và Tên", "Giới Tính", "Năm Sinh", "Ngày Chuyển Tới", "Ngày Rời Đi", "Quê Quán", "Số Điện Thoại");
	$x->ColFieldName = array('Type', 'Name', 'Date_Of_Receipt', 'Date_Published', 'Pages', 'Price', 'Publisher');
	$x->ColNumber  = array(2, 3, 4, 5, 6, 7, 8);

	// template paths below are based on the app main directory
	$x->Template = 'templates/Magazine_templateTV.html';
	$x->SelectedTemplate = 'templates/Magazine_templateTVS.html';
	$x->TemplateDV = 'templates/Magazine_templateDV.html';
	$x->TemplateDVP = 'templates/Magazine_templateDVP.html';

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
		$x->QueryWhere="where `Magazine`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='Magazine' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `Magazine`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='Magazine' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`Magazine`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: Magazines_init
	$render=TRUE;
	if(function_exists('Magazine_init')){
		$args=array();
		$render=Magazine_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: Magazines_header
	$headerCode='';
	if(function_exists('Magazine_header')){
		$args=array();
		$headerCode=Magazine_header($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$headerCode){
		include_once("$currDir/header.php"); 
	}else{
		ob_start(); include_once("$currDir/header.php"); $dHeader=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%HEADER%%>', $dHeader, $headerCode);
	}

	echo $x->HTML;
	// hook: Magazines_footer
	$footerCode='';
	if(function_exists('Magazine_footer')){
		$args=array();
		$footerCode=Magazine_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>