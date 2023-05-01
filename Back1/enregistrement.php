<?php
  // Connexion à la base de données
  $pdo = new PDO('mysql:host=localhost;dbname=p4web', 'nom_utilisateur', 'mot_de_passe');

  // Récupération des données du formulaire
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $date_naissance = $_POST['date_naissance'];

  // Préparation de la requête SQL pour insérer les données dans la base de données
  $stmt = $pdo->prepare('INSERT INTO apprenants (nom, prenom, date_naissance) VALUES (?, ?, ?)');
  $stmt->execute([$nom, $prenom, $date_naissance]);

  // Redirection vers une page de confirmation
  header('Location: confirmation.html');
?>
