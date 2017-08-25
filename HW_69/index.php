<?php
include 'class.php';

$page = new webpage();
$page->title = "webpage Object";
$page->css = 'style.css';
$page->body = '<h1>Some  info......</h1>
<p>and a paragraph</p>';
$page->footer = '&copy 2017';

$page->displayPage();


?>