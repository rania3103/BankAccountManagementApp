    const email=document.getElementById("email");

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

    
    //begin of oubliermdp.html
    const foubli=document.getElementById("foubli");
      
    function checkoublimdp(){
      const emailvaleur=email.value.trim();
        //email
    if(emailvaleur===""){
        seterrorfor(email,'veuillez saisir le mail svp!');
    }

    else{
        setsuccessfor(email,'valide');
    }

    }
     //appel de fonction checkoublimdp de formulaire oubliermdp
      foubli.addEventListener('submit',function(e){
          e.preventDefault();
          checkoublimdp();
      });
  //
   
//end of page oubliermdp