<?PHP
$con=mysqli_connect('localhost','root','','gymdata');
if(isset($_POST['sd'])){
$name=$_POST['nm'];
$phone_num=$_POST['mb'];
$email=$_POST['em'];
$message=$_POST['mess'];
$query="INSERT INTO contact (NAME,PHONE_NUMBER,EMAIL,MEASSAGE) VALUES ('$name','$phone_num','$email','$message')";
$execute=mysqli_query($con, $query);
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-pIVpL1hSgE+1O8GY9Q2MG/qhjvEYP7GnS6Kc5Uu2VvP6E7PPrkkF6bHBsQGIX8vLhXG3z2P1yt0C9O+N9cC1eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body bgcolor="black">
    <div class="main">
    <div id="logo">
        <h4><span style="color: orangered;">YOUNG</span> STAR</h4>
    </div>
    <div class="bar">
<a href="INDEX.PHP">HOME</a>
<a href="about.php">ABOUT</a>
<a href="contact.php" target="_blank">CONTACT</a>
<a href="service.php">SERVICES</a>
 </div>
 <div class="icon"><i class="fa-solid fa-circle-user" style="font-size:20px;"></i></div>

        </div>



<div class="mainE" style="display: flex; margin-top:100px; text-align:center; margin-left:80px">

<div class="left" style="width:500px;height:500px; border:solid 2px black; margin-left:00px ;padding-top:200px; font-size:40px;6+++++">CONTACT US</div>

<div class="right" style="width:700px;height:500px; border:solid 2px black; margin-left:00px">
<form method="post">
<div class="detail" style="display: flex; gap:50px;margin-left:70px">
    
    <div class="name" style="text-align: start;">
        <label style="color:white;">Name*</label><br>
        <input type="text"  name="nm" placeholder="Enter your name" style="width:250px;height:50px;background-color:transparent;border:solid 1px white; margin-top:10px;font-size:16px">
    </div>
    <div class="number" style="text-align: start;">
        <label style="color:white;">Phone number*</label><br>
        <input type="text"  name="mb" placeholder="Enter your phone number" style="width:250px;height:50px;background-color:transparent;border:solid 1px white;margin-top:10px; font-size:16px">
    </div>


</div><br>
<div class="email">
<label style=" display:flex; text-align:start; margin-left:70px">Email</label><br>
<input type="email"  name="em" placeholder="YourEmail@gmail.com" style="width:80%; height:50px; border:solid 1px white; background-color:transparent; font-size:16px;">

</div><br>
<div class="massage">
<label style=" display:flex; text-align:start; margin-left:70px">Message</label><br>
<input type="text"  name="mess" placeholder="Can we help you" style="width:80%; height:130px; border:solid 1px white; background-color:transparent; font-size:16px; padding-bottom:100px;flex-wrap:wrap;">



</div><br><br><br>
<button   name="sd" style="width:80%; height:50px; background-color:green;font-size:20px">Send Message ...</button>

</div>

</form>

</div>


<div class="address" style="display: flex; width:100%;height:400px; gap:50px;">
<div class="add1" style="width:400px;margin-left:200px;margin-top:230px;font-size:20px"><h1>ADDRESS</h1></div>
<div class="add2" style="width:400px;">
<P style="font-size:20px; margin-top:100px">Address</P><br>
<p style="font-size:18px;color:gainsboro;">G-16/124 <br> Gujar Chowk<br>Sangum Vihar New Delhi</p>
<br><br>
<P style="font-size:20px">HOURS</P><br>
<p style="color:gainsboro;font-size:18px;">Monday - Saturday<br> Morning Shift  6am - 10am   <br>Evening Shift  4pm - 10pm</p>
<br>
<br>
<P style="font-size:20px">Customer Service</P><br>
<p style="color:gainsboro;font-size:18px;">YoungStar @ Fitness<br><br><h3>Support</h3></p>

</div>




</div>



<footer>

<div class="footer" style="margin-top:250px;display:flex;gap:300px;margin-left:80px; ">
    <pre>
<h1 style="font-size:100px;"><span style="color: orangered;">YOUNG</span><br>  STAR</h1></pre>

<div class="navi" style="display: flex;gap:100px;margin-top:30px;">

<div class="nav1"><h1 style="font-size:20px;">NAVIGATION</h1><BR>
 <a>HOME</a><BR><BR>
<a>ABOUT</a>



</div>
<div class="nav2"><h1 style="font-size:20px;">INFO</h1><BR>
 <a>HOME</a><BR><BR>
<a>ABOUT</a></div>
<div class="nav3"><h1 style="font-size:20px;">SOCIAL</h1><BR>
 <a>HOME</a><BR><BR>
<a>ABOUT</a></div>

</div>

</div>





</footer>
<HR style="margin-top:120px;">
<div class="last" style="width:100%;height:70px; display:flex;gap:62%">
<p style="margin-top:23px;margin-left:50px;font-size:14px; color:smokewhite;">© 2025 YOUNG STAR.All right reserved</p>
<p style="margin-top:23px; font-size:14px;">Design by Rupesh Sharma</p>
</div>


</body>
</html>