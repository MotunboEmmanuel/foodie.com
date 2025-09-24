<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'><link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../style.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
:root{
  --base-clr: #11121a;
  --line-clr: #42434a;
  --hover-clr: #222533;
  --text-clr: #e6e6ef;
  --accent-clr: #5e63ff;
  --secondary-text-clr: #b0b3c1;
}
*{
  margin: 0;
  padding: 0;
}
html{
  font-family: Poppins, 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.5rem;
}
.Sbody{
  min-height: 100vh;
  min-height: 100dvh;
  background-color: var(--base-clr);
  color: var(--text-clr);
  display: grid;
  grid-template-columns: auto 1fr;
}
#sidebar{
  box-sizing: border-box;
  height: 100vh;
  width: 250px;
  padding: 5px 1em;
  background-color: var(--base-clr);
  border-right: 1px solid var(--line-clr);

  position: sticky;
  top: 0;
  align-self: start;
  transition: 300ms ease-in-out;
  overflow: hidden;
  text-wrap: nowrap;
}
#sidebar.close{
  padding: 5px;
  width: 60px;
  .logo{
    font-size: 0;
  }
}
#sidebar ul, #sidebar ul li{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  width: 100%;
}
#sidebar ul{
  list-style: none;
}
#sidebar > ul > li:first-child{
  display: flex;
  justify-content: flex-end;
  margin-bottom: 16px;
  .logo{
    font-weight: 600;
  }
}
#sidebar ul li.active a{
  color: var(--accent-clr);

  svg{
    fill: var(--accent-clr);
  }
}

#sidebar a, #sidebar .dropdown-btn, #sidebar .logo{
  border-radius: .5em;
  padding: .85em;
  text-decoration: none;
  color: var(--text-clr);
  display: flex;
  align-items: center;
  gap: 1em;
}
.dropdown-btn{
  width: 100%;
  text-align: left;
  background: none;
  border: none;
  font: inherit;
  cursor: pointer;
}
#sidebar svg{
  flex-shrink: 0;
  fill: var(--text-clr);
}
#sidebar a span, #sidebar .dropdown-btn span{
  flex-grow: 1;
}
#sidebar a:hover, #sidebar .dropdown-btn:hover{
  background-color: var(--hover-clr);
}
#sidebar .sub-menu{
  display: grid;
  grid-template-rows: 0fr;
  transition: 300ms ease-in-out;

  > div{
    overflow: hidden;
  }
}
#sidebar .sub-menu.show{
  grid-template-rows: 1fr;
}
.dropdown-btn svg{
  transition: 200ms ease;
}
.rotate svg:last-child{
  rotate: 180deg;
}
#sidebar .sub-menu a{
  padding-left: 2em;
}
#toggle-btn{
  margin-left: auto;
  padding: 1em;
  border: none;
  border-radius: .5em;
  background: none;
  cursor: pointer;

  svg{
    transition: rotate 150ms ease;
  }
}
#toggle-btn:hover{
  background-color: var(--hover-clr);
}

main{
  padding: min(30px, 7%);
}
main p{
  color: var(--secondary-text-clr);
  margin-top: 5px;
  margin-bottom: 15px;
}
.Scontainer{
  border: 1px solid var(--line-clr);
  border-radius: 1em;
  margin-bottom: 20px;
  padding: min(3em, 15%);

  h2, p { margin-top: 1em }
}

@media(max-width: 800px){
  body{
    grid-template-columns: 1fr;
  }
  main{
    padding: 2em 1em 60px 1em;
  }
  .container{
    border: none;
    padding: 0;
  }
  #sidebar{
    height: 60px;
    width: 100%;
    border-right: none;
    border-top: 1px solid var(--line-clr);
    padding: 0;
    position: fixed;
    top: unset;
    bottom: 0;

    > ul{
      padding: 0;
      display: grid;
      grid-auto-columns: 60px;
      grid-auto-flow: column;
      align-items: center;
      overflow-x: scroll;
    }
    ul li{
      height: 100%;
    }
    ul a, ul .dropdown-btn{
      width: 60px;
      height: 60px;
      padding: 0;
      border-radius: 0;
      justify-content: center;
    }

    ul li span, ul li:first-child, .dropdown-btn svg:last-child{
      display: none;
    }

    ul li .sub-menu.show{
      position: fixed;
      bottom: 60px;
      left: 0;
      box-sizing: border-box;
      height: 60px;
      width: 100%;
      background-color: var(--hover-clr);
      border-top: 1px solid var(--line-clr);
      display: flex;
      justify-content: center;

      > div{
        overflow-x: auto;
      }
      li{
        display: inline-flex;
      }
      a{
        box-sizing: border-box;
        padding: 1em;
        width: auto;
        justify-content: center;
      }
    }
  }
}

