// validation du formulaire d'inscription

const phoneValid = /^0[1-68]([ .-]?[0-9]{2}){4}$/gm

function surligne(champs,erreur)
{
    if(erreur)
        champs.style.borderColor = "rgb(204,51,0)";
    else
        champs.style.borderColor="";    
}

function verifNom(champ)
{
    if(champ.value.length < 2 || champ.value.length > 25)
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}

function verifPrenom(champ)
{
    if(champ.value.length < 2 || champ.value.length > 25)
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        return true;
    }
}

function verifEmail(champ)
{
    const regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
    if(!regex.test(champ.value))
    {
        surligne(champ, true);
        document.getElementById('message').innerText = "L'adresse mail est incorrecte";
        return false;
    }
    else
    {
        surligne(champ, false);
        document.getElementById('message').innerText ="";
        return true;
    }
}

function verifPhone(champ)
{
    const regex = /^0[1-9]([ .-]?[0-9]{2}){4}$/gm;
    if(!regex.test(champ.value))
    {
        surligne(champ, true);
        document.getElementById('message').innerText ="Le format du numéro de téléphone est invalide"
        return false;
    }
    else
    {
        surligne(champ, false);
        document.getElementById('message').innerText ="";
        return true;
    }
}


function verifAdresse(champ)
{
    const regex= /^([0-9a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ\s-]{1,50})$/
    if(!regex.test(champ.value))
    {
        surligne(champ, true);
        return false;
    }
    else
    {
        surligne(champ, false);
        document.getElementById('message').innerText ="";
        return true;
    }
}

function verifBirth(champ)
{
    const regex= /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/
    if(!regex.test(champ.value))
    {
        surligne(champ, true);
        document.getElementById('message').innerText ="Le format de la date de naissance est invalide"
        return false;
    }
    else
    {
        surligne(champ, false);
        document.getElementById('message').innerText ="";
        return true;
    }
}

function verifPassword(champ)
{
    const regex= /^[a-zA-Z0-9]{5,10}$/;
    if(!regex.test(champ.value))
    {
        surligne(champ, true);
        document.getElementById('message').innerText ="Votre mot de passe doit comprendre entre 5 et 10 caractères";
        return false;    
    }
    else
    {
        surligne(champ, false);
        document.getElementById('message').innerText ="";
        return true;
    }
}

function verifPassConf(champ)
{
    if(document.getElementById('conf_password').value != document.getElementById('password').value)
    {
        surligne(champ, true);
        document.getElementById('message').innerText ="Les deux mots de passe ne semblent pas correspondre";
        return false;    
    }
    else
    {
        surligne(champ, false);
        document.getElementById('message').innerText ="";
        return true;
    }
}

function verifForm(f)
{
    const nomOk = verifNom(f.nom);
    const prenomOk = verifPrenom(f.prenom);
    const emailOk = verifEmail(f.email);
    const phoneOk = verifPhone(f.phone);
    const adresseOk = verifAdresse(f.adresse);
    const birthOk = verifBirth(f.birth);
    const passwordOk = verifPassword(f.password);
    const passwordConfOk = verifPassConf(f.conf_password)

    if(nomOk && prenomOk && emailOk && phoneOk && adresseOk && birthOk && passwordOk && passwordConfOk)
        return true;
    else
    {
        document.getElementById('message').innerText ="Veuillez remplir correctement tous les champs";
        return false;
    }
}