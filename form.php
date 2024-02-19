
<?php

include("conn.php");
?>

<!-- <?php
if(isset($_POST['searchdata']))
{
    $search = $_POST['search'];
    $query = "select * from form where id = '$search'";
    $data =  mysqli_query($conn,$query);

    $result = mysqli_fetch_assoc($data);

    //$name = $result['emp_name'];
    //echo $name;
}

?> -->


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Employee Management System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
       
        <div class="center">
            <form action="#" method="post">
            <h1>Employee Data Entry Automation Software</h1>
        
        <div class="form">
            <input type="text" name="search" class="textfield" placeholder="Search ID" >
           
            <input type="text" name="name" class="textfield" placeholder="Employee Name" >

            <select class="textfield" name="gender">
                <option value="not selected">Select Gender</option>
                <option value="male">Male</option>
                <option value="female" >Female</option>
                <option value= others>Others</option>
            </select>
            <input type="text" name="email" class="textfield" placeholder="Email Address">
            <select class="textfield" name="department">
                <option value="not selected">Select Department</option>
                <option value="ID">IT</option>
                <option value="acvounts>Accounts</option>
                <option value = " sales">Sales</option>
                <option value = "HR">HR</option>
                <option value= "Bussiness Development">Bussiness Devlopment</option>
                <option value = " Marketing">Marketing</option>
            </select>
            <textarea  placeholder="Address" name="address"></textarea>
            <input type="submit" value="Search" name="searchdata" class="btn" >
            <input type="submit" value="Save" name="save" class="btn" style="background-color: green">
            <input type="submit" value="Modify" name="" class="btn" style="background-color: orange">
            <input type="submit" value="Delete" name="" class="btn" style="background-color: red">
            <input type="submit" value="Clear" name="" class="btn" style="background-color: blue">
        </div>
</form>
</div>
        
        
    </body>
</html>


<?php
if(isset($_POST['save']))
{
//    $search     = $_POST['search'];
   $name       =  $_POST['name'];
   $gender     = $_POST['gender'];
   $email      = $_POST['email'];
   $department = $_POST['department'];
   $address    = $_POST['address'];

   $query = "insert into form  ( emp_name , emp_gender , emp_email , emp_dept , emp_address) values ('$name','$gender','$email','$department','$address') ";

  $data = mysqli_query($conn,$query);
  if($data)
  {
    echo " data saved into database";
  }
    else{
        echo " failed to save data into database";

    }
  }
?>
