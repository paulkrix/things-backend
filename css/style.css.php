<?php
header('Content-Type: text/css');

define("IMGPATH", "../backend/");
require_once('../backend/data/DataManager.php');
$DM = new DataManager(); 
$globals = $DM->getThing(1);

$backgroundImage = getFieldById(2, $globals);

function getFieldById($id, $thing) {
  for($i = 0; $i < sizeof($thing['fields']); $i++) {
    $field = $thing['fields'][$i];
    if($field['id'] == $id) {
      return $field;
    }
  }
  return null;
}


?>

html {
  font-family: "proxima-nova",sans-serif;
  position: relative;
  min-height: 100%;
}
body {
  background: url("<?php echo IMGPATH.$backgroundImage['value']; ?>") no-repeat center center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-attachment: fixed;
}

.navbar-header {
}

h2 {
  margin-top: 5px;
  font-size: 18px;
  font-style: italic;
  font-weight: 500;
}

.navbar-brand {
  font-family: "freight-sans-pro",sans-serif;
  float: none;
  margin-left: 0px !important;
  line-height: 62px;
  font-size: 24px;
  font-weight: 200;
  position: relative;
/*   top: 5px; */
  color: #000;
  padding: 0;
}

.profile-card {
  position: fixed;
/*
  border-width: 0 1px 1px 1px;
  border-color: #000;
  border-style: solid;
*/
  margin-top: 0px;
  background-color: #fff;
  padding: 10px 20px;
}

.navbar-brand:hover {
  color: #000;
}

.tag-line {
  margin-bottom: 16px;
}

.navbar {
/*   border-color: #000; */
  background-color: #fff;
  background-color: rgba(255,255,255,0.7);
  padding: 25px 0;
  -webkit-transition: background-color 200ms linear;
  -moz-transition: background-color 200ms linear;
  -o-transition: background-color 200ms linear;
  -ms-transition: background-color 200ms linear;
  transition: background-color 200ms linear;
}

.navbar .container {
  padding-left: 50px;
  padding-right: 50px;
}

.navbar-nav {
  float: right;
  font-size: 17px;
  margin-top: 7.5px;
}

.navbar-nav a {
  color: #000;
}

.down-arrow {
  width: 0; 
  height: 0; 
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-top: 6px solid #000;
  display: inline-block;
  margin: 0 0 6px 11px;
}

.main {
  margin-top: 0;
  font-size: 16px;
  margin-bottom: 160px;
}

.main .container {
  padding-top: 113px;
  padding-bottom: 60px;
  padding-left: 20px;
  padding-right: 20px;
}

#background {
  position: fixed;
  width: 1170px;
  height: 100%;
  left: 50%;
  margin-left: -585px;
  z-index: -1;
  background: #fff;
  background: rgba(255,255,255,0.9);
}

.row {
  margin: 40px -15px 20px;
}

.lead-text {
  font-size: 20px;
  margin: 10px 0 20px;
}

.profile-img {
  float: right;
  margin-bottom: 25px;
}
.text-block-img, .anti-pad img {
  margin-bottom: 40px;
  margin-top: 0px;
}

.anti-pad {
  margin: 0 -50px;
}

.nav>li>a:hover, .nav>li>a:focus {
  background-color: #eee;
  background-color: rgba(230,230,230,.5);
  color: #555
}

.navbar-toggle {
  padding: 0;
  border-radius: 0;
  margin-right: 0;
  margin-top: 20px;
}

.navbar-toggle .icon-bar {
  background-color: black;  
  width: 30px;
}

.navbar-toggle .icon-bar+.icon-bar {
  margin-top: 6px;
}

#footer {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
}

#footer h3 {
  font-size: 16px;
  margin-top: 0px;
}

#footer .row {
  padding: 0 5px;
}

.image-tile {
  right: 0;
  margin: 0 0 15px;
}

.image-tile .image-tile-link {
  display: block;
  position: relative;
  margin: 0 auto;
  max-width: 400px;
  overflow: hidden;
}

