<div class="container" style="background-color:; margin-top:300px; padding:50px">
    <form type="submmit" action="<?= base_url(); ?>user/login" method="post">
      <div class="row ">

      <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-warning">
            <?= $this->session->flashdata('msg'); ?>
        </div>
    <?php } ?>

        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>

        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>
        
      </div>
						<input class = "btn btn-success" name="login" type="submit" class="btn btn-register" value="Login" />
    </form>
</div>