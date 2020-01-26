	<!-- Main Page -->
	<div class="container">
	<!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>

			<div class="row" style=" height:50px; padding: 50px; margin-top:100px;">
			
				<div class="col s6"  style="padding: 10px;">
					<div class="container">

					<div class="row" style="margin-top: 50px;"><h3>Shumazhi<h3></div>

					<div class="row" style="margin-top: 50px;"><h3>Title<h3></div>

					<div class="row" style="margin-top: 50px;"><h3>Shumazhi<h3></div>
					<p>
					Lorem ipsum dolor sit amet. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
					commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					<p>
					</div>
				<div class="col s6" >
				<div class="row">

<!-- show error messages if the form validation fails -->
<?php if ($this->session->flashdata()) { ?>
        <div class="alert alert-danger">
			<?=$this->session->flashdata('errors'); ?>
			<?= $this->session->flashdata('msg'); ?>
        </div>
    <?php } ?>

	<!-- If you click the "Submit" button, the form-data will be sent to controller called "User" and it's function "register". -->

					<form class="col s12" action="<?php echo base_url(); ?>user/register" method="post" style="padding: 50px;">
						<div class="row">
							<div class="input-field col s6">
							<input placeholder="First Name" name="first_name" type="text" class="validate">
							</div>
							<div class="input-field col s6">
							<input name="last_name"  placeholder="Last Name" type="text" class="validate">
							</div>
						</div>

						
						<div class="row">

							<div class="input-field col s12">
								<input placeholder="Company Name" name="company_name" type="text" class="validate">
							</div>

							<div class="input-field col s12">
								<input name="email" type="email" class="validate">
								<label for="email">Email</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s12">
								<input name="password" type="password" class="validate">
								<label for="password">Password</label>
							</div>
							
						</div>
						<div class="input-field col s12">
							<i class="material-icons prefix">phone</i>
							<input name="phone" type="tel" class="validate">
							<label for="icon_telephone">Phone</label>
						</div>
						<input class = "btn btn-success" name="register" type="submit" class="btn btn-register" value="Register" />
					</form>
					
					<select name="country" name="country">a</select>

				</div>
			</div>
		</div>
		
	</div>
	
</div>

