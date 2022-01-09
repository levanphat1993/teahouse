<!doctype html>
<html>
<head>
    <title>Test</title>
    <link rel="stylesheet"  href="<?php echo URL ?>public/css/default.css" />
    <script type="text/javascript" src="<?php echo URL ?>public/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo URL ?>public/js/validate.min.js"></script>
    <script type="text/javascript" src="<?php echo URL ?>public/js/custom.js"></script>
    <?php

    if (isset($this->js)) {
        foreach ($this->js as $js) {
            echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
        }
    }

    if(isset($this->pluginjs))
    {
        foreach ($this->pluginjs as $jps){
            echo '<script type="text/javascript" src="'.URL.'public/'.$jps.'"></script>';
        }
    }

    ?>
</head>
<body>
<div id="header">
    <br />
    <a href="<? echo URL; ?>index">Index</a>

    <? if(Session::get('loggedIn') == true):?>
        <a href="<? echo URL; ?>dashboard/logout">logout</a>
        <a href="<? echo URL; ?>coupons">coupons</a>
        <a href="<? echo URL; ?>employee">employee</a>
        <a href="<? echo URL; ?>gift">gift</a>
        <a href="<? echo URL; ?>store">store</a>
        <a href="<? echo URL; ?>assignment">assignment</a>
        <a href="<? echo URL; ?>point">point</a>
    <? else: ?>
    <a href="<? echo URL; ?>login">Login</a>
    <? endif; ?>
</div>
<div id="content">
