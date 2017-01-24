<?php
/**
 * Created by Rudda Beltrao
 * Date: 17/01/2017
 * Time: 10:57
 * Lab312 developer android  & php backend
 * www.lab312-icetufam.com.br
 * beltrao.rudah@gmail.com
 */

    $name = $_GET["name"];
    $email = $_GET["email"];

    $servername = "localhost";
    $username = "rudda";
    $password = "software";
    $mydb = "goiabada";
    

    inserir($name, $email);
    

    function inserir($nome, $email){
        $db = init();
        $db->exec("insert into usuario(nome, email) values($nome, $email)");

    }


    function init(){

        return new PDO("mysql:host=$this->servername;dbname=$this->mydb", $this->username, $this->password);
    }