.image-tile .image-tile-link .image-tile-hover {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
  /*background: rgba(254,209,54,.9);*/
  background: rgba(176,170,229,0.9);
  -webkit-transition: all ease .5s;
  -moz-transition: all ease .5s;
  transition: all ease .5s;
}

.image-tile .image-tile-link .image-tile-hover:hover {
  opacity: 1;
}

.image-tile .image-tile-link .image-tile-hover .image-tile-hover-content {
  position: absolute;
  top: 50%;
  width: 100%;
  height: 20px;
  margin-top: -12px;
  text-align: center;
  font-size: 20px;
  color: #fff;
}

.image-tile .image-tile-link .image-tile-hover .image-tile-hover-content span {
  margin-top: -12px;
}

.image-tile .image-tile-link .image-tile-hover .image-tile-hover-content h3,
.image-tile .image-tile-link .image-tile-hover .image-tile-hover-content h4 {
  margin: 0;
}

.image-tile .image-tile-caption {
  margin: 0 auto;
  padding: 15px;
  max-width: 400px;
  text-align: center;
  background-color: #fff;
  box-shadow: 0px 2px 3px #f0f0f0;
  border-bottom: 1px solid #d4d4d4;
}

.image-tile .image-tile-caption h4 {
  margin: 0;
  text-transform: none;
}

.image-tile .image-tile-caption p {
  margin: 0;
  font-size: 16px;
  font-style: italic;
}

#image-tiles * {
  z-index: 2;
}

.main .portfolio-modal .container, .portfolio-modal .row {
  padding-top: 0;
  margin-top: 0;
}

.portfolio-modal .row.image-tiles {
  margin-top: 50px;
}


.portfolio-modal .modal-content {
    padding: 100px 0;
    min-height: 100%;
    border: 0;
    border-radius: 0;
    text-align: center;
    background-clip: border-box;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.portfolio-modal .modal-content h2 {
    margin: 0 0 30px;
    font-style: normal;
    font-size: 2.5em;
}

.portfolio-modal .modal-content img {
    margin-bottom: 30px;
}

.portfolio-modal .image-tiles img {
    margin-bottom: 0;
}

.portfolio-modal .modal-content {
    font-size: 20px;
}

.portfolio-modal .close-modal {
    position: absolute;
    top: 25px;
    right: 25px;
    width: 75px;
    height: 75px;
    background-color: transparent;
    cursor: pointer;
}

.portfolio-modal .close-modal:hover {
    opacity: .3;
}

.portfolio-modal .close-modal .lr {
    z-index: 1051;
    width: 1px;
    height: 75px;
    margin-left: 35px;
    background-color: #2c3e50;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}

.portfolio-modal .close-modal .lr .rl {
    z-index: 1052;
    width: 1px;
    height: 75px;
    background-color: #2c3e50;
    -webkit-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
}

@media(min-width:767px) {
  #image-tiles .image-tile {
    margin: 0 0 30px;
  }
  #footer .row {
    padding: 0 50px;
  }
}


@media (min-width: 768px) {
  #background {
    width: 750px;
    margin-left: -375px;
  }  
  .lead-text {
    margin: 10px 0 80px;
  }
  .text-block-img, .anti-pad img {
    margin-bottom: 40px;
    margin-top: 60px;
  }
  .main {
    margin-bottom: 160px;
  }
  .main .container {
    padding-top: 53px;
    padding-left: 50px;
    padding-right: 50px;
  }
  .profile-img {
    margin-left: 20px;
    height: 160px;
    width: 160px;
  }
}

@media (min-width: 992px) {
  #background {
    width: 970px;
    margin-left: -485px;
  }
  .profile-img {
    margin-left: 40px;
    height: 210px;
    width: 210px;
  }  
}

@media (min-width: 1200px) {
  #background {
    width: 1170px;
    margin-left: -585px;
  }
  .text-block {
    padding-right: 270px;
  }
  .profile-img {
    margin-left: 60px;
  }
}