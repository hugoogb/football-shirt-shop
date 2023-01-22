<div class="header-title-container">
    <h1 id="header" class="header-title">My account</h1>
</div>

<div class="form-wrapper">
    <div class="form-container">
        <div class="form-inputs">
            <h3>Profile picture</h3>
            <?php
            if ($_SESSION['user_data']['img'] === "https://cdn-icons-png.flaticon.com/512/149/149071.png") {
                ?>
                <img src="<?php echo $_SESSION['user_data']['img'] ?>"
                     alt="<?php echo $_SESSION['user_data']['name'] ?>">
                <?php
            } else {
                ?>
                <img src="<?php echo $imgPublicPath . $_SESSION['user_data']['img'] ?>"
                     alt="<?php echo $_SESSION['user_data']['name'] ?>">
                <?php
            }
            ?>
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
        </div>
        <div class="form-submit">
            <button onclick="editAccount();" class="checkout-button logged-in-button" type="button">Edit account
            </button>
        </div>
    </div>
</div>
