// append header to our html

window.onload = function appendHeader() {
    const header = document.querySelector("header")
    fetch("/header/header.html")
        .then(res => res.text())
        .then(data => {
            header.innerHTML = data;
        })
}
