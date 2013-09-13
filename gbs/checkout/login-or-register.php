<div id="checkout_login_register_wrap" class="border_bottom clearfix">
		
	<h2 class="sub_heading gb_ff"><span class="title_highlight"><?php gb_e('Sign-up, Sign-in or Guest Purchase'); ?></span></h2>

	<div id="checkout_login_register_forms" class="clearfix">
		<div id="checkout_registration_form_wrap"  class="checkout_block background_alt left_form clearfix">
			<div class="paymentform-info">
				<h2 class="table_heading contrast font_medium gb_ff"><?php _e('Register'); ?></h2>
			</div>
			<div id="checkout_registration_form" class="clearfix">
				<?php print $args['registration_form']; ?>
			</div><!-- #checkout_registration_form.-->
			
		</div>

		<div id="checkout_login_form_wrap"  class="checkout_block background_alt right_form clearfix">
			<div class="paymentform-info">
				<h2 class="table_heading contrast font_medium gb_ff"><?php _e('Login'); ?></h2>
			</div>
			<div id="checkout_login_form" class="clearfix">
				<?php print $args['login_form']; ?>
				<div class="account-register-controls">
					<input class="form-submit submit" type="submit" value="Login">
				</div>
			</div>
			
		</div>
		<input type="hidden" name="gb_account_action" value="gb_account_register" />
		<input type="hidden" name="gb_login_or_register" value="1" />
	</div><!--  .checkout_login_register_forms -->

</div>