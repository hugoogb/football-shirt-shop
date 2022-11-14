<div class="header-title-container">
    <h1 id="header" class="header-title">Register</h1>
</div>

<div class="form-wrapper">
    <div class="form-container">
        <form method="post" action="/controller/cnt_insert_register.php">
            <div class="form-inputs">
                <label>Name
                    <input type="text" name="name" placeholder="Name" required>
                </label>
                <label>Email
                    <input type="email" name="email" placeholder="Email" required>
                </label>
                <label>Password
                    <input type="password" name="password" placeholder="Password" required>
                </label>
                <label>Address
                    <input type="text" name="address" placeholder="Address" required>
                </label>
                <label>City
                    <input type="text" name="city" placeholder="City" required>
                </label>
                <label>Postal code (ZIP)
                    <input type="text" pattern="[0-9]{5}" name="postal-code-zip" placeholder="Postal code (ZIP)"
                           required>
                </label>
            </div>
            <div class="form-submit">
                <input type="submit" value="Register">
            </div>
        </form>
        <p class="form-info">Already have an account? <a onclick="load_login()">Login</a></p>
    </div>
</div>
