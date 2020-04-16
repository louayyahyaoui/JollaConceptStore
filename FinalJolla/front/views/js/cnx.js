function Myfunction()
{
var email=document.jassem.email.value;
var nom=document.jassem.nom.value;
var prenom=document.jassem.prenom.value;
var pwd=document.jassem.pwd.value;
var pwd2=document.jassem.pwd2.value; 
if(nom=="" || prenom="" || pwd !== pwd2 || email="")
{
alert("un des champs est invalide");	
}

}