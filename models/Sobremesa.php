<?php
namespace RestauranteLegal\Models;

class Sobremesa { // Propriedades da classe Sobremesa
    private int $idSobremesa;
    private string $nomeSobremesa;
    private string $descricao;
    private float $preco;
    private string $tabela = "sobremesas"; // Nome da tabela no banco de dados

    public function __construct(int $idSobremesa, string $nomeSobremesa, string $descricao, float $preco) {
        $this->idSobremesa = $idSobremesa;
        $this->nomeSobremesa = $nomeSobremesa;
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function getIdSobremesa(): int {
        return $this->idSobremesa;
    }

    public function getNomeSobremesa(): string {
        return $this->nomeSobremesa;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function getPrecoFormatado(): string {
        return "R$ " . number_format($this->preco, 2);
    }

    public function getSobremesaHTML(): string {
        return "======SOBREMESA CRIADA COM SUCESSO====== <br>
                id: " . $this->getIdSobremesa() . " <br>
                Nome da Sobremesa: " . $this->getNomeSobremesa() . " <br>
                Descrição: " . $this->getDescricao() . " <br>
                Preço: " . $this->getPrecoFormatado();
    }
}
?>