
<?php
/* Description:
* Homework 2: Simple Pay Calculator that calculates specified values
* based on pay and hours worked
* Author - Josh Mansito
* Version - 9/5/2022
* Side note: I was having issues getting this .php file to use the .css styles, so I hard coded everything
*/
?>
<?php if(!empty($_GET['name']) && !empty($_GET['hr-pay']) && !empty($_GET['hr-work'])) : ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <title>Results Page</title>
</head>
<style>
    body{
        background-color: azure;
    }
    .center {
        margin: 10px auto auto;
        min-height: 230px;
        width: 60%;
        border: 3px solid darkcyan;
        padding: 10px;
    }
    .results span {
        display: inline-block;
    }
    h1{
        text-align: center;
        color: 	#484848;
        font-family: 'Trebuchet MS', sans-serif;
    }
    h2{
        text-align: center;
        color: #484848;
        font-size: medium;
        font-family: 'Trebuchet MS', sans-serif;
    }
</style>
<body class = center>
<div class = results>
    <h1>Your Results</h1>
<!--    I am using h2 instead of label for formatting, they can be changed to label if absolutely necessary for the assignment-->
    <h2>Name: <?php $name=$_GET["name"];echo $name?><br></h2>
    <h2>Pay: $<?php $pay=$_GET["hr-pay"];echo number_format($pay,2)?><br></h2>
    <h2>Hours: <?php $hours=$_GET["hr-work"];echo number_format($hours, 2)?> hours<br></h2>
    <h2>Net Pay: $<?php $net = $pay * $hours;echo number_format($net, 2)?><br></h2>
    <h2>Deduction: $<?php $deduction=$net*.10;echo number_format($deduction, 2)?><br></h2>
    <h2>Gross Pay: $<?php $gross=$net - $deduction;echo number_format($gross, 2)?><br></h2>

</div>
<div style="clear:both"></div>

</body>
</html>

<?php else : ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
    <title>Results Page</title>
</head>
<style>
    body{
        background-color: azure;
    }
    .center {
        margin: 10px auto auto;
        min-height: 230px;
        width: 60%;
        border: 3px solid darkcyan;
        padding: 10px;
    }
    .results span {
        display: inline-block;
    }
    h1{
        text-align: center;
        color: 	#484848;
        font-family: 'Trebuchet MS', sans-serif;
    }
    h2{
        text-align: center;
        color: #484848;
        font-size: small;
        font-family: 'Trebuchet MS', sans-serif;
    }
</style>
<body class = center>
<div class = results>
    <h1>Please Enter Your Information</h1>
</div>
<div style="clear:both"></div>

</body>
</html>
<?php endif; ?>


