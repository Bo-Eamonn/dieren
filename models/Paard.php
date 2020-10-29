<?php


namespace models;


class Paard extends ZichtbaarDier implements Dier
{

    public function maakGeluid(): string
    {
        return "Paard geluiden"."<audio autoplay='true' loop style='display:none;'>
            <source src='audio/audioPaard.wav' type='audio/wav'>
          </audio>";
    }
}
?>