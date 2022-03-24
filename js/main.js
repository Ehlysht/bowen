$(document).ready(function(){
    $('.video-play').click(function() {
        var linkFrom = $(this).attr('link-to')
        var link = "http://www.youtube.com/embed/" + linkFrom.replace("https://youtu.be/", "");
        $('.video-frame').attr('src', link);
        $('.big-video').css('display', 'flex');
        $('html, body').css('overflow', 'hidden');
    });
    $('.video-close').click(function(){
        $('.big-video').css('display', 'none');
        $('html, body').css('overflow', 'auto');
    });
    $('.video-item').each(function() {
        if ($(this).text().replace(/\s/g, '') == 'ReadMore'){
            $(this).remove();
        }
    });
    $('.burger').click(function(){
        if($('.nav').attr('id') == 'nav'){
            $('.nav').css('display', 'block');
            $('.nav').attr('id', 'active');
        }else{
            $('.nav').css('display', 'none');
            $('.nav').attr('id', 'nav');
        }
    })
    $('.menu-item').each(function() {
        var linkMenu = $('a', this).attr('href');
        var textMenu = $('a', this).text();
        $('#mob-page').append($('<option>', { 
            value: linkMenu,
            text : textMenu 
        }));
        var textMenu = $('.current-menu-item').text();
        $("#mob-page").val(window.location.href);
        
    });
    $('#mob-page').change(function(){
        window.location.href = $( "#mob-page option:selected" ).val();
    })
});