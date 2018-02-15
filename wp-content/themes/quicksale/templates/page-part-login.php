<?php if (!is_user_logged_in() && get_theme_option('show_login')=='yes') {
	// todo: Login form
	themerex_enqueue_script( 'form-login', themerex_get_file_url('/js/_form_login.js'), array(), null, true );
	?>
	<div id="user-popUp" class="user-popUp mfp-with-anim mfp-hide">
		<div class="sc_tabs">
			<ul class="loginHeadTab">
				<li><a href="#loginForm" class="loginFormTab icon"><?php _e('Log In', 'themerex'); ?></a></li>
				<li><a href="#registerForm" class="registerFormTab icon"><?php _e('Create an Account', 'themerex'); ?></a></li>
			</ul>
			
			<div id="loginForm" class="formItems loginFormBody">
				<div class="itemformLeft">
					<form action="<?php echo esc_url(wp_login_url()); ?>" method="post" name="login_form" class="formValid">
						<input type="hidden" name="redirect_to" value="<?php echo esc_url(home_url()); ?>" />
						<ul class="formList">
							<li class="icon formLogin"><input type="text" id="login" name="log" value="" placeholder="<?php _e('Login', 'themerex'); ?>"></li>
							<li class="icon formPass"><input type="password" id="password" name="pwd" value="" placeholder="<?php _e('Password', 'themerex'); ?>"></li>
							<li class="remember">
								<a href="<?php echo wp_lostpassword_url( get_permalink() ); ?>" class="forgotPwd"><?php _e('Forgot password?', 'themerex'); ?></a>
								<input type="checkbox" value="forever" id="rememberme" name="rememberme">
								<label for="rememberme"><?php _e('Remember me', 'themerex'); ?></label>
							</li>
							<li class="sc_button sc_button_style_global sc_button_size_big squareButton global big"><a href="#" class="sendEnter enter"><?php _e('Login', 'themerex'); ?></a></li>
						</ul>
					</form>
				</div>

				<div class="itemformRight">
					<ul class="formList">
						<?php
						$social_login = str_replace('[', '', get_theme_option('social_login'));
						$social_login = str_replace(']', '', $social_login);
						if (strlen($social_login) > 0) {
							?>
							<li class="loginSoc login_plugin">
								<?php
								if (strlen($social_login) > 0) echo do_shortcode( '[' . $social_login . ']' );
								?>
							</li>
						<?php } else {?>
							<li><?php _e("Install social plugin that has it's own SHORTCODE and add it to Theme Options - Socials - 'Login via Social network' field. We recommend: Wordpress Social Login", 'themerex'); ?></li>
						<?php }?>
					</ul>
				</div>
				<div class="result messageBlock"></div>
			</div>

			<div id="registerForm" class="formItems registerFormBody">
				<form name="register_form" method="post" class="formValid">
					<input type="hidden" name="redirect_to" value="<?php echo esc_url(home_url()); ?>"/>
					<div class="itemformLeft">
						<ul class="formList">
							<li class="icon formUser"><input type="text" id="registration_username" name="registration_username"  value="" placeholder="<?php _e('User name (login)', 'themerex'); ?>"></li>
							<li class="icon formLogin"><input type="text" id="registration_email" name="registration_email" value="" placeholder="<?php _e('E-mail', 'themerex'); ?>"></li>
							<li class="i-agree">
								<input type="checkbox" value="forever" id="i-agree" name="i-agree">
								<label for="i-agree"><?php _e('I agree with', 'themerex'); ?></label> <a href="<?php echo get_theme_option('footer_terms_link'); ?>"><?php _e('Terms &amp; Conditions', 'themerex'); ?></a>
							</li>
							<li class="sc_button sc_button_style_global sc_button_size_big squareButton global big"><a href="" class="sendEnter enter"><?php _e('Sign Up', 'themerex'); ?></a></li>
						</ul>
					</div>
					<div class="itemformRight">
						<ul class="formList">
							<li class="icon formPass"><input type="password" id="registration_pwd" name="registration_pwd" value="" placeholder="<?php _e('Password', 'themerex'); ?>"></li>
							<li class="icon formPass"><input type="password" id="registration_pwd2" name="registration_pwd2" value="" placeholder="<?php _e('Confirm Password', 'themerex'); ?>"></li>
						</ul>
					</div>
				</form>
				<div class="result messageBlock"></div>
			</div>

		</div>	<!-- /.sc_tabs -->
	</div>		<!-- /.user-popUp -->
<?php } ?>