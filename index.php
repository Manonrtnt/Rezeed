<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Reezed </title>
        <link rel="stylesheet" href="./style/style.css">

        <script src="./scripts/modules/validation.js"></script>
        <script src="./scripts/modules/formModule.js" defer></script>
        <script src="./scripts/index.js" defer></script>
    </head>

    <body>   
        <header>
            <nav id="nav">
            <!-- <h1>Redeez</h1> -->  
                <ul id="Navbar_links">
                    <li>Acceuil</li>
                    <li>À propos</li>
                </ul>
                <div id="logo">
                    <img src="./img/redeez_logo.png" alt="" srcset="" height="70px" width="230px">
                </div>
            </nav>
        </header>

        <main>
            <section>
                <form id="connexion_form">
                    <h3 style="font-size:1.5em";> Connexion </h3>
                    <p>Login</p>
                    <input type="text" name="login_user" required>
                    <p>Mot de passe</p>
                    <input type="password" name="pw_user" required><br/>

                    <input id="bt1" type="submit" value="Connexion" required>
                </form>

                <form id="register_form">
                    <h3>Créer un utilisateur</h3>

                    <p>Nom :</p>
                    <input type="text" name="name_user" value="Test1111" required>
                    <p>Prénom :</p>
                    <input type="text" name="first_name_user" value="Test1111" required>

                    <p>Login :</p>
                    <input type="text" name="login_user" value="Test111" required>
                    <p>Mot de passe :</p>
                    <input type="password" name="pw_user" value="Azerty1!" required>
                    <p>Confirmer mot de passe :</p>
                    <input type="password" name="pwd2_user" value="Azerty1!" required>
                    <p>Email :</p>
                    <input type="email" name="email_user" value="azerty@azerty.fr"required><br/>

                    <select name=preferences_user>
                        <option value=classique>Classique</option>
                        <option value=electro>Electro</option>
                        <option value=jazz>Jazz</option>
                        <option value=Pop>Pop</option>
                        <option value=rap>Rap</option>
                        <option value=reggae>Reggae</option>
                        <option value=rock>Rock</option>
                    </select>
                    <input id="bt2" type="submit" value="Envoyer !" required>
                </form>
            </section>
        </main>
        <footer>
            <h3>Developped by : ManonTNT, Vazn and Riozacki</h3>
        </footer>
    </body>
</html>