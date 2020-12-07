//Adds event listener to form-toggle buttons
$('#enable').on('click', function(){
    $.post('formcontrol.php', {num : this.value}, function(result){
        $('#alert').removeClass().addClass("alert alert-success").html(result);
    });
});
$('#timer').on('click', function(){
    $.post('formcontrol.php', {num : this.value}, function(result){
        $('#alert').removeClass().addClass("alert alert-secondary").html(result);
    });
});
$('#disable').on('click', function(){
    $.post('formcontrol.php', {num : this.value}, function(result){
        $('#alert').removeClass().addClass("alert alert-danger").html(result);
    });
});
//Highlight checked row and query database
$('.contacted-checkbox').on('change', function(){
    //update row color
    $(this).is(':checked') ? $(this).closest('tr').css({background : '#D4EDDA'}) : $(this).closest('tr').css({background : ''}) ;
    //post query
    $.post('formcontrol.php',
        {checked : this.checked,
            id : this.id
        });
});

$('#requests-table').DataTable({
    'scrollX': true
});
