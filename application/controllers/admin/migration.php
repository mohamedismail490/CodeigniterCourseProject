<?php
/**
 * Created by PhpStorm.
 * User: Apex
 * Date: 10/11/2018
 * Time: 5:13 PM
 */

class Migration extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $this->load->library('migration');

//        if ($this->migration->current() === FALSE)
        if ($this->migration->current() === FALSE)
        {
            show_error($this->migration->error_string());
        }
        else {

            echo "Migration Worked";
        }

    }

}