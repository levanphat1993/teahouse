<!doctype html>
<html>
<head>
    <title>Test</title>
    <link rel="stylesheet"  href="<?php echo URL ?>public/css/default.css" />
    <script type="text/javascript" src="<?php echo URL ?>public/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo URL ?>public/js/custom.js"></script>
</head>
<body>
<div id="header">
    <br />
    <a href="<? echo URl; ?>index">Index</a>
    <a href="<? echo URL; ?>help">Help</a>
    <? if(Session::get('loggedIn') == true):?>
        <a href="<? echo URL; ?>dashboard/logout">logout</a>
    <? else: ?>
    <a href="<? echo URL; ?>login">Login</a>
    <? endif; ?>
    <a href="<? echo URL; ?>dashboard">dashboard</a>
</div>
<div id="content">
