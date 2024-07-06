import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.ckeditor').forEach(function (element) {
        ClassicEditor
            .create(element)
            .catch(error => {
                console.error(error);
            });
    });
});