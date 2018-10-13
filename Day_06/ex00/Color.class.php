<?php

    class ColorClass {

        public $red;
        public $green;
        public $blue;

        function __construct() {
            print('constructor called' . PHP_EOL);
            return;
        }

        function __destruct() {
            print('destructor called' . PHP_EOL);
            return;
        }
    }

    $Color = new ColorClass();
    var_dump($Color);
?>