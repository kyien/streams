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
        <form id="contact_form" action="process_contact.php" method="post" name="contact_form">
            <input type="text" name="name" id="name" placeholder="Your Name..." >
            <input type="email" name="email" id="email" placeholder="Your E-mail Address..."  >
            <input type="tel" name="phonenumber"id="phonenumber"  placeholder="Your Phone Number.. in the format 07xx xxx xxx" >
            <textarea name="msg" placeholder="Your Message..." id="msg" cols="3" row="5"></textarea>
            <button type="submit" id="contact_btn" value="SEND MESSAGE" class="btn btn-big">
            SEND <i class="fas fa-paper-plane"></i>
            </button>
        </form>
    </div>
</div>
<!-- <div class="row">

    <div class="col-md-6 offset-md-3">
        <div class="container">
        <h2 class="title">Contact</h2>
        <form action="#" id="reg_form" name="registration">

            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" placeholder="John">

            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" placeholder="Doe">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="john@doe.com">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;">

            <button type="submit">Register</button>
        </form>

    
        </div>
    </div>
</div> -->
<br>
<br>
 <?php 
 include_once('footer.php');
 ?>