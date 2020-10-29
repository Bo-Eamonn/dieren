<?php


namespace models;


class Schaap extends ZichtbaarDier implements Dier
{

    public function maakGeluid(): string
    {
        return "<audio autoplay='true' style='display:none;'>
            <source src='audio/audioSchaap.wav' type='audio/wav'>
          </audio>";
    }
}
?>