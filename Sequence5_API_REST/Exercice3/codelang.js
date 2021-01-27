
document.getElementById("send").addEventListener("click", () => {
    const { value } = document.getElementById("name");
    api(value);
}, true);

function api(name) {

    //pour appeler une API on utilise la méthode fetch()
    fetch("API_traitement.php", {
        method: 'POST',
        mode: 'cors',
        body: JSON.stringify(name)
    }
      //"body" instead of "data"
    ).then((resp) => resp.json())
        .then(function (data) {
            console.log(data);
            UpdateDiv("arenne", data);
        })
        .catch(function (error) {
            // This is where you run code if the server returns any errors
            console.log(error);
        });
}

function UpdateDiv(id, text) {
    var e = document.getElementById(id).innerHTML = text;
}