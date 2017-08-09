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
  <body>
  <?php if($this->session->flashdata('msg')): ?>
    <div class="alert alert-info" style="margin-left:22px;">
      <?php echo $this->session->flashdata('msg');?>
      <?php
                $msg = $this->session->flashdata('msg');
                $this->session->set_flashdata('msg', $msg);
      ?>
      <a class="pull-right">&times;</a>
    </div >
    <?php endif; ?>
    <main class="container">
      <section class="container">
        <h1 class="text-center">acquisition</h1>
        <form action="" method="post">
          <table class="om" style=''>
            <tr class="margined">
              <td class="text-right bm">  articul  </td>
              <td> <input class="text-center wide-input" 
              name="articul" value=""> </td>
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
              name="price" value="0"> </td>
            </tr>
            <tr>
              <td></td>
              <td class="">
                      <button class="btn btn-primary"
                      style="margin-left:0px;width:100%;">SUBMIT</button>
              </td>
              <td></td>
            </tr>
          </table>
        </form>
      </section>
    </main>
    <script src="/js/browsersync-toggle.js"></script>
  </body>
</html>



