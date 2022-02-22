<?php

function main_menu(){
    return array(
        //estructura del login
        array(
            'title' => 'Login',
            'url' => base_url(),
        ),
        //estructura del registro
        array(
            'title' => 'Registro',
            'url' => base_url('index.php/registro'),
        ),
    );
}