/* admin.css */
*{
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
}

.wrapper{
    padding: 1%;
    width: 80%;
    margin: 0 auto;
}

.text-center{
    text-align: center;
}
.success{
    color: rgb(19, 192, 19);
}
.error{
    color: red;
}
.clearfix{
    clear: both;
    float: none;
}
.tbl-full{
    width: 100%;
  
}
table tr th{
    border-bottom: 1px solid gray;
    padding: 1%;
    text-align: left;
}
table tr td{
    padding: 1%;
  
}
.btn-add{
    background-color: rgb(128, 128, 248);
    color: white;
    padding: 1% 2%;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}
.btn-add:hover{
    background-color: rgb(0, 0, 255);
}
.btn-secondary{
    background-color: rgb(26, 207, 26);
    color: white;
    padding: 1% 2%;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}


.btn-primary{
    background-color: #ff4141;
    color: white;
    padding: 1% 2%;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}
.btn-primary:hover{
    background-color: #fa070f ;
}/*
.menu{
    border-bottom: 1px solid gray;
}
.menu ul{
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;           
    justify-content: flex-end;  
    align-items: center;
}
.menu ul li{
    margin: 0 10px;             
    padding: 0;                
}
.menu ul li a{
    display: inline-block;    
    min-width: 100px;           
    text-align: center;       
    padding: 10px 20px;         
    font-weight: bold;
    text-decoration: none;
    color: #EA2027;
    border-radius: 6px;
    transition: background 0.3s ease, color 0.3s ease;
    width: auto;

}
.menu ul li a:hover{
     background: #007BFF;  
    color: white;          
}

/* Active effect (when clicked/focused) 
.menu ul li a:active,
.menu ul li a:focus {
    background: #28a745;   
    color: white;
}


.menu ul li a.active {
    background: #28a745;
    color: white;
}*/
.main-content{
     color: white;
    background-color: #2e2748;
    padding: 3% 0;
    margin: 1% 0;
}
.col-4{
    width: 18%;
    background-color: white;
    margin: 1%;
    padding: 2%;
    float: left;
}

.footer{
    background-color: #EA2027;
    color: white;
}/*

.container{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
    background: var(--background);
}
.img-responsive{
    width: 100%;
}
.img-curve{
    border-radius: 15px;
}
.logo{
    width: 10%;
    float: left;
}
.top{
    width: 100%;
    height: 80px;
    background: var(--background);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 10px;
    box-sizing: border-box;
  box-shadow: 0 6.7px 5.3px rgba(0, 0, 0, 0.12), 0 22.3px 17.9px rgba(0, 0, 0, 0.08), 0 100px 80px rgba(0, 0, 0, 0.04);
  overflow: hidden;
}



nav {
  position: relative;
  width: 50%;
  height: 70px;
  display: grid;
  grid-template-columns: repeat(5, 1fr);
 
}
nav ul {
  height: 100%;
  display: flex;
  justify-content: flex-end; 
  align-items: center;
  gap: 5px; 
  margin: 0;
  padding: 0 20px;

}
nav ul li {
  list-style: none;
  width: var(--icon-size);
  height: var(--icon-size);
}
nav ul li a {
  display: block;
  width: 100%;
  height: 100%;
  cursor: pointer;
}
nav ul li a svg {
  fill: #fff;
  width: 100%;
  height: 100%;
  opacity: 0.4;
  transition: opacity 100ms ease;
  pointer-events: none;
}
nav ul li a.active svg {
  opacity: 1;
}
nav .tubelight {
  position: absolute;
  left: 0px;
  top: 0px;
  transform: translateX(-50%);
  width: 45px;
  height: 5px;
  border-radius: 5px;
  background: #ffffff;
  transition: left 400ms ease;
  z-index: 10;
}
nav .tubelight .light-ray {
  position: absolute;
  left: -30%;
  top: 5px;
  width: 160%;
  height: 80px;
  clip-path: polygon(5% 100%, 25% 0px, 75% 0px, 95% 100%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0.3) -50%, rgba(255, 255, 255, 0) 90%);
  pointer-events: none;
}
 :root {
        width: 100%;
        height: 80px;
  --background: black;
  --scale: 1;
  --icon-size: 24px;
}*/
/* 
    Author: Vijay Thapa;
    Theme: Restaurant Food Order;
    version: 1.0;
*/

