<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="C:/Users/srava_000/Desktop/Workspace/font-awesome-4.7.0/css/font-awesome.min.css">
<style type="text/css">
input:focus {
	outline:none;
} 
input{
 box-shadow:none;
 font-size:16px;
 
}
button.signin {
	background-color:#f7d82c;
	border: solid #f7d82c;
	height:30px;
	width:100px;
	outline: none;
	font-family:calibri;
	font-size:18px;
}
button.signin:hover {
border:none;
	background-color:black;
	height:30px;
	width:100px;
	outline: none;
	font-family:calibri;
	font-size:18px;
	color:#f7d82c;
}
button.signup {
	background-color:#f7d82c;
	border: solid #f7d82c;
	height:30px;
	width:100px;
	outline: none;
	font-family:calibri;
	font-size:18px;

	position:relative;
	left:1250px;
	top:2px;

}
button.signup:hover {
	background-color:black;
	color:#f7d82c;
	border:none;
	height:30px;
	width:100px;
	outline: none;
	font-family:calibri;
	font-size:18px;
	margin-right:auto;
    margin-left:1150px;
}
/* .header {
    height:50px;
    background:#f7d82c;
    border:1px solid #CCC;
    width:auto;
    margin:0px auto;
} */
.header{
/* color:#fff!important;
background-color:#f7d82c!important;
height:50px;
width:auto; */
background-color:#f7d82c;
    position: fixed;
    height: 60px;
    top: 0;
    width: 100%;
    z-index: 100;
}
.footer {
  position: absolute;
  height:15px;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #f7d82c;
  text-align: right;
  font-size:10px;
  font-family:calibri;
}
h1{
font-family:Impact, Charcoal, sans-serif;
color:black;
text-align:left;
padding-left:10px;
}
.fa{
border-color:#f7d82c;
height:32px;
width:32px;
}

</style>

</head>

<body>

<div class="header">

<center>
	<h1>Fantasy.com</h1>
</center>
<div>
<div>
<form action="https://accounts.google.com/SignUp?service=mail&hl=en&continue=http%3A%2F%2Fmail.google.com%2Fmail%2F%3Fpc%3Den-ha-apac-in-bk-refresh13&utm_campaign=en&utm_source=en-ha-apac-in-bk-refresh13&utm_medium=ha">
<button class="signup">SignUp</button>
</form>
</div>
<!-- <h1 style="text-align:center"><i class="fa fa-user-o" aria-hidden="true"></i>FontAwesome</h1>-->
<center>

<div style="padding-top:100px;">
</div>
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-user-o fa-border" style="color:black;font-size:20px;" aria-hidden="true"></i>
  <input class="form-control" type="text" placeholder="Username"></span>
</div>
<br>
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw fa-border" style="color:black;font-size:20px;" aria-hidden="true"></i></span>
  <input class="form-control" type="password" placeholder="Password">
  
</div>
<br>
<div>

	<input type="checkbox" style="color:black;"/>
<label class="check" style="color:black;">Remember Login</label>
	</div>
	<br>
	
<button class="signin">SignIn</button>

</div>
</div>
</center>
<div class="footer">
all rights are reserved by sravan.jaggala @2016
</div>
</body>

</html>
