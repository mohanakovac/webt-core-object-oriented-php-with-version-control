<?php

require_once 'InterfaceVideo.php';

abstract class VideoAbstract implements InterfaceVideo
{
    protected $titel;
    protected $einbetten;
    protected $quelle;

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

    abstract public function getEmbettet();
}
