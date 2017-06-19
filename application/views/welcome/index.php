<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.css" >
  <script
    src="https://code.jquery.com/jquery-2.2.4.js"   
    integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
    crossorigin="anonymous">
    /script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>
  <div class="page-header container">
    <div class="jumbotron col-md-12">
      <fieldset>
        <legend> За день: <?=$date_posted?></legend>
        <li> <div class="sp">скупка: </div> _______шт : на сумму : ___ <button>Отчет</button></li>
		<li> <div class="sp">реализация: </div> _______шт : на сумму : ___ <button>Отчет</button></li>
      </fieldset>
    </div>
  </div>
  <div class="page-header container">
    <div class="row">
      <div class="col-md-12">
			  <div class="btn-group" style="width:100%;">
				<div class="btn btn-lg btn-warning" >
					  &lt;-Закупка
				</div>
				<div class="btn btn-lg btn-success" >
					  Реализация-&gt;
				</div>
			  </div>
      </div>
    </div>
    <p class="col-md-12 footer">Page rendered in 
        <strong>{elapsed_time}</strong> seconds. 
      <?php echo 'CI ver. <strong>' . CI_VERSION . '</strong>'  ?></p>
  </div>
<style>
.btn { 
	height:100px!important;
	padding:37px 49px!important;
	width:50%!important;
}
.sp {
	display:inline-block;
	width:76px;
}
</style>
</body>
</html>
