<!DOCTYPE html>
<?php require_once("config.php"); ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"> 
<link rel="stylesheet" href="stil.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
		</div>
		<div class="col-sm-4">
			<div class="login_form">
 	<form action="login_process.php" method="POST">
  <div class="form-group">
  <br><br><br><br><br>
  <center><img src="img/DOGY1.png" alt=""  style="width=50px; height=50px;"></center>
  <br><br>
 <h2>Logare</h2>

<?php 
if(isset($_GET['loginerror'])) {
	$loginerror=$_GET['loginerror'];
}
 if(!empty($loginerror)){  echo '<p class="errmsg">Datele introduse sunt incorecte incercati din nou.</p>'; } ?>

    <label class="label_txt">Nume utilizator</label>
    <input type="text" name="login_var" value="<?php if(!empty($loginerror)){ echo  $loginerror; } ?>" class="form-control" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Parola </label>
    <input type="password" name="password" class="form-control" required="">
  </div>
  <button type="submit" name="sublogin" class="btn btn-primary btn-group-lg form_btn" style="color:#0f3e70;" >Autentificare</button>
</form>
   <br> 
    <p>Daca nu aveti cont ? <a class="sign" href="inregistrare.php" style="color:#0f3e70;">Înregistrare</a> </p>
		</div>
		<div class="col-sm-4">
		</div>
		</div>
	</div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>