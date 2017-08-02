<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/bootstrap-theme.css" >
  <script src="/js/jquery-2.2.4.js" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.js"></script>
  <title><?=@$title?></title>
</head>
<body>
  <div class="container">
    <div class="jumbotron boilerplate text-center">
      Здесь будет boilerplate
    </div>
  </div>
  <h1>Heading</h1>
  <?=$heading?>
  <footer>
    <div class="stats row-fluid">
      <pre class="col-md-12">
        elapsed_time:{elapsed_time};
        memory_usage:{memory_usage};
      </pre>
    <div>
  </footer>
</body>
</html>
