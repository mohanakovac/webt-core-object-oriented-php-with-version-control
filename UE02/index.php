<?php
header('Content-Type: application/json');

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

    public function addTrack(Song $song) {
        $this->tracklist[] = $song;
    }

    public function toArray() {
        $tracklistArray = [];
        foreach ($this->tracklist as $track) {
            $tracklistArray[] = $track->toArray();
        }
    
        return [
            'id' => $this->id,
            'name' => $this->name,
            'videoGameName' => $this->videoGameName,
            'releaseYear' => $this->releaseYear,
            'tracklist' => $tracklistArray
        ];
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

    public function toArray() {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'artist' => $this->artist,
            'trackNumber' => $this->trackNumber,
            'duration' => $this->duration
        ];
    }
}

$song1 = new Song(1, 'Dragonborn', 'Jeremy Soule', 1, '4:30');
$song2 = new Song(2, 'The Bannered Mare', 'Jeremy Soule', 2, '2:55');
$song3 = new Song(3, 'Far Horizons', 'Jeremy Soule', 3, '3:20');
$song4 = new Song(4, 'Civil War', 'Jeremy Soule', 4, '4:10');
$song5 = new Song(5, 'Unbound', 'Jeremy Soule', 5, '3:50');

$ost = new OST(1, 'Skyrim Soundtrack', 'The Elder Scrolls V: Skyrim', 2011, [$song1, $song2, $song3, $song4, $song5]);

echo json_encode($ost->toArray(), JSON_PRETTY_PRINT);
