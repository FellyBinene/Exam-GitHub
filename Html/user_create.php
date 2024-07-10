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
            ?>

            <div id="corps">
                <form method="POST" action="membres.php" class="form_ins">
                    <div>
                        <input type="text" name="nom" placeholder="Nom" required>
                    </div>

                    <div>
                        <input type="text" name="prenom" placeholder="Prenom" required>
                    </div>
                    
                    <div>
                        <input type="text" name="email" placeholder="E-Mail" required >
                    </div>

                    <div>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>


                    <input type="submit" value="Valider" name="add_user" id="submit">
                </form>
            </div>

        </div>
    </body>
</html>