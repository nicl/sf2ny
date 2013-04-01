(function($) {
    $.fn.countdown = function(options, callback) {

        // custom 'this' selector
        thisEl = $(this);

        // object of custom settings
        var settings = {
            'date': null,
            'format': null
        };

        if (options) {
            $.extend(settings, options);
        }

        function countdown_proc() {
            var eventDate = Date.parse(settings.date);
            var currentDate = Math.floor($.now());

            if (eventDate <= currentDate) {
                callback.call(this);
                clearInterval(interval);
            }

            var seconds = (eventDate - currentDate) / 1000;

            var days = Math.floor(seconds / (60 * 60 * 24)); //calculate the number of days
            seconds -= days * 60 * 60 * 24; //update the seconds variable with no. of days removed

            var hours = Math.floor(seconds / (60 * 60));
            seconds -= hours * 60 * 60; //update the seconds variable with no. of hours removed

            var minutes = Math.floor(seconds / 60);
            seconds -= minutes * 60; //update the seconds variable with no. of minutes removed

            seconds = Math.floor(seconds);

            if (settings.format) {
                days = (String(days).length >= 2) ? days : "0" + days;
                hours = (String(hours).length >= 2) ? hours : "0" + hours;
                minutes = (String(minutes).length >= 2) ? minutes : "0" + minutes;
                seconds = (String(seconds).length >= 2) ? seconds : "0" + seconds;
            }

            //update the countdown's html values.
            thisEl.find(".days").text(days);
            thisEl.find(".hours").text(hours);
            thisEl.find(".minutes").text(minutes);
            thisEl.find(".seconds").text(seconds);
        }

        interval = setInterval(countdown_proc, 100);

    };

    $('#countdown').countdown({
        date: "19 august 2013 17:00:00",
        format: true
    });

}) (jQuery);