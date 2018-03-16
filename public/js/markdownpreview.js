let preview = document.getElementById('preview');

// SHOWDOWN MARKDOWN FILTER
var converter = new showdown.Converter(),
    text      = document.getElementById("form-element-data").value,
    html      = converter.makeHtml(text);

preview.innerHTML = html;

function previewFunction(e) {
    e.preventDefault();
    text      = document.getElementById("form-element-data").value,
    html      = converter.makeHtml(text);

    preview.innerHTML = html;
}
