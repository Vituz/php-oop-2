<?php

/**
 * Rating Game
 * @author Vituz
 * @copyright Vituz 2021
 */
trait Rate
{
    protected $rating;

    public function ratingGame($num)
    {
        if (!is_int($num)) {

            throw new Exception('Inserisci un numero da 1 a 5');
        } else {

            return $this->rating = $num;
        }
    }
}

trait Downloaded
{
    protected $downloaded;

    public function downloaded($num)
    {
        return $this->downloaded = $num;
    }
}
