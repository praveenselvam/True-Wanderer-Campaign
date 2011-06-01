
<?php
require_once "db.php";
require_once "recapchalib.php";
require_once "model_manager.php";
class KeepMePosted
{
    public static $ADD_EMAIL = "insert into keep_me_posted (email) values (:email)";

    public static $RECAPTCHA_PRIVATE_KEY = "6Lfv3MQSAAAAABir1I93KfA7FNlKmjWbnAPeGhlP";

    public static $CAPTCHA_MSG = array ("incorrect-captcha-sol" => "Please re-type the text seen on the screen");
    public function __constructor() {

    }
    public function create()
    {
        $captcha_response = self::validate_captcha();
        if($captcha_response -> is_valid)
        {
            if(isset($_POST["email"])) 
            {
                $req = array('email' => $_POST['email']);
                try {
                    ModelManager::writeRecord(self::$ADD_EMAIL,$req);
                }catch(PDOException $pdo_e) {                   
                    //echo $pdo_e->getMessage();
                }
                $_REQUEST["server_response"]="SUCCESS";
            }   
        }else{
            $_REQUEST["validation_errors"] = array("captcha"=>self::$CAPTCHA_MSG[$captcha_response->error]);
            $_REQUEST["server_response"] = "ERROR"; 
        }   
    }


    public function validate_captcha() {
        $resp = recaptcha_check_answer (self::$RECAPTCHA_PRIVATE_KEY,
                $_SERVER["REMOTE_ADDR"],
                $_POST["recaptcha_challenge_field"],
                $_POST["recaptcha_response_field"]);
        return $resp;
    }
}   
if($_POST !=null )
{
    if ( $_POST["form_action"] != null)
    {
        $controller = new KeepMePosted();
        $controller -> create();
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Road to ST7 - Praveen Selvam's True Wanderer Campaign</title>
    <link media="screen, projection" type="text/css" href="styles/screen.css" rel="stylesheet">
    <link media="print" type="text/css" href="styles/print.css" rel="stylesheet">
    <link media="screen, projection" type="text/css" href="styles/plugins/fancy-type/screen.css" rel="stylesheet">
    <link media="screen, projection" type="text/css" href="styles/home.css" rel="stylesheet">
    <link rel="SHORTCUT ICON" href="http://praveenselvam.com/truewanderer/favicon.ico" />
</head>
<body>
    <?php
        $result = array();
        if(isset($_REQUEST["validation_errors"]))
        {
            $result = $_REQUEST["validation_errors"];
        }
    ?>  
    <div class="container">
        <?php
            include 'header.php';
        ?>
        <?php
            include 'support_form.php';
        ?>
        <?php
            include 'rhs.php';
        ?>
        <div class="span-24 last center">
            <img src="images/copyleft.jpg" />
            <a href="http://en.wikipedia.org/wiki/Copyleft">Copyleft</a>
        </div>
    </div>
</body>
</html>
