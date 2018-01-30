<?php
session_start();
include 'useractions.php';
$actions=new Actions();

if($actions->get_session()== false)
{
    header('location: ../login.php');
}

$user=new AddUserLog();

  $uErr=$dateErr=$lginErr=$lgoutErr="";
  $uname=$dname=$lginname=$lgoutname=$ress=$id=$lid="";

   if(isset($_POST['submit']))
   {
  if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {  
   if (empty($_POST['username']))
       {
            $uErr = "UserName is required";
            $uchk=0;
       } 
   else
       {
            $uname=$_POST['username'];
            $uchk=1;
       }
   if (empty($_POST['date']))
       {
            $dateErr = "Date is required";
            $dchk=0;
       }
   else
      {
           $dname= $_POST['date'];
           $dchk=1;
      }
   if (empty($_POST['login']))
       {
          $lginErr = "Login time is required";
          $lichk=0;
       }
   else
       {
          $lginname= $_POST['login'];
          $lichk=1;
       }
   if (empty($_POST['logout'])) 
       {
          $lgoutErr = "Logout time is required";
          $lochk=0;
       }
   else
       {
          $lgoutname= $_POST['logout'];
          $lochk=1;
       }
 
        }
 

if($uchk==1 && $dchk==1 && $uchk==1 && $lichk==1 && $lochk==1)
{
    $res=$user->addlog($uname,$dname,$lginname,$lgoutname);
        if($res)
        {
            $_SESSION['st']=$username."Successfully Submited";
            $_SESSION['ut']=$uname." log record on ".$dname;
            $_SESSION['lc']=1;
            header("location: userslogs.php");
        }
        else
        {
            $_SESSION['lc']=1;
            $_SESSION['st']="Already Exists ".$uname." Log record in database on ";
            $_SESSION['ut']=$dname;
            header('location: addlog.php');
        }
}
}
?>

