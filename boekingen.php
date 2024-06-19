<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/Booking.css">
</head>

<body>
    <?php include "header.php"; ?>
    <section class="booking">
        <h1 class="heading-title">book nu je vakantie!</h1>
        <form method="post" class="book-form">
            <div class="flex">
                <div class="inputBoks">
                    <span>volle name :</span>
                    <input type="text" placeholder="enter your name" name="name" required>
                </div>
                <div class="inputBoks">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>
                <div class="inputBoks">
                    <span>telefoon :</span>
                    <input type="number" placeholder="enter your number" name="phone" required>
                </div>
                <div class="inputBoks">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address" required>
                </div>
                <div class="inputBoks">
                    <span>waar heen :</span>
                    <select placeholder="place you want to visit" name="location" required>
                        <option value="Spanje">Spanje</option>
                        <option value="Griekenland">Griekenland</option>
                        <option value="Zwitserland">Zwitserland</option>
                        <option value="Portegal">Portugal</option>
                        <option value="Turkije">Turkije</option>
                    </select>
                </div>
                <div class="inputBoks">
                    <span>hoe veel :</span>
                    <input type="number" placeholder="number of guests" name="guests" required>
                </div>
                <div class="inputBoks">
                    <span>aankomst </span>
                    <input type="date" name="arrivals" required>
                </div>
                <div class="inputBoks">
                    <span>vetrek :</span>
                    <input type="date" name="leaving" required>
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
    </section>
    <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
    <section class="packages">
        <h1 class="heading-title">top bestemingen</h1>
        <div class="boks-container">
            <div class="boks">
                <div class="image">
                    <img src="assets/spanje%20vakantie.jpg" alt="">
                </div>
                <div class="content">
                    <h3>spanje Tour </h3>
                    <p>Een vakantie in Spanje</p>
                    <h2>Het biedt een perfecte mix van zonnige stranden, rijke cultuur, heerlijke gastronomie en bruisend nachtleven, ideaal voor een onvergetelijke reiservaring.
                    </h2>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="boks">
                <div class="image">
                    <img src="assets/turkijevakantie.jpg" alt="">
                </div>
                <div class="content">
                    <h3>turkije</h3>
                    <p>Een vakantie in Turkije</p>
                    <h2>combineert schitterende kustlijnen, eeuwenoude geschiedenis, levendige markten en heerlijke culinaire tradities voor een onvergetelijk avontuur.
                    </h2>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="boks">
                <div class="image">
                    <img src="assets/portugalvakantie.jpg" alt="">
                </div>
                <div class="content">
                    <h3>portugal</h3>
                    <p>Portugal betovert </p>
                    <h2>reizigers met zijn schilderachtige kustdorpen, rijke geschiedenis, voortreffelijke keuken en warme gastvrijheid, wat zorgt voor een onvergetelijke ervaring.</h2>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="boks">
                <div class="image">
                    <img src="assets/griekenlandvakantie.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Griekenland </h3>
                    <p>Griekenland fascineert </p>
                    <h2>bezoekers met zijn adembenemende eilanden, indrukwekkende oude ruïnes, heerlijke mediterrane keuken en levendige cultuur, wat zorgt voor een onvergetelijke ervaring.</h2>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="boks">
                <div class="image">
                    <img src="assets/Autovakantie-Zwitserland_01_D.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Zwistserland</h3>
                    <p>Zwitserland</p>
                    <h2>biedt bezoekers adembenemende Alpenlandschappen, serene meren, charmante steden en eersteklas ski-resorts, ideaal voor natuurliefhebbers en avonturiers.
                    </h2>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="boks">
                <div class="image">
                    <img src="assets/zweden.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Zweden</h3>
                    <p>Zweden verwelkomt</p>
                    <h2>reizigers met uitgestrekte bossen, kristalheldere meren, kleurrijke steden en een rijke cultuur, wat een onvergetelijke ervaring belooft. </h2>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>


        </div>

    </section>
    <?php include "footer.php"; ?>
</body>

</html>


[13:09] Mehedi, Tamzid
body
{
font-family: 'Sen', sans-serif;
color: #368296;
background-color: #ffffff;
margin: 0;
padding: 0;
}

