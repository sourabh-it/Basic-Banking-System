<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking system');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$email=$row['email'];
$balance=$row['balance'];
$_SESSION['name']=$name;
?>

<html>
<html lang="en">
<head>
<link  href="home.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
background:url(images/8.jpg) no-repeat center ;
background-size:cover;
width:50%;
color:#e6ecff;
}
table {
  border: 1px solid grey;
}
th{
  padding: 8px;
  text-align:left;
}

</style>
</head>
  <body style="background-color:#e6ecff;">
        <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
            
                    <a href="homepage.php" class="logo"> HOME</a>
                     </div>
                     <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
<li> <a href="views.php" class="header-link"><span class="glyphicon glyphicon-user"></span> Users</a></li>
<li>  <a href="transactions.php" class="header-link"><span class="glyphicon glyphicon-log-in"></span> Transactions </a>  </li>          
            </ul>
        </div>
        </div>
    </nav>
       <div class="row">
                <div class="col-md-4 col-md-offset-3">
                   <table border="2px">
 <tbody>  

<tr> 
  <br><br>  <br><br><br><br><th><h1><center><b><?php echo $name ?></center></b></h1></th>
</tr>
<?php  
					$row=mysqli_fetch_array($result);
				?>

<tr>
        <th><h3><b><center>Email :</b><?php echo $email ?> </center></h3></th>
</tr>
<?php  
					$row=mysqli_fetch_array($result);
				?>
<tr>
          <th>  <h3 style="width:300px; height:40px; margin-top:3px; margin-bottom:3px; margin-left:-2px; padding-top:8px;"><b><center>Balance :</b> <?php echo $balance ?></center></h3></th>
</tr>
<?php  
					$row=mysqli_fetch_array($result);
				?>
<tr>
			<th><center><a href="transfer.php"><button class="btn btn-primary" style="width:350px; height:40px; margin-top:3px; margin-bottom:3px; margin-left:1px;">TAP TO TRANSFER</button></center></th>
</tr>			
</tbody>
</table>
      </div>  
	</div>
 <footer class="footer">
            Greeshma©Online Banking 2020
        </footer>
</body>
</html>

