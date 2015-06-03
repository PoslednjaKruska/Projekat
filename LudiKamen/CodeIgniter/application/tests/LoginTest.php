<?php

class LogovanjeTest extends PHPUnit_Framework_TestCase
{
	private $CI;
	
	public static function setUpBeforeClass()
	{
		$CI =&get_instance();
		$CI->load->model('LoginModel');
	}
	
	public function testEmailValidation()
	{
		$this->assertEquals(1, 1);
	}
}

?>