$('#notif_del').submit(function(e){
    e.preventDefault();
    $.ajax({
        url: '../src/notif_apagar.php',
        method: 'POST',
        dataType: 'json'
    });
});
$('#notif_read').submit(function(e){
    e.preventDefault();
    $.ajax({
        url: '../src/notif_lidas.php',
        method: 'POST',
        dataType: 'json'
    });
});