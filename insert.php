<?php
$conn=mysqli_connect("localhost","root","","students");
if (isset($_POST['save'])){
    $b=$_POST['names'];
    $c=$_POST['email'];
    $d=$_POST['department'];
    $e=$_POST['salary'];
    $ql="INSERT INTO `employees`(`names`, `email`, `department`, `salary`)
     VALUES ('$b','$c','$d','$e')";
     $exe=mysqli_query($conn,$ql);
     if($exe==true){
        echo"data is inserted";
     }
     else {
        echo" data not inserted";
     }
}
?>