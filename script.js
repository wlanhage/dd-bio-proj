document.addEventListener('DOMContentLoaded', function() {
    // Get the button and the target div
    var scrollButton = document.getElementById('heroBokaButton');
    var targetDiv = document.querySelector('.visningarContainer'); // Use querySelector for class
  
    // Add click event listener to the button
    scrollButton.addEventListener('click', function() {
      // Use smooth scroll behavior
      targetDiv.scrollIntoView({ behavior: 'smooth' });
    });
});

  



document.addEventListener('DOMContentLoaded', function() {
    var leftCurtain = document.querySelector('.left-curtain');
    var rightCurtain = document.querySelector('.right-curtain');
    var curtainContainer = document.querySelector('.curtain-container');

    leftCurtain.addEventListener('animationend', function() {
        curtainContainer.style.display = 'none'; // or adjust the z-index
    });

    rightCurtain.addEventListener('animationend', function() {
        curtainContainer.style.display = 'none'; // or adjust the z-index
    });
});
