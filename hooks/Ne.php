<?php
	// For help on using hooks, please refer to https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks

	function Ne_init(&$options, $memberInfo, &$args){

		return TRUE;
	}

	function Ne_header($contentType, $memberInfo, &$args){
		$header='';

		switch($contentType){
			case 'tableview':
				$header='';
				break;

			case 'detailview':
				$header='';
				break;

			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;
		}

		return $header;
	}

	function Ne_footer($contentType, $memberInfo, &$args){
		$footer='';

		switch($contentType){
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;
		}

		return $footer;
	}

	function Ne_before_insert(&$data, $memberInfo, &$args){

		return TRUE;
	}

	function Ne_after_insert($data, $memberInfo, &$args){

		return TRUE;
	}

	function Ne_before_update(&$data, $memberInfo, &$args){

		return TRUE;
	}

	function Ne_after_update($data, $memberInfo, &$args){

		return TRUE;
	}

	function Ne_before_delete($selectedID, &$skipChecks, $memberInfo, &$args){

		return TRUE;
	}

	function Ne_after_delete($selectedID, $memberInfo, &$args){

	}

	function Ne_dv($selectedID, $memberInfo, &$html, &$args){

	}

	function Ne_csv($query, $memberInfo, &$args){

		return $query;
	}
	function Ne_batch_actions(&$args){

		return array();
	}
