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
            <form class="inputbox" action="formsubmited.php" method="post">
               <div class="line"><p class="libelle">Nom</p><input name="nom" class="owninp" type="text"></div>
               <div class="line"><p class="libelle">Prenom</p><input name="pnom" class="owninp" type="text"></div>
               <div class="line"><p class="libelle">Email</p><input name="email" class="owninp" type="text"></div>
               <div class="line"><p class="libelle">Hotel</p><input name="hotel" class="owninp" type="text"></div>
               <div class="line"><p class="libelle">Adresse</p><input name="adresse" class="owninp" type="text"></div>
               <div class="line"><p class="libelle">Pays</p><input name="pays" class="owninp" type="text"></div>
               <div class="line"><p class="libelle">N° Chambres</p><input name="nbc" class="owninp" type="text"></div>
               <!-- <div class="line"><p class="libelle">Prix / Nuit</p><input name="prix" class="owninp" type="text"></div> -->
               <div class="line">
                   <label style="color: white">Prix / Nuit</label>
                   <p class="libelle linediv"></p><input name="cs" class="owninp" type="text" placeholder="Chambre Simple">
                   <p class="libelle linediv"></p><input name="cd" class="owninp" type="text" placeholder="Chambre Double">
                   <p class="libelle linediv"></p><input name="ct" class="owninp" type="text" placeholder="Chambre Triple">
               </div>
               
               <!-- <div class="checkbox">
                    <label class="">Type chambre</label>
                    <div class="checkboxinputs">
                        <input  type="checkbox" id="single" value="single">
                        <label class="inp">Simple</label>
    
                        <input type="checkbox" id="double" value="double">
                        <label class="inp">Double</label>
        
                        <input type="checkbox" id="triple" value="triple">
                        <label class="inp">Triple</label>
                    </div>
                </div> -->

               <input class="searchbutton" Type="submit" value="Souscrire"/>
            </form>
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