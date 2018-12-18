$(document).ready(function() {
    PNotify.prototype.options.delay = 5000;
    
    $('.char-limite').keyup(function() {
        var total = $(this).prop('maxlength');
        var digitados = parseInt($(this).val().length);
        $(this).parent().find('.spnChar').html((total-digitados)+' caracteres restantes');
    });
    $('.char-limite').keyup();
    
    $(window).resize(function() {
        $('.filePreviewBox').height($('.filePreviewBox').width()*0.5);
    });
    $(window).resize();
});