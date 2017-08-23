## Summary
A php dev upgrade testing environment php versions 5.3 - 7.1

## Required
- php7dev
- phan
- git



| Dependency   |      Name      |  Version |
|----------|-------------|------|
| [php7dev](https://github.com/rlerdorf/php7dev) |  Debian 8 Vagrant image with php versions 5.3 - 7.1 | master |
| [etsy/phan](https://github.com/etsy/phan) |    Phan    |   0.9.4 |
| [nikic/php-ast](https://github.com/nikic/php-ast) | abstract syntax tree generated by PHP 7 |    v0.1.5 |

### Install AST 
`composer require --dev etsy/phan`
- sudo apt-get install php-pear
- pecl install ast
- Add "extension=ast.so" to php.ini

```
$ cd /var/www/yoursite/
$ git pull origin master
```
Switch to a different version of php, then test site
- Easiest way is to use phpstorm to switch interpreters on the fly.

## Also see:
- [PHP Brew](https://github.com/phpbrew/phpbrew) : phpbrew builds and installs multiple version php(s) in your $HOME directory. 
- [php-to-7-aid](https://github.com/gisostallenberg/php-to-7-aid) : Tool to find, and possibly fix, backward incompatible changes in your existing codebase when upgrading to or preparing for PHP7
- [PhpStorm PHP 7 Compatibility Inspection](https://www.jetbrains.com/phpstorm) : PHP 7 Compatibility Inspection tool


.