<?php
class PageLayout
{
    public function getNavbarHead()
    {
        echo "
            <nav class='navbar'>
                <div class='logo'>
                    <img src=''>
                </div>
                <ul class='dropdown-content'>
                    <li><a href='#'>Home</a></li>
                    <li><a href='#'>Reserveren</a></li>
                    <li><a href='#'>Informatie</a></li>
                    <li><a href='#'>Prijzen</a></li>
                    <li><a href='#' >Log in</a></li>
                </ul>
                <div class='burger'>
                    <div class='line1'></div>
                    <div class='line2'></div>
                    <div class='line3'></div>
                </div>
            </nav>
            <script src='./JS/app.js'></script>
        ";
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
                    <li>fietsen</li>
                    <li>fietstours</li>
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