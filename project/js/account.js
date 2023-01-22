const myAccount = async () => {
    document.getElementById("content-container").innerHTML = await fetch("/index.php/?action=my-account")
        .then(response => {
            return response.text();
        })
}

const editAccount = async () => {
    document.getElementById("content-container").innerHTML = await fetch("/index.php/?action=edit-account")
        .then(response => {
            return response.text();
        })
}
