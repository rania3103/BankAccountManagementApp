//begin of validation page inscription.html
const finscri=document.getElementById("finscri");
const pren=document.getElementById("pren");
const nom=document.getElementById("nom");
const cin=document.getElementById("cin");
const tel=document.getElementById("tel");
const email=document.getElementById("email");
const mdp=document.getElementById("psw");
const confmdp=document.getElementById("confpsw");
const adr=document.getElementById("adr");

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


// begin of  alpha function
function alpha(ch){
    let i=0;
    let test=true;
    while(i<ch.length){
        if(ch.charAt(i).toUpperCase()<"A" || ch.charAt(i).toUpperCase()>"Z"){
            test=false;
            break;
        }
        else{
            i++;
        }
    }
    return test;

}
// end of  alpha function


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

//begin of checkinscri
function checkinscri(){
    const prenvaleur=pren.value.trim();
    const nomvaleur=nom.value.trim();
    const cinvaleur=cin.value.trim();
    const telvaleur=tel.value.trim();
    const emailvaleur=email.value.trim();
    const mdpvaleur=mdp.value.trim();
    const confmdpvaleur=confmdp.value.trim();
    const adrvaleur=adr.value.trim();
    //prenom
    if(prenvaleur===""){
        seterrorfor(pren,'veuillez saisir le prénom svp!');
    }
    else if(! alpha(prenvaleur)){
        seterrorfor(pren,'le prenom doit etre alphabetique');
    }
    else{
        setsuccessfor(pren,'valide');
    }

    //nom
    if(nomvaleur===""){
        seterrorfor(nom,'veuillez saisir le nom svp!');
    }
    else if(! alpha(nomvaleur)){
        seterrorfor(nom,'le nom doit etre alphabetique');
    }
    else{
        setsuccessfor(nom,'valide');
    }

    //cin
    if(cinvaleur===""){
        seterrorfor(cin,'veuillez saisir la cin svp!');
    }
    else if(! numerique(cinvaleur)|| cinvaleur.length <8){
        seterrorfor(cin,'la cin doit etre 8 chifres');
    }
    else{
        setsuccessfor(cin,'valide');
    }

    //tel
    if(telvaleur===""){
        seterrorfor(tel,'veuillez saisir le numero de téléphone  svp!');
    }
    else if(! numerique(telvaleur)|| telvaleur.length <8){
        seterrorfor(tel,'le numero de téléphone doit etre numérique');
    }
    else{
        setsuccessfor(tel,'valide');
    }

    //email
    if(emailvaleur===""){
        seterrorfor(email,'veuillez saisir le mail svp!');
    }

    else{
        setsuccessfor(email,'valide');
    }

    //mdp
    if(mdpvaleur===""){
        seterrorfor(mdp,'veuillez saisir le mot de passe  svp!');
    }
    else if( mdpvaleur.length<5){
        seterrorfor(mdp,'mot de passe faible');
    }
    else{
        setsuccessfor(mdp,'valide');
    }

    //confmdp
    if(confmdpvaleur===""){
        seterrorfor(confmdp,'veuillez saisir le mot de passe  svp!');
    }
    else if( mdpvaleur !== confmdpvaleur){
        seterrorfor(confmdp,'mot de passe incorrecte');
    }
    else{
        setsuccessfor(confmdp,'valide');
    }

    //adr
    if(adrvaleur===""){
        seterrorfor(adr,'veuillez saisir une adresse  svp!');
    }
    
    else{
        setsuccessfor(adr,'valide');
    }
    
}
    //appel de fonction checkinscri de formulaire d'inscription
    finscri.addEventListener('submit',function(e) {
        e.preventDefault();
        checkinscri();
    });
    //end of validation page inscri
    
