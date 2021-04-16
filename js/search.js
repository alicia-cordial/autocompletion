var url = window.location.href;
console.log(url);

if (url === 'http://localhost/autocompletion/index.php' || url === 'http://localhost/autocompletion/') {
    $('.bar_header').hide();
} else {
    $('.bar_header').show();
}