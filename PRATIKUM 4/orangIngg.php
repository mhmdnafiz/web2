<?php

require_once "orangBiasa.php";

class orangIngg extends orangBiasa{

    // override
    public function ucapSalam()
    {
        echo "hello my name is " . $this->nama . "<br>";
    }
        
}
    
