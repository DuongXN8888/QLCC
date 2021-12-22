<?php
// This script and data application were generated by AppGini 5.70
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/Ty.php");
	include("$currDir/Ty_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('Ty');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "Ty";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = array(   
		"`Ty`.`id`" => "id",
		"`Ty`.`Na`" => "Na",
		"`Ty`.`t`" => "t",
		"`Ty`.`C`" => "C",
		"`Ty`.`D`" => "D",
		"`Ty`.`I`" => "I",
		"`Ty`.`e`" => "e",
		"`Ty`.`f`" => "f"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`Ty`.`id`',
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 =>'`Ty`.`I`',
		7 => 7,
		8 =>'`Ty`.`f`'
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = array(   
		"`Ty`.`id`" => "STT",
		"`Ty`.`Na`" => "Mã Hợp Đồng",
		"`Ty`.`t`" => "Khách Hàng",
		"`Ty`.`C`" => "Khu Vực Thuê",
		"`Ty`.`D`" => "Giá Thuê / Tháng",
		"`Ty`.`I`" => "Thanh Toán",
		"`Ty`.`e`" => "Quản Lý Chung Cư",
		"`Ty`.`f`" => "Ghi Chú"

	);
	// Fields that can be filtered
	$x->QueryFieldsFilters = array(   
		"`Ty`.`id`" => "STT",
		"`Ty`.`Na`" => "Mã Hợp Đồng",
		"`Ty`.`t`" => "Khách Hàng",
		"`Ty`.`C`" => "Khu Vực Thuê",
		"`Ty`.`D`" => "Giá Thuê / Tháng",
		"`Ty`.`I`" => "Thanh Toán",
		"`Ty`.`e`" => "Quản Lý Chung Cư",
		"`Ty`.`f`" => "Ghi Chú"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS = array(   
		"`Ty`.`id`" => "STT",
		"`Ty`.`Na`" => "Mã Hợp Đồng",
		"`Ty`.`t`" => "Khách Hàng",
		"`Ty`.`C`" => "Khu Vực Thuê",
		"`Ty`.`D`" => "Giá Thuê / Tháng",
		"`Ty`.`I`" => "Thanh Toán",
		"`Ty`.`e`" => "Quản Lý Chung Cư",
		"`Ty`.`f`" => "Ghi Chú"
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array();

	$x->QueryFrom = "`Ty` ";
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
	$x->ScriptFileName = "Ty_view.php";
	$x->RedirectAfterInsert = "Ty_view.php?SelectedID=#ID#";
	$x->TableTitle = "Doanh Thu Cho Thuê Mặt Bằng";
	$x->TableIcon = "resources/table_icons/blogs.png";
	$x->PrimaryKey = "`Ty`.`id`";

	$x->ColWidth   = array(  150,150,150,150,150,150,150);
	$x->ColCaption = array("Mã Hợp Đồng","Khách Hàng","Khu Vực Thuê","Giá Thuê / Tháng","Thanh Toán","Quản Lý Chung Cư","Ghi Chú");
	$x->ColFieldName = array('Na','t','C','D','I','e','f');
	$x->ColNumber  = array(2,3,4,5,6,7,8);

	// template paths below are based on the app main directory
	$x->Template = 'templates/Ty_templateTV.html';
	$x->SelectedTemplate = 'templates/Ty_templateTVS.html';
	$x->TemplateDV = 'templates/Ty_templateDV.html';
	$x->TemplateDVP = 'templates/Ty_templateDVP.html';

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
		$x->QueryWhere="where `Ty`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='Ty' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `Ty`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='Ty' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`Ty`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: Types_init
	$render=TRUE;
	if(function_exists('Ty_init')){
		$args=array();
		$render=Ty_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: Types_header
	$headerCode='';
	if(function_exists('Ty_header')){
		$args=array();
		$headerCode=Ty_header($x->ContentType, getMemberInfo(), $args);
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
	if(function_exists('Ty_footer')){
		$args=array();
		$footerCode=Ty_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>