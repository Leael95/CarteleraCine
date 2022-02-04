const btnSearchMovie = document.getElementById('btnSearchMovie');

btnSearchMovie.addEventListener('click', (e) => {
    const movie = document.getElementById('txtMovie').value;
    window.location.href = `http://localhost/Backoffice/listings.php?nombre=${movie}`;
})