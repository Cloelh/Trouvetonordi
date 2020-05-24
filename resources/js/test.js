$(document).ready(function () {


    // $("#marque").click(function (e){
    //     e.preventDefault();
    //
    //     $.ajax({
    //         type: 'GET',
    //         url: "/testshowList",
    //         data: {"expression" : "testexpression"},
    //         success: function (data, textStatus, jqXHR){
    //             $('#listHere').html(data);
    //         },
    //         error: function (jqXHR, testStatus, errorThrown){
    //         }
    //     });
    // });

   /* $("#marque").click(function (e) {
        e.preventDefault();
        // var value = $(this).val();
        var value = $("#marqueTxt").val();

        $.ajax({
            type: 'GET',
            url: "/testshowList",
            data: {
                date: value,
            },
            success: function (data, textStatus, jqXHR) {
                $('#listHere').html(data);
            },
            error: function (jqXHR, testStatus, errorThrown) {
            }
        });
    });*/

    /*$("#taille").click(function (e) {
        e.preventDefault();
        // var value = $(this).val();
        var value = $("#tailleTxt").val();

        $.ajax({
            type: 'GET',
            url: "/testshowList",
            data: {
                date: value,
            },
            success: function (data, textStatus, jqXHR) {
                $('#listHere').html(data);
            },
            error: function (jqXHR, testStatus, errorThrown) {
            }
        });
    });*/

/*
    $("#addFilterBtn").click(function (e) {
        alert('on passe ici');
        e.preventDefault();
        // var value = $("#tailleTxt").val();
        var value = 'testons ici';
        alert('on passe ici');

        $.ajax({
            type: 'GET',
            url: "/testBis",
            data: {
                date: value,
            },
            success: function (data, textStatus, jqXHR) {
                alert('on passe ici');
                $('#filters').html(data);
            },
            error: function (jqXHR, testStatus, errorThrown) {
                alert('ça fonctionne pas');
            }
        });
    });*/
});