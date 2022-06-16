<?php
class PageLayout
{
    public function getNavbarHead()
    {
        echo '
        <header>
            <nav class="navbar">
                <div class="logo">
                <a href="index.php"><img src="./photo/logo.ico" style="text-align: left"></a>
                </div>
                <ul class="dropdown-content">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="reservatie.php" class="nav-link">Reserveren</a></li>
                    <li class="nav-item"><a href="info.php" class="nav-link">Informatie</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Prijzen</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link">Log in</a></li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
            <script src="./JS/app.js"></script>
        </header>
        ';
    }
    public function getNavbarFoot()
    {
        echo "
        <footer class='footercapsule'>
            <div class='footerlogo'>
            <a href='index.php'><img src='./photo/logo.ico'></a>
            </div>
            <div class='textfooter'>
                <h1 class='fietsenhuren'>fietsenhuren</h1>
                <ul class='fietsen-soort'>
                    <li>Fiets-tours</li>
                    <li>Fiets-verhuur</li>
                </ul>
            </div>
            <div class='textfooter'>
                <h1 class='Contact'>contact</h1>
                <ul class='Contact-footer'>
                    <li>openingstijden: Ma-Zo: 08:00-18:00.</li>
                    <li>tel: +346555254</li>
                    <li>e-mail: contact@VerassendBarcelona.com.</li>
                    <li>Straatnaam:  Avda. Generalísimo 19.</li>
                </ul>
            </div>
            <div class='icons'>
                <a href='#' class='icon icon--instagram'>
                    <i class='ri-instagram-line'></i>
                </a>
                <a href='#' class='icon icon--facebook'>
                    <i class='ri-facebook-line'></i>
                </a>
                <a href='#' class='icon icon--whatsapp'>
                    <i class='ri-whatsapp-line'></i>
                </a>
            </div>
            <br>
        </footer>
        ";
    }
}