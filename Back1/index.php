<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
</head>
<body>  
    <h1>Formulaire d'inscription</h1>
    <form action="insert.php" method="post">
      <label for="nom">Nom :</label>
      <input type="text" name="nom" id="nom" required><br>

      <label for="prenom">Prénom :</label>
      <input type="text" name="prenom" id="prenom" required><br>

      <label for="date_naissance">Date de naissance :</label>
      <input type="date" name="date_naissance" id="date_naissance" required><br>

      <input type="submit" value="Envoyer">
</body>
</html>