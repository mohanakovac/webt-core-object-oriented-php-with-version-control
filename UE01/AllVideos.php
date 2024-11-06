<?php
/*
require_once 'InterfaceVideo.php';

class AllVideos implements InterfaceVideo
{
    private $titel;
    private $einbetten;
    private $quelle;

    public function __construct($titel, $einbetten, $quelle)
    {
        $this->titel = $titel;
        $this->einbetten = $einbetten;
        $this->quelle = $quelle;
    }

    public function getTitel()
    {
        return $this->titel;
    }
    
    public function getQuelle()
    {
        return $this->quelle;
    }

    public function getEmbettet()
    {
        return $this->einbetten;
    }
}

*/

require_once 'VideoAbstract.php';

class AllVideos extends VideoAbstract
{
    public function getEmbettet()
    {
        return $this->einbetten;
    }
}
