

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css">
    <title>Flexbox Layout</title>
<style>
*{  
    box-sizing: border-box;
  
}
body{
    
    margin: 0;
    font-family: Arial, sans-serif;
    height: 100%;
    padding:0;
    width: 100%;
    padding-bottom: 1px;
    background: #fff;
    color:#4f545c;
    border: 2px solid black;
}

.header_img{
    position:absolute;
    left:1%;
    width: 98%;
    top:2px;
    background-size: cover;
    height: 660px;
    background-image: url(./hero-image.png);
    filter: brightness(70%);
    background-repeat: no-repeat;
    margin-bottom:550px;   
}
.header_content{
    position: absolute;
    color:white;
    top:390px;
    padding-left:450px;
}
.header_content h1{
    font-size: 65px;
    margin:5px;
    text-align:left;
    
}
.header_content p{
    color:#fff;
    font-weight: bold;
    width:100%;
    margin:5px;
    
}

nav{
    
    margin-top:50px;
    left:1%;
    width: 98%;
    top:2px;
    background-size: cover;
    height: 600px;
}
.nav .nav-text-content h1{
    font-size: 65px;
    padding-top:750px;
    padding-left:450px;
    color:#111;
    margin:5px;
    text-align:left;
}
.nav .nav-text-content p{
    font-family:Arial, Helvetica, sans-serif;
    font-size: 25px;
    padding-top:20px;
    padding-right: 450px;
    padding-left:450px;
    color:#111;
    margin:5px;
    text-align:justify;
}
.flex-parent{
    
    display: flex;
    height: auto;
    overflow: hidden;
    align-items: stretch;    
}
.flex-parent  div {
    
    width: 100%;
    margin: 8px;      
}  
.content {
    
    flex-shrink: 200px;
    width:50%;
    padding:25px;
    margin:2px;
    text-align:center;
           
}   
.aside {
    padding: 20px 5px;
    width: 49%;
    padding-right:40px;
    text-align: justify;
}
.block_1{
    
    padding:0px;
    height:75px;
    line-height:50%;
}

.block_2{
    padding:0px;
    padding-bottom:3px;
    height:55px;
}
 
.flex-parent .aside p .flex-parent .aside h3,div, input  {
    font-size: 20px;
}

input[type="text"], input[type="tel"] {
  font-size:24px;
  margin-top:3%;
}
.checkbox input[type="checkbox"],
.checkbox label {
    border-radius: 5px;

}



.checkBoxCtn {
    padding-top:40px;
    padding-left:15px;
    text-align:left;
}
.control{
    border: 2px solid #b5b9bd;
    border-radius:5px;
    padding:8px;
    margin:10px;
}
.w50{ width:45.5%;}
.w100{  width:95%;}

.checkbox {
    border-radius:5px;
    display:inline;
    padding:5px;
}
.checkbox:hover {
    border:2px solid #648ce3;
}


 .content .file-download{
    
    margin-top:100px;
    width:95%;
    padding:5px;
    margin-left:0;
    border-radius:3px;
    border:5px dashed rgb(173, 170, 170);
    border-width: 2px;
    color:rgb(68, 120, 227);
    text-align: center;
    height:180px;
   
}
.content .file-download h3{
    font-size:25px;
}
 .content .file-download p{
    font-size: 20px;
}
section h1 {
    font-size: 25px;
    border-radius:3px; 
    color:rgb(68, 120, 227);          
}

section{
   padding:20px;
   margin: 20px;
   border-radius: 8px;
   border:2px solid  #e5e6e1;
   box-shadow: 0px 2px #e5e6e1;
   width: 65%;
   min-width: 400px;  
   margin:0 auto;
   margin-top:1.5%;
}
.first-section{
    
    margin-top:100px;
}
.first-section h1{
    font-size:40px;
}
hr{
   border:1px solid #abb5c4;
}

.aside2 {
    width: 48%;
    padding-right:70px;
    text-align: justify;
}

.block_4{
    padding:0px 0px 50px;
    height:75px;
    width: 50%;
}
.block_4 h3{
    font-size:18px;
    padding:10px;
}
.p-0{ padding:0px;}

.file-download h3{
    font-size:24px;
}

.file-download p{
    font-size:18px;
}
.content_radio{
    width:50%;
    margin:10px;
    text-align:center;
           
}  
.block_radio,
.block_radio1 {
    display: inline-block;
    align-items: center;
    border: 2px solid #b5b9bd;
    border-radius: 8px;
    padding: 20px;
    box-sizing: border-box;
    text-align: left;
     
}

.block_radio1{
    
    border: 2px solid rgb(68, 120, 227);
}


.container {
  display: block;
  position: relative;
  padding-left: 80px;
  margin-bottom: 10px;
  font-weight: bold;
  cursor: pointer;
  font-size: 20px;
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
  height: 29px;
  width: 29px;
  background-color: #eee;
  border-radius: 50%;
}

