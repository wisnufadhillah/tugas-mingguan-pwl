<?php
include "./includes/header.php";
include "./includes/config.php";
?>
<style>
    .login-page {
        margin: 50px auto;
    }

    .login-page .form {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .login-page .form input {
        margin-bottom: 20px;
    }

    .login-page .form button {
        width: 100%;
    }
</style>

<div class="login-page">
    <div class="form">
        <form class="login-form" action="./pages/login_action.php" method="POST">
            <div class="form-group">
                <label for="txtUsername">Username</label>
                <input type="text" class="form-control" id="txtUsername" placeholder="Username" name="txtUsername" required>
            </div>
            <div class="form-group">
                <label for="txtPassword">Password</label>
                <input type="password" class="form-control" id="txtPassword" placeholder="Password" name="txtPassword" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
<?php
include "./includes/footer.php";
?>