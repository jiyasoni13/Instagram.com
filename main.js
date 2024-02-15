const getId = (Id)=>document.getElementById(Id);
const getSl =(selector)=>document.querySelector(selector);

const password=getId("password");
const show_hide_password=getId("show_hide_password");



if(password){
    show_hide_password.addEventListener("click",function(){
      if(password.type==="password"){
        password.type = "text";
        show_hide_password.innerText ="Hide";
      }else{
        password.type = "password";
        show_hide_password.innerText ="Show";
      }


    })
}