<div class="wrap">
<h2>Net-Results Marketing Automation</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<?php settings_fields('netresults'); ?>

<table class="form-table">

<tr valign="top">
<th scope="row">Net-Results PS ID:</th>
<td><input type="text" name="ps_id" value="<?php echo get_option('ps_id'); ?>" /></td>
</tr>
</table>

<input type="hidden" name="action" value="update" />

<p class="submit">
<input type="hidden" name="asynchronous_tracking" value="no">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

</form>
</div>
