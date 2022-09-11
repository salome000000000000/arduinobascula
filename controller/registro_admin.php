<?php

   // $result = mysqli_query($con, $buscar);

    $name = '';
    $lastname = '';
    $email = '';
    $username = '';
    $code = '';
    $password = '';

    $mens_error = '';


    if(!empty($_POST['registrar'])){
        if(!empty($_POST['name']) || !empty($_POST['lastname']) || !empty($_POST['email']) 
        || !empty($_POST['username']) || !empty($_POST['code']) || !empty($_POST['password'])){
        
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $code = $_POST['code'];
        $password = $_POST['password'];

        $mens_error = '<div class="alert alert-primary" role="alert">
        <i class="fas fa-exclamation-triangle"></i>Se han registrado los datos
        </div>';
        
        } 
        else {

            $mens_error = '<div class="alert alert-danger" role="alert">
            <i class="fas fa-exclamation-triangle"></i>Complete el formulario
            </div>';
        }
    } 

        


    $verificar = "";
