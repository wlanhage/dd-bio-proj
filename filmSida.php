<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FilmFönstret</title>

    <link rel="stylesheet" href="header/header.css">
    <link rel="stylesheet" href="footer/footer.css">
    <link rel="stylesheet" href="filmSida.css">
</head>
<body>
<?php
    require __DIR__ . '/header/header.html';
?>

<div class="heroContainer">
    <div class="heroOpacity">
        <div class="heroInfo">
            <div class="infoImage">
                <img src="content/bilder/film_standing.png" alt="Movie standing image">
            </div>
            <div class="infoText">
                <h1>FILMTITEL</h1>
                <h3>Genre - 2023 - 16+</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque a sapien scelerisque, mollis elit ac, euismod nulla. Nam ultricies augue eu consequat interdum. Quisque pulvinar interdum nulla, molestie congue enim feugiat at. Etiam at laoreet libero. Sed et nisi quis nisi porta convallis faucibus.</p>
            </div>
            <button id="heroBokaButton">BOKA</button>
        </div>
    </div>
</div>


<div class="movieInfoContainer">
    <div class="upperInfo">
        <div class="movieData">
            <h1>FILMTITEL</h1>

            <div class="duration"><img src="content/clock.png" alt="Clock">LÄNGD - 125 min</div>
            <div class="language"><img src="content/globe.png" alt="Globe img">SPRÅK - Engelska</div>
            <div class="director"><img src="content/director-chair.png" alt="DirectorIcon">REGISSÖR - Hans Andersson</div>
            <div class="premiere"><img src="content/calendar.png" alt="Calendar">PREMIÄR - 24 Dec 2023</div>

        </div>
        <div class="trailerPlayer">
            <img src="content/bilder/film_liggandes.png" alt="movie trailer">
        </div>

    </div>
    <div class="lowerInfo">
        <p>Maecenas sed nisl enim. Mauris porta elit nec ullamcorper dictum. Aenean ut pharetra sapien. Donec sed tortor sit amet dui porttitor suscipit. Sed eu consequat nisi. Ut ac viverra magna, a euismod neque. Etiam a neque nec est viverra facilisis eu sed velit. Fusce et augue facilisis, feugiat nisi ac, rutrum ex. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque vehicula orci vel tellus dignissim semper. Aliquam ligula erat, varius non lacus et, luctus maximus arcu. Donec semper, erat non commodo fermentum, enim sapien convallis massa, a tempor nisi nibh ac ante. Nam efficitur est sed dolor volutpat, non viverra diam euismod. Etiam in nulla placerat nunc maximus dapibus quis ut lacus.</p>
    </div>

</div>

<div class="actorList">
    <h1>ROLLER</h1>
    
    <div id="actorCarousel"  class="actorContainer">
        <div class="actor">
            <img src="content/bilder/actor1.png" alt="actor1">
            <h2>Förnamn Efternamn</h2>
        </div>
        <div class="actor">
            <img src="content/bilder/actor2.png" alt="actor2">
            <h2>Förnamn Efternamn</h2>
        </div>
        <div class="actor">
            <img src="content/bilder/actor3.png" alt="actor3">
            <h2>Förnamn Efternamn</h2>
        </div>
        <div class="actor">
            <img src="content/bilder/actor4.png" alt="actor4">
            <h2>Förnamn Efternamn</h2>
        </div>
        <div class="actor">
            <img src="content/bilder/actor1.png" alt="actor1">
            <h2>Förnamn Efternamn</h2>
        </div>
        <div class="actor">
            <img src="content/bilder/actor2.png" alt="actor2">
            <h2>Förnamn Efternamn</h2>
        </div>
        <div class="actor">
            <img src="content/bilder/actor3.png" alt="actor3">
            <h2>Förnamn Efternamn</h2>
        </div>
        <div class="actor">
            <img src="content/bilder/actor4.png" alt="actor4">
            <h2>Förnamn Efternamn</h2>
        </div>
        <div class="actor">
            <img src="content/bilder/actor1.png" alt="actor1">
            <h2>Förnamn Efternamn</h2>
        </div>
        <div class="actor">
            <img src="content/bilder/actor2.png" alt="actor2">
            <h2>Förnamn Efternamn</h2>
        </div>
        <div class="actor">
            <img src="content/bilder/actor3.png" alt="actor3">
            <h2>Förnamn Efternamn</h2>
        </div>
        <div class="actor">
            <img src="content/bilder/actor4.png" alt="actor4">
            <h2>Förnamn Efternamn</h2>
        </div>
        </div>
</div>


<div class="visningarContainer">
    <div class="visningarContainerTitle">
    <h1>Visningar</h1> <h2>Vecka 50</h2>
    </div>
    <div class="line"></div>
    <div class="infoLine">
    <p>Torsdag 15 Dec</p>  
    <p>18:15 Salong 6</p> 
    <button class="bokaButton">Boka</button>
    </div>

    <div class="line"></div>
    <div class="infoLine">
    <p>Fredag 16 Dec</p>
    <p>12:15 Salong 3</p> 
    <button class="bokaButton">Boka</button>
    </div>

    <div class="line"></div>
    <div class="infoLine">
    <p>Lördag 17 Dec</p>
    <p>20:15 Salong 3</p> 
    <button class="bokaButton">Boka</button>
    </div>

    <div class="line"></div>
    <div class="infoLine">
    <p>Söndag 18 Dec</p>
    <p>18:15 Salong 6</p> 
    <button class="bokaButton">Boka</button>
    </div>
    



</div>



    


<script src="script.js"></script>
<script src="carousel.js"></script>

<?php
    require __DIR__ . '/footer/footer.html';
?>
</body>
</html>