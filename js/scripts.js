function toggle_list_display() {
    $('#drop_down_list').toggle();
}

$(document).ready(function(){
    var offset;
    var verArray = ($.browser.version).split('.');
    if (($.browser.msie) && ((verArray[0]) == 6)){
        offset = 640;
    } else {
        offset = 644;
    }
    $('#paging').data ('position', 0);
    $('#page_left a img').css({top: '0px', cursor: 'default'});
    if (($.browser.msie) && ((verArray[0]) <= 7)){
        $('#page_right a img').css({top: '-334px', cursor: 'pointer'});
        $('#page_right a img').hover (function() {
            $(this).css('top', '-167px');
        }, function() {
            $(this).css('top', '-334px');
        });
    }
    if ($('.post_container').size() == 1) {
        $('#page_right a img').css({top: '0px', cursor: 'default'});
    }

    $('#page_left').click (function () {
    if ($('.post_container').size() == 1) {
        $('#page_right a img').css({top: '0px', cursor: 'default'});
        $('#page_right a img').css({top: '0px', cursor: 'default'});
    } else {
            $('#page_right a img').css({top: '-334px', cursor: 'pointer'});
            $('#page_right a img').hover (function() {
                $(this).css('top', '-167px');
            }, function() {
                $(this).css('top', '-334px');
            });
            if ($('#paging').data ('position') <= 1) {
                $('#page_left a img').css({top: '0px', cursor: 'default'});
                $('#page_left a img').hover (function() {
                    $(this).css('top', '0px');
                }, function() {
                    $(this).css('top', '0px');
                });
            }
            if ($('#paging').data ('position') > 0) {
                $('#cat_content').animate ({
                    left: '+=' + offset
                }, 500, function () {
                    $('#paging').data ('position', ($('#paging').data ('position') - 1));
                });
            }
        }
    });

    $('#page_right').click (function () {
    if ($('.post_container').size() == 1) {
        $('#page_right a img').css({top: '0px', cursor: 'default'});
        $('#page_right a img').css({top: '0px', cursor: 'default'});
    } else {
            $('#page_left a img').css({top: '-334px', cursor: 'pointer'});
            $('#page_left a img').hover (function() {
                $(this).css('top', '-167px');
            }, function() {
                $(this).css('top', '-334px');
            });
            if ($('#paging').data ('position') >= ($('.post_container').size() - 2)) {
                $('#page_right a img').css({top: '0px', cursor: 'default'});
                $('#page_right a img').hover (function() {
                    $(this).css('top', '0px');
                }, function() {
                    $(this).css('top', '0px');
                });
            }
            if ($('#paging').data ('position') < ($('.post_container').size() - 1)) {
                $('#cat_content').animate ({
                    left: '-=' + offset
                }, 500, function () {
                    $('#paging').data ('position', ($('#paging').data ('position') + 1));
                });
            }
        }
    });

    $(".post_container").each (function () {
        $(this).find ('.inner_container').html ($(this).data ('content'));
    });
});
