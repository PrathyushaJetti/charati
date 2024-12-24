let arr1=[]
document.getElementById('click').addEventListener('click',function(){
    console.log("WORKING")
    let obj5={
        "name":"",
        "number":"",
        "message":""
    }
    let u_name=document.getElementById('Name').value
    let u_number=document.getElementById('Number').value
    let u_message=document.getElementById('Message').value
    obj5.name=u_name
    obj5.number=u_number
    obj5.message=u_message
    console.log(obj5)
    arr1.push(obj5)
    console.log(arr1)

    firebase.database().ref("Services-Data").push(obj5).then((d)=>{
        myFunction()
    })

})