<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.css" >
    <script src="/js/jquery-2.2.4.js" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.js"></script>
    <title><?=@$title?></title>
    <link rel="stylesheet" href="/css/theme.css">
  </head>
  <body style="padding-top:130px!important;">
    <main class="container">
      <header class="container lowered row-fluid">
        <div class="jumbotron navbar-fixed-top" style="opacity:.8">
             <?=anchor('home', 'HOME', array('title' =>
                                             'HOME','class'=>'navbar-link
                                             navbar-left
                                             ',
                                             'style'=>'margin:0 14px'))?>
             <?=anchor('main/acquisition', 'ЗАКУПКА', array('title' =>
                                            'acquisition','class'=>'navbar-link
                                            navbar-left
                                            ',
                                            'style'=>'margin:0 14px'))?>
        </div>
      </header>
<div style="height:130px;">&thinsp;</div>

