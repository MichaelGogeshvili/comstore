<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.css" >
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<body>
  <div class="page-header container">
    <div class="jumbotron col-md-12">
      <fieldset>
        <legend> За день: <?=$date_posted?></legend>
        <li> скупка_: ЕЕЕ : на сумму : EEE </li>
        <li> реализ_: ЕЕЕ : на сумму : EEE </li>
      </fieldset>
    </div>
  </div>

  <div class="page-header container">
    <div class="jumbotron row">
      <div class="col-md-12">
        <fieldset class="container">
          <div class="btn-group-lg col-md-11">
            <div class="btn btn-lg btn-warning" style="width:190px">
                  &lt;-Закупка
            </div>
            <div class="btn btn-lg btn-success" style="width:190px">
                  Реализация-&gt;
            </div>
          </div>
        </fieldset>
      </div>
    </div>
    <p class="col-md-12 footer">Page rendered in 
        <strong>{elapsed_time}</strong> seconds. 
      <?php echo 'CI ver. <strong>' . CI_VERSION . '</strong>'  ?></p>
  </div>


    


</body>
</html>
