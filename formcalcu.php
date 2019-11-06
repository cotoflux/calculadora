<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test objetos</title>
    <?php
        require_once('ClaseCalculadora.php');
    ?>
</head>
<body>

    <h3>CALCULADORA</h3>
    <form action="formcalcu.php" method="post">

        <table>

            <tr><td>Operador1</td><td><input type="text" size="2" name="Op1">
                </td></tr>
            <tr><td>Operador2</td><td><input type="text" size="2" name="Op2">
                </td></tr>
            <tr><td><input type="submit" name="Boton" value="Sumar"></td>
                <td><input type="submit" name="Boton" valor="Restar"></td></tr>
            <tr>
            <tr colspan ="2">

            <?php
                if(isset($_POST["Boton"])) {
                    echo('Última operación: ');
                    $obj = new ClaseCalculadora($_POST[$Op1],$_POST[$Op2]);

                    if ($_POST['Boton']=="Sumar"){
                        echo($obj->Suma());)
                    }
                    else{
                        echo($obj->Resta());
                    }

                }

            ?>

            </th></tr>

        </table>

    </form>
    
</body>
</html>