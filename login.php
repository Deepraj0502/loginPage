<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database="test";
	
	$conn = new mysqli($servername, $username, $password,$database);

	$sql1="select username from tcp;";
	$result1=$conn->query($sql1);
    $sql2="select password from tcp;";
	$result2=$conn->query($sql2);
    $user=$result1->fetch_all();
    $pass=$result2->fetch_all();
    echo $_POST["username"];
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $usr=$_POST["username"];
        $ps=$_POST["password"];
        for($i=0;$i<count($user);$i++)
        {
            if($usr==$user[$i][0] && $ps==$pass[$i][0])
            {
                echo "<script> location.replace('homepage.html')</script>";
            }
            else if($usr==$user[$i][0] && $ps!=$pass[$i][0])
            {
                echo "<script> alert('Wrong Password!!') </script>";
                echo "<script> location.replace('index.html')</script>";
            }
        }
    }
?>