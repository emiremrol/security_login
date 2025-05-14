

const viewPasswordBtns = document.querySelectorAll(".visiblePass");
viewPasswordBtns.forEach(btn => {
    btn.addEventListener("click", (e)=>{
        e.preventDefault();
        const input = btn.previousElementSibling;
        if(input.type === "password"){
            input.type = "text";
        }else{
            input.type = "password";
        }
    })
})

let pagLinks = document.querySelectorAll(".page-item .page-link");
let pageId = document.body.id;
// pagLinks[pageId].classList.add('active');


// let myInput = document.getElementById("psw");

// myInput.onfocus = function() {
//   document.getElementById("message").style.display = "block";
// }

// // When the user clicks outside of the password field, hide the message box
// myInput.onblur = function() {
//   document.getElementById("message").style.display = "none";
// }