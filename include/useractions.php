<?php
include 'actions.php';
$action=new Actions();

class AddUser
{
    public function add($id,$fname,$email,$username,$password,$repassword)
    {
        global $db;
        $sql= "INSERT INTO user VALUES ('$id','$fname','$email','$username','$password')";
        $res= mysqli_query($db->con(),$sql);
        if($res)
        {
            return true;
        }
    }
}

class UpdateUser
{
    public function update($fname,$email,$user,$pswd,$u)
    {
        global $db;
        $sql="update user set fullname='$fname',email='$email',username='$user',password='$pswd' where id='$u'";
        $res=mysqli_query($db->con(),$sql);
        if($res)
        {
            return true;
        }
    }
}

class DeleteUser
{
    public function delete($uid)
    {
        global $db;
        $sql="delete from user where id='$uid' && username<>'admin'";
        $res=mysqli_query($db->con(),$sql);
        if($res)
        {
            return true;
        }
    }
}

class DeleteAllUsers extends DeleteAllLogs
{
    public function deleteAll()
    {
        global $db;
        $ob=new DeleteAllLogs();
        if($ob->dellogs())
        {
        $sql="delete from user where username<>'admin' && username<>'hr'";
        $res=mysqli_query($db->con(),$sql);
        if($res)
        {
            return true;
        }
        }
    }
}

class AddUserLog
{
    public function addlog($uname,$dname,$lginname,$lgoutname)
    {
        global $db;
        $res1=$this->getcol($uname);
        $row=  mysqli_fetch_assoc($res1);
        $id=$row['id'];
        $c=$this->logcheck($uname, $dname);
        if($c==0)
        {
        $sql="insert into log (username,date,in_time,out_time,id) values('$uname','$dname','$lginname','$lgoutname','$id')";
        $res=mysqli_query($db->con(),$sql);
        if($res)
        {
            return true;
        }
        }
        else
        {
            return false;
        }
    }
    
    public function getcol($uname)
    {
        global $db;
        $sql="select * from user where username='$uname'";
        $res=mysqli_query($db->con(),$sql);
        if($res)
        {
            return $res;
        }
    }
     
    public function logcheck($uname,$date)
    {
        global $db;$chk=0;
        $sql="select date from log where username='$uname'";
        $res=  mysqli_query($db->con(), $sql);
        while($row=mysqli_fetch_assoc($res))
        {
            if($date==$row['date'])
            {
                $chk++;
            }
        }
        return $chk;
    }
}

class EditUserLog
{
    public function editlog($uname,$dname,$inname,$outname,$uus,$udd)
    {
        global $db;
        $sql="update log set username='$uname',date='$dname',in_time='$inname',out_time='$outname' where username='$uus' && date='$udd'";
        $res=mysqli_query($db->con(),$sql);
        if($res)
        {
            return true;
        }
    }
}

class DeleteAllLogs
{
    public function dellogs()
    {
        global $db;
        $sql="delete from log";
        $res=mysqli_query($db->con(),$sql);
        if($res)
        {
            return true;
        }
    }
}

class UserAddLog extends AddUserLog
{
    public function uaddlog($uname,$dname,$lginname,$lgoutname)
    {
        global $db;
        $ob=new AddUserLog();
        $res1=$ob->getcol($uname);
        $row= mysqli_fetch_assoc($res1);
        $id=$row['id'];
        $c=$ob->logcheck($uname,$dname);
        if($c==0)
        {
        $sql="insert into log (username,date,in_time,out_time,id) values('$uname','$dname','$lginname','$lgoutname','$id')";
        $res=mysqli_query($db->con(),$sql);
        if($res)
        {
            return true;
        
        }
        }
        else
        {
            return false;
        }
        
    }
   
}

class CPassword
{
    public function cp($user,$currentpassword,$newpassword)
    {
        global $db;
        $rr=$this->pswdchk($user, $currentpassword);
        if($rr)
        {
        $sql= "update user set password='$newpassword' where username='$user'";
        $res= mysqli_query($db->con(), $sql);
        if($res)
        {
            return true;
        }
        else
        {
            return false;
        }
        }
        else
        {
            return false;
        }
    }
    
    public function pswdchk($user,$password)
    {
        global $db;
        $sql1="select * from user where username='$user' and password='$password'";
        $res1=  mysqli_query($db->con(), $sql1);
        $row=  mysqli_num_rows($res1);
        if($row==1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>