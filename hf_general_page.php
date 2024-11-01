<div class="wrap">
  <h2><?php echo(__("General", LANG_DOMAIN)); ?></h2>
  
  <h3><?php echo(__("RSS News", LANG_DOMAIN)); ?></h3>
  <?php
  
  echo '<div class="rss-widget">';  
     wp_widget_rss_output(array(  
          'url' => HF_RSS_STREAM,  
          'title' => __("News " . HF_PUGIN_NAME, LANG_DOMAIN),  
          'items' => 0, 
          'show_summary' => 1,  
          'show_author' => 0,  
          'show_date' => 1  
     ));  
     echo "</div>";  
  
  ?>
  
  
</div>
