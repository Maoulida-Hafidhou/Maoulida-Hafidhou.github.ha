
<?php
$utilisateur=$pwd="";
$utilisateurerr=$pwderr="";

if($_SERVER['REQUEST_METHOD']=="POST"){
	// Validation du champ utilisateur
	if(empty($_POST['txtuser'])) $utilisateurerr="Champ requis";
	else $utilisateur=$_POST['txtuser'];
	
	// Validation du champ mot de passe
	if(empty($_POST['txtpwd'])) $pwderr="Champ requis";
	else $pwd=$_POST['txtpwd'];
	
}
?>
<script language="JavaScript">
 
function showcode() {
  var x = document.getElementById("1");
  if (x.type === "password") {
    x.type = "text";
	 $("#codeshow").attr("class", "glyphicon glyphicon-eye-open");
  } else {
    x.type = "password";
	$("#codeshow").attr("class", "glyphicon glyphicon-eye-close");
  }
}

</script>
<strong>Authentification :</strong><br><br>	<br>
<div class="authinsc">
<form name="auth" method="post">
  <div class="form-group">
        <label for="txtuser" class="col-lg-3 control-label">Utilisateur</label>
        <div class="input-group col-lg-9">
          <input type="text" class="form-control" name="txtuser" id="0" placeholder="Utilisateur" value="<?php echo $utilisateur; ?>"/>
          <div class="input-group-addon "><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;<span class="err"><?php echo $utilisateurerr; ?></span></div>
        </div>
    </div>
  <div class="form-group">
    <label for="txtpwd" class="col-lg-3 control-label">Mot de passe</label>
    <div class="input-group col-lg-9">
     <input type="password" class="form-control" name="txtpwd" id="1" placeholder="Mot de passe" value="<?php echo $pwd; ?>"/>
      <div  class="input-group-addon"><i id="codeshow" class="glyphicon glyphicon-eye-close" onclick="showcode();"></i>&nbsp;&nbsp;<span class="err"><?php echo $pwderr; ?></span></div> 
    </div>
    
  </div>
  <div class="form-group">
    
    <div class="row">
      <div class="col-lg-12" style="text-align:right;"><a href="#">Mot de passe oublié?</a>  &nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="btncon" value="Connexion" class="btn btn-primary"/></div>
       </div>
    </div>
    
 </form> 
 <?php
if(isset($_POST['btncon']) && $pwd!="" && $utilisateur!=""){
	require("connexion.php");
	$reqcon="SELECT * FROM users where login='".$utilisateur."' and pwd='".$pwd."'"; 
	$rstl=$idcon->query($reqcon);
	$nb=$rstl->rowCount(); //nombre d'enregistrement
	if($nb>0){
		$resOBJ=$rstl->fetch(PDO::FETCH_OBJ);
		$_SESSION['open']="ok";
		$_SESSION['nom']=$resOBJ->nom;
		$_SESSION['prenom']=$resOBJ->prenom;
		header("location:?page=accueil");	
		$rstl->closeCursor();
	}
	else{
		//header("location:?page=authentification");
		echo"<span class='err'>Nom d'utilisateur ou le mot de passe est incorrect</span>";
	}
		
}

	
?>	
</div>



