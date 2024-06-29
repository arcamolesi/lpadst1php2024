<?php
namespace MODEL;

class Equipamento
{
    private ?int $id;
    private ?string $descricao;
    private ?string $responsavel;
    private ?int $departamento;
    private ?string $compra;
    private ?int $quantidade; 

    public function __construct()
    {
    }

    public function getID()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }

    public function getResponsavel()
    {
        return $this->responsavel;
    }

    public function setResponsavel (string $responsavel)
    {
        $this->responsavel = $responsavel;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }

    public function setDepartamento(int $departamento)
    {
        $this->departamento = $departamento;
    }

    public function getCompra()
    {
        return $this->compra;
    }

    public function setCompra(string $compra)
    {
        $this->compra = $compra;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade(int $quantidade)
    {
        $this->quantidade = $quantidade;
    }

}
?>