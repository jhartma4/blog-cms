var options = {
    valueNames: [ 'title' ]
};

new List('sortable-blog-list', options);

function revealMessage() {
    document.getElementById("hiddenMessage").style.display = 'block';
}