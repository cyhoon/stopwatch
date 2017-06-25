<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Stopwatch extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $this->watch();
    }


    public function _remap($method)
    {
        $this->load->view('header_v');

        if ( method_exists($this,$method))
        {
            $this->{"{$method}"}();
        }

        $this->load->view('footer_v');
    }

    function watch()
    {
        $this->load->view('view_v');
    }
}

?>