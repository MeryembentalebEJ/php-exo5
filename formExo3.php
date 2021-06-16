<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body{
         background: whitesmoke;
       }
       p{
         font-size: 3rem;
         color: coral;
         text-align: center;
       }
     </style>
</head>
<body>
<p>
<?php 
// htmlspecialchars: method
$name = strip_tags($_POST['firstName']);
$lastName = strip_tags($_POST['lastName']);
$nationality = strip_tags($_POST['Nationality']);
if(isset($_POST['lastName']) && isset($_POST['firstName']) && isset($_POST['Nationality'])){ 
    echo 'First Name : '. ' '. $name. '<br>'. 'Last Name : '.$lastName.  '<br>'. 'Nationality : '. $nationality;
    }else{
        echo 'erreur';
    }
?>
</p>
</body>
</html>