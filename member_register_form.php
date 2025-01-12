<?php
session_start();
include('header.php');
?>
<header>
<style>
.container {
    width: 100%;
    height: 900px;
}
form {
    left: 25%;
}
.register{
width: 350px;
padding: 40px;
position: absolute;
background: #191919;
text-algin: center;
}
.register h1 {
color: white;
text-transform: uppercase;
font-weight: 500;
}
.register input[type = "text"],.register input[type = "password"] {
border: 0;
background: none;
display: block;
margin: 20px auto;
margin-bottom: 0;
text-align: center;
border: 2px solid #3498db;
padding: 14px 10px;
width: 200px;
outline: none;
color: white;
border-radius: 24px;
transition: 0.25s;
}
.register input[type = "text"]:focus,.register input[type = "password"]:focus {
width: 280px;
border-color: #2ecc71;
}
.register input[type = "submit"]{
border: 0;
background: none;
display: block;
margin: 20px auto;
text-align: center;
border: 2px solid #2ecc71;
padding: 14px 40px;
outline: none;
color: white;
border-radius: 24px;
transition: 0.25s;
cursor: pointer;
}
.register input[type = "submit"]:hover{
background: #2ecc71;
}
</style>
</header>
<body>
<div class="container">
<h3 style="font-size: 30; font-style: italic;">Member Register Form</h3>


<!-- Borang Pendaftaran Peserta baru -->
<form action='member_register_process.php' method='POST' style=" font-size: 30px; margin-left: 50px;" class="register">
    <h1>Register</h1>
    <input type='text' name='Name' required placeholder="Full name"><br>
    <input type='text' name='PhoneNumber' required placeholder="Phone Number"><br>
    <input type='text' name='Email' required placeholder="Email Address"><br>
    <input type='password' name='Password' required placeholder="Password"><br>
    <input type='password' required placeholder="Re-type Password"><br>
    Date of Birth <input type='datetime-local' required><br>
    I agree to abide by Globe's Terms & Conditions and Privacy Policy. <input type="checkbox" required><br>
    <input type='submit' value='Submit'>

</form>
</div>
</body>
<?php include('footer.php'); ?>