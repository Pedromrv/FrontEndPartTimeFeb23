const body = document.querySelector("body");
const firstname = document.querySelector("#firstname");
const displayFirstname = document.querySelector("#display-firstname");
const age = document.querySelector("#age");
const hardTruth = document.querySelector("#a-hard-truth");
const passwords = document.querySelectorAll("input[type=password]");
const selectDarkMode = document.querySelector("#toggle-darkmode");

firstname.addEventListener("keyup", (e) => {
    displayFirstname.innerText = e.target.value
})

age.addEventListener("keyup", e => {
   hardTruth.style.visibility = 
   (e.target.value >= 18) ? 
   "visible" : 
   "hidden";
})

// check password
passwords.forEach( el => {
    el.addEventListener("keyup", (e) => {
        el.style.backgroundColor = 
        (e.target.value.length < 6 || passwords[0].value != e.target.value) ?
        "red" :
        "";
    })
})

selectDarkMode.addEventListener("change", e => {
    if(e.target.value == "dark") {
        body.style.background = "black"
        body.style.color = "white"
    } else {
        body.style.background = "white"
        body.style.color = "black"
    }
})