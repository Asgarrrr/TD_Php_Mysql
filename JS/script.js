            	
// const gitTab = document.getElementById("gitTab");

document.addEventListener("DOMContentLoaded", (Event) => {

    console.log("End")
    
    var request = new XMLHttpRequest();
    request.onload = printRepoCount;
    request.open('get', 'https://api.github.com/users/Asgarrrr/repos', true)
    request.send()


})

function printRepoCount() {

    var responseObj = JSON.parse(this.responseText);

    for ( repo of responseObj ) {

        const card  = document.createElement("div");
        const title = document.createElement("p");

        card.appendChild(title)

        console.log(card)

        
    }
    
}

