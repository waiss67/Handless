<?php
/**
 * Created by PhpStorm.
 * User: T3i
 * Date: 07/07/2018
 * Time: 15:43
 */
class files
{
    public function save () {
        file_put_contents('tmp/html.php', $_POST['html']);
        file_put_contents('tmp/javascript.php', $_POST['js']);
        file_put_contents('tmp/css.php', $_POST['css']);
    }

    public function html () {
        echo file_get_contents('tmp/html.php');
    }

    public function javascript () {
        echo file_get_contents('tmp/javascript.php');
    }

    public function css () {
        echo file_get_contents('tmp/css.php');
    }

}