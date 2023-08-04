<?php
$connect = mysqli_connect("localhost", "root", "", "architect_enquiryform");
if($connect){
    echo"Connected Successfull!!";
}
else{
    echo"Not Connected";
}

if(isset($_POST["enquiry"])){

    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $emailid = $_POST['email'];
    $mobile_number = $_POST['number'];
    $message = $_POST['message'];
    
    $msql = "INSERT INTO `enquiryform` (`firstname`, `lastname`, `email`, `mobile`, `message_box`) VALUES ('$first_name', '$last_name', '$emailid', $mobile_number, '$message')";
    $query = mysqli_query($connect, $msql);
    // $insert = mysqli_query($connect, $query);
   
    

    
    if($query == true)
    {
        echo '<script>
                alert("We have successfully received your enquiry");
            </script>';
    }
    else
    {
        echo '<script>
                alert("We were unable to receive your enquiry");
            </script>';
    }
    

}


?>





