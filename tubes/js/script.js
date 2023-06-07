const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const bungkus =document.querySelector('.bungkus');

// hilangkan tombol cari
tombolCari.style.display = none

// event ketika menuliskan kita keyword
keyword.addEventListener('keyup', function(){
    // ajax fetch
    fetch('ajax/ajax_cari.php?keyword='+ keyword.value)
    .then((response) => response.text())
    .then((text) => (bungkus.innerHTML = text));
    
});