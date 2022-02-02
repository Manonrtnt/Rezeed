<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Reezed </title>
        <link rel="stylesheet" href="./style/style.css">

        <script src="./scripts/ext/node_modules/animejs/lib/anime.min.js"></script>

        <script src="./scripts/front/generic.js"></script>
        <script src="./scripts/front/animStates.js"></script>
        <script src="./scripts/front/equalizerAnim.js"></script>
        <script src="./scripts/front/modalHandler.js"></script>

        <script src="./scripts/modules/validationModule.js"></script>
        <script src="./scripts/modules/userFunctions.js"></script>
        <script src="./scripts/modules/controlerHandler.js"></script>
        <script src="./scripts/modules/formModule.js" defer></script>
        <script src="./scripts/index.js" defer></script>
    </head>

    <body>
        <svg viewBox="0 0 1920 1080" style="fill-rule:evenodd;clip-rule:evenodd;stroke-miterlimit:1.5;">
            <path id="bar1" class="bar" d="M80,244L0,244L0,1080L80,1080L80,244Z"/>
            <path id="bar2" class="bar" d="M160,352L80,352L80,1080L160,1080L160,352Z"/>
            <path id="bar3" class="bar" d="M240,427L160,427L160,1080L240,1080L240,427Z"/>
            <path id="bar4" class="bar" d="M320,478L240,478L240,1080L320,1080L320,478Z"/>
            <path id="bar5" class="bar" d="M400,507L320,507L320,1080L400,1080L400,507Z"/>
            <path id="bar6" class="bar" d="M480,540L400,540L400,1080L480,1080L480,540Z"/>
            <path id="bar7" class="bar" d="M560,576L480,576L480,1080L560,1080L560,576Z"/>
            <path id="bar8" class="bar" d="M640,597L560,597L560,1080L640,1080L640,597Z"/>
            <path id="bar9" class="bar" d="M720,540L640,540L640,1080L720,1080L720,540Z"/>
            <path id="bar10" class="bar" d="M800,507L720,507L720,1080L800,1080L800,507Z"/>
            <path id="bar11" class="bar" d="M880,473L800,473L800,1080L880,1080L880,473Z"/>
            <path id="bar12" class="bar" d="M960,420L880,420L880,1080L960,1080L960,420Z"/>
            <path id="bar13" class="bar" d="M1040,473L960,473L960,1080L1040,1080L1040,473Z"/>
            <path id="bar14" class="bar" d="M1120,507L1040,507L1040,1080L1120,1080L1120,507Z"/>
            <path id="bar15" class="bar" d="M1200,487L1120,487L1120,1080L1200,1080L1200,487Z"/>
            <path id="bar16" class="bar" d="M1280,420L1200,420L1200,1080L1280,1080L1280,420Z"/>
            <path id="bar17" class="bar" d="M1360,377L1280,377L1280,1080L1360,1080L1360,377Z"/>
            <path id="bar18" class="bar" d="M1440,358L1360,358L1360,1080L1440,1080L1440,358Z"/>
            <path id="bar19" class="bar" d="M1520,323L1440,323L1440,1080L1520,1080L1520,323Z"/>
            <path id="bar20" class="bar" d="M1600,306L1520,306L1520,1080L1600,1080L1600,306Z"/>
            <path id="bar21" class="bar" d="M1680,272L1600,272L1600,1080L1680,1080L1680,272Z"/>
            <path id="bar22" class="bar" d="M1760,214L1680,214L1680,1080L1760,1080L1760,214Z"/>
            <path id="bar23" class="bar" d="M1840,249L1760,249L1760,1080L1840,1080L1840,249Z"/>
            <path id="bar24" class="bar" d="M1920,323L1840,323L1840,1080L1920,1080L1920,323Z"/>
        </svg>
        <header>
            <nav id="nav">
            <!-- <h1>Redeez</h1> -->  
                <ul id="Navbar_links">
                    <li>About</li>
                </ul>
                <div id="logo">
                    <img src="./img/rezeed2.svg" height="70px">
                </div>
            </nav>
        </header>

        <main>
            <div>
                <button id ="loginButton" class="buttons"> Login ! </button>
                <button id ="registerButton" class="buttons"> Register ! </button>
            </div>
            
            <section class="modal" id="connexion_section">
                <form id="connexion_form">
                    <img class="cross" src="./img/cross.svg"/>
                    <h3 style="font-size:1.5em";> Connection </h3>
                    <label for="login_user">Login :</label>
                    <input type="text" name="login_user" required>
                    <label for="pw_user">Password :</label>
                    <input type="password" name="pw_user" required><br/>

                    <input class="buttons" type="submit" value="Log in !" required>
                </form>
            </section>
            <section class="modal" id="register_section">
                <form id="register_form">
                    <img class="cross" id="cross2" src="./img/cross.svg"/>
                    <h3>Register !</h3>

                    <label for="name_user">Last name:</label>
                    <input type="text" name="name_user" value="Test1111" required>
                    <label for="first_name_user">First name :</label>
                    <input type="text" name="first_name_user" value="Test1111" required>

                    <label for="login_user">Login :</label>
                    <input type="text" name="login_user" value="Test111" required>
                    <label for="pw_user">Password :</label>
                    <input type="password" name="pw_user" value="Azerty1!" required>
                    <label for="pwd2_user">Confirm your password :</label>
                    <input type="password" name="pwd2_user" value="Azerty1!" required>
                    <label for="email_user">Email :</label>
                    <input type="email" name="email_user" value="azerty@azerty.fr"required><br/>

                    <label for="preferences_user">Favorite genre :</label>
                    <select name=preferences_user>
                        <option value=classique>Classical</option>
                        <option value=electro>Electro</option>
                        <option value=jazz>Jazz</option>
                        <option value=Pop>Pop</option>
                        <option value=rap>Rap</option>
                        <option value=reggae>Reggae</option>
                        <option value=rock>Rock</option>
                    </select>
                    <input class="buttons" type="submit" value="Send !" required>
                </form>
            </section>
    
        </main>
        <footer>
            <a target="_blank" id="footerLink" href="https://github.com/Manonrtnt/Rezeed">
                Developped by : ManonTNT, Riozacki & Vazn
            </a>
        </footer>
    </body>
</html>