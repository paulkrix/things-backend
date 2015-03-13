<?php include("header.php"); ?>

  <div class="main">
    <div class="container">

      <div class="anti-pad">
        <img src="<?php echo IMGPATH.$headerBar['value']; ?>" class="img-responsive" />
      </div>
      <p class="lead-text"><?php echo $slugline['value']; ?></p>
      <section id="image-tiles">
        <div class="row">
<?php
  $galleries = getFieldById(12, $photos);
  for($i = 0; $i < sizeof($galleries['value']); $i++) {
    $gallery = $DM->getThing($galleries['value'][$i]);
    renderGalleryTile($gallery, $galleries['value'][$i]);
  }
?>
        </div>
      </section>

<?php


  for($i = 0; $i < sizeof($galleries['value']); $i++) {
    $gallery = $DM->getThing($galleries['value'][$i]);
    renderGalleryModal($gallery, $galleries['value'][$i]);
    $images = $gallery['fields'][2];
    for($j = 0; $j < sizeof($images['value']); $j++) {
      $image = $DM->getThing($images['value'][$j]);
      renderImageModal($image, $galleries['value'][$i], $images['value'][$j]);
    }


  }

  $textBlocks = getFieldById(11, $photos);
  for($i = 0; $i < sizeof($textBlocks['value']); $i++) {
    $textBlock = $DM->getThing($textBlocks['value'][$i]);
?>

      <div class="row">
        <?php renderTextBlock($textBlock); ?>
      </div>

<?php
  }
?>

    </div>
  </div>

<?php include("footer.php"); ?>

<?php

function getResizedImageUrl($imageUrl) {
  $urlParts = explode( '/', $imageUrl );
  //$insert = array( 'resized.' );
  //array_splice( $urlParts, sizeOf($urlParts)-1, 0, $insert );
  $urlParts[sizeOf($urlParts)-1] = 'resized.' . $urlParts[sizeOf($urlParts)-1];
  return implode( '/', $urlParts);
}

function renderGalleryTile($gallery, $galleryId) {
  global $DM;

  $title = $gallery['fields'][0];
  $body = $gallery['fields'][1];
  $images = $gallery['fields'][2];
  $firstImage = $DM->getThing($images['value'][0]);
?>
  <div class="col-md-4 col-sm-6 image-tile">
    <a href="#image-gallery-modal<?php echo $galleryId; ?>" class="image-tile-link" data-toggle="modal">
      <div class="image-tile-hover">
        <div class="image-tile-hover-content">
          <span class="glyphicon glyphicon-plus"></span>
        </div>
      </div>

      <img src="<?php echo getResizedImageUrl(IMGPATH.$firstImage['fields'][2]['value']); ?>" class='img-responsive' />
    </a>
    <div class="image-tile-caption">
      <h4><?php echo $title['value']; ?></h4>
    </div>
  </div>

<?php 
}


function renderGalleryModal($gallery, $galleryId) {

  global $DM;
  
  $title = $gallery['fields'][0];
  $body = $gallery['fields'][1];
  $images = $gallery['fields'][2];


?>
  <div class="portfolio-modal modal fade" id="image-gallery-modal<?php echo $galleryId; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
            <div class="modal-body">

              <h2><?php echo $title['value']; ?></h2>
<!--               <img src="<?php echo IMGPATH.$image['value']; ?>" class="img-responsive img-centered" alt=""> -->
              <?php echo $body['value']; ?>

              <div class="row image-tiles">
<?php
                for($i = 0; $i < sizeof($images['value']); $i++) {
                  $image = $DM->getThing($images['value'][$i]);
                  renderImageTile($image, $galleryId, $images['value'][$i]);
                }
?>
              </div>

              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php 

}

function renderImageTile($image, $galleryId, $imageId) {

  $title = $image['fields'][0];
  $body = $image['fields'][1];
  $image = $image['fields'][2];
?>
  <div class="col-md-4 col-sm-6 image-tile">
    <a href="#image-modal<?php echo $galleryId.'-'.$imageId;; ?>" class="image-tile-link" data-toggle="modal">
      <div class="image-tile-hover">
        <div class="image-tile-hover-content">
          <span class="glyphicon glyphicon-plus"></span>
        </div>
      </div>

      <img src="<?php echo getResizedImageUrl(IMGPATH.$image['value']); ?>" class='img-responsive' />
    </a>
    <div class="image-tile-caption">
      <h4><?php echo $title['value']; ?></h4>
    </div>
  </div>

<?php 
}

function renderImageModal($image, $galleryId, $imageId) {

  global $DM;
  
  $title = $image['fields'][0];
  $body = $image['fields'][1];
  $photo = $image['fields'][2];


?>
  <div class="portfolio-modal modal fade" id="image-modal<?php echo $galleryId.'-'.$imageId; ?>" tabindex="-1" role="dialog" aria-hidden="true" data-parent='<?php echo $galleryId ?>'>
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
            <div class="modal-body">

              <h2><?php echo $title['value']; ?></h2>
               <img src="<?php echo IMGPATH.$photo['value']; ?>" class="img-responsive img-centered" alt="">
              <?php echo $body['value']; ?>

              <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php 

}

?>
