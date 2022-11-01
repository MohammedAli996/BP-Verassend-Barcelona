<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!----css link viewport----->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----css link homepage----->
    <link rel="stylesheet" href="./css/nav-footer.css" />
    <!----css link skin color----->
    <link rel="stylesheet" href="./skin/color-1.css">
    <!-- Font icons pulled from remix icon CDN (Content delivery network) -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
   
    <title>Verassend Barcelona</title>
    <?php
            require_once 'layout.php';
            $layout = new PageLayout();
     
        ?>
</head>

<body>
    <!-- navigation menu start  -->
    <?php
            $layout->getNavbarHead("");
        ?>
    <!-- navigation menu end  -->
    <html>

    <style>
    .rent {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box1 {
        display: flex;
        position: relative;
        border-radius: 9px;
        border-width: 1px;
        border-style: solid;
        text-align: center;
        width: 700px;
        height: 500px;
        flex-direction: column;
        background-color: var(--skin-color-nav-footer);
        align-items: center;
        margin: auto;


    }

    .box2 {
        display: flex;
        position: relative;
        border-radius: 9px;
        border-width: 1px;
        border-style: solid;
        text-align: center;
        width: 700px;
        height: 210px;
        flex-direction: column;
        background-color: var(--skin-color-nav-footer);
        align-items: center;
        margin: auto;



    }

    .container1 {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .container1 input {
        position: relative;
        opacity: 0;
        cursor: pointer;
    }

    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 50%;
    }

    .container1:hover input~.checkmark {
        background-color: #ccc;
    }

    .container1 input:checked~.checkmark {
        background-color: blue;
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .container1 input:checked~.checkmark:after {
        display: block;
    }

    .container1 .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }

    .input-group {
        position: relative;
        text-align: center;
    }

    .input-group2 {
        position: relative;
        text-align: center;
        margin-top: 5%;
    }

    .input-group3 {
        position: relative;
        text-align: center;
        margin-top: 5%;
    }

    .input-group4 {
        position: relative;
        text-align: center;
        margin-top: 5%;
    }

    .input-group5 {
        position: relative;
        text-align: center;
        margin-top: 5%;
    }

    .input {

        display: flex;
        width: 520px;
        grid-template-columns: 120px 120px 120px;
        align-items: start;
        justify-content: space-between;
        flex-direction: column;
        padding: 18px;
        border: none;

        border-radius: 4px;
        font: inherit;
        color: #fff;
        background-color: transparent;
        outline: 2px solid #fff;

    }

    .input-label {
        position: absolute;
        top: 0;
        left: 0;
        transform: translate(10px, 10px);
        transition: transform .25s;

    }

    input:focus+.input-label,
    input:valid+.input-label {
        transform: translate(10px, -14px)scale(1.5);
        color: black;
        padding-inline: 5px;
        background-color: transparent;

    }

    .input:is(:focus, :valid) {
        outline-color: black;
    }

    

    body {
        font-family: sans-serif;
        background-color: var(--skin-color-body);
        font-weight: bold;
    }

    .text-box [type="submit"]{
        margin-left: -120px;
        margin-top: 10px;
        z-index: 4;
        cursor: pointer;

    }

    .btn:link,
    .btn:visited {
        text-transform: uppercase;
        text-decoration: none;
        padding: 15px 40px;
        display: inline-block;
        border-radius: 100px;
        transition: all .2s;
        position: absolute;
    }

   

    .btn:active {
        transform: translateY(-1px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    .btn-white {
        background-color: #fff;
        color: #777;
    }

    .btn::after {
        content: "";
        display: inline-block;
        height: 100%;
        width: 100%;
        border-radius: 100px;
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        transition: all .4s;
    }

    .btn-white::after {
        background-color: var();
    }

    .btn:hover::after {
        transform: scaleX(1.4) scaleY(1.6);
        opacity: 0;
    }

    .btn-animated {
        animation: moveInBottom 5s ease-out;
        animation-fill-mode: backwards;
    }

    @keyframes moveInBottom {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }

        100% {
            opacity: 1;
            transform: translateY(0px);
        }
    }

    h3,
    h2,
    p {
        color: var(--text-black-900);
        font-size: 15px;
        
    }
    </style>
    </head>

    <body>
        <div class="rent">
            <br><br>
        </div>

        <div class="box1"><br><br>
            <h1>
                Reserveer hier uw Fiets (tour)
                <div class="inputbg">

            </h1><br><br>

            <div class="input-group">
            <?php
          // (A) PROCESS RESERVATION
          if (isset($_POST["date"])) {
          require "2-reserve.php";
         if ($_RSV->save(
         $_POST["date"], $_POST["slot"], $_POST["name"],
         $_POST["email"], $_POST["tel"], $_POST["notes"])) {
         echo "<div class='ok'>Reservation saved.</div>";
         } else { echo "<div class='err'>".$_RSV->error."</div>"; }
     }
     ?>
        
         
          
                
   <form id="resForm" method="post" target="_self">
    <div class="input-group">
   
      <label for="res_name" class="input-label">Name</label>
      <input type="text" required name="name" value=" " required class="input"/></div></div>

     <div class="input-group2">
      <label for="res_email" class="input-label">Email</label>
      <input type="email" required name="email" value=" " required class="input"/></div>

      <div class="input-group3">
      <label for="res_tel" class="input-label">Telephone Number</label>
      <input type="text" required name="tel" value=" " required class="input"/></div>

      <div class="input-group4">
      <label for="res_notes" class="input-label">Tour of Huren?</label>
     <div> <input type="text" name="notes" value=" " required class="input"/></div>
     <br>
      <?php
      // @TODO - MINIMUM DATE (TODAY)
      // $mindate = date("Y-m-d", strtotime("+2 days"));
      $mindate = date("Y-m-d");
      ?>
      <label>Reservation Datum</label>
      <input type="date" required id="res_date" name="date"
             min="<?=$mindate?>">
             <br>

      <label>Reservation Dagdeel</label>
      <select name="slot">
        <option value="AM">AM</option>
        <option value="PM">PM</option>
      </select><br>
      <div class="btn">
        <br>

      <input type="submit" value="Submit"/>
      </div>
    </form>
  </body>
</html>
            </div>
        <br>
         
            <div class="text-box">
         
               
            </div>
            </form>
        </div>
        </div>
        <div class="box2">
            <h2>Prijzen </h2>
            <p>In verband met stijgende prijzen hanteren wij een minimum van max. 8 mensen per bestelling* </p><br><br>
            <h3>Fiets tour </h3><br>
            <h3>€ 15,- </h3><br><br>
            <h3> Fiets huren per stuk </h3><br><br>
            <h3>€ 10,- <h3><br>
        </div>
        <!-- Footer Contact start -->
        <?php
            $layout->getNavbarFoot("");
        ?>
        <!-- Footer Contact end -->
    </body>

    </html>
