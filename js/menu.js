function changeImage()  {
    var image = document.getElementById('homeIcon');
    if(image.src.match("")) {
        image.src = "images/homeIcon.png";
    }
    else {
        image.src = "images/homeIconHover.png";
    }
}

hallo hallo