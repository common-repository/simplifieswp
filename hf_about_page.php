<div class="wrap">
  <h2><?php echo(__("About", LANG_DOMAIN)); ?></h2>
  <table class="form-table">
    <tr valign="top">
      <th scope="row"><?php echo(__("Plugin Name:", LANG_DOMAIN)); ?></th>
      <td><a target="_blank" href="<?php echo(HF_PUGIN_URL); ?>"><?php echo(HF_PUGIN_NAME); ?></a></td>
    </tr>
    <tr valign="top">
      <th scope="row"><?php echo(__("Developper:", LANG_DOMAIN)); ?></th>
      <td><a target="_blank" href="<?php echo(HF_PUGIN_COMPANY_URL); ?>"><?php echo(HF_PUGIN_COMPANY); ?></a></td>
    </tr>
    <tr valign="top">
      <th scope="row"><?php echo(__("Version:", LANG_DOMAIN)); ?></th>
      <td><?php echo(HF_CURRENT_VERSION); ?></td>
    </tr>
    <tr valign="top">
      <th scope="row"><?php echo(__("Folder:", LANG_DOMAIN)); ?></th>
      <td><?php echo(HF_PLUGIN_DIRECTORY); ?></td>
    </tr>
    <tr valign="top">
      <th scope="row" colspan="2"><?php echo(__("Copyright", LANG_DOMAIN)); ?> &copy; <a target="_blank" href="<?php echo(HF_PUGIN_COMPANY_URL); ?>"><?php echo(HF_PUGIN_COMPANY); ?></a> 2012 - <?php echo(date('Y')); ?></th>
    </tr>
  </table>
</div>
