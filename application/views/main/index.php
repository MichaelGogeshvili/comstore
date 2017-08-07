<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.css" >
    <script src="/js/jquery-2.2.4.js" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.js"></script>
    <title><?=@$title?></title>
    <script>
      var src = document.createElement("script");
      src.src = "http://127.0.0.1:9001/js/socket.js";
      src.async = true;
      document.head.appendChild(src);
    </script>
  </head>
  <body>
    <main class="container">
      <header class="container lowered row-fluid">
        <div class="jumbotron text-center">
          HWB boilerplate
          <ul class="menu">
                <li>
                  <?=anchor('main/acquisition', 'acquisition',
                  array('title' => site_url('main/acquisition')))?>
                </li>
          </ul>
        </div>
      </header>
      <section class="container">
        <link rel="stylesheet" href="/css/theme.css">
        </style>
        <h1 class="text-center">Main</h1>
      </section>
      <footer  class="container lowered row-fluid">
        <div   class="jumbotron text-left">
          elapsed_time:{elapsed_time};<br>
          memory_usage:{memory_usage};
        </div>
      </footer>
    </main>
  </body>
</html>



