<div class="span-9 prepend-7 append-2 blog_list" id="support_form">
<h4>
Please drop your e-mail ID and I will send you updates as I blog live.
</h4>
<?php
    if($_REQUEST["server_response"] == "SUCCESS"){
?>
    <div class="success"> 
        Thank you for your support.
    <script language="Javascript">
        (function(){
            
            setTimeout(
                    function(){
                        document.location="index.php";
                    },5000);
        })();
    </script>
    </div>
<?php
    }else{
?>
<form method="POST">
E Mail: <input type ="text" name="email" id="email" value="" class="mail" />

<?php include 'captcha.php'; ?>
<?php if(isset($result["captcha"])) {
?>
<div class="error"><?php echo ($result["captcha"]);?></div>
<?php
}
?>
<input type ="hidden" name="form_action" id="form_action" value="kmp"/>
<input type ="submit" name="submit" id="keep_me_posted_button" value="Keep Me Posted"/>
&nbsp;&nbsp;
<a href="index.php">Cancel</a>
</form>
<?php
    }
?>
</div>
