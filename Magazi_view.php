<?php
// This script and data application were generated by AppGini 5.70
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/Magazi.php");
	include("$currDir/Magazi_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('Magazi');
	if(!$perm[0]){
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "Magazi";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = array(   
		"`Magazi`.`id`" => "id",
		"`Magazi`.`Type`" => "Type",
		"`Magazi`.`Name`" => "Name",
		"if(`Magazi`.`Date_Of_Receipt`,date_format(`Magazi`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Date_Of_Receipt",
		"if(`Magazi`.`Date_Published`,date_format(`Magazi`.`Date_Published`,'%d/%m/%Y'),'')" => "Date_Published",
		"`Magazi`.`Pages`" => "Pages",
		"`Magazi`.`Price`" => "Price",
		"`Magazi`.`Publisher`" => "Publisher"
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(   
		1 => '`Magazi`.`id`',
		2 => 2,
		3 => 3,
		4 => '`Magazi`.`Date_Of_Receipt`',
		5 => '`Magazi`.`Date_Published`',
		6 => '`Magazi`.`Pages`',
		7 => '`Magazi`.`Price`',
		8 => 8
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = array(   
		"`Magazi`.`id`" => "id",
		"`Magazi`.`Type`" => "Thiết Bị Đã Sửa Chữa",
		"`Magazi`.`Name`" => "Số Lượng",
		"if(`Magazi`.`Date_Of_Receipt`,date_format(`Magazi`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Ngày Sửa Chữa",
		"if(`Magazi`.`Date_Published`,date_format(`Magazi`.`Date_Published`,'%d/%m/%Y'),'')" => "Thanh Toán Ngày",
		"`Magazi`.`Pages`" => "Công Ty Sửa Chữa",
		"`Magazi`.`Price`" => "Chi Phí Sửa Chữa",
		"`Magazi`.`Publisher`" => "Ghi Chú"
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters = array(   
		"`Magazi`.`id`" => "ID",
		"`Magazi`.`Type`" => " Thiết Bị Đã Sửa Chữa",
		"`Magazi`.`Name`" => "Số Lượng",
		"`Magazi`.`Date_Of_Receipt`" => "Ngày Sửa Chữa",
		"`Magazi`.`Date_Published`" => "Thanh Toán Ngày",
		"`Magazi`.`Pages`" => "Công Ty Sửa Chữa",
		"`Magazi`.`Price`" => "Chi Phí Sửa Chữa",
		"`Magazi`.`Publisher`" => "Ghi Chú"
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS = array(   
		"`Magazi`.`id`" => "id",
		"`Magazi`.`Type`" => "Thiết Bị Đã Sửa Chữa",
		"`Magazi`.`Name`" => "Số Lượng",
		"if(`Magazi`.`Date_Of_Receipt`,date_format(`Magazi`.`Date_Of_Receipt`,'%d/%m/%Y'),'')" => "Ngày Sửa Chữa",
		"if(`Magazi`.`Date_Published`,date_format(`Magazi`.`Date_Published`,'%d/%m/%Y'),'')" => "Thanh Toán Ngày",
		"`Magazi`.`Pages`" => "Công Ty Sửa Chữa",
		"`Magazi`.`Price`" => "Chi Phí Sửa Chữa",
		"`Magazi`.`Publisher`" => "Ghi Chú"
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array();

	$x->QueryFrom = "`Magazi` ";
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
	$x->ScriptFileName = "Magazi_view.php";
	$x->RedirectAfterInsert = "Magazi_view.php?SelectedID=#ID#";
	$x->TableTitle = "Chi Phí Sửa Chữa";
	$x->TableIcon = "resources/table_icons/blogs.png";
	$x->PrimaryKey = "`Magazi`.`id`";

	$x->ColWidth   = array(  150, 150, 150, 150, 150, 80, 150);
	$x->ColCaption = array("Thiết Bị Đã Sửa Chữa", "Số Lượng", "Ngày Sửa Chữa", "Thanh Toán Ngày", "Công Ty Sửa Chữa", "Chi Phí Sửa Chữa", "Ghi Chú");
	$x->ColFieldName = array('Type', 'Name', 'Date_Of_Receipt', 'Date_Published', 'Pages', 'Price', 'Publisher');
	$x->ColNumber  = array(2, 3, 4, 5, 6, 7, 8);

	// template paths below are based on the app main directory
	$x->Template = 'templates/Magazi_templateTV.html';
	$x->SelectedTemplate = 'templates/Magazi_templateTVS.html';
	$x->TemplateDV = 'templates/Magazi_templateDV.html';
	$x->TemplateDVP = 'templates/Magazi_templateDVP.html';

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
		$x->QueryWhere="where `Magazi`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='Magazi' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])){ // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `Magazi`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='Magazi' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3){ // view all
		// no further action
	}elseif($perm[2]==0){ // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`Magazi`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: Magazines_init
	$render=TRUE;
	if(function_exists('Magazi_init')){
		$args=array();
		$render=Magazi_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: Magazines_header
	$headerCode='';
	if(function_exists('Magazi_header')){
		$args=array();
		$headerCode=Magazi_header($x->ContentType, getMemberInfo(), $args);
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
	if(function_exists('Magazi_footer')){
		$args=array();
		$footerCode=Magazi_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode){
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>