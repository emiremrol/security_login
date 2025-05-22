

const viewPasswordBtns = document.querySelectorAll(".visiblePass");
if (viewPasswordBtns) {
    viewPasswordBtns.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            const input = btn.previousElementSibling;
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        })
    })

}

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

const alertBox = document.querySelector('#alert');

if (alertBox) {
    setTimeout(function () {
        var bsAlert = bootstrap.Alert.getOrCreateInstance(alertBox);
        bsAlert.close();
    }, 5000);
}


