<?php
session_start();
include 'useractions.php';
$user=new UserAddLog();
$actions=new Actions();
if($actions->get_session()== false)
{
    header('location: ../login.php');
}

  $uErr=$dateErr=$lginErr=$lgoutErr="";
  $uname=$dname=$lginname=$lgoutname=$ress=$id=$lid="";
  $ichk="";
   if(isset($_POST['submit']))
   {
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {  
   
   if (empty($_POST['date']))
       {
            $dateErr = "Date is required";
            $ichk=0;
       }
   else
      {
           $dname= $_POST['date'];
           $ichk=1;
      }
   if (empty($_POST['login']))
       {
          $lginErr = "Login time is required";
          $ichk=0;
       }
   else
       {
          $lginname= $_POST['login'];
          $ichk=1;
       }
   if (empty($_POST['logout'])) 
       {
          $lgoutErr = "Logout time is required";
          $ichk=0;
       }
   else
       {
          $lgoutname= $_POST['logout'];
          $ichk=1;
       }
 
 
 
$uname=$_SESSION['uname'];

if($ichk==1)
{
    $res=$user->uaddlog($uname,$dname,$lginname,$lgoutname);
        if($res)
        {
            $_SESSION['st']="Successfully Submited";
            $_SESSION['ut']=" log record";
            $_SESSION['lc']=1;
            header("location: usermylogs.php");
        }
        else
        {
            $_SESSION['lc']=1;
            $_SESSION['lcc']=1;
            $_SESSION['ress']="Already Exists your Log record in database on ".$dname;
            header('location: ../index.php');
        }
}
        }
   }
   else
   {
       header("location: ../index.php");
   }
?>