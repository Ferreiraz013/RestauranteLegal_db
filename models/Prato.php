<?php
namespace RestauranteLegal\Models;

class Prato { // Propriedades da classe Prato
    private int $idPrato;
    private string $nomePrato;
    private string $descricao;
    private float $preco;
    private string $tabela = "pratos"; // Nome da tabela no banco de dados

    public function __construct(int $id, string $nomePrato, string $descricao, float $preco) {
        $this->idPrato = $id;
        $this->nomePrato = $nomePrato;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }
    public function getNomePrato(): string {
        return $this->nomePrato;
    }
    public function getDescricao(): string {
        return $this->descricao;
    }
    public function getPrecoFormatado(): string {
        return "R$" . number_format($this->preco,2);
    }
    public function getIdPrato(): string {
        return $this->idPrato;
    }
    public function getPratoHTML() : string {
        return "======PRATO CRIADO COM SUCESSO====== <br>
        id: " . $this->getIdPrato() . "<br>
        Nome do Prato: " . $this->getNomePrato() . "<br>
        Descrição: " . $this->getDescricao() . "<br>
        Preço: " . $this->getPrecoFormatado(); 
}

}
