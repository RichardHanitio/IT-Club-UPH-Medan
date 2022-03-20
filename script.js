fetch("/header/header.html")
    .then(res => res.text())
    .then(data => {
        const newHeader = document.createElement("header");
        newHeader.setAttribute("class", "header");
        newHeader.innerHTML = data;
        document.body.append(newHeader);
        console.log(data);
    })
