$(document).ready(function() {
    $('.html-editor').summernote({
        height: 180,
        lang: $('#summernote-locale').val(),
        toolbar:[
            ['style',['style']],
            ['font',['bold','italic','underline','clear']],
            ['fontname',['fontname']],
            ['fontsize',['fontsize']],
            ['color',['color']],
            ['para',['ul','ol','listStyles','paragraph']],
            ['table',['table']],
            ['cleaner',['cleaner']], // The Button
            ['insert',['media','link','picture','video', 'hr']],
            ['custom', ['findnreplace']],
            ['view',['fullscreen','codeview']],
            ['help',['help']]
        ],
        popover: {
            table: [
                ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
                ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
                ['custom', ['tableHeaders', 'tableStyles']]
            ],
            image: [
                ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']],
                ['custom', ['imageTitle', 'imageAttributes']],
            ],
        },
        imageTitle: {
            specificAltField: true,
        },
        imageAttributes:{
            icon:'<i class="note-icon-pencil"/>',
            removeEmpty:false, // true = remove attributes | false = leave empty if present
            disableUpload: false // true = don't display Upload Options | Display Upload Options
        },
        hint: [{
            match: /\B@(\w*)$/,
            mentions: function(keyword, callback) {
                $.ajax({
                    url: $('#mention-route-entities').val() + '?q=' + keyword,
                    type: 'get',
                    async: true
                }).done(callback);
            },
            search: function (keyword, callback) {
                this.mentions(keyword, callback);
            },
            content: function (item) {
                if (item.url) {
                    if (item.tooltip) {
                        var str = '<a href="' + item.url + '" title="' + item.tooltip.replace(/["]/g, '\'') + '" data-toggle="tooltip" data-html="true" >' + item.fullname + '</a>';
                        return $(str)[0];
                    }
                    return $('<a href="' + item.url + '">' + item.fullname + '</a>')[0];
                }
                return item.fullname;
            },
            template: function (item) {
                return '<div class="summernote-hint-option">' + (item.image ? item.image : '') + item.fullname + ' (' + item.type + ')</div>';
            }
        },{
            match: /\B#(\w*)$/,
            mentions: function(keyword, callback) {
                $.ajax({
                    url: $('#mention-route-months').val() + '?q=' + keyword,
                    type: 'get',
                    async: true
                }).done(callback);
            },
            search: function (keyword, callback) {
                this.mentions(keyword, callback);
            },
            content: function (item) {
                return item.fullname;
            },
            template: function (item) {
                return item.fullname;
            }
        }],

    });
});
