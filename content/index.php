<section>
  <div 
    class="content"
  >
    <div class="content__text">
      <div class="content__text--header">
        <?php if (contentCheck('head')): ?>
          <h2><?php contentCreate('head', 'text'); ?></h2>
        <?php endif; ?>
      </div>

      <?php if (contentCheck('copy')): ?>
        <?php contentCreate('copy', 'text'); ?>
      <?php endif; ?>

      <div class="content__text--footer">
        <?php if (contentCheck('button')): ?>
          <?php contentCreate('button', 'buttongroup'); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


