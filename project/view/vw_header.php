<div class="navbar">
    <div class="navbar-left">
        <a href="/" target="_self"><img class="navbar-logo"
                                        src="https://www.classicfootball.shop/wpsystem/wp-content/uploads/2022/03/new-logo-horizontal.png"
                                        alt="header logo"></a>
        <div class="search-bar">
            <input type="text" id="search-query" placeholder="Search">
            <div onclick="searchQuery(getQuery())" class="search-bar-svg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="navbar-right">
        <div class="navbar-message-user-container">
            <?php
            if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
                ?>
                <h3>Hello, <?php echo $_SESSION['user_data']['name'] ?></h3>
                <?php
            }
            ?>
        </div>
        <div class="dropdown">
            <svg class="icon-user" xmlns="http://www.w3.org/2000/svg"
                 viewBox="0 0 448 512">
                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
            </svg>
            <div class="dropdown-content">
                <?php
                if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
                    ?>
                    <div class="dropdown-items-container">
                        <a onclick="stopSlideShow(intervalId);myAccount()" class="dropdown-item user-logged"><p>
                                Account</p></a>
                        <a onclick="stopSlideShow(intervalId);listOrders()" class="dropdown-item user-logged"><p>
                                Orders</p></a>
                        <a onclick="stopSlideShow(intervalId);" class="dropdown-item user-logged"
                           href="/index.php?action=logout"><p>Logout</p></a>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="dropdown-items-container">
                        <a onclick="stopSlideShow(intervalId);load_login()" class="dropdown-item user-not-logged">
                            <p>Login</p></a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="icon-cart-container" id="icon-cart-container">
            <?php include __DIR__ . '/vw_cart_icon.php'; ?>
        </div>
    </div>
</div>