<?php
/**
 * Created by PhpStorm.
 * User: Apex
 * Date: 10/11/2018
 * Time: 4:33 PM
 */

class MY_Controller extends CI_Controller {

    public $data = array();
    function __construct()
    {
        parent::__construct();
        $this->data['errors'] = array();
        $this->data['site_name'] = config_item('site_name');
    }

}