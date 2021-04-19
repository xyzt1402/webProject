const themeSwitch = document.getElementById("themeSwitch");
console.log(themeSwitch);
themeSwitch.addEventListener('change', () => {
    document.body.classList.toggle('dark-theme');
});