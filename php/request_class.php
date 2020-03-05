<?php

class Request
{
    private $errors = [];

    
    public function isPost()
    {
       return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    public function clear($str)
    {
        return strip_tags( trim($str) );
    }

    public function getField($inputName)
    {
        $value = $_POST[$inputName] ?? '';

        return $this->clear($value);
    }

    public function required($inputName)
    {
        $value = $this->getField($inputName);
        if(empty($value))
        {
            $this->errors[$inputName][] = 'поле обязательно к заполнению';
        }
    }

    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * проверяет длину строки из поля на минимальное значения
     * @param $inputName
     * @param $min
     */
    public function min($inputName, $min)
    {
        if(mb_strlen($this->getField($inputName)) <= $max)
        {
            $this->errors[$inputName][] = "максимальная длина поля ".$min." символов";
        }
    }


    /**
     * проверяет длину строки из поля на максимальное значения
     * @param $inputName
     * @param $max
     */
    public function max($inputName, $max)
    {
        if(mb_strlen($this->getField($inputName)) >= $max)
        {
            $this->errors[$inputName][] = "максимальная длина поля ".$max." символов";
        }
    }

    /**
     * проверка значения на максимальность
     * метод проверяет является ли введенное значение email
     * @param $inputName - имя поля
     */
    public function isEmail($inputName)
    {
        //todo
    }

    /**
     * проверка значения на максимальность
     * @param $inputName
     * @param $minValue
     */
    public function maxValue($inputName, $maxValue)
    {
        if($this->getField($inputName) >= $maxValue) {
            $this->errors[$inputName][] = "максимальное значение поля ".$maxValue." символов";
        }
    }

    /**
     * проверка значения на минимальность
     * @param $inputName
     * @param $minValue
     */
    public function minValue($inputName, $minValue)
    {
        if($this->getField($inputName) <= $minValue) {
            $this->errors[$inputName][] = "Миниинимально значение поля ".$minValue." символов";
        }
    }


    
}
?>