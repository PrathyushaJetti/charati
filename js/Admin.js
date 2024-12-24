document.querySelectorAll('.sidebar ul li a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});

document.querySelectorAll('.sidebar ul li a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        gsap.to(window, { duration: 1.5, scrollTo: targetElement, ease: "power2.out" });
    });
});

let content = document.getElementById("content");
let authDiv = document.getElementById("noauth");

firebase.auth().onAuthStateChanged((user) => {
    const SuperUserUID = "8OIRcwc5veRgr0YgLJmPqKo3tdD3";
    if (user) {
        const currentUserUID = user.uid;
        if (currentUserUID === SuperUserUID) {
            content.style.display = "block";
            LoadData()

            function LoadData() {

                loadHomeData()

            }


            function loadHomeData() {
                let getData = firebase.database().ref("Home-Data");
                getData.once("value", function (snapshot) {
                    let data = snapshot.val();
                    console.log(data)
                    let keys = Object.keys(data);
                    console.log(keys)

                    let serial_no = 1;
                    for (let i = 0; i < keys.length; i++) {
                        let key = keys[i];
                        let currentData = data[key];
                        const name = currentData.Name;
                        const Mobile_Number = currentData.Number;
                        const Message = currentData.Message;

                        let tr = document.createElement("tr");
                        let td = document.createElement("td")
                        let td1 = document.createElement("td")
                        let td2 = document.createElement("td")
                        let td3 = document.createElement("td")
                        td.innerText = serial_no;
                        td1.innerText = name;
                        td2.innerText = Mobile_Number;
                        td3.innerText = Message;
                        tr.appendChild(td)
                        tr.appendChild(td1)
                        tr.appendChild(td2)
                        tr.appendChild(td3)
                        document.getElementById("homeData").append(tr)


                        serial_no++
                    }
                })
            }
        }
    }
    else {
        authDiv.style.display = "flex"
        content.remove();
        setTimeout(()=>{
            window.location.assign("adminlogin.html")
        },1000)
    }
})

// document.getElementById("logout").addEventListener("click", function () {
//     firebase.auth().signOut()
// })

// Service database for AdminPage 

firebase.auth().onAuthStateChanged((user) => {
    const SuperUserUID = "8OIRcwc5veRgr0YgLJmPqKo3tdD3";
    if (user) {
        const currentUserUID = user.uid;
        if (currentUserUID === SuperUserUID) {
            content.style.display = "block";
            LoadData()

            function LoadData() {

                loadServiceData()

            }


            function loadServiceData() {
                let getData = firebase.database().ref("Services-Data");
                getData.once("value", function (snapshot) {
                    let data = snapshot.val();
                    console.log(data)
                    let keys = Object.keys(data);
                    console.log(keys)

                    let serial_no = 1;
                    for (let i = 0; i < keys.length; i++) {
                        let key = keys[i];
                        let currentData = data[key];
                        const name = currentData.name;
                        const Mobile_Number = currentData.number;
                        const Message = currentData.message;

                        let tr = document.createElement("tr");
                        let td = document.createElement("td")
                        let td1 = document.createElement("td")
                        let td2 = document.createElement("td")
                        let td3 = document.createElement("td")
                        td.innerText = serial_no;
                        td1.innerText = name;
                        td2.innerText = Mobile_Number;
                        td3.innerText = Message;
                        tr.appendChild(td)
                        tr.appendChild(td1)
                        tr.appendChild(td2)
                        tr.appendChild(td3)
                        document.getElementById("serviceData").append(tr)


                        serial_no++
                    }
                })
            }
        }
    }
    else {
        authDiv.style.display = "flex"
        content.remove();
        setTimeout(()=>{
            window.location.assign("adminlogin.html")
        },1000)
    }
})


// DONATE DATAbasE FOR ADMIN PAGE


