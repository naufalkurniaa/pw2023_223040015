const keyword = document.getElementById('Keyword');
const searchContainer = document.getElementById('search-container');
const searchButton = document.getElementById('search-button');

searchButton.style.display = 'none';



keyword.onkeyup = function() {
    fetch('ajax/search.php?keyword=' + keyword.value);
    .then((response) => (response.text()));
    .then((text) => (searchContainer.innerHtml = text));
};


