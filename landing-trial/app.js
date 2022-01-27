/**
 * SIMULADOR DE CRÉDITO
 * @author Madelin Flores
 * @email madelinfg@gmail.com
 * @date enero 2022
 */

var pagoMensual, montoNeto, total, montoDeseado, tasaAnual;
const comision = 348
const CAT = 15.71

$(document).ready(function(){
    $('#inpt-comision').val('$ ' + comision.toString())
    $('#inpt-CAT').val(CAT + ' %')
});

$('#valor-range').html($("#rng-monto-deseado").val());
$('#rng-monto-deseado').change(function() { 
    $('#valor-range').html($(this).val());
    $("#op12").attr('checked', true);
    calcularCredito(12)
});

$('#tasa-range').html($("#rng-tasa-anual").val());
$('#rng-tasa-anual').change(function() { 
    $('#tasa-range').html($(this).val());
    $("#op12").attr('checked', true);
    calcularCredito(12)
});

$('.form-check input').on('change', function(e){
    e.preventDefault()
    if($(this).is(':checked')) {  
        meses = $(this).val();
        calcularCredito(meses)
    } 
})

calcularCredito = (meses) => {
    montoDeseado = parseInt($('#rng-monto-deseado').val());
    tasaAnual = parseInt($('#rng-tasa-anual').val());
    
    pagoMensual = (montoDeseado / meses) + tasaAnual;
    $('#inpt-pagoMensual').val('$ ' + pagoMensual.toFixed(2));
    
    montoNeto = (montoDeseado * meses) - comision;
    $('#inpt-montoNeto').val('$ ' + montoNeto.toFixed(2));
    
    total = montoDeseado + comision;
    $('#inpt-total').val('$ ' + total.toFixed(2));
} 