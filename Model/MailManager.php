<?php

namespace Model;

class MailManager
{
public function mailMe()
{
    
    $mailme = mail('fcollignon57@gmail.com','de ' . $_POST['adresse'], $_POST['message']);

}
}