<?php

class TextInput
{
    public $value;
    Public function add($text)
    {
        $this->value.=$text;
    }

    Public function getValue()
    {
        return $this->value;
    }
}

class NumericInput extends TextInput
{
    Public function add($text)
    {
        if(is_numeric($text))
        {
            $this->value .=$text; 
        }
    }
}

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();
