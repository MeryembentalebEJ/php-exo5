<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
     <style>
       body{
         background: whitesmoke;
       }
       p{
         font-size: 3rem;
         color: green;
         text-align: center;
       }
     </style>
</head>
<body>
<p>
<?php  

$verifyName = '/^[A-Z]{1}[a-z]+$/';
if(preg_match($verifyName, $_POST['name']) && preg_match($verifyName, $_POST['lastName'])){
  echo 'Bonjour '. ' '. $_POST['name']. ' '. $_POST['lastName'];
}else{
  echo 'veuillez remplir les champs correctement !';
}


 ?>
</p>
    
</body>
</html>