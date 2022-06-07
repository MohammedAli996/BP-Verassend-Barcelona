<?php
class PageLayout
{
    public function getNavbarHead()
    {
        echo '
        <header>
            <nav class="navbar">
                <div class="logo">
                    <img src="">
                </div>
                <ul class="dropdown-content">
                    <li class="nav-item"><a href="#" class="nav-link" id="active">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Reserveren</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Informatie</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Prijzen</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Log in</a></li>
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
        <nav class='footercapsule'>
            <div class='footerlogo'>
                <img class='logofooter' src='' >
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
                    <li>openingstijden:</li>
                    <li>tel:</li>
                    <li>e-mail:</li>
                    <li>postcode:</li>
                </ul>
            </div>
            <div class='social-links'>
                <a href=''><i class='fa fa-facebook-official'style='font-size:48px'></i></a>
                <a href=''><i class='fa fa-instagram'style='font-size:48px'></i></a>
                <a href=''><i class='fa fa-whatsapp'style='font-size:48px'></i></a>
            </div>
        </nav>
        ";
    }
}