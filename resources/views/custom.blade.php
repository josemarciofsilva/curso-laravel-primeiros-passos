<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom</title>
</head>
<body>
    <h2>View Custom </h2>
    <p>Esta View da rota custom </p>
    <h4><?php echo $msg ?></h4>
    <h1>{{ $msg }}</h1>
    <p>Outra passagem de parametro no array da rota contendo minha idade: {{ $idade }} anos!!!!</p>
</body>
</html>
