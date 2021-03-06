<?php
// This script and data application were generated by AppGini 5.70
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/New.php");
	include("$currDir/New_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('New');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "New";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = array(   
		"`New`.`id`" => "id",
		"`New`.`Language`" => "Language",
		"`New`.`Name`" => "Name",
		"if(`New`.`Date_Of_Receipt`,date_format(`New`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Date_Of_Receipt",
		"if(`New`.`Date_Published`,date_format(`New`.`Date_Published`,'%d/%m/%Y'),'')" => "Date_Published",
		"`New`.`Pages`" => "Pages",
		"`New`.`Price`" => "Price",
		"`New`.`Type`" => "Type",
		"`New`.`Publisher`" => "Publisher",
		"`New`.`Typess`" => "Typess",
		"`New`.`Pu`" => "Pu"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`New`.`id`',
		2 => 2,
		3 => 3,
		4 => '`New`.`Date_Of_Receipt`',
		5 => '`New`.`Date_Published`',
		6 => '`New`.`Pages`',
		7 => '`New`.`Price`',
		8 => '`New`.`Type`',
		9 => 9,
		10 =>10,
		11 => 11
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = array(   
		"`New`.`id`" => "id",
		"`New`.`Language`" => "Họ Và Tên",
		"`New`.`Name`" => " Giới Tính",
		"if(`New`.`Date_Of_Receipt`,date_format(`New`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Năm Sinh",
		"if(`New`.`Date_Published`,date_format(`New`.`Date_Published`,'%d/%m/%Y'),'')" => "Ngày Chuyển Tới",
		"`New`.`Pages`" => "Nghề Nghiệp",
		"`New`.`Price`" => "Căn Cước Công Dân",
		"`New`.`Type`" => "Email",
		"`New`.`Publisher`" => "Quê Quán",
		"`New`.`Typess`" => "Số Điện Thoại",
		"`New`.`Pu`" => "Căn Hộ Sinh Sống"
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters = array(   
		"`New`.`id`" => "ID",
		"`New`.`Language`" => "Họ Và Tên",
		"`New`.`Name`" => "Giới Tính",
		"`New`.`Date_Of_Receipt`" => "Năm Sinh",
		"`New`.`Date_Published`" => "Ngày Nhận Việc",
		"`New`.`Pages`" => "Nghề Nghiệp",
		"`New`.`Price`" => "Căn Cước Công Dân",
		"`New`.`Type`" => "Email",
		"`New`.`Publisher`" => "Quê Quán",
		"`New`.`Typess`" => "Số Điện Thoại",
		"`New`.`Pu`" => "Căn Hộ Sinh Sống"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS = array(   
"`New`.`id`" => "id",
		"`New`.`Language`" => "Họ Và Tên",
		"`New`.`Name`" => " Giới Tính",
		"if(`New`.`Date_Of_Receipt`,date_format(`New`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Năm Sinh",
		"if(`New`.`Date_Published`,date_format(`New`.`Date_Published`,'%d/%m/%Y'),'')" => "Ngày Chuyển Tới",
		"`New`.`Pages`" => "Nghề Nghiệp",
		"`New`.`Price`" => "Căn Cước Công Dân",
		"`New`.`Type`" => "Email",
		"`New`.`Publisher`" => "Quê Quán",
		"`New`.`Typess`" => "Số Điện Thoại",
		"`New`.`Pu`" => "Căn Hộ Sinh Sống"
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array();

	$x->QueryFrom = "`New` ";
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
	$x->ScriptFileName = "New_view.php";
	$x->RedirectAfterInsert = "New_view.php?SelectedID=#ID#";
	$x->TableTitle = "Danh Sách Dân Cư";
	$x->TableIcon = "resources/table_icons/books.png";
	$x->PrimaryKey = "`New`.`id`";

	$x->ColWidth   = array(  150, 150, 150, 150, 150, 80, 150, 150,150,150);
	$x->ColCaption = array("Họ Và Tên", "Giới Tính", "Năm Sinh", "Ngày Chuyển Tới", "Nghề Nghiệp",  "Căn Cước Công Dân","Email", "Quê Quán","Số Điện Thoại", "Căn Hộ Sinh Sống");
	$x->ColFieldName = array('Language', 'Name', 'Date_Of_Receipt', 'Date_Published', 'Pages', 'Price', 'Type', 'Publisher','Typess','Pu');
	$x->ColNumber  = array(2, 3, 4, 5, 6, 7, 8, 9,10,11);

	// template paths below are based on the app main directory
	$x->Template = 'templates/New_templateTV.html';
	$x->SelectedTemplate = 'templates/New_templateTVS.html';
	$x->TemplateDV = 'templates/New_templateDV.html';
	$x->TemplateDVP = 'templates/New_templateDVP.html';

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
		$x->QueryWhere="where `New`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='New' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `New`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='New' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`New`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: NewsPapers_init
	$render=TRUE;
	if(function_exists('New_init')){
		$args=array();
		$render=New_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: NewsPapers_header
	$headerCode='';
	if(function_exists('New_header')){
		$args=array();
		$headerCode=New_header($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$headerCode){
		include_once("$currDir/header.php"); 
	}else{
		ob_start(); include_once("$currDir/header.php"); $dHeader=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%HEADER%%>', $dHeader, $headerCode);
	}

	echo $x->HTML;
	// hook: NewsPapers_footer
	$footerCode='';
	if(function_exists('New_footer')){
		$args=array();
		$footerCode=New_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>