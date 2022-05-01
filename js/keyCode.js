
$(document).ready(function() {
    window.addEventListener('keydown', openS);

    function openS(e) {
        if (e.keyCode == 27) {
            $("#accordionSidebar").fadeToggle(200)
        }
    }
})