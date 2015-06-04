<?php
// Autor: Nevena Milinkovic

class TorteTest extends PHPUnit_Framework_TestCase
{    
    private $CI;
    
    public function setUp()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('TorteModel');
    }

    public function testNumRows1()
    {
        $_POST['grad'] = 'Beograd';
        $numRows = $this->CI->TorteModel->numRows();
        $this->assertEquals($numRows, 1);
    }
    
    public function testNumRows0()
    {
        $_POST['grad'] = 'Loznica';
        $numRows = $this->CI->TorteModel->numRows();
        $this->assertEquals($numRows, 0);
    }
    
    public function testGetAll()
    {
        $_POST['grad'] = "";
        $query = $this->CI->TorteModel->getAll();
        $naziv = '';
        foreach ($query as $red) {
            $naziv = $red->ImePrezime;
        }
        $this->assertEquals($naziv, 'Poslasticarnica Srce');
    }
    
    public function testGetOne()
    {   
        $naziv = "Poslasticarnica Srce";
        $query = $this->CI->TorteModel->getOne($naziv);
        $naziv = '';
        foreach ($query as $row) {
            $naziv = $row->ImePrezime;
        }
        $this->assertEquals($naziv, 'Poslasticarnica Srce');
    }
    
     public function testGetOneZero()
    {   
        $naziv = "Poslasticarnica Srceeee";
        $query = $this->CI->TorteModel->getOne($naziv);
        $naziv = '';
        foreach ($query as $row) {
            $naziv = $row->ImePrezime;
        }
        $this->assertEquals($naziv, '');
    }
    
    public function testRezervisiUser()
    {   
        $korisnik = '';
        $usluga = 'Torta1';
        $datum = '10/22/2015';
        $qty = $this->CI->TorteModel->rezervisi($korisnik, $usluga, $datum);
        $this->assertEquals($qty, 3);
    }
    public function testRezervisiUsluga()
    {   
        $korisnik = 'udavaca';
        $usluga = '';
        $datum = '10/22/2015';
        $qty = $this->CI->TorteModel->rezervisi($korisnik, $usluga, $datum);
        $this->assertEquals($qty, 3);
    }
    
    public function testRezervisiSuccess()
    {   
        $korisnik = 'udavaca';
        $usluga = 'Torta1';
        $datum = '10/22/2015';
        $qty = $this->CI->TorteModel->rezervisi($korisnik, $usluga, $datum);
        $this->assertEquals($qty, 1);
    }
    
    public function testRezervisiAgain()
    {   
        $korisnik = 'tiksiMacka';
        $usluga = 'Torta1';
        $datum = '22/22/2015';
        $qty = $this->CI->TorteModel->rezervisi($korisnik, $usluga, $datum);
        $this->assertEquals($qty, 1);
    }
    
}

?>