
let arr=[]
document.getElementById('Submit').addEventListener('click',function(){
    console.log("worlking")
    // alert("Information Is Sent")
    let obj={
        "Name":"",
        "Number":"",
        "Message":""
    }
    let user_name=document.getElementById('name').value
    let user_number=document.getElementById('number').value
    let user_message=document.getElementById('message').value;
    console.log(user_message)
    obj.Name=user_name
    obj.Number=user_number
    obj.Message=user_message
    console.log(obj)
    arr.push(obj)
    console.log(arr)

    firebase.database().ref("Home-Data").push(obj)
})
