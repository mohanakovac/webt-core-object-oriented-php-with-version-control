<?php
class OST {
    private $id;
    private $name;
    private $videoGameName;
    private $releaseYear;
    private $tracklist;

    public function __construct($id, $name, $videoGameName, $releaseYear, $tracklist = []) {
        $this->id = $id;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->tracklist = $tracklist;
    }

}

class Song {
    private $id;
    private $name;
    private $artist;
    private $trackNumber;
    private $duration;

    public function __construct($id, $name, $artist, $trackNumber, $duration) {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->trackNumber = $trackNumber;
        $this->duration = $duration;
    }

}

