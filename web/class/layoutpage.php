<?php

class PageLayout
{
    private string $imagePath = "../img/logo.ico";
    public function getNavbarHead(string $path1, string $path2, string $path3, string $path4)
    {
        echo "
    <header>
        <nav class='navbar'>
            <div class='logo'>
            <img class='logoimg' src=$this->imagePath alt='[LOGO]'>
            </div>
            <div class='dropdown-content'>
                <li class='nav-item'><a href=" . $path1 . 'index.php' .  " class='nav-link'>Home</a></li>
                <li class='nav-item'><a href=" . $path2 . 'form.php' . " class='nav-link'>Reserveren</a></li>
                <li class='nav-item'><a href=" . $path3 . 'info.php' .  " class='nav-link'>Informatie</a></li>
                <li class='nav-item'><a href=" . $path4 . 'login.php' . " class='nav-link'>Log in</a></li>
            </div>
            <div class='hamburger'>
                <span class='bar'></span>
                <span class='bar'></span>
                <span class='bar'></span>
            </div>
        </nav>
        <script src='../JS/app.js'></script>
    </header>
    ";
    }
    public function getNavbarFoot()
    {
        echo "
    <footer class='footercapsule'>
        <div class='footerlogo'>
        <img class='logoimg' src=$this->imagePath alt='[LOGO]'>
        </div>
        <div class='textfooter'>
            <h1 class='fietsenhuren'>fietsenhuren</h1>
            <ul class='fietsen-soort'>
            </br>
            <a href='reservatie.php'>
                <li>Fiets-tours</li>
            </a>
            </br>
            <a href='reservatie.php'>
                <li>Fiets-verhuur</li>
            </a>
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
    public function form(string $formType)
    {
        echo '<div class="formcontainer">
        <form method="POST">
            ' . "<h1 class='titleform'>$formType</h1>" . '
            <label for="name"><b>Voornaam:</b></label>
            <input type="text" name="Voornaam" required="required"/>
            <label for="name"><b>Achternaam:</b></label>
            <input type="text" name="Achternaam" required="required"/>
            <label for="quantity"><b>Aantal fietsen:</b></label>
            <input type="number" id="quantity" name="fietsen" min="1" max="20"required="required"/>
            <label for="date"><b>Datum :</b></label>
            <input type="date" id="date" name="datum" min="2021-11-5"required="required"/>
            <label for="email"><b>Email:</b></label>
            <input type="email" id="email" name="email"required="required"/>
            <input class="submit" type="submit" value="Verzenden"/>
        </form>
    </div>';
    }
}