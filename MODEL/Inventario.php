<?php 
  namespace MODEL; 
  
  class Inventario {
    private ?int $id;
    private ?int $software;
    private ?int $equipamento; 
    private string $instalacao;

    public function __construct()
    {
    }
    //teste do almir

    public function getID()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getSoftware()
    {
        return $this->software;
    }

    public function setSoftware(int $software)
    {
        $this->software = $software;
    }

    public function getEquipamento()
    {
        return $this->equipamento;
    }

    public function setEquipamento(int $equipamento)
    {
        $this->equipamento = $equipamento;
    }

    public function getInstalacao()
    {
        return $this->instalacao;
    }

    public function setInstalacao(string $instalacao)
    {
        $this->instalacao = $instalacao;
    }

  }