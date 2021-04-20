const themeSwitch = document.getElementById("themeSwitch");
var theme = localStorage.getItem('theme')
var iframeCrypto = document.querySelector("#section-contents > div > div:nth-child(2) > div.col-12.col-lg-4 > div > div > div:nth-child(1) > iframe")
if (theme!=null){
    if (theme=="dark-theme"){
        // themeSwitch.click()
        document.body.classList.toggle(theme);
        if (iframeCrypto!=null){
            iframeCrypto.src = "https://widget.coinlib.io/widget?type=full_v2&theme=dark&cnt=5&pref_coin_id=3349&graph=yes"
        }
    }
}

themeSwitch.addEventListener('change', () => {
    var check = document.body.classList.toggle('dark-theme');
    if (iframeCrypto!=null){
        iframeCrypto.src = "https://widget.coinlib.io/widget?type=full_v2&theme="+ (check?"dark":"light")+"&cnt=5&pref_coin_id=3349&graph=yes"
    }
    window.localStorage.setItem('theme',check?'dark-theme':'light-theme')
});