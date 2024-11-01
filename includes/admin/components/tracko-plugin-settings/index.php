<?php
/*!
* WordPress TRACKO
*/
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit; 

// --------------------------------------------------------------------

function tracko_component_tracko_plugin_settings()
{

	tracko_admin_welcome_panel();
	
	$assets_setup_base_url = TRACKO_PLUGIN_URL . 'assets/img/';
	$options_woo_setting = get_option( 'tracko_woo_settings_data' );
	$options_woo_setting = maybe_unserialize( $options_woo_setting );
	
?>
<div class="devsite-wrapper">
	<div class="devsite-top-section-wrapper">
		<?php include('header.php'); ?>
	</div>
</div>
	
<div class="devsite-wrapper">
	<div class="devsite-top-section-wrapper">
	   <div class="devsite-main-content half-col clearfix" style="margin-top: 0px;">
			<section class="devsite-landing-row devsite-landing-row-1-up">
				<header class="devsite-landing-row-header">
					<div class="devsite-landing-row-header-text">
						<h2 id="firebase-by-platform">Configure Woocommerce</h2>
					</div>
				</header>
			</section>
			
			<section class="devsite-landing-row devsite-landing-row-3-up devsite-landing-row-light-grey firebase-hp-rowgroup gmp-icons-container1 gmp-icons-container-grayscale">	
				<div class="devsite-landing-row-group" style="display:;">
					<div class="card1"></div>
					<div class="card">
						<form method="post" id="tracko_wo_setup_form" name="tracko_wo_setup_form" action="">
							<div class="devsite-landing-row-item devsite-landing-row-item-no-image full">
								<div class="input-container">
									<input type="text" name="txtusername" id="txtusername" value="<?php echo isset($options_woo_setting['user_name']) ?  esc_attr($options_woo_setting['user_name']) : ''; ?>" autocomplete="off" required="required"/>
									<label for="txtusername">Username</label>
									<div class="bar"></div>
								</div>
							</div>
							
							<div class="devsite-landing-row-item devsite-landing-row-item-no-image full">
								<div class="input-container">
									<input type="text" name="txtemail" id="txtemail" value="<?php echo isset($options_woo_setting['email_id']) ?  esc_attr($options_woo_setting['email_id']) : ''; ?>" autocomplete="off" required="required"/>
									<label for="txtemail">Email</label>
									 
									<div class="bar"></div>
								</div>
							</div>
							
							<div class="devsite-landing-row-item devsite-landing-row-item-no-image full">
								<div class="input-container">
									<input type="text" name="txtphone" id="txtphone" value="<?php echo isset($options_woo_setting['phone_number']) ?  esc_attr($options_woo_setting['phone_number']) : ''; ?>" autocomplete="off" required="required"/>
									<label for="txtwebsite">Phone</label>
									<div class="bar"></div>
								</div>
							</div>
							
							<input type="hidden" name="txtsiteurl" id="txtsiteurl" value="<?php echo get_bloginfo('url');?>"/>
							<div class="devsite-landing-row-item1 devsite-landing-row-item-no-image full" id="tracko_form_footer">
								<?php 
								if(empty($options_woo_setting))
								{
								?>
								<input type="submit" value="Submit" class="cmdSubmitWoData" id="save-tracko-settings"/>
								<?php
								}
								else
								{
								?>
								<div class="md-ripple-container">
									<button class="visit" onclick="window.open('http://tracko.link?url=<?php echo get_bloginfo('url');?>&email=<?php echo isset($options_woo_setting['email_id']) ?  esc_attr($options_woo_setting['email_id']) : ''; ?>','_blank')" title="Tracko" type="button"> Visit </button>
									<button class="editbutton" data-form="tracko_wo_setup_form" type="button"> Edit </button>
								</div>
								<?php
								}
								?>
							</div>
							<?php wp_nonce_field( 'tracko_wo_setup_form' ); ?>
						</form>
					</div>
				</div>
			</section>
		</div>
		
		<div class="devsite-main-content half-col clearfix" style="margin-top: 0px;" id="apphelp">
			<section class="devsite-landing-row devsite-landing-row-1-up">
				<header class="devsite-landing-row-header">
					<div class="devsite-landing-row-header-text">
						<h2 id="firebase-by-platform">Features:</h2>
					</div>
				</header>
			</section>
			
			<section class="devsite-landing-row devsite-landing-row-3-up devsite-landing-row-light-grey firebase-hp-rowgroup gmp-icons-container1 gmp-icons-container-grayscale">	
				<div class="devsite-landing-row-group">
				<div class="card1"></div>
					<div class="card">
						<div class="devsite-landing-row-item devsite-landing-row-item-no-image full">
							<p>
							Simple & attractive interface to see the assigned task on map and listing.
							See road map already prepared for the agent as per his proximity to the tasks & traffic situation around him.</p>
							<p>See task details with task description and customer details with to call from the app.</p>
							<p>Navigate to you next task to know the exact shortest route to save time and money</p>
							<p>Proof of delivery by taking signature from customer, which are updated instantly to the server.</p>
							<p>Report as the make by uploading photos, document from the app</p>
							<p>stay connected with your home base by sending instant message and making call from app.	</p>
						</div>
												
						<div class="devsite-landing-row-item devsite-landing-row-item-no-image full">
						<p>Incase of any issues in understanding the above steps, Please email us at <a href="mailto:info@tracko.link">info@tracko.link</a>
						Also please note in order to allow the Mobile App APIs to work properly please do not set the "Permalink Settings" to "Plain options".</p>
						</div>
					</div>
				</div>
			</section>
		</div>
	
	</div>
</div> 
<script>
<?php
if(isset($options_woo_setting['type']))
{
?>
var formid ='#tracko_wo_setup_form';
jQuery(formid+' input').prop('disabled', true);
jQuery(formid+' label').css('top', '-18px');
jQuery(formid+' label').css('font-size', '12px');
<?php
}
?>
keywords_list ='<?php //echo $keywords; ?>';
</script>
<?php
}

tracko_component_tracko_plugin_settings();

// --------------------------------------------------------------------	
