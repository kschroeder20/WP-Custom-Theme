<?php $bio_page = get_page(19); ?>
<div class="card bio-card col-md-4">
  <img src="<?php echo get_field("image", $bio_page)['url'] ?>" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title"><?php echo get_field("name", $bio_page)?></h5>
    <?php if(!empty(the_field('subtitle', $bio_page))) { ?><h5 class="bio-subtitle"><?php echo get_field('subtitle', $bio_page)?></h5> <?php } ?>
  </div>
  <ul class="list-group list-group-flush">
    <?php if(!empty(get_field("phone_number", $bio_page))) { ?><li class="list-group-item bio-list-text"><i class="fas fa-phone bio-icon"></i> <?php echo get_field('phone_number', $bio_page) ?></li><?php } ?>
    <?php if(!empty(get_field("email", $bio_page))) { ?><li class="list-group-item bio-list-text"><i class="fas fa-envelope bio-icon"></i> <?php echo get_field('email', $bio_page) ?></li><?php } ?>
    <?php if(!empty(get_field("address", $bio_page))) { ?><li class="list-group-item bio-list-text"><i class="fas fa-map-marker-alt bio-icon"></i> <?php echo get_field('address', $bio_page) ?></li><?php } ?>
    <?php if(!empty(get_field("instagram", $bio_page))) { ?><li class="list-group-item bio-list-text"><i class="fab fa-instagram bio-icon"></i> <a href="<?php echo get_field('instagram', $bio_page) ?>">View My Instagram!</a><?php } ?>
    <?php if(!empty(get_field("facebook", $bio_page))) { ?><li class="list-group-item bio-list-text"><i class="fab fa-facebook-square bio-icon"></i> <a href="<?php echo get_field('faccebook', $bio_page) ?>">Visit Me on Facebook!</a><?php } ?>
  </ul>
</div>
<div class="col-md-8 bio-content">
  <?php echo wpautop($bio_page->post_content); ?><br>
</div>