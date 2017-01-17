jQuery(document).ready(function($){
    var $document = $(document);
    var markup = $('<div class="shortscore" id="rangeslider_output"></div><input id="rangeslider" name="score" type="range" min="1" max="10" step="1" value="6">');

    /* jQuery magic */
    $('#score').hide().after(markup);

    var $inputRange = $('#rangeslider');

    $inputRange.rangeslider({
        polyfill: false
    });

    function valueOutput(element) {
        var value = element.value,
            output = document.getElementById('rangeslider_output');
        $('#score').val(value);
        output.innerHTML = value;
        $('#rangeslider_output').removeClass().addClass('shortscore shortscore-' + value);
    }

    for (var i = $inputRange.length - 1; i >= 0; i--) {
        valueOutput($inputRange[i]);
    }

    $document.on('change', 'input[type="range"]', function (e) {
        valueOutput(e.target);
    });

    $.fn.removeClassPrefix = function(prefix) {
        this.each(function(i, el) {
            var classes = el.className.split(" ").filter(function(c) {
                return c.lastIndexOf(prefix, 0) !== 0;
            });
            el.className = $.trim(classes.join(" "));
        });
        return this;
    };
});
