<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Reezed </title>
    <link rel="stylesheet" href="./style/player.css">
    <script src="./scripts/ext/node_modules/animejs/lib/anime.min.js"></script>

    <script src="./scripts/front/generic.js"></script>
    <script src="./scripts/front/animStates.js"></script>
    <script src="./scripts/front/equalizerAnim.js"></script>
    <script src="./scripts/modules/controlerModule.js"></script>

    <script src="./scripts/modules/userModule.js"></script>
    <script src="./scripts/player.js" defer></script>
</head>

<body>
    <svg viewBox="0 0 1920 1080" style="fill-rule:evenodd;clip-rule:evenodd;stroke-miterlimit:1.5;">
        <path id="bar1" class="bar" d="M80,244L0,244L0,1080L80,1080L80,244Z" />
        <path id="bar2" class="bar" d="M160,352L80,352L80,1080L160,1080L160,352Z" />
        <path id="bar3" class="bar" d="M240,427L160,427L160,1080L240,1080L240,427Z" />
        <path id="bar4" class="bar" d="M320,478L240,478L240,1080L320,1080L320,478Z" />
        <path id="bar5" class="bar" d="M400,507L320,507L320,1080L400,1080L400,507Z" />
        <path id="bar6" class="bar" d="M480,540L400,540L400,1080L480,1080L480,540Z" />
        <path id="bar7" class="bar" d="M560,576L480,576L480,1080L560,1080L560,576Z" />
        <path id="bar8" class="bar" d="M640,597L560,597L560,1080L640,1080L640,597Z" />
        <path id="bar9" class="bar" d="M720,540L640,540L640,1080L720,1080L720,540Z" />
        <path id="bar10" class="bar" d="M800,507L720,507L720,1080L800,1080L800,507Z" />
        <path id="bar11" class="bar" d="M880,473L800,473L800,1080L880,1080L880,473Z" />
        <path id="bar12" class="bar" d="M960,420L880,420L880,1080L960,1080L960,420Z" />
        <path id="bar13" class="bar" d="M1040,473L960,473L960,1080L1040,1080L1040,473Z" />
        <path id="bar14" class="bar" d="M1120,507L1040,507L1040,1080L1120,1080L1120,507Z" />
        <path id="bar15" class="bar" d="M1200,487L1120,487L1120,1080L1200,1080L1200,487Z" />
        <path id="bar16" class="bar" d="M1280,420L1200,420L1200,1080L1280,1080L1280,420Z" />
        <path id="bar17" class="bar" d="M1360,377L1280,377L1280,1080L1360,1080L1360,377Z" />
        <path id="bar18" class="bar" d="M1440,358L1360,358L1360,1080L1440,1080L1440,358Z" />
        <path id="bar19" class="bar" d="M1520,323L1440,323L1440,1080L1520,1080L1520,323Z" />
        <path id="bar20" class="bar" d="M1600,306L1520,306L1520,1080L1600,1080L1600,306Z" />
        <path id="bar21" class="bar" d="M1680,272L1600,272L1600,1080L1680,1080L1680,272Z" />
        <path id="bar22" class="bar" d="M1760,214L1680,214L1680,1080L1760,1080L1760,214Z" />
        <path id="bar23" class="bar" d="M1840,249L1760,249L1760,1080L1840,1080L1840,249Z" />
        <path id="bar24" class="bar" d="M1920,323L1840,323L1840,1080L1920,1080L1920,323Z" />
    </svg>
    <header>
        <nav id="nav">
            <!-- <h1>Redeez</h1> -->
            <ul id="Navbar_links">
                <li>About</li>
                <li id="logoutButton">Log out</li>
            </ul>
            <div id="logo">
                <img src="./img/default_logo.svg" id="test" height="70px">
            </div>
        </nav>
    </header>

    <main>
        <section>
            <h1> WELCOME <span class="user_pseudo"></span></h1>
            <div id="main">
                <div id="buttonsDiv">
                    <input class="music_button playerInput" type="button" value="Test">
                    <input class="music_button playerInput" type="button" value="Test">
                    <input class="music_button playerInput" type="button" value="Test">
                    <input class="music_button playerInput" type="button" value="Test">
                    <input class="music_button playerInput" type="button" value="Test">
                </div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/GRxofEmo3HA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>

                <select name=Genre class="playerInput">
                    <option value=classique> Classical</option>
                    <option value=electro> Electro</option>
                    <option value=jazz> Jazz</option>
                    <option value=Pop> Pop</option>
                    <option value=rap> Rap</option>
                    <option value=reggae> Reggae</option>
                    <option value=rock> Rock</option>
                </select>
            </div>
        </section>
    </main>
    <footer>
        <a target="_blank" id="footerLink" href="https://github.com/Manonrtnt/Rezeed">
            Developped by : ManonTNT, Riozacki & Vazn
        </a>
    </footer>
</body>

</html>