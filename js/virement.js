

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


  //begin of virement.html
  const fvir=document.getElementById("fvir");
  const compdeb=document.getElementById("compdeb");
  const compcred=document.getElementById("compcred");
  const mont=document.getElementById("mont");
  const devise=document.getElementById("devise");

    function checkvir(){
      const compdebvaleur=compdeb.value.trim();
      const compcredvaleur=compcred.value.trim();
      const montvaleur=mont.value.trim();
      
      if(compdebvaleur===""){
        seterrorfor(compdeb,'veuillez saisir le compte débit  svp!');
      }
      else if( compdebvaleur.length !==18 || !numerique(compdebvaleur)){
          seterrorfor(compdeb,'compte débit invalide');
      }
      else{
          setsuccessfor(compdeb,'valide');
      }

      if(compcredvaleur===""){
        seterrorfor(compcred,'veuillez saisir le compte crédit  svp!');
      }
      else if( compcredvaleur.length !==18 || !numerique(compcredvaleur)){
          seterrorfor(compcred,'compte crédit invalide');
      }
      else{
          setsuccessfor(compcred,'valide');
      }

      if(montvaleur===""){
        seterrorfor(mont,'veuillez saisir le montant svp!');
      }

      else{
        setsuccessfor(mont,'valide');
      }
      /*if(devise.selectedIndex===-1){

      }*/
    }
    //appel de fonction checkvir de formulaire virement
      fvir.addEventListener('submit',function(e){
          e.preventDefault();
          checkvir();
      });
  //
//end of page virement
