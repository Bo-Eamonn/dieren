<?php


namespace models;


class Geit extends ZichtbaarDier implements Dier
{

    public function maakGeluid(): string
    {
        return "Geit geluiden"."<audio autoplay='true' loop style='display:none;'>
            <source src='audio/audioGeit.wav' type='audio/wav'>
          </audio>";
    }
}
?>