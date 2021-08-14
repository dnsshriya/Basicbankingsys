<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="button.css">
	<style>
	body{
		text-align:center;
	}
	body {
    background-image:url('cd.jpg');
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    object-fit: cover;
}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center {
    display: inline-block;
    background-color: #E83845;
    padding: 100px;
   
    }
	.ho{
		padding-top:50px;
	}
	
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		
		font-size:17px;
		font-weight:bold;
		
	}
	
	}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Ram"){
				 var arr=["Anjali","Priya","Arya","Arun","Radha","Durga","Bindhu","Dheena","Varsha"];
				 }
				 else if(a==="Anjali"){
					var arr=["Ram","Priya","Arya","Arun","Radha","Durga","Bindhu","Dheena","Varsha"];
				}
				else if(a==="Priya"){
					var arr=["Ram","Anjali","Arya","Arun","Radha","Durga","Bindhu","Dheena","Varsha"];
				}
				else if(a==="Arya"){
					var arr=["Ram","Anjali","Priya","Arun","Radha","Durga","Bindhu","Dheena","Varsha"];
				 }
				 else if(a==="Arun"){
					var arr=["Ram","Anjali","Priya","Arya","Radha","Durga","Bindhu","Dheena","Varsha"];
				 }
				 else if(a==="Radha"){
					var arr=["Ram","Anjali","Priya","Arya","Arun","Durga","Bindhu","Dheena","Varsha"];
				 }
				 else if(a==="Durga"){
					var arr=["Ram","Anjali","Priya","Arya","Arun","Radha","Bindhu","Dheena","Varsha"];
				 }
				 else if(a==="Bindhu"){
					var arr=["Ram","Anjali","Priya","Arya","Arun","Radha","Durga","Dheena","Varsha"];
				 }
				 else if(a==="Dheena"){
					var arr=["Ram","Anjali","Priya","Arya","Arun","Radha","Durga","Bindhu","Varsha"];
				 }
				 else if(a==="Varsha"){
				 var arr=["Ram","Anjali","Priya","Arya","Arun","Radha","Durga","Bindhu","Dheena"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#000000;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left" style="font-weight:bold;">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Ram">Ram</option>
			<option value="Anjali">Anjali</option>
			<option value="Priya">Priya</option>
			<option value="Arya">Arya</option>
			<option value="Arun">Arun</option>
			<option value="Radha">Radha</option>
			<option value="Durga">Durga</option>
			<option value="Bindhu">Bindhu</option>
			<option value="Dheena">Dheena</option>
			<option value="Varsha">Varsha</option>
		</select><br><br>
		<label for="receiver" align="left" style="font-weight:bold;">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left" style="font-weight:bold;">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='red'"onMouseOut="this.style.color='#28048a'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	
	<a href="index.php">
    <button class="glow-on-hover" style="font-weight:bold;color:black">HOME</button>
	</a>
</div>
</body>
</html>