.booking {
position: relative;
padding: 50px 0;
text-align: center;
background-image: url("Webapp-2-Reisbureau-opdracht-main/Reisbureau code/assets/depositphotosbooking.jpg");
background-size: cover;
height: 1500px;
}
.booking .heading-title {
font-size: 56px;
margin-bottom: 20px;
color: #46acd0;
}
.booking .book-form {
padding: 32px;
background-color: #ffffff;
margin: 0 auto;
max-width: 800px;
box-shadow: 0 20px 35px rgba(42, 196, 255, 0.3);
border-radius: 10px;
z-index: 2;
position: relative;
}
.booking .book-form .flex {
display: flex;
flex-wrap: wrap;
gap: 32px;
}
.booking .book-form .flex .inputBoks{
flex: 1 1 656px;
}
.booking .book-form .flex .inputBoks input {
width: 100%;
padding: 19.2px 22.4px;
font-size: 25.6px;
color: #333;
margin-top: 24px;
border: 1px solid #ccc;
border-radius: 5px;
}
.booking .book-form .flex .inputBoks select {
width: 100%;
padding: 19.2px 22.4px;
font-size: 25.6px;
color: #333;
margin-top: 24px;
border: 1px solid #ccc;
border-radius: 5px;
}
.booking .book-form .flex .inputBoks input:focus {
background: #e9f6ff;
color: #2ac4ff;
}
.booking .book-form .flex .inputBoks span {
font-size: 24px;
color: #46acd0;
}
.booking .book-form .btn {
margin-top: 32px;
font-size: 17.6px;
padding: 10px;
border-radius: 5px;
outline: none;
border: none;
width: 100%;
background: #368296;
color: white;
cursor: pointer;
transition: background 0.3s ease;
}
.booking .book-form .btn:hover {
background: #286175;
}
.success-message {
margin-bottom: 20px;
font-size: 20px;
color: green;
}
.heading-title{
text-align: center;
margin-bottom: 48px;
font-size: 96px;
text-transform: uppercase;
color: #000;
}
.packages .heading-title{
position: relative;
top: 200px;
}
.btn{
display: inline-block;
background: #5cc5fd;
margin-top: 16px;
color: #fff;
font-size: 27px;
padding: 16px 48px;
cursor: pointer;
border-radius: 10px;
}
.btn:hover{
background: #5da9ff;
}
.packages .boks-container{
display: grid;
grid-template-columns: repeat(auto-fit, minmax(592px, 1fr));
gap: 32px;
justify-items: center;
position: relative;
top: 100px;
padding: 150px;
padding-bottom: 300px;
}
.packages .boks-container .boks{
border: 1px solid #000;
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
background: #fff;
display: none;
border-radius: 10px;
width: 600px;
}
.packages .boks-container .boks:nth-child(1),
.packages .boks-container .boks:nth-child(2),
.packages .boks-container .boks:nth-child(3),
.packages .boks-container .boks:nth-child(4),
.packages .boks-container .boks:nth-child(5),
.packages .boks-container .boks:nth-child(6){
display: inline-block;
}
.packages .boks-container .boks:hover .image img{
transform: scale(1.1);
}
.packages .boks-container .boks .image{
height: 400px;
overflow: hidden;
}
.packages .boks-container .boks .image img{
height: 100%;
width: 100%;
object-fit: cover;
transition: .2s linear;
border-radius: 10px;
}
.packages .boks-container .boks .content{
padding: 32px;
text-align: center;
}
.packages .boks-container .boks .content h3{
font-size: 40px;
color: #000;
}
.packages .boks-container .boks .content p{
font-size: 24px;
color: #333;
line-height: 2;
padding: 16px 0;
}
.packages .load-more{
text-align: center;
margin-top: 32px;
}
@media (max-width: 768px) {
.booking .book-form .flex {
flex-direction: column;
}
}
@media (max-width: 450px) {
html {
font-size: 50%;
}
.heading-title {
font-size: 56px;
}
}
/* Admin Page Styles */
.admin {
display: flex;
flex-direction: column;
}
.top-menu {
width: 100%;
display: flex;
align-items: center;
padding: 15px;
background-color: #46acd0;
color: white;
box-shadow: 0 2px 5px rgba(2, 2, 2, 0.1);
}
.dashboard-toggle {
background-color: #59d3ff;
color: white;
border: none;
padding: 10px 15px;
border-radius: 5px;
cursor: pointer;
transition: background-color 0.3s;
}
.dashboard-toggle:hover {
background-color: #29bdff;
}
.search-bar {
position: relative;
left: 200px;
padding: 10px;
width: 500px;
border: none;
border-radius: 5px;
}
.sidebar {
height: 300px;
width: 250px;
background-color: #fff;
padding: 20px;
box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
border-right: 1px solid #ddd;
}

.user-avatar img {
border-radius: 50%;
width: 80px;
height: 80px;
}
.user-avatar p {
margin: 10px 0 0;
color: #333;
}
.navigation ul {
position: relative;
top: 20px;
list-style-type: none;
padding: 0;
}
.navigation li {
margin-bottom: 10px;
}
.navigation a {
text-decoration: none;
color: #333;
padding: 10px;
display: block;
border-radius: 5px;
background-color: #f4f4f4;
transition: background-color 0.3s;
}
.navigation a:hover {
background-color: #e2e2e2;
}
.pos-data{
display: flex;
}
.main-content {
flex-grow: 1;
padding: 20px;
margin: 50px;
background-color: #ffffff;
max-width: 800px;
box-shadow: 0 20px 35px rgba(42, 196, 255, 0.3);
border-radius: 10px;
z-index: 2;
height: 700px;
}
.tab-content {
display: none;
}
.tab-content h2 {
margin-top: 0;
color: #333;
}
h2{
font-size: 20px;
}