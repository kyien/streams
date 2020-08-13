<!DOCTYPE html>
<html>
<head>
	<title>Dr. Ngotho</title>
	
<?php
    include_once('header.php');
    include_once('sidenav.php');

?>
<div class="contme">
    <div class="contactme">
        <h2 >Contact Me</h2><br>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <input type="text" name="name" placeholder="Your Name..." class="text-input contact-input">
            <input type="email" name="email" placeholder="Your E-mail Address..." class="text-input contact-input">
            <input type="tel" name="phonenumber" placeholder="Your Phone Number..." class="text-input contact-input">
            <textarea name="message" placeholder="Your Message..." class="text-input contact-input" row="5" ></textarea>
            <button type="submit" value="SEND MESSAGE" class="btn btn-big">
            SEND <i class="fas fa-paper-plane"></i>
            </button>
        </form>
    </div>
</div>
 <?php 
 include_once('footer.php');
 ?>