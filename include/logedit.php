<?php
session_start();
include 'useractions.php';
$user=new EditUserLog();

$uErr=$dateErr=$lginErr=$lgoutErr="";
$username=$dname=$inname=$outname=$uid=$did=$id=$lid=$us=$ud="";
$uchk=$dchk=$lchk=$lochk="";
$uus=$udd="";

  
if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {  
   if (empty($_POST['username'])) {
    $uErr = "UserName is required";
    $uchk=0;
  } else{
    $uname=$_POST['username'];
    $uchk=1;
  }
  if (empty($_POST['date'])) {
    $dateErr = "Date is required";
    $dchk=0;
  } else{
    $dname= $_POST['date'];
    $dchk=1;
  }
  if (empty($_POST['login'])) {
    $lginErr = "Login time is required";
    $lchk=0;
  } else{
    $inname= $_POST['login'];
    $lchk=1;
  }
  if (empty($_POST['logout'])) {
    $lgoutErr = "Logout time is required";
    $lochk=0;
  } else{
    $outname= $_POST['logout'];
    $lochk=1;
  }
  
  }  
$uus=$_SESSION['ab'];
$udd=$_SESSION['cd'];
 
if($uchk==1 && $dchk==1 && $lchk==1 && $lochk==1)
{
        $res=$user->editlog($uname,$dname,$inname,$outname,$uus,$udd);
        if($res)
            {
                $_SESSION['st']="Successfully Updated ";
                $_SESSION['ut']=$uname;
                $_SESSION['lc']=1;
                header("location: userslogs.php");
            }
        else
            {
                $_SESSION['st']="Failed ";
                $_SESSION['ut']='to Edit'.$uname;
                $_SESSION['lc']=1;
                header("location: userslogs.php");
            }
}

?>