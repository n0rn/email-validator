# E-mail validator 

A very simple library that allows you to validate an e-mail address, check if it exists through online connection and check if the provider is a disposable one or not.


 String validation:

`PHPEmailAddressValidator::validateString($email);`
Complete validation:

`PHPEmailAddressValidator::validate($email);`

The complete validation will check address syntax first, after that will check for provider existence through DNS resolution and then will check if the given e-mail address exists.

# E-mail provider check

Before using these methods you should set up dictionaries as following:

`PHPEmailAddressValidator::setWhiteListDatabasePath('whitelist.txt');`
`PHPEmailAddressValidator::setBlackListDatabasePath('blacklist.txt');`

Usage (in index.php)
-----

```
$email = 'foo.bar@mail.com';
```
