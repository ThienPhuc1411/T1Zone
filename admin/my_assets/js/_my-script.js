    // Select all
    $(document).ready(function() {
        $("#checkAll").click(function() {
            $(".checkItem").prop('checked', true);
        });
        $("#UncheckAll").click(function() {
            $(".checkItem").prop('checked', false);
        });
    });