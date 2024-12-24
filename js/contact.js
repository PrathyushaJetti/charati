let arr4=[]
document.getElementById("btn1").addEventListener('click',function(){
    let obj4={
        "Name":"",
        "Number":"",
        "Subject":"",
        "Message":""
    }
    let user=document.getElementById("NAME").value
    let user_PHONE=document.getElementById("NUMBER").value
    let Subject=document.getElementById("subject").value
    let user_MESSAGES=document.getElementById("MESSAGE").value
    obj4.Name=user
    obj4.Number=user_PHONE
    obj4.Subject=Subject
    obj4.Message=user_MESSAGES
    console.log(obj4)
    arr4.push(obj4)
    console.log(arr4)

    firebase.database().ref("Contact-Data").push(obj4).then((d)=>{
        myFunction()
    })

})