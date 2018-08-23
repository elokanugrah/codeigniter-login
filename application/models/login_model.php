<?php 
	/**
	* 
	*/
	class login_model extends CI_Model
	{
		public $table_name	='account';

		function __construct()
		{
			parent::__construct();
		}

		//Fungsi untuk login
		function cek_login($user, $pass)
		{
			$this->db->where('username',$user);
			$this->db->where('password',$pass);
			return $this->db->get($this->table_name)->row();
		}
	}
 ?>