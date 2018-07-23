var id = window.setInterval(function (e) {
    sendRequest(true);

}, 4000);

function sendRequest(get) {
    $.ajax({
        url: "/admin_v/chat/get-messages/",
        method: 'post',
        data: {'message': $('#status_message').val(),'location': window.location.href},
        success: function (message) {
            if (message == 'success') {
                var audio = document.getElementById("audio");
                audio.play();
                $('.chat_icon').css('visibility', 'visible')
            }else{
                if(message != 'field'){
                    $('.chata').html(message)
                }
            }
        }
    })
}