<?php


namespace models;


class Geit extends ZichtbaarDier implements Dier
{

    public function maakGeluid(): string
    {
        return"<audio autoplay='true' style='display:none;'>
            <source src='audio/audioGeit.wav' type='audio/wav'>
          </audio>";
    }
}
?>