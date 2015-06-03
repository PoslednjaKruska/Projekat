<?php

require_once('CITestCase.php');

class MyTest extends CITestCase
{    
    public function setUp()
    {
        $this->CI->load->helper('email');
    }

    public function testEmailValidation()
    {
        $this->assertTrue(valid_email('test@test.com'));
        $this->assertFalse(valid_email('test#testcom'));
    }
}

?>