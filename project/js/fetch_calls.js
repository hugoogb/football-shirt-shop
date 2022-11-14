const list_categories = async () => {
    document.getElementById("body-container").innerHTML = await fetch("/index.php?action=categories")
        .then(response => {
            return response.text();
        });
}

const list_products = async (category_id) => {
    document.getElementById("body-container").innerHTML = await fetch("/index.php?action=list-products&category_id=" + category_id)
        .then(response => {
            return response.text();
        });
}

const product_detail = async (product_id) => {
    document.getElementById("body-container").innerHTML = await fetch("/index.php?action=product-detail&product_id=" + product_id)
        .then(response => {
            return response.text();
        })
}