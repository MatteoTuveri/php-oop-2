<?php
$filemovie = file_get_contents(__DIR__.'/DB/movie_db.json');
$list = json_decode($filemovie, true);
$filegenre = file_get_contents(__DIR__.'/DB/genre_db.json');
$genres = json_decode($filegenre, true);
$filebooks = file_get_contents(__DIR__.'/DB/books_db.json');
$booksList = json_decode($filebooks, true);
$filegames = file_get_contents(__DIR__.'/DB/steam_db.json');
$gamesList = json_decode($filegames, true);
?>