<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestUnos
 *
 * @author ana
 */
class TestUnos extends PHPUnit_Framework_TestCase {
    
    private $CI;
    
    public function setUp()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('PomocniModel');
    }
       
   function testGetEmail(){
        $naziv='Teodora Aleksic';
        $query = $this->CI->PomocniModel->getEmail($naziv);
        $poslednji = '';
        foreach ($query as $row) {
            $poslednji = $row->Email;
        }
        $this->assertEquals($poslednji,"teodora.nema@hotmail.com");
    }
    
     function testGetPrice1(){
        $naziv='Torta1';
        $query = $this->CI->PomocniModel->getPrice1($naziv);
        $poslednji = '';
        foreach ($query as $row) {
            $poslednji = $row->Cena;
        }
        $this->assertEquals($poslednji,200);
    }
    
    function testGetPrice(){
        $naziv='Poslasticarnica Srce';
        $query = $this->CI->PomocniModel->getPrice($naziv);
        $poslednji = '';
        foreach ($query as $row) {
            $poslednji = $row->Cena;
        }
         $this->assertEquals($poslednji,200);
    }
    
     function testGetKorisnik1(){
        $username='udavaca';
        $query = $this->CI->PomocniModel->getKorisnik($username);
        $poslednji = '';
        foreach ($query as $row) {
            $poslednji = $row->ImePrezime;
        }
         $this->assertEquals($poslednji,"Teodora Aleksic");
    }
  
    function testGetKorisnik2(){
        $username='udavaca';
        $query = $this->CI->PomocniModel->getKorisnik($username);
        $poslednji = '';
        foreach ($query as $row) {
            $poslednji = $row->Adresa;
        }
         $this->assertEquals($poslednji,"Deponijaaa");
    }
    
     function testGetKorisnik3(){
        $username='udavaca';
        $query = $this->CI->PomocniModel->getKorisnik($username);
        $poslednji = '';
        foreach ($query as $row) {
            $poslednji = $row->Email;
        }
         $this->assertEquals($poslednji,"teodora.nema@hotmail.com");
    }
    
     function testGetName(){
        $username='udavaca';
        $query = $this->CI->PomocniModel->getName($username);
        $poslednji = '';
        foreach ($query as $row) {
            $poslednji = $row->ImePrezime;
        }
         $this->assertEquals($poslednji,"Teodora Aleksic");
    }
    function testUnesiUslugu1(){
        $naziv = 'Restoran12334';
        $opis = 'restoran';
        $cena = '50';
        $pruzalac = 'salon123';
        $velicina = '400';
        $kategorija = 5;
        $qty = $this->CI->PomocniModel->unesiUslugu($naziv, $opis, $cena, $pruzalac, $velicina, $kategorija);
        $this->assertEquals($qty, 1);
    }
    
     function testUnesiUslugu2(){
        $naziv = 'Restoran1223';
        $opis = 'restoran';
        $cena = '50';
        $pruzalac = 'salon123';
        $velicina = '400';
        $kategorija = 5;
        $qty = $this->CI->PomocniModel->unesiUslugu($naziv, $opis, $cena, $pruzalac, $velicina, $kategorija);
        $this->assertEquals($qty, 2);
    }
    
     function testUnesiUslugu31(){
        $naziv = 'Restoran1223';
        $opis = 'restoran';
        $cena = '50';
        $pruzalac = 'salon123';
        $velicina = '400';
        $kategorija = 4;
        $qty = $this->CI->PomocniModel->unesiUslugu($naziv, $opis, $cena, $pruzalac, $velicina, $kategorija);
        $this->assertEquals($qty, 3);
    }
    
     function testUnesiUslugu32(){
        $naziv = 'Restoran1223';
        $opis = 'restoran';
        $cena = '50';
        $pruzalac = 'salon123';
        $velicina = '400';
        $kategorija = 7;
        $qty = $this->CI->PomocniModel->unesiUslugu($naziv, $opis, $cena, $pruzalac, $velicina, $kategorija);
        $this->assertEquals($qty, 3);
    }
    
    
 
}


?>