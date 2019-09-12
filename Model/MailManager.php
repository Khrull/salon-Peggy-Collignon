<?php

namespace Model;

class MailManager
{
    // envoie un mail
    public function mailMe()
    {
            
        $mailme = mail('fcollignon57@gmail.com','de ' . $_POST['adresse'], $_POST['message']);

    }
}