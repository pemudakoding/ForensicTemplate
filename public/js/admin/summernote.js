$(document).ready(function() {
    $('#content').summernote({
        minHeight: 150,
        toolbar:  [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert',['link']]
        ]
    });
});
