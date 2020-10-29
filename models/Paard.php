<?php


namespace models;


class Paard extends ZichtbaarDier implements Dier
{

    public function maakGeluid(): string
    {
        return "<audio autoplay='true' style='display:none;'>
            <source src='audio/audioPaard.wav' type='audio/wav'>
          </audio>";
    }
}
?>