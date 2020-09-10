$(document).ready(function () {
    let result = $('#result');


    $('#get_number_button').click(function (e) {
        e.preventDefault();
        let key = $('#token_input').val();


        $.ajax({
            method: "post",
            url: "/api/numbers/generate",
            headers: {
                'Authorization': 'Bearer ' + key,
                'Accept': 'application/json'
            },
            data: {}
        })
            .done(function (data) {
                alert('Request successfully send');
                $(result).text(JSON.stringify(data));
            })
            .error(function (data) {
                console.log(data);
                alert('Request fail');
                $(result).text('error');
            });
    })

    $('#get_result_button').click(function (e) {
        e.preventDefault();
        let key = $('#token_input').val();
        let unique_id = $('#number_id').val();


        $.ajax({
            method: "get",
            url: "/api/numbers/retrieve/" + unique_id,
            headers: {
                'Authorization': 'Bearer ' + key,
                'Accept': 'application/json'
            }
        })
            .done(function (data) {
                alert('Request successfully send');
                $(result).text(JSON.stringify(data));
            })
            .error(function (data) {
                console.log(data);
                alert('Request fail');
                $(result).text('error');
            });
    })
});