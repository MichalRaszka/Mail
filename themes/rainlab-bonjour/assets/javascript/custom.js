var quill = new Quill('#editor', {
    modules: {
        formula: true,
        syntax: true,
        toolbar: '#toolbar'
    },
    placeholder: 'Utwórz wiadomość',
    theme: 'snow'
});

var form = document.querySelector('form');
form.onsubmit = function() {
    // Populate hidden form on submit
    var content = document.querySelector('input[name=content]');
    content.value = JSON.stringify(quill.getContents());

    console.log("Submitted", $(form).serialize(), $(form).serializeArray());

    // No back end to actually submit to!
    alert('Open the console to see the submit data!');
    return false;
};