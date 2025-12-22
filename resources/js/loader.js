window.addEventListener('load', function() {
    console.log("Loader JS chargé !");
    const loader = document.getElementById('loader');
    if(loader) {
        loader.style.display = 'none';
        console.log("Loader masqué");
    } else {
        console.log("Loader introuvable !");
    }
});