<?php
// This script and data application were generated by AppGini 5.70
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/Magazines.php");
	include("$currDir/Magazines_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('Magazines');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "Magazines";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = array(   
		"`Magazines`.`id`" => "id",
		"`Magazines`.`Type`" => "Type",
		"`Magazines`.`Name`" => "Name",
		"if(`Magazines`.`Date_Of_Receipt`,date_format(`Magazines`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Date_Of_Receipt",
		"if(`Magazines`.`Date_Published`,date_format(`Magazines`.`Date_Published`,'%d/%m/%Y'),'')" => "Date_Published",
		"`Magazines`.`Pages`" => "Pages",
		"`Magazines`.`Price`" => "Price",
		"`Magazines`.`Publisher`" => "Publisher"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`Magazines`.`id`',
		2 => 2,
		3 => 3,
		4 => '`Magazines`.`Date_Of_Receipt`',
		5 => '`Magazines`.`Date_Published`',
		6 => '`Magazines`.`Pages`',
		7 => '`Magazines`.`Price`',
		8 => 8
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = array(   
		"`Magazines`.`id`" => "id",
		"`Magazines`.`Type`" => "Tên Trang Bị",
		"`Magazines`.`Name`" => "Nhà Cung Cấp",
		"if(`Magazines`.`Date_Of_Receipt`,date_format(`Magazines`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Ngày Lắp Đặt",
		"if(`Magazines`.`Date_Published`,date_format(`Magazines`.`Date_Published`,'%d/%m/%Y'),'')" => "Thời Gian Bảo Hành",
		"`Magazines`.`Pages`" => "Số Lượng",
		"`Magazines`.`Price`" => "Giá Thành",
		"`Magazines`.`Publisher`" => "Tổng Tiền"
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters = array(   
		"`Magazines`.`id`" => "ID",
		"`Magazines`.`Type`" => "Tên Trang Bị",
		"`Magazines`.`Name`" => "Nhà Cung Cấp",
		"`Magazines`.`Date_Of_Receipt`" => "Ngày Lắp Đặt",
		"`Magazines`.`Date_Published`" => "Thời Gian Bảo Hành",
		"`Magazines`.`Pages`" => "Số Lượng",
		"`Magazines`.`Price`" => "Giá Thành",
		"`Magazines`.`Publisher`" => "Tổng Tiền"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS = array(   
		"`Magazines`.`id`" => "id",
		"`Magazines`.`Type`" => "Tên Trang Bị",
		"`Magazines`.`Name`" => "Nhà Cung Cấp",
		"if(`Magazines`.`Date_Of_Receipt`,date_format(`Magazines`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Ngày Lắp Đặt",
		"if(`Magazines`.`Date_Published`,date_format(`Magazines`.`Date_Published`,'%d/%m/%Y'),'')" => "Thời Gian Bảo Hành",
		"`Magazines`.`Pages`" => "Số Lượng",
		"`Magazines`.`Price`" => "Giá Thành",
		"`Magazines`.`Publisher`" => "Tổng Tiền"
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array();

	$x->QueryFrom = "`Magazines` ";
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
	$x->ScriptFileName = "Magazines_view.php";
	$x->RedirectAfterInsert = "Magazines_view.php?SelectedID=#ID#";
	$x->TableTitle = "Từng Căn Hộ";
	$x->TableIcon = "resources/table_icons/blogs.png";
	$x->PrimaryKey = "`Magazines`.`id`";

	$x->ColWidth   = array(  150, 150, 150, 150, 150, 80, 150);
	$x->ColCaption = array("Tên Trang Bị", "Nhà Cung Cấp", "Ngày Lắp Đặt", "Thời Gian Bảo Hành", "Số Lượng", "Giá Thành", "Tổng Tiền");
	$x->ColFieldName = array('Type', 'Name', 'Date_Of_Receipt', 'Date_Published', 'Pages', 'Price', 'Publisher');
	$x->ColNumber  = array(2, 3, 4, 5, 6, 7, 8);

	// template paths below are based on the app main directory
	$x->Template = 'templates/Magazines_templateTV.html';
	$x->SelectedTemplate = 'templates/Magazines_templateTVS.html';
	$x->TemplateDV = 'templates/Magazines_templateDV.html';
	$x->TemplateDVP = 'templates/Magazines_templateDVP.html';

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
		$x->QueryWhere="where `Magazines`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='Magazines' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `Magazines`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='Magazines' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`Magazines`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: Magazines_init
	$render=TRUE;
	if(function_exists('Magazines_init')){
		$args=array();
		$render=Magazines_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: Magazines_header
	$headerCode='';
	if(function_exists('Magazines_header')){
		$args=array();
		$headerCode=Magazines_header($x->ContentType, getMemberInfo(), $args);
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
	if(function_exists('Magazines_footer')){
		$args=array();
		$footerCode=Magazines_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>