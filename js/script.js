var form=document.querySelector('form');
var msg=document.querySelector('#msg');
var usernamebox=document.querySelector('#username');
var numberbox=document.querySelector('#number');
var emailbox=document.querySelector('#email');
var passwordbox=document.querySelector('#pass');
var cpasswordbox=document.querySelector('#cpass');

form.addEventListener("submit", function(event){

    var username=usernamebox.value;
    var number=numberbox.value;
    var email=emailbox.value;
    var password=passwordbox.value;
    var cpassword=cpasswordbox.value;
        var name_ptr=/^[A-Z a-z _]{3,15}$/;
        var number_ptr=/^[0-9 ]{11}$/;
        var email_ptr=/^[A-Z a-z 0-9 .]+@[a-z]+\.[a-z]+$/;
        var password_ptr=/^[A-Z a-z 0-9]{8,15}$/;

    if(username.match(name_ptr) && number.match(number_ptr) && email.match(email_ptr) && password.match(password_ptr)){
      
     
    }else{
       
            msg.style.display="block";
        msg.innerHTML="Plz Fill All Fields First";
        event.preventDefault();
        setTimeout(function(){
            window.location.href="http://localhost/rf/index.php";
        },2000)
        }


});

cpasswordbox.addEventListener("keyup",function(){
  var password=passwordbox.value;
  var cpassword=cpasswordbox.value;
  if(password==cpassword){
    cpasswordbox.style.border="3px solid #ADFF2F";
    passwordbox.style.border="3px solid #ADFF2F";
    document.querySelector('#cerror').innerHTML="Password Matched";
    document.querySelector('#cerror').style.color="#ADFF2F";
  }
  else{
    cpasswordbox.style.border="3px solid red";
    passwordbox.style.border="3px solid red";
    document.querySelector('#cerror').innerHTML="Password Not Matched";
    document.querySelector('#cerror').style.color="red";
  }
});

usernamebox.addEventListener("keyup",function(){
    var username=usernamebox.value;
    var pattern=/^[A-Z a-z _]{3,15}$/;
    if(username.match(pattern)){
        usernamebox.style.border="3px solid #ADFF2F";
        document.querySelector('#umsg').style.color="#ADFF2F";
        document.querySelector('#umsg').innerHTML="Perfect";
    }else{
        usernamebox.style.border="3px solid red";
        document.querySelector('#umsg').style.color="red";
        document.querySelector('#umsg').innerHTML="Only Capital small alphabets and underscore Allowed Limit (3,15)";
    }
  });


  numberbox.addEventListener("keyup",function(){
    var number=numberbox.value;
    var pattern=/^[0-9 ]{11}$/;
    if(number.match(pattern)){
        numberbox.style.border="3px solid #ADFF2F";
        document.querySelector('#nmsg').style.color="#ADFF2F";
        document.querySelector('#nmsg').innerHTML="Perfect";
    }else{
        numberbox.style.border="3px solid red";
        document.querySelector('#nmsg').style.color="red";
        document.querySelector('#nmsg').innerHTML="Plz Enter Valid Number of 11 digit";
    }
  });

  emailbox.addEventListener("keyup",function(){
    var email=emailbox.value;
    var pattern=/^[A-Z a-z 0-9 .]+@[a-z]+\.[a-z]+$/;
    if(email.match(pattern)){
        emailbox.style.border="3px solid #ADFF2F";
        document.querySelector('#emsg').style.color="#ADFF2F";
        document.querySelector('#emsg').innerHTML="Perfect";
    }else{
        emailbox.style.border="3px solid red";
        document.querySelector('#emsg').style.color="red";
        document.querySelector('#emsg').innerHTML="Plz Enter Valid Email";
    }
  });

  passwordbox.addEventListener("keyup",function(){
    var password=passwordbox.value;
    var pattern=/^[A-Z a-z 0-9]{8,15}$/;
    if(password.match(pattern)){
        passwordbox.style.border="3px solid #ADFF2F";
        document.querySelector('#pmsg').style.color="#ADFF2F";
        document.querySelector('#pmsg').innerHTML="Perfect";
    }else{
        emailbox.style.border="3px solid red";
        document.querySelector('#pmsg').style.color="red";
        document.querySelector('#pmsg').innerHTML="Password contain alphabets and number limit 8,15";
    }
  });