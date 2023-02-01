
<?php
    session_start();

    class Movie {
        public $title;
        public $code;
        public $description;
        public $rating;
        public $trailer;
        public $poster;
        public $altPoster;
        public $sessionDaysAndTimes ;

        function __construct($title, $code, $description, $rating, $trailer, $poster, $altPoster, $sessionDaysAndTimes) {
            $this->title = $title;
            $this->code = $code;
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
        "ACT",
        "Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race to protect their home.",
        "M",
        '"https://www.youtube.com/embed/d9MyW72ELq0" title="Avatar: The Way of Water | Official Trailer" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen',
        "https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_.jpg",
        "https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_FMjpg_UY458_.jpg 319w, https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_FMjpg_UY687_.jpg 479w, https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_FMjpg_UY337_.jpg 235w, https://m.media-amazon.com/images/M/MV5BYjhiNjBlODctY2ZiOC00YjVlLWFlNzAtNTVhNzM1YjI1NzMxXkEyXkFqcGdeQXVyMjQxNTE1MDA@._V1_FMjpg_UX900_.jpg 900w",
        [21, 21, 21, 21, 21, 18, 18]
    );

    $movie2 = new Movie(
        "Weird: The Al Yankovic Story",
        "RMC",
        "Explores every facet of Yankovic's life, from his meteoric rise to fame with early hits like 'Eat It' and 'Like a Surgeon' to his torrid celebrity love affairs and famously depraved lifestyle.",
        "M",
        '"https://www.youtube.com/embed/cCNKdJ2CIJk" title="WEIRD: The Al Yankovic Story - official trailer" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen',
        '"https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_.jpg" srcset="https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY438_.jpg 319w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY658_.jpg 479w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY337_.jpg 245w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY576_.jpg 420w, https://m.media-amazon.com/images/M/MV5BODZmNThjMDItODE2Yy00NDNmLThiODEtZGNmZGE3MTdmMjMwXkEyXkFqcGdeQXVyMTM1MTE1NDMx._V1_FMjpg_UY720_.jpg 525w"',
        "Daniel Radcliffe in Weird: The Al Yankovic Story (2022)",
        ["-" , "-", 12, 12, 12, 15, 15]
    );

    $movie3 = new Movie(
        "Puss in Boots: The Last Wish",
        "FAM",
        "Puss in Boots discovers that his passion for adventure has taken its toll: he has burned through eight of his nine lives. Puss sets out on an epic journey to find the mythical Last Wish and restore his nine lives",
        "PG",
        '"https://www.youtube.com/embed/fOngjQYypZU" title="Puss in Boots: The Last Wish | Official Trailer 3 (Universal Pictures) HD" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen',
        '"https://m.media-amazon.com/images/M/MV5BNjMyMDBjMGUtNDUzZi00N2MwLTg1MjItZTk2MDE1OTZmNTYxXkEyXkFqcGdeQXVyMTQ5NjA0NDM0._V1_.jpg" srcset="https://m.media-amazon.com/images/M/MV5BNjMyMDBjMGUtNDUzZi00N2MwLTg1MjItZTk2MDE1OTZmNTYxXkEyXkFqcGdeQXVyMTQ5NjA0NDM0._V1_FMjpg_UY485_.jpg 319w, https://m.media-amazon.com/images/M/MV5BNjMyMDBjMGUtNDUzZi00N2MwLTg1MjItZTk2MDE1OTZmNTYxXkEyXkFqcGdeQXVyMTQ5NjA0NDM0._V1_FMjpg_UY728_.jpg 479w, https://m.media-amazon.com/images/M/MV5BNjMyMDBjMGUtNDUzZi00N2MwLTg1MjItZTk2MDE1OTZmNTYxXkEyXkFqcGdeQXVyMTQ5NjA0NDM0._V1_FMjpg_UY337_.jpg 221w, https://m.media-amazon.com/images/M/MV5BNjMyMDBjMGUtNDUzZi00N2MwLTg1MjItZTk2MDE1OTZmNTYxXkEyXkFqcGdeQXVyMTQ5NjA0NDM0._V1_FMjpg_UX760_.jpg 760w" data-image-id="rm342562561-curr"',
        '"alt="Antonio Banderas, Salma Hayek, Wagner Moura, Ray Winstone, Olivia Colman, Harvey Guillén, Samson Kayo, and Florence Pugh in Puss in Boots: The Last Wish (2022)" class="sc-7c0a9e7c-0 fEIEer"',
        [12 , 12, 18, 18, 18, 12, 12]
    );

    $movie4 = new Movie(
        "Margrete: Queen of the North",
        "AHF",
        "1402. Queen Margrete is ruling Sweden, Norway and Denmark through her adopted son, Erik. But a conspiracy is in the making and Margrete finds herself in an impossible dilemma that could shatter her life's work: the Kalmar Union.",
        "MA 15+",
        '"https://www.youtube.com/embed/3A9u7FoljHM" title="MARGRETE: QUEEN OF THE NORTH - Official HD Trailer - Only in Cinemas" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen',
        '"https://m.media-amazon.com/images/M/MV5BM2EwNzIxODQtZWU0ZS00ZTg3LThlMjEtMDQ4ZjQwMjcyMjdkXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_.jpg" srcset="https://m.media-amazon.com/images/M/MV5BM2EwNzIxODQtZWU0ZS00ZTg3LThlMjEtMDQ4ZjQwMjcyMjdkXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_FMjpg_UY474_.jpg 319w, https://m.media-amazon.com/images/M/MV5BM2EwNzIxODQtZWU0ZS00ZTg3LThlMjEtMDQ4ZjQwMjcyMjdkXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_FMjpg_UY711_.jpg 479w, https://m.media-amazon.com/images/M/MV5BM2EwNzIxODQtZWU0ZS00ZTg3LThlMjEtMDQ4ZjQwMjcyMjdkXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_FMjpg_UY337_.jpg 227w, https://m.media-amazon.com/images/M/MV5BM2EwNzIxODQtZWU0ZS00ZTg3LThlMjEtMDQ4ZjQwMjcyMjdkXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_FMjpg_UY576_.jpg 388w, https://m.media-amazon.com/images/M/MV5BM2EwNzIxODQtZWU0ZS00ZTg3LThlMjEtMDQ4ZjQwMjcyMjdkXkEyXkFqcGdeQXVyMjMyOTAzNjM@._V1_FMjpg_UY720_.jpg 486w" data-image-id="rm2658194945-prev"',
        "Trine Dyrholm in Margrete - Queen of the North (2021)",
        [18 , 18, "-", "-", "-", 22, 22]
    );

    $movies = [$movie1, $movie2, $movie3, $movie4];

    class SeatType {
        public $type;
        public $seatTypeID;
        public $seatCode;
        public $price;


        function __construct($type, $seatTypeID, $seatCode, $price) {
            $this->type = $type;
            $this->seatTypeID = $seatTypeID;
            $this->seatCode = $seatCode;
            $this->price = $price;
        }
    }

    $adultStandardSeat = new SeatType (
        "Standard Adult Seat/s",
        "seatsSTA",
        "STA",
        'data-fullprice="21.5" data-discprice="16"'
    );

    $concessionStandardSeat = new SeatType(
        "Concession",
        "STP",
        19,
        14.50
    );

    $childStandardSeat = new SeatType(
        "Child",
        "STC",
        17.50,
        1
    );


    $adultFirstClassSeat = new SeatType (
        "Adult",
        "FCA",
        31,
        25
    );

    $concessionFirstClassSeat = new SeatType(
        "Concession",
        "FCP",
        28,
        23.50
    );

    $childFirstClassSeat = new SeatType(
        "Child",
        "FCC",
        25,
        22
    );

















//    GET Contains:
//    print_r($_GET)
//    POST Contains:
//    php print_r($_POST)
//    SESSION Contains:
//    print_r($_SESSION)



?>