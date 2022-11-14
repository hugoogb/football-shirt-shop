const list_categories = async () => {
    document.getElementById("content-container").innerHTML = await fetch("/controller/cnt_list_categories.php")
        .then(response => {
            return response.text();
        });
}

const list_products = async (category_id) => {
    document.getElementById("content-container").innerHTML = await fetch("/controller/cnt_list_products.php?category_id=" + category_id)
        .then(response => {
            return response.text();
        });
}

const product_detail = async (product_id) => {
    document.getElementById("content-container").innerHTML = await fetch("/controller/cnt_product_detail.php?product_id=" + product_id)
        .then(response => {
            return response.text();
        })
}