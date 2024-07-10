<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Authentic Design JBD</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Expériences Professionnelles de Jones Willdenskoth">
        <link rel="stylesheet" href="../Css/Style.css">
        <link rel="stylesheet" href="../Css/tableau.css">
    </head>
    
    <body class="well">
    <?php include("menus.php"); ?>
    <?php require_once("rootPoo1.php");?>
        <div id="contener2">
            <main class="table">
                <section class="table_header">
                <h2>Visiteurs</h2>
                </section>
                <section class="table_body">
                    <table>
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>E-Mail</th>
                                <th>Mot de Passe</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                            <?php
                                $userr = User::select_all_user();

                                $i = 0;
                                while($user = $userr->fetch()){
                                    $i++;
                                    ?>
                                        <tr>
                                            <td>
                                                <p class="id">
                                                <strong>
                                                <?= $i ?>
                                                </strong>
                                                </p>
                                            </td>

                                            <td>
                                                <p class="personne1">
                                                <strong>
                                                <?= $user["nom"] ?>
                                                </strong>
                                                </p>
                                            </td>

                                            <td>
                                                <p class="personne2">
                                                <strong>
                                                <?= $user["prenom"] ?>
                                                </strong>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="status delivred">
                                                <?= $user["email"] ?>
                                                </p>
                                            </td>

                                            <td>
                                                <p class="mdp">
                                                <?= $user["password"] ?>
                                                </p>
                                            </td>
                                            <td>
                                            <p class="action">
                                                <a style="color: red;" href="rootPoo1.php?id_delete=<?= $user['id_user'] ?>">Supprimer</a> <br>
                                                <a style="color: green;"href="user_update.php?id_user_update=<?= $user['id_user'] ?>">Modifier</a>
                                            </p>
                                            </td>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </section>
                <a style="color: yellow;" href="bootstrap - connexion/inscription.php">Ajout Users</a>
            </main>

            </div>

            <div id="pied">
            </div>
        </div>
        <?php include("pied_de_page.php"); ?>
    </body>
</html>