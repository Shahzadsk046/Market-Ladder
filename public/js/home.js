function getTitle(e) {
    var element = document.getElementById(e);
    body = document.getElementById("tileBody"), link = document.getElementById("tileLink");
    var head = document.getElementById("tileHead");
    var body = document.getElementById("tileBody");
    var link = document.getElementById("tileLink");
    let siblings = [];
    if (!element.parentNode) {
        return siblings;
    }
    let sibling = element.parentNode.firstChild;
    while (sibling) {
        if (sibling.nodeName == "LI") {
            siblings.push(sibling);
        }
        sibling = sibling.nextSibling;
    }
    items = siblings;
    var m = document.getElementById("reading"),
        c = document.getElementById("rightContent");
    for (let t = 0; t < items.length; t++) {
        if ((items[t].id != e && (items[t].className = " ", items[t].style.backgroundColor = "inherit", items[t].style.color = "inherit"), items[t].id == e))(items[t].className = "active"), (items[t].style.backgroundColor = "rgba(190, 1, 1, 0.89)"), (items[t].style.color = "white"), (head.innerHTML = items[t].getAttribute('data-question')), (body.innerHTML = items[t].getAttribute('data-answer')), (link.href = items[t].getAttribute('data-url')), document.documentElement.clientWidth > 575 && (c.style.height = m.offsetHeight - items[0].offsetTop + "px"), (head.classList = " fade-in"), (body.classList = " fade-in"), (link.classList = " fade-in");
    }
    setTimeout(function() {
        (c.classList = "rightContent "), (head.classList = " "), (body.classList = " "), (link.classList = " ");
    }, 800);
}

function resizeTile() {
    setTimeout(function() {
        var element = document.getElementById('li');
        let siblings = [];
        if (!element.parentNode) {
            return siblings;
        }
        let sibling = element.parentNode.firstChild;
        while (sibling) {
            if (sibling.nodeName == "LI") {
                siblings.push(sibling);
            }
            sibling = sibling.nextSibling;
        }
        items = siblings;
        var a = document.getElementById("reading"),
            s = document.getElementById("rightContent");
        for (let e = 0; e < items.length; e++) {
            if (("active" != items[e].classList && (items[e].className = " "), "active" == items[e].classList)) document.documentElement.clientWidth > 575 && (body.style.height = a.clientHeight - items[0].offsetTop + "px");
        }
    }, 1000);
}

$(document).ready(function() {
    var element = document.getElementById('li');
    let siblings = [];
    if (!element.parentNode) {
        return siblings;
    }
    let sibling = element.parentNode.firstChild;
    while (sibling) {
        if (sibling.nodeName == "LI") {
            siblings.push(sibling);
        }
        sibling = sibling.nextSibling;
    }
    var firstListItem = siblings[0].id;
    getTitle(firstListItem);
});