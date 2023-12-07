document.addEventListener('DOMContentLoaded', function(){
    document.getElementById('heroBokaButton').addEventListener('click', function(){
        document.getElementById('visningarContainer').scrollIntoView({
            behavior: "smooth"
        });
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
