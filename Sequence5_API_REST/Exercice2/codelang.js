
setInterval(getRandom, 2000);

function getRandom() {
    //pour appeler une API on utilise la méthode fetch()
    fetch('API_traitement.php').then((resp) => resp.json())
        .then(function (data) {
            // data est la réponse http de notre API.
            console.log(data);
            UpdateDiv("arenne", data[0]);
        })
        .catch(function (error) {
            // This is where you run code if the server returns any errors
            console.log(error);
        });
}

function UpdateDiv(id, text) {
    var e = document.getElementById(id).innerHTML = text;
}