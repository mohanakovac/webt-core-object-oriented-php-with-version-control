
<?php

require_once "src/song.php";
require_once "src/OST.php";

class Seeder {
    public static function generateData(): array {
        $osts = [];

        $song1 = new Song(1, 'Dragonborn', 'Jeremy Soule', 1, '4:30');
        $song2 = new Song(2, 'The Bannered Mare', 'Jeremy Soule', 2, '2:55');
        $song3 = new Song(3, 'Far Horizons', 'Jeremy Soule', 3, '3:20');
        $song4 = new Song(4, 'Civil War', 'Jeremy Soule', 4, '4:10');
        $song5 = new Song(5, 'Unbound', 'Jeremy Soule', 5, '3:50');

        $ost1 = new OST(1, 'Skyrim Soundtrack', 'The Elder Scrolls V: Skyrim', 2011, [$song1, $song2, $song3, $song4, $song5]);
        $osts[] = $ost1;

        $song6 = new Song(6, 'Reign of the Septims', 'Jeremy Soule', 1, '4:15');
        $song7 = new Song(7, 'Under the Stars', 'Jeremy Soule', 2, '3:10');
        $song8 = new Song(8, 'The Age of Oppression', 'Jeremy Soule', 3, '5:05');
        $song9 = new Song(9, 'Battle for Whiterun', 'Jeremy Soule', 4, '4:20');

        $ost2 = new OST(2, 'Skyrim Special Edition Soundtrack', 'The Elder Scrolls V: Skyrim Special Edition', 2016, [$song6, $song7, $song8, $song9]);
        $osts[] = $ost2;

        return $osts;
    }
}
