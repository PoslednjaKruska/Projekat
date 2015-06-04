<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestAdministriranje
 *
 * @author ana
 */
class TestAdministriranje extends PHPUnit_Framework_TestCase {
    
    private $CI;
    
    public function setUp()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('AdminModel');
    }
    
    function testGetAdminDate(){
        $username='mn120110';
        $query = $this->CI->AdminModel->getAdminDate($username);
        $this->assertEquals($query,"04/06/2015");
    }
    
    function testGetFromDate(){
        $data['username'] = 'mn120110';
        $res = $this->CI->AdminModel->getFromDate($data);
        $this->assertEquals($res['numOfRows'], 0);  
    }
    
     function testGetServices(){
        $data['username'] = 'muzicari';
        $query = $this->CI->AdminModel->getServices($data);
        $naziv='';
        foreach ($query as $red1)
        {
            $naziv = $red1->Naziv;
        }
        $this->assertEquals($naziv,"Sviranje");
        
     }
     
      function testUslugaRet(){
        $data['id'] = 3;
        $query = $this->CI->AdminModel->uslugaRet($data);
        $this->assertEquals($query['naziv'],"Torta1");
        
    }
     

}