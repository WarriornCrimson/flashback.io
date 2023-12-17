const container = document.querySelector(".container");
const cardButton = document.getElementById("save-btn");
const question = document.getElementById("question");
const answer = document.getElementById("answer");
const errorMessage = document.getElementById("error");
const closeBtn = document.getElementById("close-btn");
const addQuestionCard = document.getElementById("add-question-card");
let editBool = false;

// Add question when the user clicks 'Add Flashcard'
document.addEventListener("DOMContentLoaded", function () {
     
    const addQuestion = document.getElementById("add-flashcard");
    const addQuestionCard = document.getElementById("add-question-card");

    addQuestion.addEventListener("click", () => {
        addQuestionCard.classList.remove("hide");
    });
}); 

// Hide create flashcard card

closeBtn.addEventListener("click", () => {
    if (addQuestionCard) {
        addQuestionCard.classList.add("hide");
    }
    if (editBool) {
        editBool = false;
        submitQuestion();
    }
});

//Submit question
cardButton.addEventListener(
    "click",
    (submitQuestion = () => {
        editBool = false;
        tempQuestion = question.value.trim();
        tempAnswer = answer.value.trim();
        if (!tempQuestion || !tempAnswer) {
            errorMessage.classList.remove("hide");
        }
        else {
            container.classList.remove("hide");
            errorMessage.classList.add("hide");
            viewlist();
            question.value = "";
            answer.value = "";
         
        }
    })
);

//card generate

function viewlist() { 
    var listCard = document.getElementsByClassName("card-list-container");
    var div = document.createElement("div");
    div.classList.add("card");
    //question

    div.innerHTML += `
    <p class="question-div">${question.value}</p>`;

    //answer

    var displayAnswer = document.createElement("p");
    displayAnswer.classList.add("answer-div");
    displayAnswer.innerText = tempAnswer; //icheck raba ni ha!

    //link to show/hide answer
 
    const showHideBtn = document.createElement("button");
    showHideBtn.classList.add("show-hide-btn");
    showHideBtn.innerText = "Hide";

showHideBtn.addEventListener("click", () => {
    if (displayAnswer.classList.contains("hide")) {
        displayAnswer.classList.remove("hide");
        showHideBtn.innerText = "Hide";

    } else {
        displayAnswer.classList.add("hide");
        showHideBtn.innerText = "Show";
    }
});

div.appendChild(showHideBtn); 
div.appendChild(displayAnswer);
    //edit button

    let buttonsCon = document.createElement("div");
    buttonsCon.classList.add("buttons-con");
    var editButton = document.createElement("button");
    editButton.setAttribute("class","edit");
    editButton.innerHTML = `<i class="fa-solid
    fa-pen-to-square"></i>`;
    editButton.addEventListener("click", () => {
        editBool = true;
        modifyElement(editButton, true);
        addQuestionCard.classList.remove("hide");
    });
    buttonsCon.appendChild(editButton);
    disableButtons(false);

//delete button
var deleteButton = document.createElement("button");
deleteButton.setAttribute("class", "delete");
deleteButton.innerHTML = `<i class="fa-solid fa-trash-can"></i>`;
deleteButton.addEventListener("click",()=> {
    modifyElement(deleteButton);
});
buttonsCon.appendChild(deleteButton);

    div.appendChild(buttonsCon);
    listCard[0].appendChild(div);
}

//modify elements

const modifyElement = (element, edit = false) => {
    let parentDiv = element.parentElement.parentElement;
    let parentQuestion = parentDiv.querySelector(".question-div").innerText;
    if(edit){
        let parentAns = parentDiv.querySelector(".answer-div").innerText;
        answer.value = parentAns;
        question.value = parentQuestion;
    }
    parentDiv.remove();
};

//Disable edit and delete buttons

const disableButtons = (value) => {
    let editButtons = document.getElementsByClassName
    ("edit");
    Array.from(editButtons).forEach((element) => {
        element.disable = value;
    });
};

document.getElementById('nav-btn').addEventListener('click', function() {
    // Toggle the 'active' class on .nav-bar
    document.getElementById('navbar').classList.toggle('active');
    
    // Toggle the 'active' class on .main-container
    document.getElementById('mainContainer').classList.toggle('active');
});

//Pops the account settings

document.addEventListener("DOMContentLoaded", function () {
 
    // Add a click event listener to the document
    document.addEventListener("click", function (event) {
        var avatar = document.getElementById("avatar");
        var popup = document.getElementById("popup");
        if(event.target === avatar || avatar.contains(event.target)) {
            popup.style.display = "block";
        }
        else {
            popup.style.display = "none";
        }
    });
});