.container input:checked ~ .checkmark {
  background-color:rgb(68, 120, 227);
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
 	top: 8px;
	left: 9px;
	width: 12px;
	height: 12px;
	border-radius: 50%;
	background: white;
}

.check-input{
    margin:15px;
}
.check-label{
    margin:15px;
    text-align: left;
}

.content .block_volume h3{
    margin:5px; 
    padding:15px;
    padding-left:20px;
    text-align: justify;
}
.submit{
    font-family: Courier New (monospace);
    margin-left: 450px;
    background-color: #648ce3;
    color:#fff;
    border:none;
    border-radius: 3px;
    font-size: 23px;
    text-align: center;
    margin-top:80px;
    padding: 10px;
    width: 450px;
}
.text_content{
    width: 100%;
    margin:140px 0 10px;
    padding-left:450px;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
}
.footer {
    position:sticky;
    width: 100%;
    padding-left:230px;
    height: 400px;
    background-color: rgb(229, 234, 240);
    align-items: center;        
}
.footer p{
    font-family:'Times New Roman', Times, serif;
    justify-content: center;
    color:#111;
    font-size: 22px;
    padding: 150px;
    padding-left: 220px;
    padding-right:220px;
    text-align: justify;
   
} 

::placeholder{
    color:rgb(117,139,165);
}

</style>
</head>


