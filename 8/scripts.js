/**
 * Client-side JavaScipt code
 */

// TODO

function getAlbum(album_title) {
    var xhr = new XMLHttpRequest();
    /* register an embedded function as the handler */
    xhr.onreadystatechange = function() {
        /* readyState = 4 means that the response has been completed
         * status = 200 indicates that the request was successfully completed */
        if (xhr.readyState == 4 && xhr.status == 200) {
            var result = xhr.responseText;
            //document.getElementById("username_status").innerHTML = result;
        }
    };
}
