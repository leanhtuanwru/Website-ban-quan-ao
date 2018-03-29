
    var xhttp = new XMLHttpRequest();

    function getdata(id) {
        xhttp.open('GET', '../get_slide.php?data='+id, true);
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200)

            {
                kq = xhttp.responseText;
                document.getElementById('getslide').innerHTML = kq;
            };
            xhttp.send();
        }
    
}



//function loadDoc() {
//  var xhttp = new XMLHttpRequest();
//  xhttp.onreadystatechange = function() {
//    if (this.readyState == 4 && this.status == 200) {
//     document.getElementById("demo").innerHTML = this.responseText;
//    }
//  };
//  xhttp.open("GET", "ajax_info.txt", true);
//  xhttp.send();
//}

//
//$('li').click(function() {
//        // $('#content').text($(this).text()+'-'+$(this).attr('value'));
//        var objHTTP = new XMLHttpRequest();
//        var id = $(this).attr('value');
//        
//        objHTTP.onreadystatechange = function() {
//            if (this.readyState == 4 && this.status == 200)
//
//            {
//                $('#content').text(this.responseText);
//            }
//        };
//        objHTTP.open('GET', 'getNews.php?id=' + id, true);
//        objHTTP.send();
//    });
























