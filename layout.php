<?php
class PageLayout
{
    public function getNavbarHead()
    {
        echo "
            <nav class='navbar'>
                <div class='logonav'>
                    <img src=''>
                </div>
                <div class='dropdown-content'>
                    <a href='#' class='active'>Home</a>
                    <a 'href=''>Reserveren</a>
                    <a href=''>Informatie</a>
                    <a href=''>Prijzen</a>
                    <a href='' >Log in</a>
                </div>
            </nav>
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