<?php

class MuzikaTest extends PHPUnit_Framework_TestCase
{    
    private $CI;
    
    public function setUp()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('MuzikaModel');
    }

    public function testNumRows()
    {
        $qty = $this->CI->MuzikaModel->numRows();
        $this->assertEquals($qty, 1);
    }
    
    public function testGetAll()
    {
        $query = $this->CI->MuzikaModel->getAll();
        $poslednji = '';
        foreach ($query as $row) {
            $poslednji = $row->ImePrezime;
        }
        $this->assertEquals($poslednji, 'Muzicari Koji Piju');
    }
    
    public function testGetOne()
    {   
        $naziv = "Muzicari Koji Piju";
        $query = $this->CI->MuzikaModel->getOne($naziv);
        $poslednji = '';
        foreach ($query as $row) {
            $poslednji = $row->ImePrezime;
        }
        $this->assertEquals($poslednji, 'Muzicari Koji Piju');
    }
    
    public function testRezervisi1()
    {   
        $korisnik = 'tiksiMacka';
        $usluga = 'Muzicari Koji Piju';
        $datum = '10/22/2015';
        $qty = $this->CI->MuzikaModel->rezervisi($korisnik, $usluga, $datum);
        $this->assertEquals($qty, 2);
    }
    
    public function testRezervisi2()
    {   
        $korisnik = 'markoMarko';
        $usluga = 'Muzicari Koji Piju';
        $datum = '10/22/2015';
        $qty = $this->CI->MuzikaModel->rezervisi($korisnik, $usluga, $datum);
        $this->assertEquals($qty, 1);
    }
    
    public function testRezervisi3()
    {   
        $korisnik = 'markoMarko';
        $usluga = 'Muzicari Koji Piju';
        $datum = '10/22/2015';
        $qty = $this->CI->MuzikaModel->rezervisi($korisnik, $usluga, $datum);
        $this->assertEquals($qty, 3);
    }
    
}

?>