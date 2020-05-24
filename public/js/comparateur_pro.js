/*$(document).ready(function () {
    $("#marque").click(function (e) {
        e.preventDefault();
        var value = $("#marqueTxt").val();

        $.ajax({
            url: '/comparateur_pro',
            type: 'GET',
            // data : value,
            dataType: 'html',
            success: function (code_html, statut) {
                //$('#listHere').html(data);
                alert('ça fonctionne');
                console.log('trop bien ça a fonctinnné');
            },
            error: function (resultat, statut, erreur) {
                console.log('t nul');

            },

        });


        $("#taille").click(function (e) {
            e.preventDefault();
            var value = $("#tailleTxt").val();

            alert(value);
        });
    });
});*/

/*$(document).ready(function () {


    $('#listHere').hide();

    $("#name").click(function () {
        $('#listHere').slideToggle();
        var value = $("#nameTxt").val();
        alert(value);
        document.cookie = 'value='+value;

    });

    $("#taille").click(function () {
        $('#listHere').slideToggle();
        var value = $("#tailleTxt").val();
        alert(value);
        document.cookie = 'value='+value;

    });*/

    /*
        $('#marque').click(function (e) {
            e.preventDefault();
            var value = $("#marqueTxt").val();

            $.ajax({
                type: "GET",
                url: '/addFilters',
                success:function(data,textStatus,jqXHR){
                    $('#listHere').html(data);
                },
                error:function (jqXHR,textStatus,errorThrown) {
                    alert('Une erreur est survenue.');
                }
            })
        });*/


    $('#submitFilters').click(function (e) {
        e.preventDefault();

        $.ajax({
            type: "GET",
            url: '/addFilters',
            success: function (data, textStatus, jqXHR) {
                $('#listHere').html(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Une erreur est survenue.');
            }
        })
    });


    // $('#submitFilters').click(function () {
    //
    //     var checked = $("input:checked");
    //     var nbChecked = checked.length;
    //     console.log(nbChecked);
    //
    //
    //     if (nbChecked === 0) {
    //         alert('Vous n\'avez ajouté aucun filtre');
    //         // nothingToAdd();
    //     } else {
    //         let val = [];
    //         $(':checkbox:checked').each(function (i) {
    //             val[i] = $(this).val();
    //             $('#filtersHere').append('<p>' + val[i] + '</p>');
    //         });
    //     }
    //
    //     /*function addFilters() {
    //         $('#filtersHere').append(val[i]);
    //
    //         var selector = "#filtersHere:contains(" + val[i] + ")";
    //         $(selector).css("background", "red");
    //     }*/
    //
    // });

// });


