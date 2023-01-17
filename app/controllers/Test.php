<?php

class Test extends Controller{

	function list_invoices_render(){
		$f3 = Base::instance();
		$model = new Test_model;

		$f3->set('PAGE_TITLE', 'Invoices list');
		$f3->set('CSS_PATH', 'assets/css/invoices/invoices.css');
		$f3->set('JS_PATH', 'assets/js/pages/invoice/list-invoices.js');
		$f3->set('ACTIVE_PAGE', 'invoices');

		//$f3->set('title_utility','page-utility/invoice/util_list_invoice_view.php');
		$f3->set('content','pages/.. .php');

	}

}
