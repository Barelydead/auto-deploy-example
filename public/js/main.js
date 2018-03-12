(function() {
    var thumbnails = document.getElementsByClassName("thumb-holder");


    for (var i = 0; i < thumbnails.length; i++) {
        thumbnails[i].addEventListener("click", function(e) {

            this.classList.toggle('large-thumb');
        })
    }

})();
