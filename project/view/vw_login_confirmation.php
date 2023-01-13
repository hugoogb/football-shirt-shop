<div class="login-signup-confirmation-wrapper">
    <div class="login-signup-confirmation-container">
        <?php
        if (isset($_SESSION['user_id'])) {
            ?>
            <div class="login-signup-confirmation-title">
                <h1>Login successfully</h1>
            </div>

            <div class="login-signup-confirmation-items">
                <div class="login-signup-confirmation-item">
                    <h4>User Email</h4>
                    <p><?php echo $email ?></p>
                </div>
                <div class="login-signup-confirmation-item">
                    <h4>Id</h4>
                    <p><?php echo $_SESSION['user_id'] ?></p>
                </div>
                <div class="login-signup-confirmation-item">
                    <p>Start shopping with us!</p>
                </div>
            </div>
            <?php
        } else {
            ?>
            <div class="login-signup-confirmation-title">
                <h1>Login error</h1>
                <div class="login-signup-confirmation-item">
                    <p>Email or password wrong...</p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
