<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>


footer {
  position: relative;
  background: #10182f;
  width: 100%;
  bottom: 0;
  left: 0;
}

footer::before {
  content: "";
  position: absolute;
  left: 0;
  top: 100px;
  height: 1px;
  width: 100%;
  background: #afafb6;
}

footer .content {
  max-width: 1250px;
  margin: auto;
  padding: 30px 40px 40px 40px;
}

footer .content .topu {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 50px;
}

.content .topu .logo-details {
  color: #fff;
  font-size: 30px;
}

.content .topu .media-icons {
  display: flex;
}

.content .topu .media-icons a {
  height: 40px;
  width: 40px;
  margin: 0 8px;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  color: #fff;
  font-size: 17px;
  text-decoration: none;
  transition: all 0.4s ease;
}

.topu .media-icons a:nth-child(1) {
  background: #4267b2;
}

.topu .media-icons a:nth-child(1):hover {
  color: #4267b2;
  background: #fff;
}

.topu .media-icons a:nth-child(2) {
  background: #1da1f2;
}

.topu .media-icons a:nth-child(2):hover {
  color: #1da1f2;
  background: #fff;
}

.topu .media-icons a:nth-child(3) {
  background: #e1306c;
}

.topu .media-icons a:nth-child(3):hover {
  color: #e1306c;
  background: #fff;
}

.topu .media-icons a:nth-child(4) {
  background: #0077b5;
}

.topu .media-icons a:nth-child(4):hover {
  color: #0077b5;
  background: #fff;
}

.top .media-icons a:nth-child(5) {
  background: #ff0000;
}

.top .media-icons a:nth-child(5):hover {
  color: #ff0000;
  background: #fff;
}

/* Right side */
footer .content .link-boxes {
  width: 100%;
  display: flex;
  justify-content: space-between;
}

footer .content .link-boxes .box {
  width: calc(100% / 5 - 10px);
}

.content .link-boxes .box .link_name {
  color: #fff;
  font-size: 18px;
  font-weight: 400;
  margin-bottom: 10px;
  position: relative;
}

.link-boxes .box .link_name::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -2px;
  height: 2px;
  width: 35px;
  background: #fff;
}

.content .link-boxes .box li {
  margin: 6px 0;
  list-style: none;
}
 .content .link-boxes .box li a {
  color: #fff;
  font-size: 14px;
  font-weight: 400;
  text-decoration: none;
  opacity: 0.8;
  transition: all 0.4s ease;
}
.content .link-boxes .box li a:hover {
  opacity: 1;
  text-decoration: underline;
}

.content .link-boxes .input-box {
  margin-right: 55px;
}

.link-boxes .input-box input {
  height: 40px;
  width: calc(100% + 55px);
  outline: none;
  border: 2px solid #afafb6;
  background: #eaeaea;
  border-radius: 4px;
  padding: 0 15px;
  font-size: 15px;
  color: #fff;
  margin-top: 5px;
}

.link-boxes .input-box input::placeholder {
  color: #afafb6;
  font-size: 16px;
}

.link-boxes .input-box input[type="button"] {
  background: #fff;
  color: #3824d2;
  border: none;
  font-size: 18px;
  font-weight: 500;
  margin: 4px 0;
  opacity: 0.8;
  cursor: pointer;
  transition: all 0.4s ease;
}

.input-box input[type="button"]:hover {
  opacity: 1;
}

footer .bottom-details {
  width: 100%;
  background: #2e2748;
}

footer .bottom-details .bottom_text {
  max-width: 1250px;
  margin: auto;
  padding: 20px 40px;
  display: flex;
  justify-content: space-between;
}

.bottom-details .bottom_text span,
.bottom-details .bottom_text a {
  font-size: 14px;
  font-weight: 300;
  color: #fff;
  opacity: 0.8;
  text-decoration: none;
}

.bottom-details .bottom_text a:hover {
  opacity: 1;
  text-decoration: underline;
}
.bottom-details .bottom_text a {
  margin-right: 10px;
}
    </style>
</head>
<body>
<footer>
 <div class="content">
    <div class="topu">
      <div class="logo-details">
        <i class="fab fa-slack"></i>
        <span class="logo_name">Foddie</span>
      </div>
      <div class="media-icons">
        <a class="footsocial" href="#"><i class="fab fa-facebook-f"></i></a>
        <a class="footsocial" href="#"><i class="fab fa-twitter"></i></a>
        <a class="footsocial" href="#"><i class="fab fa-instagram"></i></a>
        <a class="footsocial" href="#"><i class="fab fa-linkedin-in"></i></a>
        <a class="footsocial" href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
    <div class="link-boxes">
      <ul class="box">
        <li class="link_name">Company</li>
        <li><a class="footsocial" href="#">Home</a></li>
        <li><a class="footsocial" href="#">Contact us</a></li>
        <li><a class="footsocial" href="#">About us</a></li>
        <li><a class="footsocial" href="#">Get started</a></li>
      </ul>
      <ul class="box">
        <li class="link_name">Services</li>
        <li><a class="footsocial"href="#">Food</a></li>
        <li><a class="footsocial" href="#">Order</a></li>
        <li><a class="footsocial"href="#">Category</a></li>
        <li><a class="footsocial" href="#">services</a></li>
      </ul>
      <ul class="box">
        <li class="link_name">Account</li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">My account</a></li>
        <li><a href="#">Preferences</a></li>
        <li><a href="#">Purchase</a></li>
      </ul>
      <ul class="box">
        <li class="link_name">Courses</li>
        <li><a class="footsocial" href="#">Takeout</a></li>
        <li><a class="footsocial" href="#">Delievery</a></li>
        <li><a class="footsocial"href="#">Dinner</a></li>
        <li><a class="footsocial" href="#">Brunch</a></li>
      </ul>
      <ul class="box input-box">
        <li class="link_name">Subscribe</li>
        <li><input type="text" placeholder="Enter your email"></li>
        <li><input type="button" value="Subscribe"></li>
      </ul>
    </div>
  </div>
  <div class="bottom-details">
    <div class="bottom_text">
      <span class="copyright_text">Copyright © 2025 <a href="#">@meyitola</a> All rights reserved</span>
      <span class="policy_terms">
        <a href="#">Privacy policy</a>
        <a href="#">Terms & condition</a>
      </span>
    </div>
  </div>
</footer>
</body>
</html>