let arr3=[]
document.getElementById('btn').addEventListener('click',function(){
    console.log("WORKING")
    let obj3={
        "Name":"",
        "Number":"",
        "Message":""
    }
    let FNAME=document.getElementById('U-name').value
    let PNUMBER=document.getElementById('U-number').value
    let MESSAGEs=document.getElementById('U-message').value
    obj3.Name=FNAME
    obj3.Number=PNUMBER
    obj3.Message=MESSAGEs
    console.log(obj3)
    arr3.push(obj3)
    console.log(arr3)

    firebase.database().ref("Gallery-Data").push(obj3).then((d)=>{
        myFunction()
    })

})