$(function (){

    $("form[name='run']").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
            "code": {
                required: true
            },
        },
        submitHandler: function(form) {
            var form = $(form);
            var url = form.attr('action');
            var data = form.serialize();
            $.post(url, data, function (e){
                 alert(e);
            })
        }
    });
});