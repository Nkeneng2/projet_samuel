function  produktentfernen(key) {
    $.ajax({
        url: "supprimer_objet.php",
        method: 'POST',
        dataType: 'html',

        data: {
            key: key
        },
        success: function (response) {
            // history.pushState({}, "", "http://localhost:8888/projet_samuel/");
            // alert(response);
            $("#page").html(response);
        }
    })
}