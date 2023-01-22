<div class="header-title-container">
    <h1 id="header" class="header-title">Edit account</h1>
</div>

<div class="form-wrapper">
    <div class="form-container">
        <form method="post" enctype="multipart/form-data" action="/index.php?action=edit-account-procedure">
            <div class="form-inputs">
                <label>Profile picture</label>
                <input type="file" name="img" accept="image/png, image/jpeg, image/jpg">
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $_SESSION['user_data']['name'] ?>"
                       placeholder="<?php echo $_SESSION['user_data']['name'] ?>" required
                       pattern="[a-zA-Z\s]+">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $_SESSION['user_data']['email'] ?>"
                       placeholder="<?php echo $_SESSION['user_data']['email'] ?>" required>
                <label>Address</label>
                <input type="text" name="address" value="<?php echo $_SESSION['user_data']['address'] ?>"
                       placeholder="<?php echo $_SESSION['user_data']['address'] ?>" required
                       pattern="[a-zA-Z\s]{0,30}">
                <label>City</label>
                <input type="text" name="city" value="<?php echo $_SESSION['user_data']['city'] ?>"
                       placeholder="<?php echo $_SESSION['user_data']['city'] ?>" required
                       pattern="[a-zA-Z\s]{0,30}">
                <label>Postal code (ZIP)</label>
                <input type="text" name="postal-code-zip"
                       value="<?php echo $_SESSION['user_data']['postal_code_zip'] ?>"
                       placeholder="<?php echo $_SESSION['user_data']['postal_code_zip'] ?>" required
                       pattern="[0-9]{5}">
            </div>
            <div class="form-submit">
                <input type="submit" value="Save changes">
            </div>
        </form>
    </div>
</div>
