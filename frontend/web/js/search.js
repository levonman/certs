$(document).ready(function () {
    $('#search').on('click',function (e) {
        $.ajax({
            url: '/site/search',
            method: 'POST',
            data:{term: $('.term').val()},
            success: function (data) {
                $('.results').html(data);
            }
        })
    })
})