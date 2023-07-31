<?php
$servername="localhost";
$username="root";
$password="";
$database_name="ambulance";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection

if(!$conn)
{
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
if(isset($_POST['landmark']) && isset($_POST['fname']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $mob_no=$_POST['mob_no'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    $landmark=$_POST['landmark'];
   
    $sql_query="INSERT INTO list
     VALUES('$fname','$lname','$age','$email','$mob_no','$gender','$address','$pincode','$landmark')";

    if(mysqli_query($conn,$sql_query))
    {
        echo  "Details Recorded  ";

        echo '<a href="link5.html">click here</a>';
    }
    else{
        echo "Error: " .$sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>