<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.css" >
    <script src="/js/jquery-2.2.4.js" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.js"></script>
    <title><?=@$title?></title>

        <script async="true" src="http://127.0.0.1:9001/js/socket.js"> </script>
    <link rel="stylesheet" href="/css/theme.css">
  </head>
  <body>
  <?php if($this->session->flashdata('msg')): ?>
    <div class="alert alert-info">
      <?php echo $this->session->flashdata('msg');?>
      <a class="pull-right">&times;</a>
    </div >
    <?php endif; ?>
    <main class="container">
      <section class="container">
        <h1 class="text-center">Zakupka</h1>
        <form action="" method="post">
          <table class="om">
            <tr>
              <td colspan="3">
                <table border="2" class="bp">
                  <tr>
                    <td>
                      <button class="btn btn-primary">S</button>
                    </td>
                    <td>
                      <button class="btn btn-primary">S</button>
                    </td>
                    <td>
                      <button class="btn btn-primary">SUBMIT</button>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr class="margined">
              <td class="text-right bm">  articul  </td>
              <td> <input class="text-center wide-input" 
              name="articul"> </td>
              <td class="text-center"></td>
            </tr>
            <tr>
              <td class="text-right bm">  description  </td>
              <td> <input class="text-center wide-input"
              name="description" value="w"> </td>
            </tr>
            <tr>
              <td class="text-right bm">  price  </td>
              <td> <input class="text-center wide-input" 
              name="price" > </td>
            </tr>
          </table>
        </form>
      </section>
    </main>
  </body>
</html>



