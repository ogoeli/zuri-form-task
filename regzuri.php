<?php 
if(isset($_POST['textdata']))
header("location: index.html");
{
    $data = $_POST['textdata'];
    $fp = fopen('data.txt', 'r');
    fwrite($fp, $data);
    fclose($fp);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <style>
    body{font: 15px sans-serif;}
    .wrapper{width:350px; padding:20px;}
    </style>
</head>
<body>
<div class="wrapper">
        <h3>Sign Up</h3>
        <p>fill out this form to create an account</p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
        <div >
        
        <label>Username:</label>
        <input name="textdata" type = "text" value ="">
        <span>
        </span>
        </div>

        <div class =" form-group">
            <label>Password:</label>
        <input name="textdata" type = "password" value = "">
        <span> 
        </span>
                       </div>

                <div class =" form-group ">
                    <label name="confirm"> confirm password:</label>
                    <input name="textdata"  required placeholder="password ">
                    <span> 
                    </div>  
        <div>
        <input value ="submit" type="submit"  >
        <input value ="reset" type="reset">
        </div>
        <p> Already have an account? <a href= "login.php"> Login here</a></p>
        </form>
        </div>
        </body>
</html>
