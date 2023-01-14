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
