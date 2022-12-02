<div class="header-title-container">
    <h1 id="header" class="header-title">SignUp</h1>
</div>

<div class="form-wrapper">
    <div class="form-container">
        <form method="post" action="/index.php?action=signup-procedure">
            <div class="form-inputs">
                <label>Name
                    <input type="text" name="name" placeholder="Name" required pattern="[a-zA-Z\s]+">
                </label>
                <label>Email
                    <input type="email" name="email" placeholder="Email" required>
                </label>
                <label>Password
                    <input type="password" name="password" placeholder="Password" required pattern="[a-zA-Z0-9]+">
                </label>
                <label>Address
                    <input type="text" name="address" placeholder="Address" required pattern="[a-zA-Z\s]{0,30}">
                </label>
                <label>City
                    <input type="text" name="city" placeholder="City" required pattern="[a-zA-Z\s]{0,30}">
                </label>
                <label>Postal code (ZIP)
                    <input type="text" name="postal-code-zip" placeholder="Postal code (ZIP)" required
                           pattern="[0-9]{5}">
                </label>
            </div>
            <div class="form-submit">
                <input type="submit" value="SignUp">
            </div>
        </form>
        <p class="form-info">Already have an account? <a onclick="load_login()">Login</a></p>
    </div>
</div>
