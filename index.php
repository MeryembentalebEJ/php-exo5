<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> php Part 6</title>
    <style>
    form{
      color: coral;
      font-size: 2rem;
    }
    button{
        background-color: teal;
        padding: 5px;
        border-radius: 4px;
    }
    </style>
</head>
<body>
    <h1>Part 6</h1>
    <h2>Exo 1 </h2>
    <h3>Créez un formulaire avec les champs "nom" et "prénom". À l'envoie du formulaire sur une autre page, Affichez les informations saisies.</h3>
    <form action="formExo1.php" method="get">
    <input type="text" name="name" placeholder="First Name">
    <input type="text" name="lastName" placeholder="Last Name" >
    <button type="submit">Submit</button>
    </form>

    <!-- ================================================================================= -->
    <h2>Exo 2 </h2>
    <h3>Créez un formulaire avec les champs "nom" et "prénom". À l'envoie du formulaire sur une autre page, Affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie.</h3>
    <form action="formExo2.php" method="post">
    <input type="text" name="name" placeholder="First Name">
    <input type="text" name="lastName" placeholder="Last Name">
    <button type="submit">Submit</button>
    </form>

     <!-- ================================================================================= -->
     <h2>Exo 3 </h2>
    <h3>Créez un formulaire avec les champs "civilité", "nom" et "prénom". À l'envoie du formulaire sur une autre page, Affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'inclusion de balises html.</h3>
    <form action="formExo3.php" method="post">
    <input type="text" name="firstName" placeholder="First Name">
    <input type="text" name="lastName" placeholder="Last Name">
    <input type="text" name="Nationality" placeholder="Nationality">
    <button type="submit">Submit</button>
    </form>

</body>
</html>