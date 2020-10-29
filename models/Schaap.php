<?php


namespace models;


class Schaap extends ZichtbaarDier implements Dier
{

    public function maakGeluid(): string
    {
        return "Schaap geluiden" ."<audio autoplay='true' loop style='display:none;'>
            <source src='audio/audioSchaap.wav' type='audio/wav'>
          </audio>";
    }
}
?>