
const email=document.getElementById("email");
const mdp=document.getElementById("psw");

// begin of  error function
function seterrorfor(input,msg){
    const control=input.parentElement;
    const small=control.querySelector('small');
    small.innerText=msg;
    control.classList.add('error');
    control.classList.remove('success');
     
}
// end of  error function


// begin of  success function
function setsuccessfor(input,msg){
    const control=input.parentElement;
    const small=control.querySelector('small');
    small.innerText=msg;
    /*control.className='input-group success';*/
    control.classList.add('success');
    control.classList.remove('error');
    
}
// end of  success function



//begin of authentification.html
const flogin=document.getElementById("flogin"); 
function checklogin(){
    const emailvaleur=email.value.trim();
    const mdpvaleur=mdp.value.trim();
    //email
    if(emailvaleur===""){
        seterrorfor(email,'veuillez saisir l email svp!');
    }

    else{
        setsuccessfor(email,'valide');
    }

    //mdp
    if(mdpvaleur===""){
        seterrorfor(mdp,'veuillez saisir le mot de passe  svp!');
    }
    else{
        setsuccessfor(mdp,'valide');
    }

}
//appel de fonction checklogin de formulaire d'authentification
  flogin.addEventListener('submit',function(e){
      e.preventDefault();
      checklogin();
  });
//end of page authentification
