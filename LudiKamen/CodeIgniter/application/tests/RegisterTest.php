<?php
// Autor: Nevena Milinkovic

class RegisterTest extends PHPUnit_Framework_TestCase {

    private $CI;
    
    public function setUp() {
        $this->CI = & get_instance();
        $this->CI->load->model('RegistracijaModel');
    }

    public function testUsernameEmpty() {
        $_POST['korime'] = '';
        $flag = $this->CI->RegistracijaModel->checkIfExists();
        $this->assertEquals($flag, 4);
    }

    public function testUsernameFive() {
        $_POST['korime'] = 'nesto';
        $flag = $this->CI->RegistracijaModel->checkIfExists();
        $this->assertEquals($flag, 4);
    }

    public function testPasswordEmpty() {
        $_POST['lozinka'] = '';
        $flag = $this->CI->RegistracijaModel->checkPassword();
        $this->assertEquals($flag, 2);
    }

    public function testPasswordFive() {
        $_POST['lozinka'] = 'nesto';
        $flag = $this->CI->RegistracijaModel->checkPassword();
        $this->assertEquals($flag, 2);
    }

    public function testPasswordConfirm() {
        $_POST['lozinka'] = 'pass123';
        $_POst['lozinkaPonovo'] = 'pas123';
        $flag = $this->CI->RegistracijaModel->checkPassword();
        $this->assertEquals($flag, 3);
    }

}

?>