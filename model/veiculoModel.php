<?php

class veiculo {
    private $idVeiculo;
    private $nome;
    private $marca;
    private $ano;
    private $cor;
    private $cambio;
    private $portas;
    private $combustível;
    private $placa;
    private $descricao;
    private $valor;
    private $img;

    public function __construct(){

    }

    public function getIdVeiculo(){
		return $this->idVeiculo;
	}

	public function setIdVeiculo($idVeiculo){
		$this->idVeiculo = $idVeiculo;
	}

    public function getNomeCompleto(){
        return $this->marca . ' ' . $this->nome;
    }

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marca){
		$this->marca = $marca;
	}

	public function getAno(){
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano = $ano;
	}

	public function getCor(){
		return $this->cor;
	}

	public function setCor($cor){
		$this->cor = $cor;
	}

	public function getCambio(){
		return $this->cambio;
	}

	public function setCambio($cambio){
		$this->cambio = $cambio;
	}

	public function getPortas(){
		return $this->portas;
	}

	public function setPortas($portas){
		$this->portas = $portas;
	}

	public function getCombustível(){
		return $this->combustível;
	}

	public function setCombustível($combustível){
		$this->combustível = $combustível;
	}

	public function getPlaca(){
		return $this->placa;
	}

	public function setPlaca($placa){
		$this->placa = $placa;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getValor(){
        $numero = number_format($this->valor, 2, ',', '.');
        $numero = 'R$ ' . $numero . '/Dia';
		return $numero;
	}

	public function setValor($valor){
		$this->valor = $valor;
	}

	public function getImg(){
		return $this->img;
	}

	public function setImg($img){
		$this->img = $img;
	}

}