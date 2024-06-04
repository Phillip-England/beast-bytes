

function qs(selector, targetNode = document) {
    return targetNode.querySelector(selector);
}

function qsa(selector, targetNode = document) {
    return targetNode.querySelectorAll(selector);
}