function handleTickInit(tick) {
    // uncomment to set labels to different language
    var locale = {
        YEAR_PLURAL: 'Años',
        YEAR_SINGULAR: 'Año',
        MONTH_PLURAL: 'Meses',
        MONTH_SINGULAR: 'Mes',
        WEEK_PLURAL: 'Semanas',
        WEEK_SINGULAR: 'Semana',
        DAY_PLURAL: 'Días',
        DAY_SINGULAR: 'Día',
        HOUR_PLURAL: 'Horas',
        HOUR_SINGULAR: 'Hora',
        MINUTE_PLURAL: 'Minutos',
        MINUTE_SINGULAR: 'Minuto',
        SECOND_PLURAL: 'Segundos',
        SECOND_SINGULAR: 'Segundo',
        MILLISECOND_PLURAL: 'Milisegundos',
        MILLISECOND_SINGULAR: 'Milisegundo'
    };


    for (var key in locale) {
        if (!locale.hasOwnProperty(key)) { continue; }
        tick.setConstant(key, locale[key]);
    }
    

    // format of due date is ISO8601
    // https://en.wikipedia.org/wiki/ISO_8601

    // '2018-01-31T12:00:00'        to count down to the 31st of January 2018 at 12 o'clock
    // '2019'                       to count down to 2019
    // '2018-01-15T10:00:00+01:00'  to count down to the 15th of January 2018 at 10 o'clock in timezone GMT+1

    //******************************************************************************* */
    // ojooooooooooooooooooooooooooooooooooooooooo
    //Por la convercion de las zonas, ya que en cartago es UTC-6 Y el contador usa GMT+1 hay
    //que ponerle 7 horas mas

    // create the countdown counter
     var counter = Tick.count.down('2024-04-27T21:00:00+01:00');

    counter.onupdate = function(value) {
      tick.value = value;
    };

    counter.onended = function() {
        Swal.fire({
            title: '¡Hoy es el gran día!',
            text: 'Gracias por acompañarnos ',
            icon: 'success',
            showConfirmButton: true,
            // timer: 3000,
            customClass: {
              popup: 'animate__animated animate__bounceIn'
            }
          })
    };

    tick.setNoCredits(true);    
}