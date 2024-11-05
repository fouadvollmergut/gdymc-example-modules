<?php 
  $alignment = optionGet('alignment');
  $vertical = optionGet('vertical');
?>

<section>
  <div 
    class="multi-content <?php echo $alignment; ?> <?php echo $vertical; ?>"
  >
    <?php if (contentCheck('image')): ?>
      <div class="multi-content__image">
        <?php contentCreate('image', 'image', '500x500'); ?>
      </div>
    <?php endif; ?>

    <div class="multi-content__text">
      <div class="multi-content__text--header">
        <?php if (contentCheck('head')): ?>
          <h2><?php contentCreate('head', 'text'); ?></h2>
        <?php endif; ?>
      </div>

      <?php if (contentCheck('copy')): ?>
        <?php contentCreate('copy', 'text'); ?>
      <?php endif; ?>

      <div class="multi-content__text--footer">
        <?php if (contentCheck('button')): ?>
          <?php contentCreate('button', 'buttongroup'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


