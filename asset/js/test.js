let xhrTest = ajax();
let test = function () {
    xhrTest.onreadystatechange = function () {
        if (xhrTest.readyState == 4 && xhrTest.status == 200) {
            alert(xhrTest.responseText);
        }
    }
    let data = getFormData();
    xhrTest.open("POST", "test.php", true);
    xhrTest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
    xhrTest.send(test());
}