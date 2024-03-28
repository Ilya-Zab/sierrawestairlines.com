<div class="blog-grid">
    <?php
    $items = $args['items'];
    foreach ($items as $item) {
        get_template_part('template-parts/card', null, $item);
    }
    ?>
</div>