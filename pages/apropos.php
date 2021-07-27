
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<body>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ajouter</button>
   
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter un Etudiants</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            
             <form method="POST" action="ajouter.php">
              

              <div class="form-group">
              Civilite: <input type="text" name="civilite" id ="civilite" class="form-control" >
              </div>

              <div class="form-group">
              Nom: <input type="text" name="nom" id ="nom" class="form-control" >
              </div>
              <div class="form-group">
              Prenom: <input type="text" name="prenom" id ="prenom" class="form-control" >
              </div>
              <div class="form-group">
              E-Mail: <input type="text" name="email" id ="email" class="form-control" >
              </div>

           
              <tr><td colspan="2"></td><td align="left" colspan="2"><input type="submit" name="ajouter" value="Ajouter" /></td></tr>
        </div>
      </div>
    </div>
    </form>
    


   
    

    <script src="js/bootstrap.min.js"></script>
</body>
</html>


