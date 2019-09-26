<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name'=> 'lucas', 'email' => 'lucas@teste.com']);
// $user->set('email','lucas_alterado@coder.com');
// print_r($user->get('email'));
print_r($user);
echo '<br>';
$user->email = 'lucasalterado@coder.com';
print_r($user->email);
echo '<br>';
print_r($user->getSelect('id , nome'));


// $sql = 'select * from users';
// $result = Database::getResultFromQuery($sql);

// while($row = $result->fetch_assoc()) {
//     print_r($row);
//     echo '<br>';
// }
