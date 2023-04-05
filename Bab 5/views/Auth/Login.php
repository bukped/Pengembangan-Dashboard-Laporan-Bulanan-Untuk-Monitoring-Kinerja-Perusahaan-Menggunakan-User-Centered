<?php

include('css.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="<?php echo base_url() ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
</head>

<body>
    <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>LOGIN</h2>
                <div class="underline-title"></div>
            </div>
            <form action="<?= site_url('Login/process') ?>" method="post" class="form" method="POST">
                <label for="username" style="padding-top:13px">
                    &nbsp;Email
                </label>
                <input id="username" class="form-content" type="text" name="username" placeholder="username" autocomplete="on" required />
                <div class="form-border"></div>
                <label for="user-password" style="padding-top:22px">
                    &nbsp;Password
                </label>
                <input id="user-password" class="form-content" type="text" placeholder="Password" name="password" required />
                <div class="form-border"></div>
                <input id="submit-btn" type="submit" name="login" value="LOGIN" />
            </form>
        </div>
        <?php echo $this->session->flashdata('msg'); ?>
    </div>

</body>

</html>