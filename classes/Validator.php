<?php

    require_once("DB.php");

    class Validator
    {

        function validarLogin($datos, DB $db) {
            $errores = [];
    
            foreach ($datos as $clave => $valor) {
                $datos[$clave] = trim($valor);
            }

            if ($datos["email"] == "") {
                $errores["email"] = "Ingresar un email";
            }

            else if (filter_var($datos["email"], FILTER_VALIDATE_EMAIL) == false) {
                $errores["mail"] = "Ingrese un email";
            } else if ($db->dbEmailSearch($datos["email"]) == null) {
                //SI haciendo uso del metodo buscamePorMail tenemos como resultado null, es porque el mail no esta registrado.
                $errores["mail"] = "No estas registrado en nuestra plataforma";
            }

            $usuario = $db->dbEmailSearch($datos["email"]);
            //A partir de aca, tenemos una variable $usuario con un objeto del tipo Usuario, ya que si buscamePorMail() devuelve null o un objeto, la parte de null ya la pasamos, asi que solamente queda que se instancie el usuario. Esa instancia se genera en la clase DB, por eso no necesitamos hacer require de Usuario para que esto pase.
            if ($datos["password"] == "") {   
                $errores["password"] = "Ingrese su contraseña";
            } else if ($usuario != null) {
                //Doble check de que $usuario no sea null, confirmamos que usuario existe y puso contraseña, pero engo que validar que la contraseño que ingreso sea valida
                if (password_verify($datos["password"], $usuario->getPassword()) == false) {
                    $errores["password"] = "La contraseña no es valida";
                }
            }

            return $errores;
        }

        function dataValidate($data, DB $db) {
            $errores = [];
    
            foreach ($data as $clave => $valor) {
                $data[$clave] = trim($valor);
            }

            if ($data["email"] == "") {
                $errores["email"] = "Y el email??";
            }
            else if (filter_var($data["email"], FILTER_VALIDATE_EMAIL) == false) {
                $errores["mail"] = "El email no es valido";

            } else if ($db->dbEmailSearch($data["email"]) != NULL) {
                //SI el metodo de DB dbEmailSearch() da como resultado que NO es null, es porque el metodo pudo instanciar al usuario, entonces ya existe en nuestra base de datos.
                $errores["mail"] = "Ya hay un chabon con ese email";
            }
    
            if ($data["password"] == "") {
                $errores["password"] = "Ingrese una contraseña";
            }
    
            // if ($data["cpassword"] == "") {
            //     $errores["cpassword"] = "La contraseña va dos veces";
            // }
    
            // if ($data["password"] != "" && $data["cpassword"] != "" && $data["password"] != $data["cpassword"]) {
            //     $errores["password"] = "Las contraseñas no coinciden";
            // }
    
            return $errores;
        }

    }