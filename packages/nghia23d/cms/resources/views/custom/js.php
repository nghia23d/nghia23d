<script>
     $(document).ready(function() {
        // Change status ajax
        $('.change-status').on('change', function() {
            $.ajax({
                url: $(this).data("route"),
                type: 'GET',
                dataType: 'json',
                data:{
                    status:  $(this).val()
                },
                success: function(res) {
                    toastr.success('Update thành công')
                }
            });
        });
    });
</script>
