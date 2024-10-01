<?php
class form{
    protected $fields;

    public function __construct()
    {
        $this->fields = [];
    }

    public function setTextField($nama, $text){
        $label = "<div class='wrapper'><label for='". $nama ."'>". $nama ."</label>";
        $textField = "<input class='form-input' type'text' nama'". $nama ."' ></div>";
        array_push ($this->fields, $label . $textField);
    }

    public function tampilkanForm(){
        echo "<form>";
        foreach($this->fields as $field){
            echo $field;
        }
        echo "<input type='submit' value='simpan'>";
        echo "</form>";
    }
}


    class formMahasiswa{
}