<?php
session_start();
$con=mysqli_connect("localhost","root","","banking system") or die(mysqli_error($con));
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
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
</head>
<style>
.row_style{
padding-top:0px;
margin-top:90px;
margin-bottom:20px;
}
body{
background:url(images/8.jpg) no-repeat center  ;
background-size:cover;
}
</style>
<body style="background-color:#d0e1d3">
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
<div class="row row_style">
                <div class="col-xs-3 col-xs-offset-2">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                    <h3>MONEY TRANSFER</h3>
                        </div>
                        <div class="panel-body">     
          
                            <form action="transfer_to.php" method="POST">
<label for="sender" style="font-size: 13pt;"><b>Receiver ID:</b></label>
		<select name="receiver" class="form-control" style="font-size: 12pt;>
<option value="">--Select--</option>
<?php while($row = mysqli_fetch_array($result)) { ?>
			<option name="name" value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
		<?php } ?>
</select>
            <label for="transfer" style="font-size: 13pt;"><b>Amount:</b></label> 
			&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="number" class="form-control" name="transfer" style="font-size: 12pt;" min="0" required>
<center>
<br><button class="btn btn-primary" style="width:200px; height:35px; margin-top:2px; margin-bottom:2px; margin-left:-5px;">TRANSFER</button>                              </center> 
                               
                            </form>
           		</div>
</div>
</div></div></div>
<footer class="footer">
            Greeshma©Online Banking 2020
        </footer>
</body>
</html>