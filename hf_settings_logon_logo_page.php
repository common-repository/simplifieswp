
<div class="wrap">
  <h2><?php echo(__("Login Image", LANG_DOMAIN)); ?></h2>
  <form method="post" action="options.php">
    <?php
		settings_fields( 'HF-settings-group' );
	?>
    <table class="form-table">
      <tr valign="top">
        <th scope="row"><?php echo(__("Image URL", LANG_DOMAIN)); ?></th>
        <td><input type="text" id="upload_image" name="logo_url" value="<?php echo get_option('logo_url'); ?>" readonly="readonly"/>
          <input id="upload_image_button" type="button" value="<?php echo(__("Choose Image", LANG_DOMAIN)); ?>" />
          <input id="delete_image_button" type="button" value="<?php echo(__("Delete Image", LANG_DOMAIN)); ?>" />
          <br />
          <?php echo(__("Recomended size: Width: 274px, Height: 63px.", LANG_DOMAIN)); ?></td>
      </tr>
      <tr valign="top">
        <th scope="row"><?php echo(__("Preview", LANG_DOMAIN)); ?></th>
        <td><img id="imgpreview" src="<?php 
		if (get_option('logo_url') != '') {
			echo get_option('logo_url'); 
		}
		else {
			echo(HF_PLUGIN_URL . 'images/logon_logo.png');
		}	
		?>" width="274" height="63" /></td>
      </tr>
    </table>
    <p class="submit">
      <input type="submit" class="button-primary" value="<?php echo(__("Save", LANG_DOMAIN)); ?>" />
    </p>
  </form>
  
  <!--JS som laster media opplaster--> 
  <script type="text/javascript">
jQuery(document).ready(function() {
	
jQuery('#upload_image_button').click(function() {
formfield = jQuery('#upload_image').attr('name');
tb_show('', 'media-upload.php?type=image&TB_iframe=true');
return false;
});

window.send_to_editor = function(html) {
imgurl = jQuery('img',html).attr('src');
jQuery('#upload_image').val(imgurl);
jQuery('#imgpreview').attr('src', imgurl);
tb_remove();
};

//Sletter bilde
jQuery('#delete_image_button').click(function() {
 jQuery('#upload_image').val('');
 jQuery('#imgpreview').attr('src', '<?php echo(HF_PLUGIN_URL . 'images/logon_logo.png'); ?>');
});

});
</script> 
</div>
