<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Film-Fönstret</title>
  </head>
  <body>
    <header class="hero flex column">
      <nav>
        <!--NAV-->NAV
      </nav>
      <!--HERO-->
      <div class="card-button-container">
          <div class="card">
            <h3>Info about movie</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis fuga
              nulla iusto cumque deleniti vitae dolores qui, laboriosam modi,
              voluptas maxime velit nesciunt reiciendis amet libero. Vitae soluta
              aperiam maiores.
            </p>
          </div>
          <button class="btn-hero">MORE</button>
        </div>
    </header>
    <!-- <div class="wrapper flex column"> -->
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
          <img
            class="slidecircle"
            src="images/slidecircle.png"
            alt="slidecircles"
          />
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
          <img
            class="slidecircle"
            src="images/slidecircle.png"
            alt="slidecircles"
          />
        </div>
        <div class="arrow"><img src="images/arrow.svg" alt="arrow" /></div>
      </section>
      <section class="ad flex">
        <img src="images/adimg.png" alt="ad popcorn" />
        <div class="ad-offer">
          <p>50% OFF</p>
        </div>
      </section>
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
          <img
            class="slidecircle"
            src="images/slidecircle.png"
            alt="slidecircles"
          />
        </div>
        <div class="arrow"><img src="images/arrow.svg" alt="arrow" /></div>
      </section>
      <section class="mobile-line"></section>
      <section class="contact">
        <div class="col-1 column">
          <h3>BESÖKSADRESS</h3>
          <p>Hisingsvägen 3</p>
          <p>444 50 Göteborg</p>
          <p>Tel: 070 8273655</p>
        </div>
        <div class="col-2 column">
          <h3>KONTAKTA OSS</h3>
          <p>Kundservice</p>
          <p>Personuppgifter</p>
          <p>Policy</p>
        </div>
        <div class="col-3 column">
          <h3>NYHETSBREV</h3>
          <div class="email-submit flex">
            <input type="email" name="email" placeholder="Epostadress" />
            <button type="submit">
              <img src="images/arrow.svg" alt="arrow" />
            </button>
          </div>
        </div>
      </section>
    <!-- </div> -->
    <footer></footer>
  </body>
</html>