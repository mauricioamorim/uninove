<?php

class PHPMailer {
  protected $host;

  protected function setHost($host) {
    $this->host = $host;
  }

  protected function getHost() {
    return $this->host;
  }
}

class PHPMailerMarcelo extends PHPMailer {

  public function __set($name,$value) {
    switch($name) { 
      case 'host': 
        return $this->setHost($value);
    }
  }

  public function __get($name) {
    switch($name) {
      case 'host': 
        return $this->getHost();
    }
  }

}

$o = new PHPMailerMarcelo();


echo "Definindo host<br>\n";
$o->host = "marcelo@gmail.com";

echo "Exibindo host: ", $o->host, "<br>\n";