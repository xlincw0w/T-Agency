window.onload = function () {

    function changeImage() {   
        var BackgroundImg = [
            "./images/backgroundimage1.jpg",
            "./images/backgroundimage2.jpg",
            "./images/backgroundimage3.jpg",
            "./images/backgroundimage4.jpg",
            "./images/backgroundimage5.jpg",
            "./images/backgroundimage6.jpg",
        ];

        var i = Math.floor((Math.random() * 6));
        document.body.style.backgroundImage = 'url("' + BackgroundImg[i] + '")';
    }
    window.setInterval(changeImage, 5000);
}