firebase.auth().onAuthStateChanged((user) => {
    const SuperUserUID = "8OIRcwc5veRgr0YgLJmPqKo3tdD3";
    if (user) {
        const currentUserUID = user.uid;
        if (currentUserUID === SuperUserUID) {
            content.style.display = "block";
            LoadData()

            function LoadData() {

                loadDonateData()

            }


            function loadDonateData() {
                let getData = firebase.database().ref("Donate-Data");
                getData.once("value", function (snapshot) {
                    let data = snapshot.val();
                    console.log(data)
                    let keys = Object.keys(data);
                    console.log(keys)

                    let serial_no = 1;
                    for (let i = 0; i < keys.length; i++) {
                        let key = keys[i];
                        let currentData = data[key];
                        const name = currentData.Name;
                        const Mobile_Number = currentData.Number;
                        const Message = currentData.Message;

                        let tr = document.createElement("tr");
                        let td = document.createElement("td")
                        let td1 = document.createElement("td")
                        let td2 = document.createElement("td")
                        let td3 = document.createElement("td")
                        td.innerText = serial_no;
                        td1.innerText = name;
                        td2.innerText = Mobile_Number;
                        td3.innerText = Message;
                        tr.appendChild(td)
                        tr.appendChild(td1)
                        tr.appendChild(td2)
                        tr.appendChild(td3)
                        document.getElementById("donateData").append(tr)


                        serial_no++
                    }
                })
            }
        }
    }
    else {
        authDiv.style.display = "flex"
        content.remove();
        setTimeout(()=>{
            window.location.assign("adminlogin.html")
        },1000)
    }
})

// GALLERY DATABASE FOR ADMIN PAGE

firebase.auth().onAuthStateChanged((user) => {
    const SuperUserUID = "8OIRcwc5veRgr0YgLJmPqKo3tdD3";
    if (user) {
        const currentUserUID = user.uid;
        if (currentUserUID === SuperUserUID) {
            content.style.display = "block";
            LoadData()

            function LoadData() {

                loadgalleryData()

            }


            function loadgalleryData() {
                let getData = firebase.database().ref("Gallery-Data");
                getData.once("value", function (snapshot) {
                    let data = snapshot.val();
                    console.log(data)
                    let keys = Object.keys(data);
                    console.log(keys)

                    let serial_no = 1;
                    for (let i = 0; i < keys.length; i++) {
                        let key = keys[i];
                        let currentData = data[key];
                        const name = currentData.Name;
                        const Mobile_Number = currentData.Number;
                        const Message = currentData.Message;

                        let tr = document.createElement("tr");
                        let td = document.createElement("td")
                        let td1 = document.createElement("td")
                        let td2 = document.createElement("td")
                        let td3 = document.createElement("td")
                        td.innerText = serial_no;
                        td1.innerText = name;
                        td2.innerText = Mobile_Number;
                        td3.innerText = Message;
                        tr.appendChild(td)
                        tr.appendChild(td1)
                        tr.appendChild(td2)
                        tr.appendChild(td3)
                        document.getElementById("galleryData").append(tr)


                        serial_no++
                    }
                })
            }
        }
    }
    else {
        authDiv.style.display = "flex"
        content.remove();
        setTimeout(()=>{
            window.location.assign("adminlogin.html")
        },1000)
    }
})

// CONTACT DATABASE FOR ADMIN PAGE
firebase.auth().onAuthStateChanged((user) => {
    const SuperUserUID = "8OIRcwc5veRgr0YgLJmPqKo3tdD3";
    if (user) {
        const currentUserUID = user.uid;
        if (currentUserUID === SuperUserUID) {
            content.style.display = "block";
            LoadData()

            function LoadData() {

                loadcontactData()

            }


            function loadcontactData() {
                let getData = firebase.database().ref("Contact-Data");
                getData.once("value", function (snapshot) {
                    let data = snapshot.val();
                    console.log(data)
                    let keys = Object.keys(data);
                    console.log(keys)

                    let serial_no = 1;
                    for (let i = 0; i < keys.length; i++) {
                        let key = keys[i];
                        let currentData = data[key];
                        const name = currentData.Name;
                        const Mobile_Number = currentData.Number;
                        const Subject = currentData.Subject
                        const Message = currentData.Message;

                        let tr = document.createElement("tr");
                        let td = document.createElement("td")
                        let td1 = document.createElement("td")
                        let td2 = document.createElement("td")
                        let td3 = document.createElement("td")
                        let td4 = document.createElement("td")
                        td.innerText = serial_no;
                        td1.innerText = name;
                        td2.innerText = Mobile_Number;
                        td3.innerText = Subject;
                        td4.innerText = Message;
                        tr.appendChild(td)
                        tr.appendChild(td1)
                        tr.appendChild(td2)
                        tr.appendChild(td3)
                        tr.appendChild(td4)
                        document.getElementById("contactData").append(tr)


                        serial_no++
                    }
                })
            }
        }
    }
    else {
        authDiv.style.display = "flex"
        content.remove();
        setTimeout(()=>{
            window.location.assign("adminlogin.html")
        },1000)
    }
})


document.getElementById("logout").addEventListener("click", function () {
    firebase.auth().signOut()
})