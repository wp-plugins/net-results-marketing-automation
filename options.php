<div class="wrap">
	<h2>Net-Results Marketing Automation: Plugin Settings</h2>

	<form method="post" action="options.php">
		<?php wp_nonce_field('update-options'); ?>
		<?php settings_fields('netresults'); ?>

		<table class="form-table">
			<tr valign="top">
				<th scope="row">Net-Results Product ID:</th>
				<td><input type="text" name="ps_id" value="<?php echo get_option('ps_id'); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row">Net-Results Username:</th>
				<td><input type="text" name="nr_username" value="<?php echo get_option('nr_username'); ?>" /></td>
			</tr>
			<tr valign="top">
				<th scope="row">Net-Results Password:</th>
				<td><input type="password" name="nr_password" value="" /></td>
			</tr>
		</table>

		<input type="hidden" name="action" value="update" />

		<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
		</p>
	</form>

	<style>
		.nr_info {
			padding: 20px;
			line-height: 22px;
			border: 1px solid #ddd;
			background-color: #fff;
			border-radius: 14px;
		}
	</style>
	<div class="nr_info">
		<h4 style="margin: 0 0 7px 0;">Net-Results is a next-generation marketing automation platform that makes it easy to leverage relevance to drive connections, conversions and revenue.</h4>
		Need access? <a href="http://www.net-results.com/app/marketing-automation-trial.php" target="_blank">Get a Trial Account</a>
		<br />
		Email us for over the top support: <a href="mailto:support@net-results.com">support@Net-Results.com</a>
		<br />
		Call us anytime: +1 303 771-2552
		<br />
		Learn more at <a href="http://www.net-results.com" target="_blank">www.Net-Results.com</a>
	</div>
</div>
