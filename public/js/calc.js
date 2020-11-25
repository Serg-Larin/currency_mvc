let currency;

$.ajax({
    url: "/currencies/get",
    method: 'GET',
    dataType: 'json'
}).done(function(result) {
    currency = result;
    $('#from').append('<option value="-">-</option>')
    $.each(result, function (item) {
        $('#from').append('<option value="' + item + '">' + result[item] + '</option>')
    })
})

$('#from').on('click',function (e) {
    let second_selector = $('#to');
    let current_value = $(this).val();

    second_selector.empty();

    $.each(currency,function (item) {
        if(item!=current_value){
            second_selector.append('<option value="'+item+'">'+currency[item]+'</option>')
        }
    })
})
$('#exchange').on('click',function () {
    let from = $('#from').val();
    let from_value = $('#input_from').val();
    let to = $('#to').val();
    let data = {
        value:from_value,
        from:from,
        to:to
    }

    $.ajax({
        url: "http://localhost/calculate",
        data: data,
        method: 'POST',
        dataType: 'json'
    }).done(function(result) {
        if(typeof result['err']!=='undefined'){
            toastr.error(result['err']);
        }
        if(typeof result['calc']!=='undefined'){
            $('#result').text(result['calc']);
        }
    });
})
