$(document).ready(function(){
    $('#paging').data ('position', 0);

    $('#page_left').click (function () {
        if ($('#paging').data ('position') > 0) {
            $('#cat_content').animate ({
                left: '+=642'
            }, 500, function () {
                $('#paging').data ('position', ($('#paging').data ('position') - 1));
            });
        }
    });

    $('#page_right').click (function () {
        if ($('#paging').data ('position') < ($('.post_container').size() - 1)) {
            $('#cat_content').animate ({
                left: '-=642'
            }, 500, function () {
                $('#paging').data ('position', ($('#paging').data ('position') + 1));
            });
        }
    });
});
