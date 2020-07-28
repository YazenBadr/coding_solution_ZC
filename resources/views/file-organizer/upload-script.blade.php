<script>
    $('#file_organizer_form').on('submit',function(e){
        e.preventDefault();
        upload_file(this);
    });

    function upload_file(form_element_ref){
        const form_data = new FormData(form_element_ref);
        const form_element = $(form_element_ref);
        const form_spinner = form_element.find('.spinner-border');
        const form_submit_btn = form_element.find('button.btn')

        $.ajax({
            url: '{{route('file_organizer_uploader')}}',
            type: 'POST',
            data: form_data,
            beforeSend:function(){
                form_spinner.removeClass('d-none');
                form_submit_btn.attr('disabled','disabled');
            },
            success: function (data) {
                console.log(JSON.parse(data));

                $(form_element)[0].reset();
                form_spinner.addClass('d-none');
                form_submit_btn.removeAttr('disabled');

                $('#file_organizer_report_container').html(
                    '<div class="font-weight-bold">\n' +
                        'Output/Report:\n' + data+
                    '</div>');
            },
            cache: false,
            contentType: false,
            processData: false
        });
    }
</script>
