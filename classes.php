<?php

class animais
{

    public $gato= "gato";
    public $corBranco= "corBranco";
    public $olhosVerde= "olhosVerde";
    public $porteGrande= "porteGrande";
    public $fofo = "fofo";

    public function lindo ()
    {
        echo "gato :{$this-> gato} <br>";
        echo "corbranco :{$this -> corBranco} <br>";
        echo "olhosVerde :{$this-> olhosVerde} <br>";
        echo "porteGrande:{$this-> porteGrande} <br>";
        echo "fofo :{$this-> fofo} <br>";

    }
}

$mamifero = new animais();
$mamifero -> lindo();


class Pessoas
{

    public $nome= "Ednéa";
    public $suaIdade= "suaIdade";
    public $estadoCivil= "EstadoCivil";
    public $trabalhador= "trabalhador";
    public $honesto = "honesto";

    public function Criativo ()
    {
        echo "nome :{$this-> nome} <br>";
        echo "Suaidade :{$this -> suaIdade} <br>";
        echo "estadoCivil :{$this-> estadoCivil} <br>";
        echo "trabalhador:{$this-> trabalhador} <br>";
        echo "honesto :{$this-> honesto} <br>";

    }
}

$humano = new Pessoas();
$humano -> criativo();

