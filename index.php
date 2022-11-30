<?php
require './includes/common.php';
if (!isset($_SESSION['email'])) {
    header("Location: ./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Lovers</title>
    <!-- font awesome icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css -->
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div class="rightbox">

        <a style="color: white;" href="./watchlist.php">My Watchlist <i style="color:#f15858;" class="fa fa-heart" aria-hidden="true"></i>
        </a>
        <a style="color: white;" href="./logout.php">Logout <i style="color:blue ;" class="fa fa-sign-out" aria-hidden="true"></i>
        </a>
    </div>

    <div class="wrapper">
        <!-- logo -->
        <div class="logo">
            <div class="container">
                <a style="color: white;" href="./">Movies <span>Lovers™</span></a>
            </div>

        </div>
        <!-- end of logo -->
        <!-- search container -->
        <div class="search-container">
            <div class="search-element">
                <h3><i class="bi bi-search"></i>
                    Search Movie:</h3>
                <input type="text" class="form-control" placeholder="Search Movie Title ..." id="movie-search-box" onkeyup="findMovies()" onclick="findMovies()">

                <div class="search-list" id="search-list">
                    <!-- list here -->
                    <!-- <div class = "search-list-item">
                        <div class = "search-item-thumbnail">
                            <img src = "medium-cover.jpg">
                        </div>
                        <div class = "search-item-info">
                            <h3>Guardians of the Galaxy Vol. 2</h3>
                            <p>2017</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- end of search container -->

        <!-- result container -->
        <div class="container">
            <div class="result-container">
                <div class="result-grid" id="result-grid">
                    <!-- movie information here -->
                    <!-- <div class = "movie-poster">
                        <img src = "medium-cover.jpg" alt = "movie poster">
                    </div>
                    <div class = "movie-info">
                        <h3 class = "movie-title">Guardians of the Galaxy Vol. 2</h3>
                        <ul class = "movie-misc-info">
                            <li class = "year">Year: 2017</li>
                            <li class = "rated">Ratings: PG-13</li>
                            <li class = "released">Released: 05 May 2017</li>
                        </ul>
                        <p class = "genre"><b>Genre:</b> Action, Adventure, Comedy</p>
                        <p class = "writer"><b>Writer:</b> James Gunn, Don Abnett, Andy Lanning</p>
                        <p class = "actors"><b>Actors: </b>Chris Pratt, Zoe Saldana, Dave Bautista</p>
                        <p class = "plot"><b>Plot:</b> The Guardians struggle to keep together as a team while dealing with their personal family issues, notably Star-Lord's ecounter with his father the ambitious celestial being Ego.</p>
                        <p class = "language"><b>Language:</b> English</p>
                        <p class = "awards"><b><i class = "fas fa-award"></i></b> Nominated for 1 Oscar</p>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- end of result container -->
    </div>
    <div class="footer">Developed by Dibyanshu</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- movie app js -->
    <script src="script.js"></script>
</body>

</html>