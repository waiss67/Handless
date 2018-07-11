<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 07/07/2018
 * Time: 15:21
 */
class file extends CI_Controller
{
    function save()
    {
        $this->load->library('files');
        $this->files->save();
    }

    function html()
    {
        $this->load->library('files');
        $this->files->html();
    }

    function javascript()
    {
        $this->load->library('files');
        $this->files->javascript();
    }

    function css()
    {
        $this->load->library('files');
        $this->files->css();
    }
}