<div class="header-title-container">
    <h1 id="header" class="header-title">Login</h1>
</div>

<div class="form-wrapper">
    <div class="form-container">
        <form method="post" action="/index.php?action=login">
            <div class="form-inputs">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" required
                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-submit">
                <input type="submit" value="Login">
            </div>
        </form>
        <p class="form-info">You don't have an account? <a onclick="load_signUp()">SignUp</a></p>
    </div>
</div>
