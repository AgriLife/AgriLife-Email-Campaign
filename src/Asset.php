<?php

namespace AgriLife\EmailCampaign;

class Asset {

  public function __construct() {

    add_action( 'wp_loaded', array( $this, 'agrilife_email_campaign' ) );

  }

  public function agrilife_email_campaign() {
    
    if(is_admin()){

      ob_start();
      include AG_EC_DIR_PATH . '/js/campaign-code.js';
      $content = ob_get_clean();
      echo '<script type="text/javascript">' . $content . '</script>';

    }

  }

}