/* CSS for All */
*{
    margin: 0 0;
    padding: 0 0;
    font-family: Arial, Helvetica, sans-serif;
}
.container{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}
.img-responsive{
    width: 100%;
}
.img-curve{
    border-radius: 15px;
}

.text-right{
    text-align: right;
}
.text-center{
    text-align: center;
}
.text-left{
    text-align: left;
}
.text-white{
    color: white;
}

.clearfix{
    clear: both;
    float: none;
}

a{
    color: #ff6b81;
    text-decoration: none;
}
a:hover{
    color: #ff4757;
}

.btn{
    padding: 1%;
    border: none;
    font-size: 1rem;
    border-radius: 5px;
}
.btn-primary{
    background-color: #ff6b81;
    color: white;
    cursor: pointer;
}
.btn-primary:hover{
    color: white;
    background-color: #ff4757;
}
h2{
    color: #2f3542;
    font-size: 2rem;
    margin-bottom: 2%;
}
h3{
    font-size: 1.5rem;
}
.float-container{
    position: relative;
}
.float-text{
    position: absolute;
    bottom: 50px;
    left: 40%;
}
fieldset{
    border: 1px solid white;
    margin: 5%;
    padding: 3%;
    border-radius: 5px;
}


/* CSSS for navbar section */

.logo{
    width: 10%;
    float: left;
}


/* CSS for Food SEarch Section */

