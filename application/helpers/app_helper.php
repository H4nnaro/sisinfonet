<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function assets($path)
{
    $modified = filemtime('./' . $path);
    $result = base_url($path . '?modified=' . $modified);
    return $result;
}
