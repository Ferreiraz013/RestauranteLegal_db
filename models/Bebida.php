<?php
namespace RestauranteLegal\Models;

class Bebida { // Propriedades da classe Bebida
    private int $idBebida;
    private string $nomeBebida;
    private string $volume;
    private int $alcoolico;
    private float $preco;
    private string $tabela = "bebidas"; // Nome da tabela no banco de dados

    public function __construct(int $idBebida, string $nomeBebida, string $volume, int $alcoolico, float $preco) {
        $this->idBebida = $idBebida;
        $this->nomeBebida = $nomeBebida;
        $this->volume = $volume;
        $this->alcoolico = $alcoolico;
        $this->preco = $preco;
    }

    public function getIdBebida(): int {
        return $this->idBebida;
    }

    public function getNomeBebida(): string {
        return $this->nomeBebida;
    }

    public function getVolume(): string {
        return $this->volume;
    }

    public function getAlcoolico(): int {
        return $this->alcoolico;
    }

    public function getPrecoFormatado(): string {
        return "R$ " . number_format($this->preco, 2);
    }

    public function getBebidaHTML(): string {
        $statusAlcoolico = $this->alcoolico ? "Sim" : "Não";
        return "======BEBIDA CRIADA COM SUCESSO====== <br>
                id: " . $this->getIdBebida() . " <br>
                Nome da Bebida: " . $this->getNomeBebida() . " <br>
                Volume: " . $this->getVolume() . " <br>
                Alcoólico: " . $statusAlcoolico . " <br>
                Preço: " . $this->getPrecoFormatado();
    }
}