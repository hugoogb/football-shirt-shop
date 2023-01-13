<div class="login-signup-confirmation-wrapper">
    <div class="login-signup-confirmation-container">
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
    </div>
</div>
