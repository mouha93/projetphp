
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form method="post"  action="">
        <table>
            <tr>
                <td>Nbr1</td>
                <td><input type="number" name="nbr1" ></td>
            </tr>
            <tr>
                <td>Nbr2</td>
                <td><input type="number" name="nbr2" value=""></td>
            </tr>
            <tr>
                <td>
                    opérateur
                </td>
                <td>
                    <select name="choix">
                        <option value="">Selectionner un opérateur</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                        <option value="%">%</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="calculer" value="Calculer">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <?php echo $message;?>
                </td>
            </tr>

        </table>
    </form>
<?php
    if (isset($_POST['calculer'])) {
        extract($_POST);
         if ($choix == "+") {
        
            echo "$nbr1 + $nbr2= ".($nbr1+$nbr2);
        }
        else if ($choix == "-") {
            echo "$nbr1 - $nbr2 = ".($nbr1-$nbr2);
        }
        else if ($choix == "*") {
            echo "$nbr1 * $nbr2 = ".($nbr1*$nbr2);
        }
        else if ($choix== "/") {
            if ($nbr2 != 0) {
            echo "$nbr1 / $nbr2 = ".($nbr1/$nbr2);
            }
            else {
            echo "Impossible de diviser par 0" ;
                  }
        
            }        
        }

?>

    </body>
</html>