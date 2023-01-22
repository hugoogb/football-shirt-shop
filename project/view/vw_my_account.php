<div class="header-title-container">
    <h1 id="header" class="header-title">My account</h1>
</div>

<div class="form-wrapper">
    <div class="form-container">
        <h3>Name</h3>
        <p><?php echo $_SESSION['user_data']['name'] ?></p>
        <h3>Email</h3>
        <p><?php echo $_SESSION['user_data']['email'] ?></p>
        <h3>Address</h3>
        <p><?php echo $_SESSION['user_data']['address'] ?></p>
        <h3>City</h3>
        <p><?php echo $_SESSION['user_data']['city'] ?></p>
        <h3>Postal code (ZIP)</h3>
        <p><?php echo $_SESSION['user_data']['postal_code_zip'] ?></p>
        <div class="form-submit">
            <button onclick="editAccount();" class="checkout-button logged-in-button" type="button">Edit account
            </button>
        </div>
    </div>
</div>
