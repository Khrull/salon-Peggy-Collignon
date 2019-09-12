// validation du formulaire d'inscription
const b_nom=false;
const b_prenom=false;
const b_email=false;
const b_phone=false;
const b_adresse=false;
const b_birth=false;
const b_password=false;

function envoyer()
{
    if(b_nom==true && b_prenom==true && b_email==true && b_phone==true && b_adresse==true && b_birth==true && b_password==true)
    {
        document.getElementById('message').innerText='Envoi serveur';
        //document.getElementById('bouton_envoi').submit();
    }
    else
    {
        document.getElementById('message').innerText='Le formulaire est incomplet';
    }
}

function saisie(txt_defaut,nom_controle)
{
    if(document.getElementById(nom_controle).placeholder == txt_defaut)
    document.getElementById(nom_controle).placeholder=''
}

function retablir(txt_defaut,nom_controle)
{
    if(document.getElementById(nom_controle).placeholder == '')
    document.getElementById(nom_controle).placeholder = txt_defaut;
}

function mev(txt_defaut, nom_controle)
{
    var longueur = document.getElementById(nom_controle).value.length;

    if(nom_controle=='birth')
    {
        if(!isValidDate(document.getElementById(nom_controle).value, 'DMY'))
        {
            document.getElementById(nom_controle).style.border = 'rgb(204,51,0)  2px solid';
            document.getElementById('message').innerText = 'Votre date de naissance doit être saisie au format jj/mm/aaaa';
            b_birth=false;
        }
        else
        {
            document.getElementById('message').innerText = '';
            b_birth=true;
        }
    }
    else if(nom_controle=='email')
    {
        if(document.getElementById(nom_controle).value.indexOf('@') == -1 || document.getElementById(nom_controle).value.indexOf('.') == -1)
        {
            document.getElementById(nom_controle).style.border = 'rgb(204,51,0) 2px solid';
            document.getElementById('message').innerText = 'Votre email ne semble pas correct';
            b_email=false;
        }
        
        else
        {
            document.getElementById('message').innerText = '';
            b_email=true;
        }
    }
    else if(nom_controle=='password')
    {
        if(document.getElementById(nom_controle).value.length < 5 || document.getElementById(nom_controle).value.length > 10)
        {
            document.getElementById(nom_controle).style.border = 'rgb(204,51,0) 2px solid';
            document.getElementById('message').innerText = 'Le mot de passe doit comporter entre 5 et 10 caractères';
            b_password=false;
        }
        else if(document.getElementById('conf_password').value !='' && document.getElementById('conf_password').value != 'Confirmer MP')
        {
            if(document.getElementById(nom_controle).value != document.getElementById('conf_password').value)
            {           
                document.getElementById(nom_controle).style.border = 'rgb(204,51,0) 2px solid';
                document.getElementById('message').innerText = 'Les deux mots de passe ne correspondent pas';
                b_password=false;
            }
            else
            {
                document.getElementById('message').innerText = '';
                
            }
        }
        else
        {
            document.getElementById('message').innerText = '';
            
        }
    }
    else if(nom_controle=='conf_password')
    {
        if(document.getElementById(nom_controle).value != document.getElementById('password').value)
        {
            document.getElementById(nom_controle).style.border = 'rgb(204,51,0) 2px solid';
            document.getElementById('message').innerText = 'Les mots de passe doivent être identiques';
            b_password=false;
        }
        else
        {       
            document.getElementById('message').innerText = '';
            
            b_password=true;
        }
    }
    else if(longueur <4 || document.getElementById(nom_controle).value == txt_defaut)
    {
        document.getElementById(nom_controle).style.border = 'rgb(204,51,0) 2px solid';

        switch(nom_controle)
        {
            case 'nom':
                b_nom = false;
            break;
            case 'prenom':
                b_prenom = false;
            break;
            case 'email':
                b_email = false;
            break;
            case 'phone':
                b_phone = false;
            break;
            case 'adresse':
                b_adresse = false;
            break;
            case 'birth':
                b_birth = false;
            break;
            case 'password':
                b_password = false;
            break;
        }
    }
    else
    {
        
        switch(nom_controle)
        {
            case 'nom':
                b_nom=true;
            break;
            case 'prenom':
                b_prenom=true;
            break;
        }
    }
}

function isValidDate(dateStr, format) {
    if (format == null) { format = "MDY"; }
        format = format.toUpperCase();
    if (format.length != 3) { format = "MDY"; }
    if ( (format.indexOf("M") == -1) || (format.indexOf("D") == -1) || (format.indexOf("Y") == -1) ) { format = "MDY"; }
    if (format.substring(0, 1) == "Y") { 
       var reg1 = /^\d{2}(\-|\/|\.)\d{1,2}\1\d{1,2}$/
       var reg2 = /^\d{4}(\-|\/|\.)\d{1,2}\1\d{1,2}$/
    } else if (format.substring(1, 2) == "Y") { 
       var reg1 = /^\d{1,2}(\-|\/|\.)\d{2}\1\d{1,2}$/
       var reg2 = /^\d{1,2}(\-|\/|\.)\d{4}\1\d{1,2}$/
    } else { 
       var reg1 = /^\d{1,2}(\/)\d{1,2}\1\d{2}$/
       var reg2 = /^\d{1,2}(\/)\d{1,2}\1\d{4}$/
    }
    if ( (reg1.test(dateStr) == false) && (reg2.test(dateStr) == false) ) { return false; }
    var parts = dateStr.split(RegExp.$1); 
    
    if (format.substring(0, 1) == "M") { var mm = parts[0]; } else
        if (format.substring(1, 2) == "M") { var mm = parts[1]; } else { var mm = parts[2]; }
    if (format.substring(0, 1) == "D") { var dd = parts[0]; } else
        if (format.substring(1, 2) == "D") { var dd = parts[1]; } else { var dd = parts[2]; }
    if (format.substring(0, 1) == "Y") { var yy = parts[0]; } else
        if (format.substring(1, 2) == "Y") { var yy = parts[1]; } else { var yy = parts[2]; }
    if (parseFloat(yy) <= 50) { yy = (parseFloat(yy) + 2000).toString(); }
    if (parseFloat(yy) <= 99) { yy = (parseFloat(yy) + 1900).toString(); }
    var dt = new Date(parseFloat(yy), parseFloat(mm)-1, parseFloat(dd), 0, 0, 0, 0);
    if (parseFloat(dd) != dt.getDate()) { return false; }
    if (parseFloat(mm)-1 != dt.getMonth()) { return false; }
    return true;
}