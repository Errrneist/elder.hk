<?php  
    if(isset($_POST["submit"]) && $_POST["submit"] == "Log In")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('Please Enter Your User Name And Password！'); history.go(-1);</script>";  
        }  
        else  
        {  
            mysql_connect("localhost","root","sixx");  
            mysql_select_db("vt");  
            mysql_query("set names 'gbk'");  
            $sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";  
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result);  
            if($num)  
            {  
                $row = mysql_fetch_array($result);  //将数据以索引方式储存在数组中  
                echo $row[0];  
            }  
            else  
            {  
                echo "<script>alert('That's not a match!');history.go(-1);</script>";  
            }  
        }  
    }  
    else  
    {  
        echo "<script>alert('Unable to upload data'); history.go(-1);</script>";  
    }  
  
?>  