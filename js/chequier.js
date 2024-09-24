// begin of  numerique function
function numerique(ch){
    let i=0;
    let test=true;
    while(i<ch.length){
        if(ch.charAt(i)<"0" || ch.charAt(i)>"9"){
            test=false;
            break;
        }
        else{
            i++;
        }
    }
    return test;
}
// end of  numerique function


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



  //begin of chequier.html
    const fcheq=document.getElementById("fcheq");
    const numcompt=document.getElementById("numcompte");
    const nbrchequier=document.getElementById("nbrchequier");
    
      function checkcheq(){
        const nbrchequiervaleur=nbrchequier.value.trim();
        if(numcompt.selectedIndex===0){
            seterrorfor(numcompt,'veuillez choisir un numéro de compte');
        }
        else{
            setsuccessfor(numcompt,'valide');
        }
        if(nbrchequiervaleur===""){
            seterrorfor(nbrchequier,'veuillez saisir le nombre de chéquiers');  
        }
        else{
            setsuccessfor(nbrchequier,'valide');

        }

        }
    //appel de fonction checkcheq de formulaire chequier
        fcheq.addEventListener('submit',function(e){
            e.preventDefault();
            checkcheq();
        });
  //end of page chequier