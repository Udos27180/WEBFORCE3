function ajax(){
    let xhr = null;
    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        try {
            xhr = new ActiveXObject("Msxml12.XMLHTTP");
        }
        catch (x) {
            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    else {
        alert('Mettre le navigateur à jour');
        xhr = false;
    }
return xhr;
}