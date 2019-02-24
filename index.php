<?php
require dirname(__FILE__) . '/email-validator.php';

//Setting up lists.
EmailAddressValidator::setWhiteListDatabasePath(dirname(__FILE__) . '/whitelist.txt');
EmailAddressValidator::setBlackListDatabasePath(dirname(__FILE__) . '/blacklist.txt');

$email = 'foo.bar@mail.com';

//Checking if the e-mail address is valid.
$result = EmailAddressValidator::validateString($email);
echo 'Is a valid e-mail address? ' . ( $result === true ? ' Good ' : ' Bad ' ) . '<br>';
//Checking if the e-mail address is valid and existing.
$result = EmailAddressValidator::validate($email);
echo 'Is a valid and existing e-mail address? ' . ( $result === true ? ' Good ' : ' Bad ' ) . '<br>';
