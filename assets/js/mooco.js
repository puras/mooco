$(document).ready(function() {
    $('.ui.dropdown').dropdown();
    
    // $('.wrapper .sidebar').sidebar('toggle');

    $('.form.submit').on('click', function() {
        this.submit();
    });

    $('#type').trigger('change');

    KindEditor.ready(function(K) {
        K.create('textarea[name="content"]');
    });
});

function change_type() {
    var type = $('#type').val();
    $('#key_id').empty();
    if (type !== undefined && type != '') {
        $('#key_id').css('display', '');
        $('<option value="">请选择</option>').appendTo($('#key_id'));
    } else {
        $('#key_id').css('display', 'none');
    }

    switch(type) {
        case 'link':
            change_to_link();
            break;
        case 'page':
            change_to_page();
            break;
        case 'article_category':
            change_to_article_category();
            break;
        default: 
            break;
    }
}
function change_to_link() {
    var $key_sel = $('#key_id');
    var key_id = $('#old_key_id').val();
    $.getJSON('/manage/link?' + Math.random(), function(data) {
        if (data.links && data.links.length > 0) {
            $.each(data.links, function(idx, link) {
                $('<option value="' + link.id + '"' + (link.id == key_id ? ' selected=selected' : '') + '>' + link.title + '</option>').appendTo($key_sel);
            });
        }
    });
}
function change_to_page() {
    var $key_sel = $('#key_id');
    var key_id = $('#old_key_id').val();
    $.getJSON('/manage/page?' + Math.random(), function(data) {
        if (data.pages && data.pages.length > 0) {
            $.each(data.pages, function(idx, page) {
                $('<option value="' + page.id + '"' + (page.id == key_id ? ' selected=selected' : '') + '>' + page.title + '</option>').appendTo($key_sel);
            });
        }
    });
}
function change_to_article_category() {
    var $key_sel = $('#key_id');
    var key_id = $('#old_key_id').val();
    $.getJSON('/manage/article_category?' + Math.random(), function(data) {
        if (data.article_categories && data.article_categories.length > 0) {
            $.each(data.article_categories, function(idx, article_category) {
                $('<option value="' + article_category.id + '"' + (article_category.id == key_id ? ' selected=selected' : '') + '>' + article_category.title + '</option>').appendTo($key_sel);
            });
        }
    });
}

// =======================

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