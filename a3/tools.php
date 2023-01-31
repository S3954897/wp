
<?php
    session_start();


    class Movie {
        public $title;
        public $description;
        public $rating;
        public $trailer;
        public $poster;
        public $altPoster;
        public $sessionDaysAndTimes ;


        function __construct($title, $description, $rating, $trailer, $poster, $altPoster, $sessionDaysAndTimes) {
            $this->title = $title;
            $this->description = $description;
            $this->rating = $rating;
            $this->trailer = $trailer;
            $this->poster = $poster;
            $this->altPoster = $altPoster;
            $this->sessionDaysAndTimes = $sessionDaysAndTimes;
        }
    }

    $movie1 = new Movie(
        "Avatar: The Way of Water",
        "Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race to protect their home.",
        "M",
        '"https://www.youtube.com/embed/d9MyW72ELq0" title="Avatar: The Way of Water | Official Trailer" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen',
        "https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_.jpg",
        "https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_FMjpg_UY458_.jpg 319w, https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_FMjpg_UY687_.jpg 479w, https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_FMjpg_UY337_.jpg 235w, https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_FMjpg_UX900_.jpg 900w",
        [21, 21, 21, 21, 21, 18, 18]
    );

    $movie2 = new Movie(
        "Weird: The Al Yankovic Story",
        "Explores every facet of Yankovic's life, from his meteoric rise to fame with early hits like 'Eat It' and 'Like a Surgeon' to his torrid celebrity love affairs and famously depraved lifestyle.",
        "M",
        '"https://www.youtube.com/embed/cCNKdJ2CIJk" title="WEIRD: The Al Yankovic Story - official trailer" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen',
        '"https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_.jpg" srcset="https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY438_.jpg 319w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY658_.jpg 479w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY337_.jpg 245w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY576_.jpg 420w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY720_.jpg 525w"',
        "Daniel Radcliffe in Weird: The Al Yankovic Story (2022)",
        ["-" , "-", 12, 12, 12, 15, 15]
    );

    $movie3 = new Movie(
        "Weird: The Al Yankovic Story",
        "Explores every facet of Yankovic's life, from his meteoric rise to fame with early hits like 'Eat It' and 'Like a Surgeon' to his torrid celebrity love affairs and famously depraved lifestyle.",
        "M",
        '"https://www.youtube.com/embed/cCNKdJ2CIJk" title="WEIRD: The Al Yankovic Story - official trailer" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen',
        '"https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_.jpg" srcset="https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY438_.jpg 319w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY658_.jpg 479w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY337_.jpg 245w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY576_.jpg 420w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY720_.jpg 525w"',
        "Daniel Radcliffe in Weird: The Al Yankovic Story (2022)",
        ["-" , "-", 12, 12, 12, 15, 15]
    );

    $movie4 = new Movie(
        "Weird: The Al Yankovic Story",
        "Explores every facet of Yankovic's life, from his meteoric rise to fame with early hits like 'Eat It' and 'Like a Surgeon' to his torrid celebrity love affairs and famously depraved lifestyle.",
        "M",
        '"https://www.youtube.com/embed/cCNKdJ2CIJk" title="WEIRD: The Al Yankovic Story - official trailer" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen',
        '"https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_.jpg" srcset="https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY438_.jpg 319w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY658_.jpg 479w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY337_.jpg 245w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY576_.jpg 420w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY720_.jpg 525w"',
        "Daniel Radcliffe in Weird: The Al Yankovic Story (2022)",
        ["-" , "-", 12, 12, 12, 15, 15]
    );

    $movies = [$movie1, $movie2, $movie3, $movie4];




















//    GET Contains:
//    print_r($_GET)
//    POST Contains:
//    php print_r($_POST)
//    SESSION Contains:
//    print_r($_SESSION)



?>