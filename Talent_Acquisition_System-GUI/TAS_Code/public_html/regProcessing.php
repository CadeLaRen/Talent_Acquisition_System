<?php

require_once 'vendor/autoload.php';

use Neoxygen\NeoClient\ClientBuilder;

$usr = "neo4j";
$pwd = "root";

$client = ClientBuilder::create()
        ->addConnection('default', 'http', 'localhost', 7474, true, $usr, $pwd)
        ->setAutoFormatResponse(true)
        ->build();


$firstName = htmlspecialchars($_POST['first_name']);
$lastName = htmlspecialchars($_POST['last_name']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);


$querya = 'MATCH (n:User) WHERE n.email = {email} RETURN n';
$parametersa = ['email' => $email];
$result = $client->sendCypherQuery($querya, $parametersa)->getRows();

$op = json_encode($result);
$data = json_decode($op);

function passcheck($pass) {
    $passwordErr = NULL;
    if (strlen($pass) <= '6') {
        $passwordErr = "Your Password Must Contain At Least 6 Characters!";
    } elseif (!preg_match("#[0-9]+#", $pass)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    } elseif (!preg_match("#[A-Z]+#", $pass)) {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    } elseif (!preg_match("#[a-z]+#", $pass)) {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
    return ($passwordErr);
}

if ($data == null) {
    $check = passcheck($password);
    if ($check == NULL) {
        $query = 'CREATE (ee:User {fname: {fname}, lname: {lname}, email: {email}, password: {password} })';
        $parameters = ['fname' => $firstName, 'lname' => $lastName, 'email' => $email, 'password' => $password];
        $response = $client->sendCypherQuery($query, $parameters);

        print_r("Registration Successful, Try Logging in."); //successful
    } else {
        print_r($check);
    }
} else {
    print_r("Email Already Exists"); //user already exists
}
?>
   