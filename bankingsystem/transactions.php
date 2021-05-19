<?php
session_start();
$con=mysqli_connect("localhost","root","","banking system") or die(mysqli_error($con));
$q="select * from transactions";
$result=mysqli_query($con,$q);

?>
<!DOCTYPE html>
<html>
<head>

<link  href="home.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>

      
    <body style="background-color:#6cabad;">
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
<div class="container">
<br><br><u><h1 style="color:black;">ALL TRANSACTIONS</u></h1>
<br><br>
 <table class="table table-responsive table-bordered table-hover">
<thead>
		<th><b style="color:white; font-size:20px;">SENDER</b></th>
                                      <th><b style="color:white; font-size:20px;">RECEIVER</b></th>
		<th><b style="color:white; font-size:20px;">BALANCE</b></th>
	</thead>
	<tbody>
<tr>
        <?php  
     
 while ($row=mysqli_fetch_array($result)) { ?>
 <td ><b style="color:black; font-size:16px;"><?php echo  $row["sender"]; ?></b></td>
  <td><b style="color:black; font-size:16px;"><?php echo  $row["receiver"]; ?></b></td>
 <td><b style="color:black; font-size:16px;"><?php echo  $row["balance"]; ?></b></td>		 </tr>
<?php } ?>
</tbody>
</table>
</div>
<footer class="footer">
            Greeshma©Online Banking 2020
        </footer>
</body>
</html>