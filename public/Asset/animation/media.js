$(document).ready(function () {
    function updateGridLayout() {
        let screenWidth = $(window).width();
        // alert(screenWidth)
        if (screenWidth >= 1920) {
            $('#accountGrid').css('grid-template-columns', 'repeat(4, minmax(0, 1fr))');
        }else if(screenWidth >= 1536) {
            $('#accountGrid').css('grid-template-columns', 'repeat(3, minmax(0, 1fr))');
        }else if(screenWidth >= 1024) {
            $('#accountGrid').css('grid-template-columns', 'repeat(2, minmax(0, 1fr))');
        }else if(screenWidth > 768) {
            $('#accountGrid').css('grid-template-columns', 'repeat(1, minmax(0, 1fr))');
        }
    }

    updateGridLayout();
    $(window).on('resize', function () {
        // window.location.reload();
        updateGridLayout();
    });
});