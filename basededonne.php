<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>
   </head>
   <body>
   <form action="date.php">
   
   <input type="submit" value="aller vers la date=>"/>

   </form>
   <form action="calcul.php">
   <input type="submit" value="aller vers calculatrice=>"/>
   </form>

      <?php
      $tab=array(array('001','Ndiaye','20'),array('002','Diallo','25'),array('003','Diop','30'));

      echo "<table border='5'  width='400px' height='200px' >";
      echo"<tr>
        <th>Code</th><th>Nom</th><th>Age</th><th>Modifier</th>
      </tr> ";
      for($i=0;$i<count($tab);$i++)
          {
                 echo"<tr>";
       for($j=0;$j<count($tab[$i]);$j++) {

           echo" <td>". $tab[$i][$j] ."</td> ";
          }
         echo"<td><a href=''>Editer</a> </td>";

       echo "</tr>";
        }
         echo"</table>"
      ?>
   </body>
</html>