const keyword = document.getElementById('keyword');
const kategori = document.getElementById('kategori');
const searchButton = document.getElementById('search-button');
const searchContainer =document.getElementById('search-container');

// hilangkan tombol cari
searchButton.style.display = 'none';
// event ketika menuliskan kita keyword
keyword.addEventListener('keyup', function(){
    // ajax fetch
    fetch('ajax/ajax_cari.php?keyword='+ keyword.value + '&kategori=' + kategori.value)
    .then((response) => response.text())
    .then((text) => (searchContainer.innerHTML = text));
    
});
kategori.addEventListener('keyup', function(){
    // ajax fetch
        fetch('ajax_cari.php?keyword=' + keyword.value + '&kategori=' + kategori.value)
        .then((response) => (response.text()))
        .then((text) => (searchContainer.innerHTML = text));
});
// const keyword = document.getElementById('keyword');
// const kategori = document.getElementById('kategori');
// const searchButton = document.getElementById('search-button');
// const searchContainer = document.getElementById('search-container');

// // hilangkan tombol cari
// searchButton.style.display = 'none';

// // event ketika menuliskan keyword
// keyword.onkeyup = function(){
//     // ajax fetch
//     fetch('ajax_cari.php?keyword=' + keyword.value + '&kategori=' + kategori.value)
//     .then((response) => (response.text()))
//     .then((text) => (searchContainer.innerHTML = text));
// };

// kategori.onchange = function(){
//     // ajax fetch
//     fetch('ajax_cari.php?keyword=' + keyword.value + '&kategori=' + kategori.value)
//     .then((response) => (response.text()))
//     .then((text) => (searchContainer.innerHTML = text));
// };
