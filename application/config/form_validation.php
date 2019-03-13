<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
	'login' => array(
		array(
			'field' => 'username',
			'label' => 'Username',
			'rules' => 'required'
		),
		array(
			'field' => 'password',
			'label' => 'Password',
			'rules' => 'required|callback_password_check'
		)
	)
);


?>