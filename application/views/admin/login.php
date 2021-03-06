<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row align-items-center">
	<div class="card col-8 mx-auto my-5">
		<div class="card-body">
			<?=form_open('admin/acceso', array('class'=>'col-auto','id'=>"form-validado"))?>
			<div class="form-group row">
				<label for="inputUser" class="col-2 col-form-label">User</label>
				<div class="col-10">
					<input type="text" class="form-control" name="user" id="inputUser" placeholder="User" value="<?=set_value('user')?>">
					<?php echo form_error('user','<div class="form-error">*', '</div>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputPass" class="col-2 col-form-label">Password</label>
				<div class="col-10">
					<input type="password" class="form-control" name="pass" id="inputPass" placeholder="Password" value="<?=set_value('pass')?>">
					<?php echo form_error('pass','<div class="form-error">*', '</div>'); ?>
				</div>
			</div>
			<div class="form-row">
				<div class="col-auto mx-auto">
					<button type="button" class="btn btn-dark send-formlogin">Login</button>
				</div>
			</div>
			<?=form_close()?>
		</div>
	</div>
</div>
