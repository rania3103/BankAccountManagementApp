  

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

  
  //begin of nouveaumotdepasse.html
  const newmdp=document.getElementById("newpsw");
  const fnewpsw=document.getElementById("fnewpsw");
  const confnewmdp=document.getElementById("confnewpsw");
    function checknewpsw(){
        const newmdpvaleur=newmdp.value.trim();
        const confnewmdpvaleur=confnewmdp.value.trim();
        //mdp
    if(newmdpvaleur===""){
        seterrorfor(newmdp,'veuillez saisir le mot de passe  svp!');
    }
    else if( newmdpvaleur.length<5){
        seterrorfor(newmdp,'mot de passe faible');
    }
    else{
        setsuccessfor(newmdp,'valide');
    }

    //confmdp
    if(confnewmdpvaleur===""){
        seterrorfor(mdp,'veuillez saisir le mot de passe  svp!');
    }
    else if( newmdpvaleur !== confnewmdpvaleur){
        seterrorfor(confnewmdp,'mot de passe incorrecte');
    }
    else{
        setsuccessfor(confnewmdp,'valide');
    }

    }
  //appel de fonction checknewpsw de formulaire nouveaumdp
      fnewpsw.addEventListener('submit',(e)=>{
          e.preventDefault();
          checknewpsw();
      });
  //
//end of page nouveaumdp
