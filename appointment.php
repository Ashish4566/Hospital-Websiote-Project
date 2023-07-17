<?php    
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $Age = $_POST['age'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $Date = $_POST['date'];
    $Time = $_POST['time'];

    if(!empty($email)  && !is_numeric($email))
    {
      
        $query=" INSERT into appointment (fname, lname, age, contact, email, date, time ) values ('$firstname','$lastname','$Age ','$contact',' $email','$Date','$Time')";
        mysqli_query($con,$query);
        echo "<script type='text/javascript'> alert('Successfully Booked Appointment, Thankyou!')</script>";
        
    }
    else{
        echo "<script type='text/javascript'> alert('Enter Valid Information')</script>";
    }
    header("location: index.php? success=<script type='text/javascript'> alert('Successfully Registered')</script>");
    
}
?>