
firebase.auth().onAuthStateChanged((user) => {
    if (user) {
        window.location.assign("admin.html")
    }

}) 
function LoginUser() {
    let user_input = document.getElementById("username").value;
    let password_input = document.getElementById("password").value;

    firebase.auth().signInWithEmailAndPassword(user_input, password_input).then((data) => {
        console.log(data)
    })
}