 <?php
          require_once('recapchalib.php');
          $publickey = "6LejssISAAAAAE7SDfDWmIG1k6olvrZMdSoYNdiw";
          echo recaptcha_get_html($publickey);
?>
