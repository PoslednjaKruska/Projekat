<?php

class RestoranTest extends PHPUnit_Framework_TestCase
{    
    private $CI;
    
    public function setUp()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('RestoranModel');
    }

    public function testNumRows()
    {
        $qty = $this->CI->RestoranModel->numRows();
        $this->assertEquals($qty, 1);
    }
    
    public function testGetAll()
    {
        $query = $this->CI->RestoranModel->getAll();
        $poslednji = '';
        foreach ($query as $row) {
            $poslednji = $row->ImePrezime;
        }
        $this->assertEquals($poslednji, 'Restoran Gajic');
    }
    
    public function testGetOne()
    {   
        $naziv = "Restoran Gajic";
        $query = $this->CI->RestoranModel->getOne($naziv);
        $poslednji = '';
        foreach ($query as $row) {
            $poslednji = $row->ImePrezime;
        }
        $this->assertEquals($poslednji, 'Restoran Gajic');
    }
    
    public function testRezervisi1()
    {   
        $korisnik = 'markoMarko';
        $usluga = 'Restoran Gajic';
        $datum = '10/22/2015';
        $qty = $this->CI->RestoranModel->rezervisi($korisnik, $usluga, $datum);
        $this->assertEquals($qty, 2);
    }
    
    public function testRezervisi2()
    {   
        $korisnik = 'udavaca';
        $usluga = 'Restoran Gajic';
        $datum = '10/22/2015';
        $qty = $this->CI->RestoranModel->rezervisi($korisnik, $usluga, $datum);
        $this->assertEquals($qty, 1);
    }
    
    public function testRezervisi3()
    {   
        $korisnik = 'tiksiMacka';
        $usluga = 'Restoran Gajic';
        $datum = '11/12/2015';
        $qty = $this->CI->RestoranModel->rezervisi($korisnik, $usluga, $datum);
        $this->assertEquals($qty, 3);
    }
    
}

?>