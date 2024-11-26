
<?php

class OST {
    private $id;
    private $name;
    private $videoGameName;
    private $releaseYear;
    private $trackList;

    public function __construct($id, $name, $videoGameName, $releaseYear, $trackList = []) {
        $this->id = $id;
        $this->name = $name;
        $this->videoGameName = $videoGameName;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }

    public function addTrack(Song $song) {
        $this->trackList[] = $song;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'videoGameName' => $this->videoGameName,
            'releaseYear' => $this->releaseYear,
            'trackList' => array_map(fn($song) => $song->toArray(), $this->trackList)
        ];
    }
}
