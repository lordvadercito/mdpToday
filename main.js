// Main Animations and JS functions
$(document).ready(function(){

	$.ajax({
    // la URL para la petición
    url : 'http://dataservice.accuweather.com/currentconditions/v1/7893?apikey=nperqMePULASOq3yg594AZvSGib1OHdi%20&language=es-ar&details=true',
 
    // la información a enviar
    // (también es posible utilizar una cadena de datos)
    data : null,
 
    // especifica si será una petición POST o GET
    type : 'GET',
 
    // el tipo de información que se espera de respuesta
    dataType : 'json',
 
    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success : function(json) {
        var temp = Math.round(json[0].Temperature.Metric.Value);
        var min = Math.round(json[0].TemperatureSummary.Past24HourRange.Minimum.Metric.Value);
        var max = Math.round(json[0].TemperatureSummary.Past24HourRange.Maximum.Metric.Value);
        $('#current-temp').text(temp + '˚');
        $('#current-temp-mobile').text(temp + '˚');
        $('#max-Temp').text(max + '˚');
        $('#min-temp').text(min + '˚');

        var iconW = parseInt(json[0].WeatherIcon);
        weatherIconSelec(iconW);
    },
 
    // código a ejecutar si la petición falla;
    // son pasados como argumentos a la función
    // el objeto de la petición en crudo y código de estatus de la petición
    error : function(xhr, status) {
        console.log('Disculpe, existió un problema');
    },
 
    // código a ejecutar sin importar si la petición falló o no
    complete : function(obj) {
        
    }
});

function weatherIconSelec(icon){
    switch(icon) {
    case 1:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/sun-w.png", "alt":"Soleado"});
        break;
    case 2:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/cloud-w.png", "alt":"Parcialmente nublado"});
        break;
    case 3:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/cloud-w.png", "alt":"Parcialmente nublado"});
    case 4:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/cloud-w.png", "alt":"Parcialmente nublado"});
    case 5:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/cloud-w.png", "alt":"Parcialmente nublado"});
    case 6:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/cloud-w.png", "alt":"Nublado"});
    case 7:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/cloud-w.png", "alt":"Nublado"});
    case 8:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/cloud-w.png", "alt":"Nublado"});
    case 11:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/cloud-w.png", "alt":"Nublado"});
    case 12:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/rain-w.png", "alt":"Lluvia"});
    case 13:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/rain-w.png", "alt":"Lluvia"});
    case 14:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/rain-w.png", "alt":"Lluvia"});
    case 15:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/storm-w.png", "alt":"Tormenta eléctrica"});
    case 16:
         $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/storm-w.png", "alt":"Tormenta eléctrica"});
    case 17:
         $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/storm-w.png", "alt":"Tormenta eléctrica"});
    case 18:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/rain-w.png", "alt":"Lluvia"});
    case 33:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/moon-w.png", "alt":"Noche despejada"});
    case 34:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/moon-w.png", "alt":"Noche despejada"});
    case 35:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/cloud-night-w.png", "alt":"Noche nublada"});
    case 36:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/cloud-night-w.png", "alt":"Noche nublada"});
    case 37:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/cloud-night-w.png", "alt":"Noche nublada"});
    case 38:
        $('#weather-icon').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/weather/cloud-night-w.png", "alt":"Noche nublada"});
    
    }
    
}

$(document).ready(function(){
    var ancho = $(window).width();
    var alto = $(window).height();
    console.log("Alto de ventana: " + alto + "px, Ancho: " + ancho + "px");
    if (sizeDetection()<1191) {
        $('.img-logo').attr({"src":"http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/logos/logo-35.png", "margin":"0 10%"});
    }

    
});


});
	var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	var f=new Date();
	var dateShow = document.getElementById("datefield");
    var dateShowSmall = document.getElementById("dateFieldSmall");
	dateShow.innerHTML = f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
    dateShowSmall.innerHTML = f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
	
$(document).on("scroll", function() {

	if($(document).scrollTop()>100) {
		$('.weather-btn').css({ "height": "61px"});
		$('#navbarSupportedContent').css({"right":"28%","bottom":"17%"});
		$('.img-logo').attr("src","http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/logos/logo-35.png");
		$('.img-logo').css({"height":"35px","margin":"0% 10%"});

        $('#header').css({"height":"auto"});
        $('#container').css({"height":"61px"});
        $('.material-icons').css({"line-height":"61px"});

        
    } else {
        

        if (sizeDetection() < 992) {
            $('.img-logo').attr("src","http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/logos/logo-35.png");
        }else if(($(window).width() > 544)&&($(window).width() < 768)){
            $('.img-logo').css({"height":"40px","margin":"0 10%"});
        }else if(($(window).width() > 768)&&($(window).width() <= 992)){
            $('.img-logo').css({"height":"35px","margin":"0 10%"});
        }else{
    		$('.weather-btn').css({ "height": "45px"});
    		$('#navbarSupportedContent').css({"right":"12%","bottom":"1%"});
    		$('.img-logo').attr("src","http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/logos/logoslogan-08.png");
    		$('.img-logo').css({"height":"60px"});
            $('#container').css({"height":"45px"});
            $('.material-icons').css({"line-height":"45px"});
        }


	}
	
});

$(document).ready(function(){
    if (sizeDetection()< 992) { //estaba en 544
       $('#container').css({"height":"61px"});
       $('.material-icons').css({"line-height":"61px"});
       $('.img-logo').attr("src","http://c1240192.ferozo.com/mdptoday/wp-content/themes/mdptoday/img/logos/logo-35.png");
       classRemover($('#outstanding-news'));
       classRemover($('#news'));
       classRemover($('#sports'));
       classRemover($('#tecnology'));
       classRemover($('#entertainment'));
       classRemover($('#other-news'));
    }else{
        classAdder($('#outstanding-news'));
        classAdder($('#news'));
        classAdder($('#sports'));
        classAdder($('#tecnology'));
        classAdder($('#entertaiment'));
        classAdder($('#other-news'));
    }
});

function classRemover(element){
    element.removeClass('container');
    element.addClass('container-fluid');
}

function classAdder(element){
    element.removeClass('container-fluid');
    element.addClass('container');
}

$('#weather').mouseover(function(){
    var source = $('#weather-icon').attr('src');
    var result = source.replace('-w', '-b');
    $('#weather-icon').attr('src',result);
    
});

$('#weather').mouseout(function(){
    var source = $('#weather-icon').attr('src');
    var result = source.replace('-b', '-w');
    $('#weather-icon').attr('src',result);
    
});

$(document).ready(function(){
    var size = $(window).width();
    btnContent(size);
});

$(window).resize(function(){
    var size = $(window).width();
    btnContent(size);
});

function btnContent(size){
    if (size < 768){
        $('.btn-seemore').text("+");
    }else{
        $('.btn-seemore').text("Ver Más");
    }
}

function sizeDetection(){
    var wsize = $(window).width();
    return wsize;
}

$(document).ready(function(){
    $(".closeMenu").click(function () {
            $('#navbarSupportedContent').removeClass('show');
    });
});