(function() {
    var flash = document.getElementById('flash');
    var flashHeight = flash.clientHeight;

    window.addEventListener('scroll', function(e) {
        flash.style.overflow = "hidden";

        if (flashHeight > 0) {
            flash.style.height = flashHeight - (e.pageY * 1.5) + "px";
        }
    });
})();
