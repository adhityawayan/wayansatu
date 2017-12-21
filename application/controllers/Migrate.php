<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('migration');
	}

	public function index()
	{
		$this->latest();
	}

	public function latest()
	{
        if ($this->migration->latest() === FALSE)
        {
            show_error($this->migration->error_string());
        }
	}

	public function reset()
	{
		if ($this->migration->version(1) === FALSE)
        {
            show_error($this->migration->error_string());
        }
		$this->latest();
	}

}

