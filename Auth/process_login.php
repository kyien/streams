<?php

require('conn.php');
require('session.php');
if (isset($_POST['btnlogin'])) {

echo "starting ...";

  $email = trim($_POST['username']);
  $upass = trim($_POST['password']);
  $h_upass = sha1($upass);
if ($upass == ''){
     ?> 
     
        <script type="text/javascript">
                alert("Password is missing!");
                window.location = "../login.php";
                </script>
        <?php
}else{
//create some sql statement             
        $sql = "SELECT * FROM  `accounts` WHERE  `username` =  '" . $email . "' AND  `password` =  '" . $h_upass . "'";
        $result = mysqli_query($conn, $sql);

        if ($result){
             //get the number of results based n the sql statement

             echo "user found ....";
        $numrows = mysqli_num_rows($result);
     
        //check the number of result, if equal to one   
        //IF theres a result
            if ($numrows == 1) {
                //store the result to a array and passed to variable found_user
                $found_user  = mysqli_fetch_array($result);

                //fill the result to session variable
                $_SESSION['MEMBER_ID']  = $found_user['id']; 
                $_SESSION['USER_NAME'] = $found_user['username']; 
                // $_SESSION['LAST_NAME']  =  $found_user['lName']; 
           
             ?>    <script type="text/javascript">
                      //then it will be redirected to index.php
                      window.location = "../admin/index.php";
                  </script>
             <?php        
           
        
            } else {
            //IF theres no result
              ?>    <script type="text/javascript">
                alert("Username or Password is invalid ! Contact Your administrator.");
                window.location = "../login.php";
                </script>
        <?php

            }

         } else {
                 # code...
         die("Table Query failed: " );
        }
        
    }       
} 
 
?>