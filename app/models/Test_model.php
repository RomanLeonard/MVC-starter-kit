<?php

class Test_model extends Model{

	function test_function(){
		$f3 = Base::instance();
		$db = $f3->get('db.instance');

	}


}
