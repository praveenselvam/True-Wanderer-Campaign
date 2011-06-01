 <?php
          require_once('recapchalib.php');
          $publickey = "6Lfv3MQSAAAAAA9koBHPHJu3s8zs_7rQk6bmRTWu";
          echo recaptcha_get_html($publickey);
?>
