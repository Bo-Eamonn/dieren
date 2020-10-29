<?php


namespace models;


class Koe extends ZichtbaarDier implements Dier
{




    public function __construct(){

    }


    public function maakGeluid(): string
    {
        return "<audio autoplay='true' style='display:none;'>
            <source src='audio/audioKoe.wav' type='audio/wav'>
          </audio>";
    }


    public function getNaam()
    {
        return $this->naam;
    }
}