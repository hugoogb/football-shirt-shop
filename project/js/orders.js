const listOrders = async () => {
    document.getElementById("content-container").innerHTML = await fetch("/index.php/?action=view-orders")
        .then(response => {
            return response.text();
        })
}

const orderDetail = async (orderId) => {
    document.getElementById("content-container").innerHTML = await fetch("/index.php/?action=view-order-detail&order_id=" + orderId)
        .then(response => {
            return response.text();
        })
}
