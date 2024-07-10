<?php 
require 'header_accounts.php';

$successUsername = null;


if ($_SERVER['REQUEST_METHOD'] == 'POST' && 
(isset($_POST['username']) && !empty($_POST['username'])) and 
(isset($_POST['email']) && !empty($_POST['email'])) and 
(isset($_POST['matricule']) && !empty($_POST['matricule'])) and 
(isset($_POST['password']) && !empty($_POST['password'])) and 
(isset($_POST['cpassword']) && !empty($_POST['cpassword'])) and 
($_POST['password'] == $_POST['cpassword'])) {
    
    $successUsername = "/TPWEB/index.php";
}


?>


<div id="corps">
    <form action="<?= $successUsername ?>"  method="post" class="form_ins">
    <h3 class="title-register">Inscrivez-vous pour accèder a l'application</h3>

        <div>
            <input type="text" placeholder="Nom" name="username" style="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username']) && !empty($_POST['username'])) : ?> <?= "border: 2px solid green;"?> <?php elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'])) : ?> <?= "border: 1px solid red;"?> <?php else : ?> <?= "border: 1px solid blue;"?> <?php endif ?>" value="<?php if(isset($_POST['username'])) : ?> <?=$_POST['username']?> <?php endif ?>">
        </div>

        <div>
            <select name="genre" id="">
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
        </div>

        <div>
            <input type="email" placeholder="Email" name="email" style="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && !empty($_POST['email'])) : ?> <?= "border: 2px solid green;"?> <?php elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) : ?> <?= "border: 1px solid red;"?> <?php else : ?> <?= "border: 1px solid blue;"?> <?php endif ?>" value="<?php if(isset($_POST['email'])) : ?> <?=$_POST['email']?> <?php endif ?>">
        </div>

        <div>
            <input type="number" placeholder="Matricule" name="matricule" style="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['matricule']) && !empty($_POST['matricule'])) : ?> <?= "border: 2px solid green;"?> <?php elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['matricule'])) : ?> <?= "border: 1px solid red;"?> <?php else : ?> <?= "border: 1px solid blue;"?> <?php endif ?>" value="<?php if(isset($_POST['matricule'])) : ?> <?=$_POST['matricule']?> <?php endif ?>">
        </div>

        <div>
            <input type="password" placeholder="Mot de passe" name="password" style="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['password']) && !empty($_POST['password'])) : ?> <?= "border: 2px solid green;"?> <?php elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['password'])) : ?> <?= "border: 1px solid red;"?> <?php else : ?> <?= "border: 1px solid blue;"?> <?php endif ?>" value="<?php if(isset($_POST['password'])) : ?> <?=$_POST['password']?> <?php endif ?>">
        </div>

        <div>
            <input type="password" placeholder="Confirmer mot de passe" name="cpassword" style="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cpassword']) && !empty($_POST['cpassword']) && ($_POST['password'] == $_POST['cpassword'])) : ?> <?= "border: 2px solid green;"?> <?php elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cpassword'])) : ?> <?= "border: 1px solid red;"?> <?php else : ?> <?= "border: 1px solid blue;"?> <?php endif ?>" value="<?php if(isset($_POST['cpassword'])) : ?> <?=$_POST['cpassword']?> <?php endif ?>">
        </div>
        <!-- <input type="submit" value="Inscrire" id="submit"> -->
        <button id="submit">Inscrire</button>
    </form>
</div>l
