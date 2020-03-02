<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <script src="./asset/js/ajax.js"></script>
    <script src="./asset/js/getFormData.js"></script>
    <script src="./asset/js/xhrTest.js"></script>

</head>

<body>
    <p onclick="test()">Clique</p>
    <form action="" method="post">
        <label for="nom">nom</label>
        <input type="text" name="nom" id="nom"><br>
        <label for="prenom">prenom</label>
        <input type="text" name="prenom" id="prenom"><br>
        <label for="email">email</label>
        <input type="email" name="email" id="email"><br>
        <input type="reset" value="Effacer">
        <button onclick="test();">Envoyer</button>
        <!--    <input type="submit" value="Envoyer" onsubmit="test()">    -->
    </form>
</body>

</html>