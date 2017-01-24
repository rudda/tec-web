<?php
/**
 * Created by Rudda Beltrao
 * Date: 17/01/2017
 * Time: 11:24
 * Lab312 developer android  & php backend
 * www.lab312-icetufam.com.br
 * beltrao.rudah@gmail.com
 */

    $servername = "localhost";
    $username = "rudda";
    $password = "software";
    $mydb = "goiabada";

echo "nada";

function mostrar($goiaba){

    $sql = "select * from goiabada";
    $db = init();

}

function init(){

    return new PDO("mysql:host=$this->servername;dbname=$this->mydb", $this->username, $this->password);
}
