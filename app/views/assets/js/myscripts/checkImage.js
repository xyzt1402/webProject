
function checkImg() {
    setTimeout(() => {
        img = document.images
        for (item of img) {
            if (item.complete == false || item.naturalHeight == 0) {
                item.src = "http://localhost/myweb/webProject/app/views/assets/images/upload-error.png"
            }
        }
    }, 3000);
}
checkImg()