(function ($, Chartist) {

    "use strict";

    $.fn.label_placement = function (lines, series, distributeSeries) {

        var $el = $(this);

        if ($el.length === 0) {
            throw new Error('teamNewsLine: target element not found');
        }

        var id = $el.attr('id');



        Chartist.Bar('#' + id, {
            labels: lines,
            series: series
        }, {

            distributeSeries: distributeSeries === undefined ? true : distributeSeries


        });

    };

})(jQuery, Chartist);
