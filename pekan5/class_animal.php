<?php

class AnimalMamalia 
{
    public $color;
    public $nameAnimal;
    public $habitat;

    function makan() 
    {
        return "Mamalia Makan";
    }

    function minum() 
    {
        return "Mamalia Minum";
    }

    function menyusui() 
    {
        return "Mamalia Menyusui";
    }

    function melahirkan() 
    {
        return "Mamalia Melahirkan";
    }
}

$mamalia = new AnimalMamalia();
$mamalia->nameAnimal = "Paus Orca";
echo $mamalia->nameAnimal;
echo "<br>";
echo $mamalia->color = "Black and White";
echo "<br>";
echo $mamalia->habitat = "Ocean";
echo "<br>";
echo $mamalia->makan();
echo "<br>";
echo $mamalia->minum();
echo "<br>";
echo $mamalia->menyusui();
echo "<br>";
echo $mamalia->melahirkan();
?>