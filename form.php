<?php include ("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="#" method="POST">
    <div class="tittle">
        REGISTRATION FORM
    </div>
    <div class="form">
        <div class="input_field">
            <label>firstname</label>
                <input type="text" class="input" name="fname" required>
            
        </div>
        <div class="input_field">
            <label>last name</label>
                <input type="text" class="input" name="lname" required>
        </div>
        <div class="input_field">
            <label>password</label>
                <input type="password" class="input" name="password" required>
        </div>
        <div class="input_field">
            <label>confirm password</label>
                <input type="password" class="input"  name="conpassword" required>
        </div>
        <div class="input_field">
            <label>gender</label>
                <select class="ss"  name="gender" required>
                <option value="not selected">select</option>
                    <option>male</option>
                    <option>female</option>
                    <option>other</option>
                </select>
        </div>
        <div class="input_field">
            <label>email</label>
                <input type="mail" class="input"  name="email" required>
        </div>
        <div class="input_field">
            <label>phone number</label>
                <input type="number" class="input"  name="phone" required>
        </div>
        <div class="input_field">
            <label>address</label>
            <textarea class="textarea"  name="address"></textarea>
        </div>
        <div class="input_field">
            <label class="check">
                <input type="checkbox">
                <span class="checkmark">
                agree to terms & conditions</span>
            </label>
        </div>
        <div class="input_field">
            <input type="submit" value="Submit" class="btn"  name="register">
        </div>

    </div>
 </form>
</div>
</body>
</html>


<?php

if($_POST['register'])

{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['conpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if($fname !="" && $lname !="" && $pwd !="" && $cpwd !="" && $gender !="" && $email !="" && $phone !="" && $address !="")
{


    $query ="INSERT INTO FORM values(' $fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$address')";
    
    $data = mysqli_query($conn,$query);

    if($data)
    {
        echo "data inserted";
    }
    
    
} 
else
    {
        echo "Please kindly fill the form";   
    }
}

?>