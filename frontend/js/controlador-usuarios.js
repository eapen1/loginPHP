function login(){
    axios({
        url: "../backend/api/login.php",
        method: "POST",
        responseType:"json",
        data:{
            email:document.getElementById('email').value,
            password:document.getElementById('password').value    
        }        
    }).then(res=>{
        console.log(res);
    }).catch(err=>{
        console.log(err);
    });
}