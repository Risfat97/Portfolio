function handleChangeLanguage(e){
    const language = e.target.value;
    const url = '/' + language;
    window.location.pathname += url;
}

var languageSelector = document.getElementById("langue");

languageSelector?.addEventListener("change", handleChangeLanguage);