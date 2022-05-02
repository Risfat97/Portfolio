function handleChangeLanguage(e){
    const language = e.target.value;
    const url = '/' + language;
    window.location.pathname += url;
    /*fetch(url)
    .then(response => response.text())
    .then(response => {
        console.log(response);
    })*/
}

var languageSelector = document.getElementById("langue");

languageSelector?.addEventListener("change", handleChangeLanguage);