.food-search{
    background-image: url(../images/bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 7% 0;
}

.food-search input[type="search"]{
    width: 50%;
    padding: 1%;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
}


/* CSS for Categories */
.categories{
    padding: 4% 0;
}

.box-3{
    width: 28%;
    float: left;
    margin: 2%;
}
.style:hover {
    background-color: purple;
}


/* CSS for Food Menu */
.food-menu{
    background-color: #ececec;
    padding: 4% 0;
    position: relative;
}
.food-menu-box{
    width: 43%;
    margin: 1%;
    padding: 2%;
    float: left;
    background-color: white;
    border-radius: 15px;
}

.food-menu-img{
    width: 20%;
    float: left;
}

.food-menu-desc{
    width: 70%;
    float: left;
    margin-left: 8%;
}

.food-price{
    font-size: 1.2rem;
    margin: 2% 0;
}
.food-detail{
    font-size: 1rem;
    color: #747d8c;
}


/* CSS for Social */
.social ul{
    list-style-type: none;
}
.social ul li{
    display: inline;
    padding: 1%;
}

/* for Order Section */
.order{
    width: 50%;
    margin: 0 auto;
}
.input-responsive{
    width: 96%;
    padding: 1%;
    margin-bottom: 3%;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
}
.order-label{
    margin-bottom: 1%; 
    font-weight: bold;
}


/* Hover effect */

/* Active effect (when clicked/focused) */







/* CSS for Mobile Size or Smaller Screen */

@media only screen and (max-width:768px){
    .logo{
        width: 80%;
        float: none;
        margin: 1% auto;
    }

    .menu ul{
        text-align: center;
    }

    .food-search input[type="search"]{
        width: 90%;
        padding: 2%;
        margin-bottom: 3%;
    }

    .btn{
        width: 91%;
        padding: 2%;
    }

    .food-search{
        padding: 10% 0;
    }

    .categories{
        padding: 20% 0;
    }
    h2{
        margin-bottom: 10%;
    }
    .box-3{
        width: 100%;
        margin: 4% auto;
    }

    .food-menu{
        padding: 20% 0;
    }

    .food-menu-box{
        width: 90%;
        padding: 5%;
        margin-bottom: 5%;
    }
    .social{
        padding: 5% 0;
    }
    .order{
        width: 100%;
    }
}
/* 
    Author: Vijay Thapa;
    Theme: Restaurant Food Order;
    version: 1.0;
*/

/* CSS for All */
*{
    margin: 0 0;
    padding: 0 0;
    font-family: Arial, Helvetica, sans-serif;
}
.container{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}
.img-responsive{
    width: 100%;
}
.img-curve{
    border-radius: 15px;
}

.text-right{
    text-align: right;
}
.text-center{
    text-align: center;
}
.text-left{
    text-align: left;
}
.text-white{
    color: white;
}

.clearfix{
    clear: both;
    float: none;
}

a{
    color: #ff6b81;
    text-decoration: none;
}
a:hover{
    color: #ff4757;
}

.btn{
    padding: 1%;
    border: none;
    font-size: 1rem;
    border-radius: 5px;
}
.btn-primary{
    background-color: #ff6b81;
    color: white;
    cursor: pointer;
}
.btn-primary:hover{
    color: white;
    background-color: #ff4757;
}
h2{
    color: #2f3542;
    font-size: 2rem;
    margin-bottom: 2%;
}
h3{
    font-size: 1.5rem;
}
.float-container{
    position: relative;
}
.float-text{
    position: absolute;
    bottom: 50px;
    left: 40%;
}
fieldset{
    border: 1px solid white;
    margin: 5%;
    padding: 3%;
    border-radius: 5px;
}


/* CSSS for navbar section */

.logo{
    width: 10%;
    float: left;
}


/* CSS for Food SEarch Section */

.food-search{
    background-image: url(../images/bg.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 7% 0;
}

.food-search input[type="search"]{
    width: 50%;
    padding: 1%;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
}


/* CSS for Categories */
.categories{
    padding: 4% 0;
}

.box-3{
    width: 28%;
    float: left;
    margin: 2%;
}
.style:hover {
    background-color: purple;
}


/* CSS for Food Menu */
.food-menu{
    background-color: #ececec;
    padding: 4% 0;
}
.food-menu-box{
    width: 43%;
    margin: 1%;
    padding: 2%;
    float: left;
    background-color: white;
    border-radius: 15px;
}

.food-menu-img{
    width: 20%;
    float: left;
}

.food-menu-desc{
    width: 70%;
    float: left;
    margin-left: 8%;
}

.food-price{
    font-size: 1.2rem;
    margin: 2% 0;
}
.food-detail{
    font-size: 1rem;
    color: #747d8c;
}


/* CSS for Social */
.social ul{
    list-style-type: none;
}
.social ul li{
    display: inline;
    padding: 1%;
}

/* for Order Section */
.order{
    width: 50%;
    margin: 0 auto;
}
.input-responsive{
    width: 96%;
    padding: 1%;
    margin-bottom: 3%;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
}
.order-label{
    margin-bottom: 1%; 
    font-weight: bold;
}


/* Hover effect */

/* Active effect (when clicked/focused) */







/* CSS for Mobile Size or Smaller Screen */

@media only screen and (max-width:768px){
    .logo{
        width: 80%;
        float: none;
        margin: 1% auto;
    }

    .menu ul{
        text-align: center;
    }

    .food-search input[type="search"]{
        width: 90%;
        padding: 2%;
        margin-bottom: 3%;
    }

    .btn{
        width: 91%;
        padding: 2%;
    }

    .food-search{
        padding: 10% 0;
    }

    .categories{
        padding: 20% 0;
    }
    h2{
        margin-bottom: 10%;
    }
    .box-3{
        width: 100%;
        margin: 4% auto;
    }

    .food-menu{
        padding: 20% 0;
    }

    .food-menu-box{
        width: 90%;
        padding: 5%;
        margin-bottom: 5%;
    }
    .social{
        padding: 5% 0;
    }
    .order{
        width: 100%;
    }
}

  </style>
 
   
  <script type="text/javascript" src="app.js" defer></script>
</head>
<body class="Sbody">
  <nav id="sidebar" class="close">
    <ul>
      <li>
        <span class="logo">Foodie</span>
        <button onclick=toggleSidebar() id="toggle-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z"/></svg>
        </button>
      </li>
      <li class="active">
        <a href="index.php">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M240-200h120v-200q0-17 11.5-28.5T400-440h160q17 0 28.5 11.5T600-400v200h120v-360L480-740 240-560v360Zm-80 0v-360q0-19 8.5-36t23.5-28l240-180q21-16 48-16t48 16l240 180q15 11 23.5 28t8.5 36v360q0 33-23.5 56.5T720-120H560q-17 0-28.5-11.5T520-160v-200h-80v200q0 17-11.5 28.5T400-120H240q-33 0-56.5-23.5T160-200Zm320-270Z"/></svg>
          <span>Home</span>
        </a>
      </li>
      <li>
        <a href="categories.php">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M520-640v-160q0-17 11.5-28.5T560-840h240q17 0 28.5 11.5T840-800v160q0 17-11.5 28.5T800-600H560q-17 0-28.5-11.5T520-640ZM120-480v-320q0-17 11.5-28.5T160-840h240q17 0 28.5 11.5T440-800v320q0 17-11.5 28.5T400-440H160q-17 0-28.5-11.5T120-480Zm400 320v-320q0-17 11.5-28.5T560-520h240q17 0 28.5 11.5T840-480v320q0 17-11.5 28.5T800-120H560q-17 0-28.5-11.5T520-160Zm-400 0v-160q0-17 11.5-28.5T160-360h240q17 0 28.5 11.5T440-320v160q0 17-11.5 28.5T400-120H160q-17 0-28.5-11.5T120-160Zm80-360h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z"/></svg>
          <span>Category</span>
        </a>
      </li>
      <li>
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h207q16 0 30.5 6t25.5 17l57 57h320q33 0 56.5 23.5T880-640v400q0 33-23.5 56.5T800-160H160Zm0-80h640v-400H447l-80-80H160v480Zm0 0v-480 480Zm400-160v40q0 17 11.5 28.5T600-320q17 0 28.5-11.5T640-360v-40h40q17 0 28.5-11.5T720-440q0-17-11.5-28.5T680-480h-40v-40q0-17-11.5-28.5T600-560q-17 0-28.5 11.5T560-520v40h-40q-17 0-28.5 11.5T480-440q0 17 11.5 28.5T520-400h40Z"/></svg>
          <span>Foods</span>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="foods.php">Local-meal</a></li>
            <li><a href="foods.php">International</a></li>
          </div>
        </ul>
      </li>
      <li>
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m221-313 142-142q12-12 28-11.5t28 12.5q11 12 11 28t-11 28L250-228q-12 12-28 12t-28-12l-86-86q-11-11-11-28t11-28q11-11 28-11t28 11l57 57Zm0-320 142-142q12-12 28-11.5t28 12.5q11 12 11 28t-11 28L250-548q-12 12-28 12t-28-12l-86-86q-11-11-11-28t11-28q11-11 28-11t28 11l57 57Zm339 353q-17 0-28.5-11.5T520-320q0-17 11.5-28.5T560-360h280q17 0 28.5 11.5T880-320q0 17-11.5 28.5T840-280H560Zm0-320q-17 0-28.5-11.5T520-640q0-17 11.5-28.5T560-680h280q17 0 28.5 11.5T880-640q0 17-11.5 28.5T840-600H560Z"/></svg>
          <span>Reservations</span>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="#">Breakfast</a></li>
            <li><a href="#">Lunch</a></li>
            <li><a href="#">Brunch</a></li>
            <li><a href="#">Dinner</a></li>
            <li><a href="#">Pick-up</a></li>
          </div>
        </ul>
      </li>
      <li>
        <a href="order.php">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-40q0-17 11.5-28.5T280-880q17 0 28.5 11.5T320-840v40h320v-40q0-17 11.5-28.5T680-880q17 0 28.5 11.5T720-840v40h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/></svg>
          <span>Order</span>
        </a>
      </li>
      <li>
        <a href="profile.html">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
          <span>Profile</span>
        </a>
      </li>
    </ul>
  </nav>


  <script>
    const toggleButton = document.getElementById('toggle-btn')
const sidebar = document.getElementById('sidebar')

function toggleSidebar() {
  const sidebar = document.getElementById("sidebar");
  sidebar.classList.toggle("close");
}

function toggleSidebar(){
  sidebar.classList.toggle('close')
  toggleButton.classList.toggle('rotate')

  closeAllSubMenus()
}

function toggleSubMenu(button){

  if(!button.nextElementSibling.classList.contains('show')){
    closeAllSubMenus()
  }

  button.nextElementSibling.classList.toggle('show')
  button.classList.toggle('rotate')

  if(sidebar.classList.contains('close')){
    sidebar.classList.toggle('close')
    toggleButton.classList.toggle('rotate')
  }
}

function closeAllSubMenus(){
  Array.from(sidebar.getElementsByClassName('show')).forEach(ul => {
    ul.classList.remove('show')
    ul.previousElementSibling.classList.remove('rotate')
  })
}
  </script>

</body>
</html>