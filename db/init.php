<?php

    require_once __DIR__ . '/../models/Movie.php';
    require_once __DIR__ . '/../models/Category.php';

    $categories = [
        new Category('action'),
        new Category('adventure'),
        new Category('comedy'),
        new Category('fantasy'),
        new Category('crime')
    ];

    $movies = [
        new Movie('Aquaman e il regno perduto', 'Aquaman and the Lost Kingdom', 'en', 'https://image.tmdb.org/t/p/w500/oPH2SpuemYM8225xya9oScUzUqZ.jpg', 6.7, '2023-12-20', $categories[rand(0,count($categories) - 1)], $categories[rand(0,count($categories) - 1)]),
        new Movie('La società della neve', 'La sociedad de la nieve', 'es', 'https://image.tmdb.org/t/p/w500/eOu5TmFYmLJ1bzRMWNmxWAtU7cQ.jpg', 8.1, '2023-12-13', $categories[rand(0,count($categories) - 1)]),
        new Movie('Prendi il volo', 'Migration', 'en', 'https://image.tmdb.org/t/p/w500/6okaZf03sPiVWssrAzAW1fHo8Wq.jpg', 7.6, '2023-12-06', $categories[rand(0,count($categories) - 1)])
    ];