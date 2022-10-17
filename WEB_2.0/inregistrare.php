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
     <br><br><br><br><br><br><br><br><br>
      <h2>Înregistrare</h2>
    </div>
     <div class="col-sm-4">
    </div>
  </div>
	<div class="row">
<?php 
 if(isset($_POST['signup'])){
  extract($_POST);
  if(strlen($fname)<3){ 
      $error[] = 'Introduceti cel putin 3 caractere';
        }
if(strlen($fname)>20){  
      $error[] = 'Max 20 elemente';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $fname)){
            $error[] = 'Eroare fara simboluri ';
        }    
if(strlen($lname)<3){ 
      $error[] = 'ntroduceti cel putin 3 caractere';
        }
if(strlen($lname)>20){  
      $error[] = 'Max 20 elemente';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $lname)){
            $error[] = 'Eroare fara simboluri';
              }    
      if(strlen($username)<3){  
            $error[] = 'ntroduceti cel putin 3 caractere';
        }
  if(strlen($username)>50){ 
            $error[] = 'Max 50 elemente';
        }
  if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/", $username)){
            $error[] = 'Eroare fara simboluri';
        }  
if(strlen($email)>50){   
            $error[] = 'Max 50 elemente';
        }
   if($passwordConfirm ==''){
            $error[] = 'Confirmati parola';
        }
        if($password != $passwordConfirm){
            $error[] = 'Parolele nu coincid.';
        }
          if(strlen($password)<5){  
            $error[] = 'Creati o parola de min 6 caracterre.';
        }
        
         if(strlen($password)>100){ 
            $error[] = 'Maximum 100 elemente';
        }
          $sql="select * from users where (username='$username' or email='$email');";
          $res=mysqli_query($conn,$sql);
   if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);

     if($username==$row['username'])
     {
           $error[] ='Utilizatorul deja inregistrat.';
          } 
       if($email==$row['email'])
       {
            $error[] ='Email deja inregistrat.';
          } 
      }
         if(!isset($error)){ 
          $options = array("cost"=>4);
          $password = password_hash($password,PASSWORD_BCRYPT,$options);
          
           $result = mysqli_query($conn,"INSERT into users values('','$fname','$lname','$username','$email','$password')");
           if($result)
    {
     $done=2; 
    }
    else{
      $error[] ='Eroare: Ceva a mers gresit';
    }
 }
 } ?>

		 <div class="col-sm-4">
     
 <?php 
  if(isset($error)){ 
foreach($error as $error){ 
  echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
}
}
?>
		</div>
		<div class="col-sm-4">
      <?php if(isset($done)) 
      { ?>
    <div class="successmsg"><span style="font-size:100px;">&#9989;</span> <br> Te-ai logat cu succes! <br> <br><a href="login.php" style="color:#0f3e70;">Logare... </a> </div>
      <?php } else { ?>
       <div class="signup_form">
		<form action="" method="POST">
  <div class="form-group">
  	
        <label class="label_txt">Numele</label>
    <input type="text" class="form-control" name="fname" value="<?php if(isset($error)){ echo $_POST['fname'];}?>" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Prenumele</label>
    <input type="text" class="form-control" name="lname" value="<?php if(isset($error)){ echo $_POST['lname'];}?>" required="">
  </div>
 
<div class="form-group">
    <label class="label_txt">Numele de utilizator </label>
    <input type="text" class="form-control" name="username" value="<?php if(isset($error)){ echo $_POST['username'];}?>" required="">
  </div>

<div class="form-group">
    <label class="label_txt">Email </label>
    <input type="email" class="form-control" name="email" value="<?php if(isset($error)){ echo $_POST['email'];}?>" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Parola</label>
    <input type="password" name="password" class="form-control" required="">
  </div>
   <div class="form-group">
    <label class="label_txt">Confirmarea parolei</label>
    <input type="password" name="passwordConfirm" class="form-control" required="">
  </div>
  <button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn" style="color:#0f3e70;">Înregistrare</button>
   <br><br><p>Aveti cont?  <a href="login.php" style="color:#0f3e70;">Logare</a> </p>
</form>
<?php } ?> 
</div>
		</div>
		<div class="col-sm-4">
		</div>

	</div>
</div> 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>