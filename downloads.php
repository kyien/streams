<!DOCTYPE html>
<html>
<head>
	<title>Dr. Ngotho</title>
	
<?php
    include_once('header.php');
    include_once('sidenav.php');

?>
<div class="downloads">
    <h2 id="books">BOOKS</h2>
    <div class="outerbooks">
        <div class="books">
            <div class="imgbooks">
                <img src="postimages/journey.jpeg" alt="">
            </div>
            <div class="booksdesc">
                <h3><a href="">JOURNEYING WITH THE LIVING GOD</a></h3>
                <p>Many times, we are tempted to think that God is not real. When we are happy and comfortable, we congratulate ourselves for the success. On the other hand, when we suffer, we cry to God for help. When our suffering persists, we go back to our conclusion that God does not exist. How mistaken we are</p>
              <div class="buttons">
                <a href="preview.php" ><button>Preview <i class="fas fa-eye"></i> </button></a>
                <a href="#" id="dwnld"><button>Download <i class="fas fa-download"></i> </button></a>
                </div>
            </div>
        </div>
    </div>  
       
       
  
    <h2 id="videos">VIDEOS</h2>
    <div class="outervideos">
        <div class="videos">
            <div class="imgvideos">
                <iframe width="250" height="250" src="https://www.youtube.com/embed/TIl2mecepmA"> </iframe>
            </div>
            <div class="booksdesc">
                <h3><a href="">AMOSI</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem perspiciatis impedit eum sit tenetur aliquid reprehenderit repudiandae itaque non accusamus modi delectus cumque, sequi soluta voluptates nulla consequatur harum deserunt.</p>
                <a href="#" class="dwnld"><button>Download <i class="fas fa-download"></i> </button></a>
            </div>
        </div>
        <div class="videos">
            <div class="imgvideos">
                <iframe width="250" height="250" src="https://www.youtube.com/embed/nYPVdJx-o1w"> </iframe>
            </div>
            <div class="booksdesc">
                <h3><a href="">Vijana</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem perspiciatis impedit eum sit tenetur aliquid reprehenderit repudiandae itaque non accusamus modi delectus cumque, sequi soluta voluptates nulla consequatur harum deserunt.</p>
                <a href="#" class="dwnld"><button>Download <i class="fas fa-download"></i> </button></a>
            </div>
        </div>
        <div class="videos">
            <div class="imgvideos">
                <iframe width="250" height="250" src="https://www.youtube.com/embed/B9Iz0ZdlMoU"> </iframe>
            </div>
            <div class="booksdesc">
                <h3><a href="">Bururi uyu</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem perspiciatis impedit eum sit tenetur aliquid reprehenderit repudiandae itaque non accusamus modi delectus cumque, sequi soluta voluptates nulla consequatur harum deserunt.</p>
                <a href="#" class="dwnld"><button>Download <i class="fas fa-download"></i> </button></a>
            </div>
        </div>
        <div class="videos">
            <div class="imgvideos">
                <iframe width="250" height="250" src="https://www.youtube.com/embed/ti3xPDrGvYk"> </iframe>
            </div>
            <div class="booksdesc">
                <h3><a href="">Nalilia familia</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem perspiciatis impedit eum sit tenetur aliquid reprehenderit repudiandae itaque non accusamus modi delectus cumque, sequi soluta voluptates nulla consequatur harum deserunt.</p>
                <a href="#" class="dwnld"><button>Download <i class="fas fa-download"></i> </button></a>
            </div>
        </div>
        <div class="videos">
            <div class="imgvideos">
               <iframe width="250" height="250" src="https://www.youtube.com/embed/YeAat521nZU"> </iframe>
            </div>
            <div class="booksdesc">
                <h3><a href="">Nashukuru</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem perspiciatis impedit eum sit tenetur aliquid reprehenderit repudiandae itaque non accusamus modi delectus cumque, sequi soluta voluptates nulla consequatur harum deserunt.</p>
                <a href="#" class="dwnld"><button>Download <i class="fas fa-download"></i> </button></a>
            </div>
        </div>
        <div class="videos">
            <div class="imgvideos">
                <iframe width="250" height="250" src="https://www.youtube.com/embed/ybteRlcN_Yg"> </iframe>
            </div>
            <div class="booksdesc">
                <h3><a href="">Nimemuona Yesu</a></h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem perspiciatis impedit eum sit tenetur aliquid reprehenderit repudiandae itaque non accusamus modi delectus cumque, sequi soluta voluptates nulla consequatur harum deserunt.</p>
                <a href="#" class="dwnld"><button>Download <i class="fas fa-download"></i> </button></a>
            </div>
        </div>
    </div>
</div>
<div class="popupdwld">
    <div class="ppupcntnt">
        <div class="close">+</div>
        <p>Enter Your Phone Number</p>
        <form action="lipa1.php" method="post">
            <input type="number" name="number" placeholder="254700000000">
            <button id="button">Submit</button>
        </form>

    </div>

</div>

 <?php 
 include_once('footer.php');
 ?>
 
 
 
 
 
 <?php
$servername = "localhost";
$username = "vanguar1_mpesa";
$password = "mpesa1720!";
$dbname = "vanguar1_mpesa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$result = mysql_query("SELECT * FROM books");

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("ID: %s  Name: %s", $row[0], $row[1]);  
}

mysql_free_result($result);
?>
