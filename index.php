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
        <button class="btn-hero">MORE</button>
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
          <div class="movie-container"><img src="images/placeholder.png" alt="placeholder"></div>
          <div class="movie-container"><img src="images/placeholder.png" alt="placeholder"></div>
          <div class="movie-container desktop"><img src="images/placeholder.png" alt="placeholder"></div>
          <div class="movie-container desktop"><img src="images/placeholder.png" alt="placeholder"></div>
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
          <div class="movie-container"><img src="images/placeholder.png" alt="placeholder"></div>
          <div class="movie-container"><img src="images/placeholder.png" alt="placeholder"></div>
          <div class="movie-container desktop"><img src="images/placeholder.png" alt="placeholder"></div>
          <div class="movie-container desktop"><img src="images/placeholder.png" alt="placeholder"></div>
        </div>
        <img class="slidecircle" src="images/slidecircle.png" alt="slidecircles" />
      </div>
      <div class="arrow"><img src="images/arrow.svg" alt="arrow" /></div>
    </section>
    <div class="ad flex">
      <img src="images/adimg.png" alt="ad popcorn" />
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
          <div class="movie-container"><img src="images/placeholder.png" alt="placeholder"></div>
          <div class="movie-container"><img src="images/placeholder.png" alt="placeholder"></div>
          <div class="movie-container desktop"><img src="images/placeholder.png" alt="placeholder"></div>
          <div class="movie-container desktop"><img src="images/placeholder.png" alt="placeholder"></div>
        </div>
        <img class="slidecircle" src="images/slidecircle.png" alt="slidecircles" />
      </div>
      <div class="arrow"><img src="images/arrow.svg" alt="arrow" /></div>
    </section>
  </div>
  <footer>
    <?php require_once __DIR__ . '/footer/footer.html' ?>
  </footer>
</body>

</html>