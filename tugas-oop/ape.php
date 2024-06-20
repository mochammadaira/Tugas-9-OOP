<?php
require_once('animal.php');

class ape extends animal {
    public function __construct($name){
        parent::__construct($name);
        $this->legs = 2; //untuk override jumlah kaki menjadi 2 (sebelumnya 4)
    }

    public function yell() {
        echo "Auooo <br>";
    }
}
?>