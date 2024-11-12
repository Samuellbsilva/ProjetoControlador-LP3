<?php

class Jogo
{
    private int $id;
    private $jogo;
    private $numero_integrantes;
    private $regras;

   ///// Pega o id
    public function getId()
    {
        return $this->id;
    }

    //// Instancia o id
    public function setId($id)
    {
        $this->id = $id;
    }

    //// Pega o jogo
    public function getJogo()
    {
        return $this->jogo;
    }

    //// Instancia o jogo
    public function setJogo($id){
        
        $this->id = $id;

    }

    //// Pega o número de integrantes
     public function getNmrint()
    {
        return $this->numero_integrantes;
    }

    //// Instancia o número de integrantes
    public function setNmrint($numero_integrantes){
     
         $this->numero_integrantes = $numero_integrantes;

    }
    //// Pega as regras
    public function getRegras()
    {
        return $this->regras;
    }

    //// Instancia o número de integrantes
    public function setJogo($regras){
     
         $this->regras = $regras;

    }






}