<html>
    <head>
        <title>Projet bac2 MCD</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Css/style5.css">
        <link rel="stylesheet" href="../Css/Style.css">
    </head>
    <body>
        
        <div id="contener">

            <?php
                require_once("rootPoo1.php");

                $id = htmlspecialchars($_GET["id_user_update"]);

                $user = User::select_user_id($id);

                $user = $user->fetch();                
            ?>

            <div id="corps">
                <form method="POST" action="membres.php" class="form_ins">
                    <P><h2>MODIFICATION</h2></P><br /><br />
                    <div>
                        <input type="text" name="nom" value="<?= $user["nom"] ?>" placeholder="Nom"required>
                    </div>

                    <div>
                        <input type="text" name="prenom" value="<?= $user["prenom"] ?>" placeholder="Prenom" required>
                    </div>

                    <div>
                        <input type="text" name="email" value="<?= $user["email"] ?>" placeholder="E-Mail" required>
                    </div>

                    <div>
                        <input type="password" name="password" value="<?= $user["password"] ?>" placeholder="Password" required>

                        <input type="number" name="id" value="<?= $user["id_user"] ?>" hidden>

                    </div>

                    <input type="submit" value="Valider" name="update_user" id="submit">
                </form>
            </div>

        </div>
    </body>
</html>