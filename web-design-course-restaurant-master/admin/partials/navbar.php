<?php include("config/constraint.php"); ?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Tab Bar Navigation</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css'><link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../style.css">
    <style>
    :root {
       
  --background: #10182f;
  --scale: 1;
  --icon-size: 24px;
}

.container{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
    background: var(--background);
}
.buttonsee {
  display: block;
  margin: 30px auto;
  background-color: #2e2748;
  color: white;
  border: none;
  padding: 12px 24px;
  font-size: 16px;
  border-radius: 6px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  align-items: center;
}
.button:hover {
  background-color: #04050aff;
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
  justify-content: flex-end; /* push icons to the right */
  align-items: center;
  gap: 50px; /* spacing between icons */

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
}</style>
</head>

<body>
<div class="top">
    <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>
     </div>
       
    <nav class="icons">
  <ul>
    <li>
      <a href="http://localhost/web-design-course-restaurant-master/index.php" class="actives">
        <svg><use xlink:href="#home-icon"></use></svg>
      </a>
    </li>
    <li>
      <a href="../oder.php"  class="actives">
        <svg><use xlink:href="#food-icon"></use></svg>
      </a>
    </li>
    <li>
      <a href="#"  class="actives">
        <svg><use xlink:href="#truck-icon"></use></svg>
      </a>
    </li>
    <li>
      <a href="http://localhost/web-design-course-restaurant-master/admin/manage_admin.php"  class="actives">
        <svg><use xlink:href="#user-icon"></use></svg>
      </a>
    </li>
    <li>
      <a href="#"  class="actives">
        <svg><use xlink:href="#settings-icon"></use></svg>
      </a>
    </li>
  </ul>
  <div class="tubelight">
    <div class="light-ray"></div>
  </div>
</nav>
</div>




<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="home-icon">
        <path
                d="M13.1428571,14.5 C13.6571429,14.5 14,14.175507 14,13.6887676 L14,6.38767551 C14,6.14430577 13.9142857,5.90093604 13.6571429,5.73868955 L8.51428571,1.6825273 C8.17142857,1.43915757 7.74285714,1.43915757 7.4,1.6825273 L2.25714286,5.73868955 C2.08571429,5.90093604 2,6.14430577 2,6.38767551 L2,13.6887676 C2,14.175507 2.34285714,14.5 2.85714286,14.5 L13.1428571,14.5 Z M5.42857143,12.8775351 L3.71428571,12.8775351 L3.71428571,6.79329173 L8,3.38611544 L12.2857143,6.79329173 L12.2857143,12.8775351 L10.5714286,12.8775351 L5.42857143,12.8775351 Z">
        </path>
    </symbol>
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="food-icon">
  <path d="M7 2C7.55228 2 8 2.44772 8 3V11C8 12.1046 7.10457 13 6 13H5V21C5 21.5523 4.55228 22 4 22C3.44772 22 3 21.5523 3 21V13H2C0.895431 13 0 12.1046 0 11V3C0 2.44772 0.447715 2 1 2C1.55228 2 2 2.44772 2 3V11H3V3C3 2.44772 3.44772 2 4 2C4.55228 2 5 2.44772 5 3V11H6V3C6 2.44772 6.44772 2 7 2ZM14 2C14.5523 2 15 2.44772 15 3V8H16C18.2091 8 20 9.79086 20 12V21C20 21.5523 19.5523 22 19 22C18.4477 22 18 21.5523 18 21V12C18 10.8954 17.1046 10 16 10H15V21C15 21.5523 14.5523 22 14 22C13.4477 22 13 21.5523 13 21V3C13 2.44772 13.4477 2 14 2Z"/>
</symbol>

    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 568" id="settings-icon">
        <path d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z" />
    </symbol>
   
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" id="truck-icon">
  <path d="M624 368h-16V246.6c0-12.7-5.1-24.9-14.1-33.9l-77.2-77.2C507.7 125.1 495.5 120 482.8 120H416V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h16c0 53 43 96 96 96s96-43 96-96h128c0 53 43 96 96 96s96-43 96-96h48c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zM464 160h18.7L560 237.3V368h-96V160zM160 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm320 0c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48z"/>
</symbol>

    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 570" id="user-icon">
        <path d="M313.6 304c-28.7 0-42.5 16-89.6 16-47.1 0-60.8-16-89.6-16C60.2 304 0 364.2 0 438.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-25.6c0-74.2-60.2-134.4-134.4-134.4zM400 464H48v-25.6c0-47.6 38.8-86.4 86.4-86.4 14.6 0 38.3 16 89.6 16 51.7 0 74.9-16 89.6-16 47.6 0 86.4 38.8 86.4 86.4V464zM224 288c79.5 0 144-64.5 144-144S303.5 0 224 0 80 64.5 80 144s64.5 144 144 144zm0-240c52.9 0 96 43.1 96 96s-43.1 96-96 96-96-43.1-96-96 43.1-96 96-96z" />
    </symbol>
</svg>

<script>
 console.clear();

  const links = document.querySelectorAll("nav a");
  const light = document.querySelector("nav .tubelight");

  function moveLightToActive() {
    const activeLink = document.querySelector("nav a.actives");
    if (activeLink) {
      const offsetLeft = activeLink.offsetLeft;
      light.style.left = `${offsetLeft + light.offsetWidth / 4}px`;
    }
  }

  function setActive(index) {
    links.forEach(link => link.classList.remove("actives"));
    links[index].classList.add("actives");
    moveLightToActive();
  }

  // Add event listeners
  links.forEach((link, index) => {
    link.addEventListener("click", () => {
      setActive(index);
    });
  });

  // On page load, move light to existing .actives link
  window.addEventListener("load", moveLightToActive);
</script>

</body>
</html>
