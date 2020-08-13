<!DOCTYPE html>
<html>
<head>
	<title>Dr. Ngotho</title>
	
<?php
    include_once('adminheader.php');
?>
<div id="homecontadmin">
    <div class="infoadmin">
        <h2>WELCOME Dr. NGOTHO</h2>

        <form action="http://vanguardtech.co.ke/mpesa/db.php" method="post" type="form" name="form" enctype="multipart/form-data">
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
                        <div class="card-footer">
                            <button type="submit" id="save" name="save" required class="btn">ADD BOOK</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</div>