<?php
$servername="localhost";
$username="root";
$password="";
$database_name="appointment";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection

if(!$conn)
{
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
if(isset($_POST['msg']) && isset($_POST['fullname']))
{
    $fullname=$_POST['fullname'];
    $mob_no=$_POST['mob_no'];
    $email=$_POST['email'];
    $time=$_POST['time'];
    $msg=$_POST['msg'];

    $sql_query="INSERT INTO details1
     VALUES('$fullname','$mob_no','$email','$time','$msg')";

    if(mysqli_query($conn,$sql_query))
    {
        echo  "Details Recorded  ";

        echo '<a href="link6.html">click here</a>';
    }
    else{
        echo "Error: " .$sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>