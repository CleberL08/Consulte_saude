$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
    $("#estadosPick").change(function() {
        const url = $("#regionForm").attr("data-cidades-url");
        estadosPick = $(this).val();
        $.ajax({
            url: url,
            data: {
                "estadosPick": estadosPick
            },
            success: function(data) {
                $('#cidadesPick').html(data);
                console.log("deu bom");

            },
            error: function(data) {
                console.log("deu pau");
                console.log(data);
            }
        });
    });
});