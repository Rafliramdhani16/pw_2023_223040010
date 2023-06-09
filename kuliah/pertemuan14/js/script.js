const keyword = document.getElementById('keyword');
const searchButton = document.getElementById('search-button');
const searchContainer =document.getElementById('search-container');

// hilangkan tombol cari
searchButton.style.display = 'none';
// event ketika menuliskan kita keyword
keyword.onkeyup = function(){
    // ajax fetch
    fetch('ajax/search.php?keyword='+ keyword.value)
    .then((response) => (response.text()))
    .then((text) => (searchContainer.innerHTML = text));
    
};