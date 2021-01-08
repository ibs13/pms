<?php
class Frontend_Controller extends MY_Controller
{
	function __construct ()
	{
		parent::__construct();				

      $this->data['site_title'] = 'summit-bit.com';
	}
}