

// Läs klassLista // Lägg till ta bort expanded 
function readMore(){
    const elem = document.querySelector(".contentContainer");
    elem.classList.toggle("expanded");
}

// Adds eventListener that makes sure to expand text when pressing Read more.
document.querySelectorAll(".readMoreButton").forEach(node => {
    node.addEventListener("click", (e) => {
        const cardContainer = e.target.parentElement.parentElement;
        const contentContainer = cardContainer.querySelector(".contentContainer");
        contentContainer.classList.toggle("expanded");
    });
})


