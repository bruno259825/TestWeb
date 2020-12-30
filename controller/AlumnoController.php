<?php

    class AlumnoController{
       public function saludar(){
           
           require_once "model/Alumno.php";
           $a=new Alumno("","","","");
            var_dump($a->db);
       }
       
       public function registrarUsuario(){
           require_once 'model/Alumno.php';
           extract($_POST);
           
           $alum=new Alumno($user,$name,$password,$email);
           $conexion=$alum->getDb();
           
           $user=trim($conexion->real_escape_string($user));
           $name=trim($conexion->real_escape_string($name));
           $email=trim($conexion->real_escape_string($email));
           
           
           //validar datos
           $registro_errores=array(
               "errores"=>array(),
               "success"=>false
            );

           if(empty($user) || strlen($user)<5 || strlen($user)>15 || !preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9]*$/", $user)){
               $registro_errores["errores"][]="- Error en el nombre de usuario";
           }
           
           if(strlen($name)>50 || !preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/", $name)){
               $registro_errores["errores"][]="- Error en el nombre";

           }
           
           if(strlen($password)<5 || strlen($password)>14 || !preg_match("/^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]*$/", $password)){
               $registro_errores["errores"][]="- Error en la contraseña";

           }
           
           if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
               $registro_errores["errores"][]="- Email no válido";

           }
           
           
           if(count($registro_errores["errores"])==0){
             

             $errores=$alum->guardarAlumno($conexion);
             
             if(empty($errores)){
                $registro_errores["success"]=true;
             }else{
                $registro_errores["errores"][]=$errores;
             }
             
            }
           
           echo json_encode($registro_errores);
           //require_once 'view/alummo/error-register.php?err='.$registro_errores;
       }
       
    }
?>
