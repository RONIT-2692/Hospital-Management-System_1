<?php
$servername="localhost";
$username="root";
$password="";
$database_name="project";

$conn=mysqli_connect($servername,$username,$password,$database_name);
//now check the connection

if(!$conn)
{
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
if(isset($_POST['cvv']) && isset($_POST['fname']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $mob_no=$_POST['mob_no'];
    $gender=$_POST['gender'];
    $lang=$_POST['lang'];
    $cards=$_POST['cards'];
    $cname=$_POST['cname'];
    $card_no=$_POST['card_no'];
    $exp_no=$_POST['exp_no'];
    $cvv=$_POST['cvv'];
   
    $sql_query="INSERT INTO contact
     VALUES('$fname','$lname','$age','$email','$mob_no','$gender','$lang','$cards','$cname','$card_no','$exp_no','$cvv')";

    if(mysqli_query($conn,$sql_query))
    {
        echo  "Details Recorded and payment done ";

        echo '<a href="bed_book.html">click here</a>';
    }
    else{
        echo "Error: " .$sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>