<div class="header-title-container">
    <h1 id="header" class="header-title">SignUp</h1>
</div>

<div class="form-wrapper">
    <div class="form-container">
        <form method="post" action="/index.php?action=signup">
            <div class="form-inputs">
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" required pattern="[a-zA-Z\s]+">
                <label>Email</label>
                <input type="email" name="email" placeholder="Email" required>
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" required pattern="[a-zA-Z0-9]+">
                <label>Address</label>
                <input type="text" name="address" placeholder="Address" required pattern="[a-zA-Z\s]{0,30}">
                <label>City</label>
                <input type="text" name="city" placeholder="City" required pattern="[a-zA-Z\s]{0,30}">
                <label>Postal code (ZIP)</label>
                <input type="text" name="postal-code-zip" placeholder="Postal code (ZIP)" required
                       pattern="[0-9]{5}">
                <div class="form-input-checkbox">
                    <input type="checkbox" name="auto-login" value="auto-login">
                    <label>Log me in after submit</label>
                </div>
            </div>
            <div class="form-submit">
                <input type="submit" value="SignUp">
            </div>
        </form>
        <p class="form-info">Already have an account? <a onclick="load_login()">Login</a></p>
    </div>
</div>
