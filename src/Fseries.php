<?php

class FSeries{

    private $capa;
    private $titulo;
    private $anoLancamento;
    private $genero;
    
    public function __construct(

        $capa = "imagem",
        $titulo = "FSeries",
        $anoLancamento = 1,
        $genero = "Genérica"

    ){
        $this->capa = $capa;
        $this->titulo = $titulo;
        $this->anoLancamento = $anoLancamento;
        $this->genero = $genero;
    }

    
    public function getCapa()
    {
        return $this->capa;
    }

    public function setCapa($capa)
    {
        $this->capa = $capa;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of anoLancamento
     */ 
    public function getAnoLancamento()
    {
        return $this->anoLancamento;
    }

    /**
     * Set the value of anoLancamento
     *
     * @return  self
     */ 
    public function setAnoLancamento($anoLancamento)
    {
        $this->anoLancamento = $anoLancamento;

        return $this;
    }

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    public function __tostring()
    {
        return "<hr> 
                <ul>
                    <li>CAPA:{$this->capa}</li>
                    <li>TÍTULO:{$this->titulo}</li>
                    <li>ANO DE LANÇAMENTO:{$this->anoLancamento}</li>
                    <li>GÊNERO:{$this->genero}</li>
                    </ul>";
    }
}
