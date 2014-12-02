$(document).ready(function() {
    $('.ui.dropdown').dropdown();
    
    // $('.wrapper .sidebar').sidebar('toggle');

    $('.form.submit').on('click', function() {
        this.submit();
    });
});

$(document).delegate('a[data-method]', 'click', function(e) {
    var link = $(this), method = link.data('method'), data = link.data('params');
    if (!allow_action(link)) return stop_everything(e);

    if (link.data('method')) {
        handle_method(link);
        return false;
    }
});

function allow_action(element) {
    var message = element.data('confirm'),
        answer = false,
        callback;

    if (!message) {
        return true;
    }

    if (fire(element, 'confirm')) {
        answer = confirm(message);
        callback = fire(element, 'confirm:complete', [answer]);
    }

    return answer && callback;
}

function handle_method(link) {
    var href = link.attr('href'),
        method = link.data('method'),
        target = link.attr('target'),
        form = $('<form method="post" action="' + href + '"></form>');
        metadata_input = '<input id="_method" name="_method" value="' + method + '" type="hidden">';

    if (target) {
        form.attr('target', target);
    }

    form.hide().append(metadata_input).appendTo('body');
    form.submit();
}

function fire(obj, name, data) {
    var event = $.Event(name);
    obj.trigger(event, data);
    return event.result !== false;
}

function stop_everything(e) {
    e.stopImmediatePropagation();
    e.stopPropagation();
    return false;
}