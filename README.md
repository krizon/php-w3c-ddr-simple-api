W3C DDR Simple API for PHP
==========================

PHP port of the [W3C DDR Simple api recommendation](http://www.w3.org/TR/DDR-Simple-API/).

Conversion notes
----------------

This set of interfaces is meant to implement the W3C DDR Simple API in PHP. Since the W3C recommendation targets strongly
typed languages and PHP is a loosely typed language we made some changes for the PHP interfaces. We also tried to
apply PSR-1 and PSR-2 coding standards and PHP best practices.

#### List of changes

    * Suffixed al interfaces with ```Interface```;
    * PHP does not support method overloading so overloaded methods in the original interfaces are merged in one method
    for this case;
