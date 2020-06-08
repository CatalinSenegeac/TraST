<?php if (count($errors) > 0): ?>

    <div class="error">
        <?php foreach($errors as $error):
        if($error == "Sorry, no user exists on our system with that email" || $error == "Wrong email/password combination" || $error == "Parolile nu se potrivesc" || $error == "email already exists" || $error == "Email invalid" || $error == "Acest cont nu a fost verificat."): ?>
            <p><?php echo $error."\n"; ?></p>
            <?php endif ;
            endforeach; ?>
    </div>
    <style>
        .error p{
            font-size: 16px;
            color: red;
            background-color: #FFF0F5;
            display: inline-block;
        }
    </style>
<?php endif ?>

