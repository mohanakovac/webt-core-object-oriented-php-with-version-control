<?php
require_once 'VideoAbstract.php';

class YouTubeVideo extends VideoAbstract
{
    public function getEmbettet()
    {
        // Spezifisches Einbettungsschema für YouTube
        return '<iframe src="https://www.youtube.com/embed/' . $this->einbetten . '" title="YouTube video player" allowfullscreen></iframe>';
    }
}
