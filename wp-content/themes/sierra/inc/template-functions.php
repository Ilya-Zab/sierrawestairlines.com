<?php
function section_start()
{
?>
    <section>
        <div class="container">
        <?php
    }

    function section_end()
    {
        ?>
        </div>
    </section>
<?php
    }

    function sections_start()
    {
?>
    <div class="carbon-sections pb-12">
    <?php
    }

    function sections_end()
    {
    ?>
    </div>
<?php
    }

    function inner_section_start()
    {
?>
    <div class="inner-section">
    <?php
    }

    function inner_section_end()
    {
    ?>
    </div>
<?php
    }

    function wrap_as_section($template_function, $args)
    {
        section_start();
        $template_function($args);
        section_end();
    }


    function sierra_the_page_title()
    {
        $title = get_the_title();

        section_start();
        get_template_part('template-parts/title-subtitle', null, array(
            'title' => $title,
            'is_main' => true,
            'use_h1' => true,
            'is_center' => true
        ));
        section_end();
    }

    function sierra_the_page_content()
    {
        $page_content = get_the_content();
        if (!$page_content) return;
?>
    <section class="blog-article pb-12">
        <div class="container">
            <?php the_content() ?>
        </div>
    </section>
<?php
    }
