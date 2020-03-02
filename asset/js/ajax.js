function ajax(){
    let xhr = null;
    if (windows.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        try {
            xhr = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (x) {
            xhr = new ActiveXObject("Microsoft.XMLHttp");

        }
    }
    else {
        alert('Mettre le navigateur à jour');
        xhr = false;
    }
return xhr;
}