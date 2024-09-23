<?php

class bankcustomer{
    private string $customName;
    private string $address;
    private string $email;
    public string $card;
    protected string $acc;

    //constructor
    public function __construct(){
      $this->email = "ini_email_default_@gmail.com";
    }

    public function __destruct(){
        echo "koneksi sudah selesai";
    }

    public function setcustomerName($customerName){
        $this->setcustomerName = $customerName;
    }

    public function setaddress($address){
        $this->setaddress = $address;
    }

    public function setemail($email){
        $this->setemail = $email;
    }

     public function getacc(): string {
        return $this->acc;
    }


    public function InsertCard(){

    echo "kartu dimasukkan : <br>";
    echo "nama customer :" .  $this->setcustomerName . '<br>';
    echo "alamat : " . $this->setaddress . '<br>';
    echo "card : " . $this->card . '<br>';
    echo "email : " . $this->setemail . '<br>';
    echo "acc : " . $this->getacc . '<br>';

    }

    public function SelectTransction(){

    }

    public function enterPIN(int $number){
        echo "Pin telah di enter : " . $number;

    }

    public function changePIN(){

    }

    public function withDrawCash(){

    }

    public function requestTransactionSummary(){

    }

    public function acceptAmount(){

    }
}