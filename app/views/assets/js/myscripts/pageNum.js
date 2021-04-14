var pageNum = 0;
var timeID = null;
var morePages = [];

function loadPages() {
    var pageCon = document.getElementById("loadPageArea");
    for (var i = 0; i<morePages.length; i++) {
        var elePage = document.createElement("div");
        elePage.setAttribute("class", "item");
        elePage.innerHTML = `
            <a href="page.php?id=${morePages[i]['id']}">
                <div class="video_thumbnail">
                    <img class="img-fluid" src="${morePages[i]['url']}">
                </div>
                <div class="video_description">
                    <h4> ${morePages[i]["topic"]} <span>${morePages[i]['created']}</span> </h4>
                    <h2 >${morePages[i]["title"]}</h2>
                    <p>${morePages[i]["label"]}</p>
                </div>
            </a>
            `;
        pageCon.appendChild(elePage)
    }
    timeID = null;
}

function loadMore() {
    if (timeID == null) {
        morePages = [];
        pageNum += 1;
        var offset = pageNum * 7;
        timeID = setTimeout(function () {
            request = $.ajax({
                url: "http://localhost/myweb/webProject/app/model/loadmore.php",
                type: "post",
                data: { offset: offset },
                dataType: "JSON",
                complete: function (r) {
                    morePages = JSON.parse(r.responseText);
                    loadPages();
                },
            });
        }, 250);
    }
}
