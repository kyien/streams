<?php
    include_once('../Auth/session.php');
    confirm_logged_in();

?>


<?php 
include_once('adminheader.php');
?>
<div id="homecontadmin">
    <div class="infoadmin">
        <h2>WELCOME Dr. NGOTHO</h2>

        <form action="upload.php" method="post" type="form" name="form" enctype="multipart/form-data">
            <div class="card">
                <div class="cardheader">
                    <h3>ADD BOOK</h3>
                </div>
                <div class="cardbody">
                    <div class="row">
                        <div class="input">
                            <label for="title">Book Title</label>
                            <input type="text" id="title" required name="booktitle" class="form-control">
                        </div>
                        <div class="input">
                            <label for="desc">Book Description</label>
                            <textarea name="bookdesc" id="desc" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="input upld">
                            <label for="image">Book Image</label>
                            <input type="file" id="img" name="image" class="form-control ">
                        </div>
                        <div class="input upld">
                            <label for="file">Book File</label>
                            <input type="file" id="file" name="file" class="form-control ">
                        </div>
<!--                         <div class="card-footer"> </div> -->
<!--                             <button type="submit" id="save" name="save" required class="btn">ADD BOOK</button> -->
                       
                    </div>
                     <button type="submit" id="save" name="save" required class="btn btn-warning btn-lg">ADD BOOK</button>
                        <br>
                </div>
            </div>
        </form>
    </div>
    
</div>
<?php 
    include_once('footer.php');
?>
