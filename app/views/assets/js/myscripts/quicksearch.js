var searchPages = []
var search = ''
var timeoutID = null


function updatePages() {
    var sContent = document.getElementById('searchContent');
    sContent.innerHTML = "";
    if (searchPages.length==0){
        var item = document.createElement('div');
        item.setAttribute('class', 'item');
        item.innerHTML = `
        <div class="message">
            <div class="desc">
                Không tìm thấy kết quả, hãy thử từ khóa khác
            </div>
        </div>
        <div class="options">
        </div>`;
        sContent.appendChild(item);
        show()
    }else{
        for (var i = 0; i < searchPages.length; i++) {
            var item = document.createElement('div');
            item.setAttribute('class', 'item');
            item.setAttribute('style','cursor: pointer;')
            item.setAttribute('onclick',`window.location.href = 'page.php?id=${searchPages[i]['id']}'`)
            if(searchPages[i]['label'].length > 50) {
                searchPages[i]['label'] = searchPages[i]['label'].substring(0,90);
            }
            item.innerHTML = `
            <div class="message">
                <div class="time">
                    ${searchPages[i]['created']} <span>${searchPages[i]['topic']}</span>
                </div>
                <div class="title">
                    <a href="#">${searchPages[i]['title']}</a>
                </div>
                <div class="desc">
                    ${searchPages[i]['label']}
                </div>
            </div>
            <div class="options">
            </div>`;
            sContent.appendChild(item);
            show()
        }
    }
}


$('#searchInput').on('keyup change', function () {
    var newSearch = $(this).val();
    if (newSearch == "") {
        search = newSearch;
        searchPages = [];
        updatePages();
        hide()
        return;
    }
    if (search !== newSearch) {
        searchPages = [];
        search = newSearch;
        clearTimeout(timeoutID)
        timeoutID = setTimeout(function () {
            request = $.ajax({
                url: "http://localhost/myweb/webProject/app/model/quickSearch.php",
                type: "post",
                data: { action: search },
                dataType: 'JSON',
                complete: function (r) {
                    searchPages = JSON.parse(r.responseText);
                    updatePages()
                }
            });
        }, 250);

    }
});
function show() {
    if ($('#searchInput').val()!==""){
        var searchContent = document.getElementById('content-notification');
        console.log(searchContent);
        searchContent.setAttribute('style', 'opacity: 1;top: 45px;z-index: 9999;-webkit-transition: all 0.2s ease-in-out;transition: all 0.2s ease-in-out;');
    }
}

function hide(){
    var searchContent = document.getElementById('content-notification');
    searchContent.setAttribute('style', `position: absolute;
	right: -5px;
	opacity: 0;
	top: 60px;
	width: 390px;
	border-radius: 5px;
	z-index: -1;
	cursor: auto;
	background-color: #393e46;
	-webkit-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;`); 
}

$(document).mouseup(function (e) {
    var container = $("#searchbar");
    if(!container.is(e.target) && 
    container.has(e.target).length === 0) {
        hide()
    }
});