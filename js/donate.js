let arr2=[]
document.getElementById('Button').addEventListener('click',function(){
    console.log("WORKING")
    let obj2={
        "Name":"",
        "Number":"",
        "Message":""
    }
    let u_names=document.getElementById('Fname').value
    let u_numbers=document.getElementById('Pnumber').value
    let u_messages=document.getElementById('M-message').value
    obj2.Name=u_names
    obj2.Number=u_numbers
    obj2.Message=u_messages
    console.log(obj2)
    arr2.push(obj2)
    console.log(arr2)

    firebase.database().ref("Donate-Data").push(obj2).then((d)=>{
        myFunction()
    })
})