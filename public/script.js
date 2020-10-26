// Läs klassLista // Lägg till ta bort expanded 
function readMore(){
    const elem = document.querySelector(".contentContainer");
    elem.classList.toggle("expanded");
}

function addEventListeners(){
    // Adds eventListener that makes sure to expand text when pressing Read more.
    document.querySelectorAll(".readMoreButton").forEach(node => {
        node.addEventListener("click", (e) => {
            const cardContainer = e.target.parentElement.parentElement;
    
            // attaches height class to parent so text doesn't overflow
            const card = cardContainer.parentElement;
            card.classList.toggle("reading");
    
            // Expands the text
            const contentContainer = cardContainer.querySelector(".contentContainer");
            contentContainer.classList.toggle("expanded");
        });
    })
    
    // Adds incrementing likes when clicking hearts
    document.querySelectorAll(".heart").forEach(node => {
        node.addEventListener("click", (e) => {
            const container = e.target.parentElement;
            const likes = container.querySelector(".likes");
            const likesIncremented = parseInt(likes.textContent) + 1;
            likes.textContent = likesIncremented;
        })
    })
    }
    
// Smooth scrolls based on class
function scrollTo(className){
    document.querySelector(className).scrollIntoView({ 
        behavior: 'smooth' 
      });
}

function scrollToTrending(){
      scrollTo(".cardContainer");
}

function scrollToFeatured(){
    scrollTo(".featureCard")
}

addEventListeners();
