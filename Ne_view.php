<?php
// This script and data application were generated by AppGini 5.70
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/Ne.php");
	include("$currDir/Ne_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('Ne');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "Ne";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = array(   
		"`Ne`.`id`" => "id",
		"`Ne`.`Language`" => "Language",
		"`Ne`.`Name`" => "Name",
		"if(`Ne`.`Date_Of_Receipt`,date_format(`Ne`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Date_Of_Receipt",
		"if(`Ne`.`Date_Published`,date_format(`Ne`.`Date_Published`,'%d/%m/%Y'),'')" => "Date_Published",
		"`Ne`.`Pages`" => "Pages",
		"`Ne`.`Price`" => "Price",
		"`Ne`.`Type`" => "Type",
		"`Ne`.`Publisher`" => "Publisher",
		"`Ne`.`Typess`" => "Typess",
		"`Ne`.`Pu`" => "Pu"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`Ne`.`id`',
		2 => 2,
		3 => 3,
		4 => '`Ne`.`Date_Of_Receipt`',
		5 => '`Ne`.`Date_Published`',
		6 => '`Ne`.`Pages`',
		7 => '`Ne`.`Price`',
		8 => '`Ne`.`Type`',
		9 => 9,
		10 =>10,
		11 => 11
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = array(   
		"`Ne`.`id`" => "id",
		"`Ne`.`Language`" => "Mã Công Ty",
		"`Ne`.`Name`" => " Tên Công Ty",
		"if(`Ne`.`Date_Of_Receipt`,date_format(`Ne`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Ngày Thành Lập",
		"if(`Ne`.`Date_Published`,date_format(`Ne`.`Date_Published`,'%d/%m/%Y'),'')" => "Ngày Sửa Chữa",
		"`Ne`.`Pages`" => "Sửa Chữa",
		"`Ne`.`Price`" => "Tên Giám Đốc",
		"`Ne`.`Type`" => "Email",
		"`Ne`.`Publisher`" => "Địa Chỉ",
		"`Ne`.`Typess`" => "Số Điện Thoại",
		"`Ne`.`Pu`" => "Ghi Chú"
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters = array(   
		"`Ne`.`id`" => "id",
		"`Ne`.`Language`" => "Mã Công Ty",
		"`Ne`.`Name`" => " Tên Công Ty",
		"`Ne`.`Date_Of_Receipt`" => "Ngày Thành Lập",
		"`Ne`.`Date_Published`" => "Ngày Sửa Chữa",
		"`Ne`.`Pages`" => "Sửa Chữa",
		"`Ne`.`Price`" => "Tên Giám Đốc",
		"`Ne`.`Type`" => "Email",
		"`Ne`.`Publisher`" => "Địa Chỉ",
		"`Ne`.`Typess`" => "Số Điện Thoại",
		"`Ne`.`Pu`" => "Ghi Chú"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS = array(   
		"`Ne`.`id`" => "id",
		"`Ne`.`Language`" => "Mã Công Ty",
		"`Ne`.`Name`" => " Tên Công Ty",
		"if(`Ne`.`Date_Of_Receipt`,date_format(`Ne`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Ngày Thành Lập",
		"if(`Ne`.`Date_Published`,date_format(`Ne`.`Date_Published`,'%d/%m/%Y'),'')" => "Ngày Sửa Chữa",
		"`Ne`.`Pages`" => "Sửa Chữa",
		"`Ne`.`Price`" => "Tên Giám Đốc",
		"`Ne`.`Type`" => "Email",
		"`Ne`.`Publisher`" => "Địa Chỉ",
		"`Ne`.`Typess`" => "Số Điện Thoại",
		"`Ne`.`Pu`" => "Ghi Chú"

	);

	// Lookup fields that can be used as filterers
	$x->filterers = array();

	$x->QueryFrom = "`Ne` ";
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
	$x->ScriptFileName = "Ne_view.php";
	$x->RedirectAfterInsert = "Ne_view.php?SelectedID=#ID#";
	$x->TableTitle = " Danh Sách Công Ty Sữa Chữa Trang Thiết Bị";
	$x->TableIcon = "resources/table_icons/books.png";
	$x->PrimaryKey = "`Ne`.`id`";

	$x->ColWidth   = array(  150, 150, 150, 150, 150, 150, 80, 150,150,150);
	$x->ColCaption = array("Mã Công Ty", "Tên Công Ty", "Ngày Thành Lập", "Ngày Sửa Chữa", " Sửa Chữa", "Tên Giám Đốc ", "Email", "Địa Chỉ","Số Điện Thoại", "Ghi Chú");
	$x->ColFieldName = array('Language', 'Name', 'Date_Of_Receipt', 'Date_Published', 'Pages', 'Price', 'Type', 'Publisher','Typess','Pu');
	$x->ColNumber  = array(2, 3, 4, 5, 6, 7, 8, 9,10,11);

	// template paths below are based on the app main directory
	$x->Template = 'templates/Ne_templateTV.html';
	$x->SelectedTemplate = 'templates/Ne_templateTVS.html';
	$x->TemplateDV = 'templates/Ne_templateDV.html';
	$x->TemplateDVP = 'templates/Ne_templateDVP.html';

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
		$x->QueryWhere="where `Ne`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='Ne' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `Ne`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='Ne' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`Ne`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: NewsPapers_init
	$render=TRUE;
	if(function_exists('Ne_init')){
		$args=array();
		$render=Ne_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: NewsPapers_header
	$headerCode='';
	if(function_exists('Ne_header')){
		$args=array();
		$headerCode=Ne_header($x->ContentType, getMemberInfo(), $args);
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
	if(function_exists('Ne_footer')){
		$args=array();
		$footerCode=Ne_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>