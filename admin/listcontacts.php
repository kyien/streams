<?php
    include_once('../Auth/session.php');
    confirm_logged_in();

?>


<?php 
include_once('adminheader.php');
?>

<div class="row">

    <div class="col-md-6 offset-md-3">
        <h2 class="title">Contact List</h2>
        <div class="container">
      
    <div id="contact-table"></div>
    
    
        </div>
    </div>
</div>

<?php 
    include_once('footer.php');
?>