const getProductQuantity = () => {
    if (Number.parseInt(document.getElementById("product-quantity").value) <= 0) {
        return alert("ERROR: The quantity of a product can not be <= 0");
    }

    return Number.parseInt(document.getElementById("product-quantity").value);
}

const addProductToSessionCart = async (productId, productQuantity) => {
    if (productQuantity !== undefined && Number.isInteger(productQuantity)) {
        await fetch("/index.php?action=add-session-cart&product_id=" + productId + "&product_quantity=" + productQuantity);
        await reloadIconCart();
    }
}

const reloadIconCart = async () => {
    document.getElementById("icon-cart-container").innerHTML = await fetch("/index.php/?action=cart-icon")
        .then(response => {
            return response.text();
        })
}

const viewCart = async () => {
    document.getElementById("content-container").innerHTML = await fetch("/index.php/?action=view-cart")
        .then(response => {
            return response.text();
        })
}

const clearCart = async () => {
    document.getElementById("content-container").innerHTML = await fetch("/index.php?action=clear-cart")
        .then(response => {
            return response.text();
        })
    await reloadIconCart();
}

const deleteProductFromCart = async (productName) => {
    document.getElementById("content-container").innerHTML = await fetch("/index.php?action=delete-product-cart&product_name=" + productName)
        .then(response => {
            return response.text();
        })
    await reloadIconCart();
}

const doCheckout = async () => {
    document.getElementById("content-container").innerHTML = await fetch("/index.php/?action=checkout")
        .then(response => {
            return response.text();
        })
    await reloadIconCart();
}
