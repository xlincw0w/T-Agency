<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Travel Agency</title>
</head>
<body>

    <div class="maindiv">

        <header class="header">
            <a class="logo" href="index.php">Travel Agency</a>
        </header>

        <div class="main">
            <div>
            <form action="search.php">
                <h3 class="mainslogan">Trouvez votre hotel idéal, et comparez les prix.</h3>
                <input class="indexbar "type="text" placeholder="Tapez votre destination" id="location">
                <a href="search.php" id="search">
                    <button class="indexbutton">Rechercher ></button>
                </a>
            </form>
                <a class="gerant" href="owner.php"> > Vous etes gérant d'un hotel ? Ajoutez le > </a>

            </div>
        </div>

        <footer class="footer">
            <div class="contactinformation">
                    <h4 class="h4contactinformation">Contact Information</h4>
                    <p class="info">Contact : contact@travelagency.com</p>
                    <p class="info">Tel : +21300000000</p>
                    <p class="info">Fax : +21300000000</p>
            </div>

            <div class="copyrights">
                <p>Travel Agency inc. Tout droit réservé</p>
            </div>
            <div class="follow">
                <h4 class="followus">Nous suivre</h4>
                <a class="followlinks" href="https://www.facebook.com/" target="_blank">Facebook</a>
                <a class="followlinks" href="https://www.instagram.com/" target="_blank">Instagram</a>
                <a class="followlinks" href="https://www.twitter.com/" target="_blank">Twitter</a>
            </div>
        </footer>

    </div>

</body>
</html>