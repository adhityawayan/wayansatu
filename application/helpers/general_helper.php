<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function load_image($file='')
{
    if (empty($file)) {
        return "data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==";
    }else{
        $filename = './'.$file;

        if (is_file($filename)  && file_exists($filename) ) {
            return base_url($file);
        } else {
            return base_url('assets/global/img/noimage.jpg');
        }
    }
}

function load_thumb($file='')
{
    if (empty($file)) {
        return "data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==";
    }else{
        $extension_pos = strrpos($file, '.'); // find position of the last dot, so where the extension starts
        $file = substr($file, 0, $extension_pos) . '_thumb' . substr($file, $extension_pos);
        
        $filename = './'.$file;

        if (is_file($filename)  && file_exists($filename) ) {
            return base_url($file);
        } else {
            return base_url('assets/global/img/noimage.jpg');
        }
    }
}

function delete_image($file)
{
    //delete main file
    if (is_file($file)  && file_exists($file) ) {
        unlink($file);
    }
    //delete thumb file
    $extension_pos = strrpos($file, '.'); // find position of the last dot, so where the extension starts
    $file = substr($file, 0, $extension_pos) . '_thumb' . substr($file, $extension_pos);
    if (is_file($file)  && file_exists($file) ) {
        unlink($file);
    }
}
