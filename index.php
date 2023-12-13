<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="/header/header.css" />
  <link rel="stylesheet" href="/footer/footer.css" />
  <title>Film-Fönstret</title>
</head>
<?php require __DIR__ . '/header/header.html' ?>

<body>
  <div class="wrapper">
    
    <section class="hero flex column">
      <div class="video-container">
        <video autoplay muted loop>
          <source src="/mp4/pexels-cottonbro.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
        <div class="card-button-container">
          <div class="card">
            <h3>Info about movie</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis
              fuga nulla iusto cumque deleniti vitae dolores qui, laboriosam
              modi, voluptas maxime velit nesciunt reiciendis amet libero. Vitae
              soluta aperiam maiores.
            </p>
          </div>
        </div>
        <button onclick="hideHero()" class="btn-hero">MORE</button>
      </div>
    </section>
    <section class="in-cinema flex">
      <div class="flex column">
        <div class="title flex row">
          <h2 class="title-sections">HOS OSS</h2>
          <div class="show-more-btn flex">
            <p>Visa alla</p>
            <img class="arrow-more" src="images/arrow-more.svg" alt="arrow" />
          </div>
        </div>
        <div class="slide-show flex row">
          <div class="movie-container"><a href="/filmSida.php"><img src="/content/bilder/film_standing.png" alt="placeholder"></a></div>
          <div class="movie-container"><img src="/ai_movie_posters/DALL·E 2023-12-07 11.28.20 - A dramatic action movie poster, featuring a full-body portrait of a hero in a dynamic pose, holding a blazing gun in one hand and a shield in the othe.png" alt="placeholder"></div>
          <div class="movie-container desktop"><img src="/ai_movie_posters/DALL·E 2023-12-07 11.28.53 - A spine-chilling horror movie poster, featuring a full-body portrait of a menacing figure shrouded in shadows, standing in a haunting, fog-filled grav.png" alt="placeholder"></div>
          <div class="movie-container desktop"><img src="/ai_movie_posters/DALL·E 2023-12-07 11.29.39 - A heartfelt humanistic movie poster, featuring a full-body portrait of a diverse group of people standing together in unity, against a backdrop of a v.png" alt="placeholder"></div>
        </div>
        <img class="slidecircle" src="images/slidecircle.png" alt="slidecircles" />
      </div>
      <div class="arrow"><img src="images/arrow.svg" alt="arrow" /></div>
    </section>
    <section class="upcoming flex">
      <div class="flex column">
        <div class="title flex row">
          <h2 class="title-sections">KOMMANDE</h2>
          <div class="show-more-btn flex">
            <p>Visa alla</p>
            <img class="arrow-more" src="images/arrow-more.svg" alt="arrow" />
          </div>
        </div>
        <div class="slide-show flex row">
          <div class="movie-container"><img src="/ai_movie_posters/DALL·E 2023-12-07 11.36.51 - A comical movie poster featuring policemen in action poses, each holding a banana in their hand as if it were a gun, in a vertical standing format. Th.png" alt="placeholder"></div>
          <div class="movie-container"><img src="/ai_movie_posters/DALL·E 2023-12-07 11.39.29 - A dynamic action movie poster in a vertical format, featuring a daring hero in mid-leap, with a city skyline in the background. The hero should be por.png" alt="placeholder"></div>
          <div class="movie-container desktop"><img src="/ai_movie_posters/DALL·E 2023-12-07 11.40.30 - A comedic movie poster set in an office environment, featuring a group of diverse office workers in humorous poses. The setting should be a typical of.png" alt="placeholder"></div>
          <div class="movie-container desktop"><img src="/ai_movie_posters/DALL·E 2023-12-07 11.41.06 - A whimsical movie poster set in an office environment, displaying a full-frame, vertical format. The poster should feature a group of diverse office w.png" alt="placeholder"></div>
        </div>
        <img class="slidecircle" src="images/slidecircle.png" alt="slidecircles" />
      </div>
      <div class="arrow"><img src="images/arrow.svg" alt="arrow" /></div>
    </section>
    <div class="ad flex">
      <img class="desktop" src="images/adimg.png" alt="ad popcorn" />
      <img class="mobile" src="images/adimg-mobile1.png" alt="ad popcorn" />
      <div class="ad-offer">
        <p>50% OFF</p>
      </div>
    </div>
    <section class="toplist flex">
      <div class="flex column">
        <div class="title flex row">
          <h2 class="title-sections">TOPPLISTAN</h2>
          <div class="show-more-btn flex">
            <p>Visa alla</p>
            <img class="arrow-more" src="images/arrow-more.svg" alt="arrow" />
          </div>
        </div>
        <div class="slide-show flex row">
          <div class="movie-container"><img src="/ai_movie_posters/DALL·E 2023-12-07 11.42.05 - A clever and satirical movie poster about a finance guy scamming rich people. The poster should feature a charismatic and slick-looking finance profes.png" alt="placeholder"></div>
          <div class="movie-container"><img src="/ai_movie_posters/DALL·E 2023-12-07 11.43.19 - A high-energy action movie poster in a vertical format, showcasing a daring heroine in the midst of an explosive action scene. The heroine should be d.png" alt="placeholder"></div>
          <div class="movie-container desktop"><img src="/ai_movie_posters/DALL·E 2023-12-07 11.43.23 - A dynamic action movie poster, designed to fill the entire vertical frame without any black bars. The poster should feature a powerful hero in an acti.png" alt="placeholder"></div>
          <div class="movie-container desktop"><img src="/ai_movie_posters/DALL·E 2023-12-07 11.37.50 - A creative movie poster featuring a split design, with one half depicting one man and the other half depicting another person. Each half should reflec.png" alt="placeholder"></div>
        </div>
        <img class="slidecircle" src="images/slidecircle.png" alt="slidecircles" />
      </div>
      <div class="arrow"><img src="images/arrow.svg" alt="arrow" /></div>
    </section>
  </div>
  <footer>
    <?php require_once __DIR__ . '/footer/footer.html' ?>
  </footer>
  <script src="/script.js"></script>
</body>

</html>