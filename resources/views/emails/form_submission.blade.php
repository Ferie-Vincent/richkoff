<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nouveau Formulaire Soumis</title>
</head>
<body>
    <h2>Nouvelle soumission de formulaire</h2>
    <p><strong>Nom & Prénoms :</strong> {{ $formData['full-name'] }}</p>
    <p><strong>Téléphone :</strong> {{ $formData['telephone'] }}</p>
    <p><strong>Quantité :</strong> {{ $formData['quantity'] }}</p>
    <p><strong>Moyen de paiement :</strong> {{ $formData['paiement'] }}</p>
</body>
</html>
