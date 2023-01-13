<div class="header-title-container">
    <h1 id="header" class="header-title">Login</h1>
</div>

<div class="form-wrapper">
    <div class="form-container">
        <form method="post" action="/index.php?action=login-procedure">
            <div class="form-inputs">
                <label>Email
                    <input type="email" name="email" placeholder="Email" required>
                </label>
                <label>Password
                    <input type="password" name="password" placeholder="Password" required>
                </label>
            </div>
            <div class="form-submit">
                <input type="submit" value="Login">
            </div>
        </form>
        <p class="form-info">You don't have an account? <a onclick="load_signUp()">SignUp</a></p>
    </div>
</div>
