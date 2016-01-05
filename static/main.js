$(document).ready(function() {
    //logout
    $('#logout').on('click',function (e) {
        jsCookie.removeCookie('name');
        window.location.href='admin.php';
    })
})
