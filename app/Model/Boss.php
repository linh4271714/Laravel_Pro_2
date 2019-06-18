<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
    private $userName;
    private $email;
    private $pass;
    private $phoneNumber;
    
    function getUserName(){
		return $this->UserName;
	}
	function getPass(){
		return $this->Pass;
	}
	function getEmail(){
		return $this->Email;
	}
	function getPhoneNumber(){
		return $this->PhoneNumber;
	}
}
