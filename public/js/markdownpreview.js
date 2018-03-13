let preview = document.getElementById('preview');
preview.innerHTML = '';
prevdiv = document.createElement("mark-down");
prevdiv.innerHTML = document.getElementById("form-element-data").value;
preview.appendChild(prevdiv);

function previewFunction(event) {
    let preview = document.getElementById('preview');
    preview.innerHTML = '';
    prevdiv = document.createElement("mark-down");
    prevdiv.innerHTML = document.getElementById("form-element-data").value;
    preview.appendChild(prevdiv);
}
