<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
    </head>
    <body>
    <form method="POST" action="calcul.php">
         <input type="login" name="mail" placeholder="e-mail"/> <br/>
         <input type="password" name="mdp" placeholder="mot de passe"/> <br/>
         <select name="profil" id="profil">
         <option value="">User</option>
         <option value="">Admin</option>
         </select>
         <input type="submit" value="Connexion"/>
    </form>
    <?php
         $mail_valide="user";
         $mdp_valide="user";
         $profil_valide="user";
          if (isset($_POST['mail']) && isset($_POST['mdp'])){
                 if ($mail_valide == $_POST['mail'] && $mdp_valide == $_POST['mdp']) {
                    session_start () ;
                    $_session['mail'] = $_POST['mail'];
                    $_session ['mdp'] = $_POST['mdp'];
                     header ('location :calcul.php');
                 }
            else{
               echo"erreur";
                }
              }
    ?>
    </body>
</html>