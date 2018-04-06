(function() {
    var thumbnails = document.getElementsByClassName("thumb-holder");
    var viewer = document.getElementById("image-viewer");
    var thumbs = document.getElementsByClassName("gallery-thumb");
    var mason = document.getElementsByClassName("masonry")[0];
    var imgUrl = "";

    viewer.addEventListener('click', function() {
        this.classList.remove('zIndex');
        while (this.firstChild) {
            this.removeChild(this.firstChild);
        }
    })


    // Displaing overlay with clicked image
    for (var i = 0; i < thumbs.length; i++) {
        thumbs[i].addEventListener("click", function(e) {
            imgUrl = this.getAttribute('src');

            var overlayImage = document.createElement('img');
            overlayImage.setAttribute('src', imgUrl);

            viewer.style.height = mason.clientHeight + "px";
            viewer.appendChild(overlayImage);
            viewer.classList.add("zIndex");
        })
    }


    for (var i = 0; i < thumbnails.length; i++) {
        thumbnails[i].addEventListener("click", function(e) {

            this.classList.toggle('large-thumb');
        })
    }

})();
