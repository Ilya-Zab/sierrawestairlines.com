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

    function wrap_as_section($template_function, $args)
    {
        section_start();
        $template_function($args);
        section_end();
    }
