const getQuery = () => {
    return document.getElementById("search-query").value;
}

const searchQuery = async (query) => {
    document.getElementById("content-container").innerHTML = await fetch("/index.php/?action=search&query=" + query)
        .then(response => {
            return response.text();
        })
}
