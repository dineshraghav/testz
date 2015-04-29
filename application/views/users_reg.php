<h2>
	<img src="<?php echo base_url(); ?>resources/images/clipboard.png" style="vertical-align: -5px"/>
	Cadastro de Enquetes
</h2>
<p id="page-intro">User Registration</p> 
<div class="content-box"><!-- Start Content Box -->
	<div class="content-box-header">
			<h3>Add User</h3>
				<div class="clear"></div>

	</div> <!-- End .content-box-header -->
<div class="content-box-content">
	<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
			<?php echo form_open($action); ?>
					<fieldset>
					<p>
						<label>First Name *</label>
						<?php
						$data = array(
									  'name'        => 'firstname',
									  'id'          => 'firstname',
									  'value'       => $firstname,
									  'maxlength'   => '150',
									  'size'        => '60',
									  'class'       => 'text-input medium-input'
									);
						echo form_input($data);
						?>
						<br /><small>Enter user first name.</small>
					</p>
                                        <p>
						<label>Last Name *</label>
						<?php
						$data = array(
									  'name'        => 'lastname',
									  'id'          => 'lastname',
									  'value'       => $lastname,
									  'maxlength'   => '150',
									  'size'        => '60',
									  'class'       => 'text-input medium-input'
									);
						echo form_input($data);
						?>
						<br /><small>Enter user last name name.</small>
					</p>	
					
					<p>
						<label>email ID *</label>
						<?php
						$data = array(
									  'name'        => 'emailid',
									  'id'          => 'emailid',
									  'value'       => $emailid,
									  'maxlength'   => '150',
									  'size'        => '60',
									  'class'       => 'text-input medium-input'
									);
						echo form_input($data);
						?>
						<br /><small>Entre email ID of the User.</small>
					</p>					

					
					<p>
						<label>Type *</label>
						<?php
							$data = array(
										  'name'        => 'type',
										  'id'          => 'type',
										  'value'       => '1',
										  'checked'		=> $type == 1 ? true : false
										);

							echo form_checkbox($data);
						?>  Patient
                                                <?php
							$data = array(
										  'name'        => 'type',
										  'id'          => 'type',
										  'value'       => '0',
										  'checked'		=> $type == 0 ? true : false
										);

							echo form_checkbox($data);
						?> Administrator
						<br /><small>Checked user type</small>
					</p>
					
					<p>
						<label>2&#170; Alternativada *</label>
						<?php
						$data = array(
									  'name'        => 'answer_2',
									  'id'          => 'answer_2',
									  'value'       => $answer_2,
									  'maxlength'   => '150',
									  'size'        => '60',
									  'class'       => 'text-input medium-input'
									);
						echo form_input($data);
						?>
						<br /><small>Entre com um valor para a 2&#170; alternativa da enquete.</small>
					</p>
					
					<p>
						<label>3&#170; Alternativa</label>
						<?php
						$data = array(
									  'name'        => 'answer_3',
									  'id'          => 'answer_3',
									  'value'       => $answer_3,
									  'maxlength'   => '150',
									  'size'        => '60',
									  'class'       => 'text-input medium-input'
									);
						echo form_input($data);
						?>
						<br /><small>Entre com um valor para a 3&#170; alternativa da enquete.</small>
					</p>
										
										
					<p>
						<input class="button" type="submit" id="submit_product" name="submit_product" value="Gravar" />
					</p>
					</fieldset>
					<div class="clear"></div><!-- End .clear -->
			<?php echo form_close(); ?>
	</div> <!-- End #tab1 -->
</div> <!-- End .content-box-content -->