<body>
   
        <div class="header_img"></div>
            <div class="header_content">
                <h1>Egy tetszőleges kérdőív</h1>
            </div> 

            <div class="nav">
                <div class="nav-text-content">
                    <h1>Kedves Leendő Ügyfelünk!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas lobortis libero et metus mattis, vitae aliquet nisi venenatis. Phasellus sed
                        turpis rutrum, facilisis leo sit amet, facilisis libero.</p> 
                </div>
            </div>  
 

            <form action="process.php" method="POST">
                <section class="first-section">
                    <h1>Személyes adatok</h1>
                    <hr>    
                    <div class="flex-parent">
                        <div class="aside">
                            <div class="block_1">
                                <h3>Neve</h3>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="block_1">       
                                <h3>Telefonszáma</h3>
                                <p>Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="block_2">
                                <h3>Külföldi állampolgár vagy külföldi állandó lakcímmel rendelkezik?</h3>
                            </div> 
                            <div class="block_3">  
                                <h3>Okmányok feltöltése</h3>
                                <p>Okmányainál személyi igazolvány (mindkét oldal) vagy jogosítvány 
                                (mindkét oldal) vagy útlevél illetve a lakcím kártya lakcímet tartalmazó 
                                oldala szükséges (amennyiben Ön külföldi vagy más okmányokkal 
                                rendelkezik, úgy telefonos egyeztetés alapján).</p>
                            </div>
                        </div>
                        <div class="content" style="flex-shrink: 200px">
                            <div class="block_1 p-0"> 
                                <input type="text" name="name" class="control w50" placeholder="Vezetéknév" >
                                <input type="text" name="name2" class="control w50" placeholder="Keresztnév">
                            </div>
                            <div class="block_1 p-0">
                                <input type="tel" name="phone" class="control w100" placeholder="Telefonszám">
                            </div>
                            <div class="checkBoxCtn" >
                                <div class="checkbox control">               
                                    <label for="check1"><b>Igen</b></label>     
                                    <input type="checkbox" class="control" name="check1" id="check1" value="Válasz1"></input>
                                </div>
                                <div class="checkbox control">
                                    <label for="check2"><b>Nem</b></label>
                                    <input type="checkbox" class="control"  name="check2" id="check2" value="válasz2">
                                </div>
                        
                                <div class="file-download block_3" > 
                                    <h3>Húzd be a fájlokat</h3>
                                    <p>vagy<a href="#" style="color:rgb(68, 120, 227); text-decoration:underline"> kattintson ide</a> a fájlok böngészéségez</p>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </section>
    
                <section class="first-section">
                    <h1>Vagyonnal kapcsolatos adatok</h1>
                    <hr>
                    <div class="flex-parent">
                        <div class="aside" style="flex-shrink: 200px">
                            <div class="block_1">
                            <h3>Mekkora a teljes vagyonának volumene?</h3>
                        </div>
                    </div>
                    <div class="content_radio">
                        <div class="block_radio">
                            <label class="container">150 - 300 millió HUF
                            <input type="radio" name="radio"<?php if (isset($radio) && $radio=="150-300 millió HUF") echo "checked";?> value="150-300 millió HUF">
                            <span class="checkmark"></span></label>
                        </div>
                        <div class="block_radio1">
                        <label class="container">300 - 1000 millió HUF
                        <input type="radio" name="radio" <?php if (isset($radio) && $radio=="300-1000 millió HUF") echo "checked";?> checked value="300-1000 millió HUF">
                        <span class="checkmark"></span></label>
                    </div>
                    <div class="block_radio">
                        <label class="container">1 - 5 milliárd HUF
                        <input type="radio" name="radio" <?php if (isset($radio) && $radio=="1-5M HUF") echo "checked";?> value="1-5M HUF">
                        <span class="checkmark"></span></label>
                    </div>
                    <div class="block_radio">
                        <label class="container">5 milliárd HUF feletti
                        <input type="radio" name="radio"<?php if (isset($radio) && $radio=="5Milliárd+ feletti") echo "checked";?> value="5Milliárd+ feletti">
                        <span class="checkmark"></span></label>
                    </div>
               </section>

                <section class="first-section">
                    <h1>Mire szeretné használni a számlát és havonta mekkora <br>
                        forgalmat tervez rajta bonyolítani?</h1>
                    <p>A csúszkát állítsa be minden sorban a kívánt mértékig</p>
                    <hr>
                    </div>    
                    <div class="flex-parent">
                        <div class="aside2">
                            <div class="block_4">
                                <h3>munkabér (nyugdíj, ösztöndíj,stb.) és járulék jellegű utalások</h3>
                            </div>
                            <div class="block_4">       
                                <h3>egyéb fenntartási költségek (pl. rezsi, iroda bérleti díj, stb.)</h3>
                            </div>
                            <div class="block_4">
                                <h3>bankkártyás vásárlások</h3>
                            </div> 
                            <div class="block_4">  
                                <h3>belföldi utalások - jóváírás</h3>
                            </div>
                            <div class="block_4">  
                                <h3>belföldi utalások - terhelés (fentiektől eltérő jogcímen)</h3>
                            </div>
                            <div class="block_4">  
                                <h3>külföldi utalások jóváírás</h3>
                            </div>
                            <div class="block_4">  
                                <h3>külföldi utalások terhelés</h3>
                            </div>
                            <div class="block_4">  
                                <h3>készpénz tranzakciók (ATM, pénztár)</h3>
                            </div>
                        </div>
                        <div class="content">
                            <div class="block_volume"style="flex-shrink: 200px"  >
                                <label for="vol"></label>
                                <input class="w100" type="range" id="vol" name="vol0" min="0" max="100000" value="3000">
                                <h3>Nem tervez</h3>
                            </div>
                            <div class="block_volume">
                                <label for="vol"></label>
                                <input class="w100" type="range" id="vol" name="vol1" min="0" max="500000" value="80000">
                                <h3>0 - 500 000 Ft / hó</h3>
                            </div>
                            <div class="block_volume">
                                <label for="vol"></label>
                                <input class="w100" type="range" id="vol" name="vol2" min="500001" max="1000000" value="700000">
                                <h3>500 001 - 1 000 000 Ft / hó</h3>
                            </div>
                            <div class="block_volume">
                                <label for="vol"></label>
                                <input class="w100" type="range" id="vol" name="vol3" min="1000001" max="3000000" value="2200000">
                                <h3>1 000 001 - 3 000 000 Ft / hó</h3>
                            </div>
                            <div class="block_volume">
                                <label for="vol"></label>
                                <input class="w100" type="range" id="vol" name="vol4" min="8000001" max="20000000" value="18000000">
                                <h3>8 000 001 - 20 000 000 Ft / hó</h3>
                            </div>
                            <div class="block_volume">
                                <label for="vol"></label>
                                <input class="w100" type="range" id="vol" name="vol5" min="100000000" max="500000000" value="500000000">
                                <h3>100 000 000 Ft felett / hó</h3>
                            </div>
                            <div class="block_volume">
                                <label for="vol"></label>
                                <input class="w100" type="range" id="vol" name="vol6" min="3000001" max="5000000" value="4200000">
                                <h3>3 000 001 - 5 000 000 Ft / hó</h3>
                            </div>
                            <div class="block_volume">
                                <label for="vol"></label>
                                <input class="w100" type="range" id="vol" name="vol7" min="5000001" max="8000000" value="7400000">
                                <h3>5 000 001 - 8 000 000 Ft / hó</h3>
                            </div>
                        </div>
                    </div>
                </section>
    <div>
    <button class="submit">Küldés</button>
    </div>
</form>
<div class="text_content">
    <p>Együttműködését előre is köszönjük </p>
    <p>Üdvözlettel</p>
    <p>Leendő bankára</p>
    </div>    
</div>
<div class="footer">
    <p>
        Suspendisse congue aliquam viverra. Integer ex ipsum, rutrum et gravida quis, tempor sed sem. Maecenas sagittis ligula sed ultrices ultricies. Praesent 
        id commodo orci, facilisis congue tortor. Donec feugiat mi in tincidunt cursus. Sed vitae diam vel eros cursus gravida. Proin tempor accumsan facilisis. 
        Nam augue velit, pulvinar a lectus vitae, congue facilisis velit. Morbi commodo, mauris at suscipit auctor, lacus libero condimentum libero, vel maximus 
        dui tortor in tortor. Nulla laoreet consectetur est, sit amet mollis justo. Suspendisse porta, elit et efficitur auctor, risus mauris tempus ipsum, at lobortis 
        ex augue ut neque. Praesent eget est urna. Morbi efficitur enim urna, id tincidunt quam sodales nec. 
    </p>

</div>
</body>    
</html>