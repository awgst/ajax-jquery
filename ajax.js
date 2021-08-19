$(document).ready(function () {
    $('body').on('load', read());
    $('form').on('submit', function (e) { 
        insert(e);
    });
    function insert(e){
        $.ajax({
            type: "POST",
            url: "insert.php",
            data: $('form').serialize(),
            success: function (response) {
                $('#nama').val('');
                $('#nim').val('');
                $('#email').val('');
                read();
            }
        });
        e.preventDefault();
    }
    function read() {
        $.ajax({
            type: "GET",
            url: "read.php",
            success: function (response) {
                $('#tabel').html(response);
            }
        });
    }
});