<?php
require_once 'VideoAbstract.php';

class VimeoVideo extends VideoAbstract
{
    public function getEmbettet()
    {
        // Spezifisches Einbettungsschema für Vimeo
        return '<iframe src="https://player.vimeo.com/video/' . $this->einbetten . '" title="Vimeo video player" allowfullscreen></iframe>';
    }
}
