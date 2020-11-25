$('#update_settings_form').submit(function (e) {
    let form = new FormData(this);
    let button = $('#update_settings_button');

    $.ajax({
        url: '/settings/update',
        type: "POST",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json'
    }).done(function (result) {
        if(typeof result['err']!=='undefined'){
            toastr.error(result['err']);
        } else {
            toastr.success(result['calc']);
        }
    })
    e.preventDefault();
})
