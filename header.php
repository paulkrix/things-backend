<?php
define("IMGPATH", "backend/");
require_once('backend/data/DataManager.php');
$DM = new DataManager();

$about = $DM->getThing(2);
$publications = $DM->getThing(3);
$photos = $DM->getThing(4);
$globals = $DM->getThing(1);

$baseURL = "http://" . $_SERVER["SERVER_NAME"];
if ($_SERVER["SERVER_PORT"] != "80") {
  $baseURL .= ":" . $_SERVER["SERVER_PORT"];
}
$fullURL = $baseURL . $_SERVER['REQUEST_URI'];

$slugline = getFieldById(1,$globals);
$headerBar = getFieldById(3,$globals);


function getFieldById($id, $thing) {
  for($i = 0; $i < sizeof($thing['fields']); $i++) {
    $field = $thing['fields'][$i];
    if($field['id'] == $id) {
      return $field;
    }
  }
  return null;
}

function renderTextBlock($thing) {
  $title = $thing['fields'][0];
  $body = $thing['fields'][1];
  $image = $thing['fields'][2];


  if($image['value'] != null) {
    echo "<img src='".IMGPATH.$image['value']."' class='img-responsive visible-xs text-block-img' />";
  }
?>
  <div class="col-sm-2">
    <h2><?php echo $title['value']; ?></h2>
  </div>
  <div class="col-sm-10">
<?php
    if($image['value'] != null) {
      echo "<img src='".IMGPATH.$image['value']."' class='profile-img hidden-xs' />";
    }
    ?>
    <div class="text-block">
      <?php echo $body['value']; ?>
    </div>
  </div>
<?php 
}

?>

<html lang="en">
<head>
  <title>Cayne Layton</title>
  <meta charset="utf-8"/>
  <link href="css/bootstrap.min.css" rel="stylesheet"/>
  <link href="css/style.css.php" rel="stylesheet"/>
  <script type="text/javascript" src="//use.typekit.net/skh7lkw.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body>
  <!-- Nav -->
  <div class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand">Cayne Layton</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li>
            <a href="index.php"><?php $field = getFieldById(4, $about); echo $field['value']; ?></a>
          </li>
          <li>
            <a href="publications.php"><?php $field = getFieldById(7, $publications); echo $field['value']; ?></a>
          </li>
          <li>
            <a href="photos.php"><?php $field = getFieldById(10, $photos); echo $field['value']; ?></a>
          </li>
        </ul>
      </div>
    </div>
    
  </div>
  <div id="background"></div>
?>