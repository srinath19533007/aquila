<?php
/**
 * Content None file
 *
 * @package Aquila
 * @since Aquila 1.0
 */
?>
<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title">
            <?php esc_html_e('Nothing Found', 'aquila'); ?>
        </h1>
    </header>
    <div class="page-content">
        <?php if (is_home() && current_user_can('publish_posts')): ?>
            <p>
                <?php printf(wp_kses(__('Ready to publish your first post? <a href="%s">Get started here</a>', 'aquila'), [
                    'a' => [
                        'href' => []
                    ]
                ]), esc_url(admin_url('post-new.php'))); ?>
            </p>
        <?php elseif (is_search()): ?>
            <p>
                <?php
                esc_html_e('Sorry but nothing matched your search item. Please try again with some different keywords', 'aquila');
                get_search_form();
                ?>
            </p>
        <?php else: ?>
            <p>
                <?php
                esc_html_e('It seems that we cannot find what you are looking for. Perhaps search can help!', 'aquila');
                get_search_form();
                ?>
            </p>
        <?php endif; ?>
    </div>
</section>