<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="modificacioncoche.php" method="get">
        <h1>Modificar coche</h1>
        <br/>
        <label>marca:</lable>
        <input type="text" name="marca" value="<?php echo $_GET['marca']; ?>">
        <br/>
        <label>modelo:</lable>
        <input type="text" name="modelo" value="<?php echo $_GET['modelo']; ?>"><br/>
        <label>color:</lable>
        <input type="text" name="color" value="<?php echo $_GET['color']; ?>"><br/>
        <label>revisado:</lable>
        <input type="text" name="revisado" value="<?php echo $_GET['revisado']; ?>"><br/>
        <input type="hidden" value="<?php echo $_GET['matricula']; ?>" name="matricula">
        <input type="submit">
        <br/>
    </form>
</body>
</html>