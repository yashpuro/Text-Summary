
<?php
   session_start();
//    if(isset($_SESSION['userid'])==false)
// {
//    header('location:/ml/index.html');
// }
   include("config.php");
   if(isset($_POST['login']))
   {
      
      $myusername = mysqli_real_escape_string($db,$_POST['ID']);
      $mypassword = mysqli_real_escape_string($db,$_POST['PASSWORD']);
      $_SESSION['userid'] = $myusername;   
      if((!empty($myusername))&&(!empty($mypassword)))
         {
               $sql = "SELECT email FROM auth WHERE email = '$myusername' and password = '$mypassword'";
               $result = mysqli_query($db,$sql);
               // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
               $count = mysqli_num_rows($result);
               if($count == 1) 
               { //echo $_SESSION;
                     header("location:/summary/main.html");;
               }  
               else 
               {
                     echo "Wrong credentials";;
               }
            }
             

         }
         

      

   
?>