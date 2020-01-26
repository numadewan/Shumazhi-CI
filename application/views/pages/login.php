<div class="container" style="background-color:; margin-top:300px; padding:50px">
<<<<<<< HEAD
    <form type="submmit" action="<?= base_url(); ?>user/login" method="post">
      <div class="row ">

      <?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-warning">
            <?= $this->session->flashdata('msg'); ?>
        </div>
    <?php } ?>

        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
=======
    <form type="submmit" action="home.php">
      <div class="row ">

        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
>>>>>>> 9a2a34601cbb733db622836c500512136eecb2bb
          <label for="email">Email</label>
        </div>

        <div class="input-field col s12">
<<<<<<< HEAD
          <input id="password" type="password" class="validate" name="password">
=======
          <input id="password" type="password" class="validate">
>>>>>>> 9a2a34601cbb733db622836c500512136eecb2bb
          <label for="password">Password</label>
        </div>
        
      </div>
<<<<<<< HEAD
						<input class = "btn btn-success" name="login" type="submit" class="btn btn-register" value="Login" />
=======
      <div class="btn right">login</div>
>>>>>>> 9a2a34601cbb733db622836c500512136eecb2bb
    </form>
</div>