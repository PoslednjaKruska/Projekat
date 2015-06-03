<?php

class LoginTest extends PHPUnit_Framework_TestCase
{    
    private $CI;
    
    public function setUp()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('LoginModel');
    }

    public function testCheck1()
    {
        $qty = $this->CI->LoginModel->check();
        $this->assertEquals($qty, 1);
    }
    
    public function testCheck2()
    {
        $_POST['korime'] = 'udavaca';
        $_POST['lozinka'] = 'cucili';
        $qty = $this->CI->LoginModel->check();
        $this->assertEquals($qty, 0);
    }
    
    public function testCheck3()
    {
        $_POST['korime'] = 'mn120110';
        $_POST['lozinka'] = 'nensiCao';
        $qty = $this->CI->LoginModel->check();
        $this->assertEquals($qty, 10);
    }
    
    public function testCheck4()
    {
        $_POST['korime'] = 'mn120110';
        $_POST['lozinka'] = 'nesto';
        $qty = $this->CI->LoginModel->check();
        $this->assertEquals($qty, 2);
    }
    
    public function testGetParams1()
    {
        $data['username'] = 'mn120110';
        $res = $this->CI->LoginModel->getParams($data);
        $this->assertEquals($res['ime'], 'Nevena Milinkovic');
    }
    
    public function testGetParams2()
    {
        $data['username'] = 'nekiuser';
        $res = $this->CI->LoginModel->getParams($data);
        $this->assertEquals($res['ime'], '');
    }
    
    public function testGetReserv()
    {
        $data['username'] = 'markoMarko';
        $res = $this->CI->LoginModel->getReserv($data);
        $this->assertEquals($res['numOfRows'], 2);
    }
    
    public function testDohvatiRez()
    {
        $data['username'] = 'markoMarko';
        $res = $this->CI->LoginModel->dohvatiRez($data);
        $this->assertEquals($res['numOfRows'], 0);
    }
}

?>