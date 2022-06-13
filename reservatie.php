

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
    <!--font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <head>
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
         width: 400px;
         height: 350px;
         flex-direction: column;
         background-color: white;    
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
         width: 400px;
         height: 210px;
         flex-direction: column;
         background-color: lightblue;    
         align-items: center;
         margin: auto;
         
         
     }

     .container {
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
     .container input {
  position: absolute;
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
.container:hover input ~ .checkmark {
  background-color: #ccc;
}
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}
     
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.container input:checked ~ .checkmark:after {
  display: block;
}

.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

.img {
    display: flex;
    position: relative;
   margin-top :-630px ;
   padding: 70px;
}

.img2 {
    display: flex;
    position: relative;
    margin: 20px;
    padding: 50px ;
    top: -740px;
    float: right;
  
}

    </style>
    </head>
    <body>
    <div class="rent">
        <br><br>
    </div>
    <div class="box1"><h1>
            Reserveer hier uw Fiets (tour)
    </h1>
        <label for="lname">Naam </label>
    <input type="text" id="lname" name="lname" value=" " size="45"><br><br>
  
    <label for="lname">Adres </label>
    <input type="text" id="lname" name="lname" value=" " size="45"><br><br>

    <label for="lname">E-mail </label>
    <input type="text" id="lname" name="lname" value=" " size="45"><br><br>
    
    <label for="lname">IBAN </label>
    <input type="text" id="lname" name="lname" value=" " size="45"><br><br>
 
    
    <h2> Maak hier uw keuze! </h2>
    <label class="container">Fiets tour (T.w.v.€85,- )
  <input type="radio" checked="checked" name="radio">
  <span class="checkmark"></span>
</label>
<label class="container">Fiets huren (T.w.v.€45,-)
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
   

    </div>
<br>
    <div class="box2">
        <h2>Prijzen </h2>
        <p>In verband met stijgende prijzen hanteren wij een minimum van max. 8 mensen per bestelling* </p><br><br>
        <h3>Fiets tour  </h3><br>
        <h3>€ 85,- </h3><br><br>

        <h3> Fiets huren per stuk </h3><br><br>
        <h3>€ 45,- <h3><br>

    </div>
<div class="img">
<img src="bikeride.jpg" alt="bikeride" height="600" width="370">
</div>
<div class="img2">
    <img src="bikerack.jpeg" alt="bikerack" height="600" width="370">
</div>
    </body>
</html>
    <!-- Footer Contact start -->
    <?php
            $layout->getNavbarFoot("");
        ?>
    <!-- Footer Contact end -->
</body>

</html>