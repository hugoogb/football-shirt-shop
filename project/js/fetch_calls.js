const list_categories = async () => {
    document.getElementById("content-container").innerHTML = await fetch("/index.php?action=list-categories")
        .then(response => {
            return response.text();
        });
}

const list_products = async (category_id) => {
    document.getElementById("content-container").innerHTML = await fetch("/index.php?action=list-products&category_id=" + category_id)
        .then(response => {
            return response.text();
        });
}

const product_detail = async (product_id) => {
    document.getElementById("content-container").innerHTML = await fetch("/index.php/?action=product-detail&product_id=" + product_id)
        .then(response => {
            return response.text();
        })
}

const load_signUp = async () => {
    document.getElementById("content-container").innerHTML = await fetch("/index.php/?action=form-signup")
        .then(response => {
            return response.text();
        })
}

const load_login = async () => {
    document.getElementById("content-container").innerHTML = await fetch("/index.php/?action=form-login")
        .then(response => {
            return response.text();
        })
}
