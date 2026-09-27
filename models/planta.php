<?php
// atributos
class planta {
 protected string $nombre;
 protected float $altura;
 protected bool $hojas;
 protected string $clima;


 public function __construct(string $nombre, float $altura,bool $hojas,string $clima){
    $this->nombre= $nombre;
    $this->altura = $altura;
    $this->hojas = $hojas;
    $this->clima = $clima;
 
}
public function getnombre(): string {
    return $this->nombre;



}
 public function setnombre():string{
    return $this->nombre;
 }
 public function getaltura():float{
    return $this->altura;
 }
 public function gethojas():bool {
    return $this->hojas;
}
public function setclima():string{
    return $this->clima;
}

}
?>