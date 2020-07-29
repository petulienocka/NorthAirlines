$(function() {
    $("#datepicker1").datepicker();
    $("#datepicker2").datepicker();
});


function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';

}


