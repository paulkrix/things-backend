<?php
  include("header.php");
?>
  <div class="main">
    <div class="container">

      <div class="anti-pad">
        <img src="<?php echo IMGPATH.$headerBar['value']; ?>" class="img-responsive" />
      </div>
      <p class="lead-text"><?php echo $slugline['value']; ?></p>

<?php
      $field = getFieldById(5, $about);
      for($i = 0; $i < sizeof($field['value']); $i++) {
        $childThing = $DM->getThing($field['value'][$i]);
?>
      <div class="row">
        <?php renderTextBlock($childThing); ?>
      </div>
<?php
      }
?>

    </div>
  </div>

<?php
  include("footer.php");
?>
