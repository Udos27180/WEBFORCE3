<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
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
        else{
            alert('Mettre le navigateur à jour');
            xhr = false;
        }
    </script>
</body>

</html>