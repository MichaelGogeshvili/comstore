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
      <section class="container">
        <form action="" method="post" style="border:1px solid
        black;padding:3em;border-radius:13px;">
          <table class="om"
          >
            <caption>
              <h1 class="text-center">acquisition, next id: <?=$lastId + 1; ?></h1>
            </caption>
            <tr class="margined">
              <td class="text-right bm">  articul  </td>
              <td> <input class="text-center wide-input" 
              name="articul" value="<?=$lastId + 1;?>"> </td>
              <td class="text-center"></td>
            </tr>
            <tr>
              <td class="text-right bm">  description  </td>
              <td> <textarea class="text-center wide-input"
              name="description" ></textarea></td>
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

