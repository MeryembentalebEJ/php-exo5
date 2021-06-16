<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h1{
      color: coral;
      font-size: 2rem;
      text-align: center;
    }
    </style>
</head>
<body>
<h1><?php echo  "Hello, My name is ". ' ' . $_GET['name']. ' '. $_GET['lastName']; ?></h1>
</body>
</html>
