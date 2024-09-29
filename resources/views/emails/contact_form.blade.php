<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #fff;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #181818;
            padding: 20px;
            text-align: center;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.8em;
            color: #777;
        }
        .data{
            margin-left: 10px !important;
            color: #333 !important;
        }
        h2 {
            color: #2c3e50;
        }
        strong {
            color: #34495e;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="https://richkoff.com/assets/images_/commun/logo.png" alt="Logo RICHKOFF" width="150" style="margin-top: 15px">
        <h1>Formulaire de Contact</h1>
    </div>
    
    <div class="content">
        <h2>Contenu du formulaire</h2>
        <div class="data"> 
            <p><strong>Nom :</strong> {{ $emailData['name'] }}</p>
            <p><strong>Email :</strong> <a href="mailto:{{ $emailData['email'] }}">{{ $emailData['email'] }}</a> </p>
            <p><strong>Objet :</strong> {{ $emailData['subject'] }}</p>
            <p><strong>Téléphone :</strong> {{ $emailData['telephone'] }}</p>
            <p><strong>Message :</strong></p>
            <p style="text-align: justify !important">{{ $emailData['messageContent'] }}</p>
        </div>
    </div>
    
    <div class="footer">
        <p>© {{ date('Y') }} RICHKOFF. Tous droits réservés.</p>
    </div>
</body>
</html>