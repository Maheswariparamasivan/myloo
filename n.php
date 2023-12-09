<?php
$con=mysqli_connect("localhost","root","","loginn");
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($email!=""&&$password!=""){
        $sql="insert into log values('$email','$password')";
        if($con->query($sql)){
           echo'<script>alert("Data stored")</script>';
        }else{
            echo'<script>alert("Data not stored")</script>';
        }
    }else{
    echo'<script>alert("Fill all rows")</script>';
}
}
?>