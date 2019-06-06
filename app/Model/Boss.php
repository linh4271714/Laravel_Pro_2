<?php 
/**
 * 
 */
class Boss
{
	public $userName;
	public $pass;
	public $email;
	public $phone;
	public $add;
	function getUserName(){
		return $this->userName;
	}
	function getPass(){
		return $this->pass;
	}
	function getEmail(){
		return $this->email;
	}
	function getPhoneNumber(){
		return $this->phone;
	}
	function getAddress(){
		return $this->add;
	}
}