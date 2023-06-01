<?php
<<<<<<< HEAD
=======

>>>>>>> refs/remotes/origin/main
/**
 * Header Navigation Template
 *
 * @package Aquila
 *
 */
$menu_class = \AQUILA_THEME\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('aquila-header-menu');

$header_menus = wp_get_nav_menu_items($header_menu_id);

// echo '<pre>';
// print_r($header_menus);
// wp_die();
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<<<<<<< HEAD
    <div class="container-fluid">
=======
    <div class="container">
>>>>>>> refs/remotes/origin/main
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
        ?>
<<<<<<< HEAD
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if (!empty($header_menus) && is_array($header_menus)): ?>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php foreach ($header_menus as $menu_item): ?>
                        <?php if (!$menu_item->menu_item_parent): ?>
                            <?php $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID); ?>

                            <?php $has_children = !empty($child_menu_items) && is_array($child_menu_items); ?>
                            <?php if (!$has_children): ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?php echo esc_url($menu_item->url); ?>"><?php echo esc_html($menu_item->title); ?></a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <?php echo esc_html($menu_item->title); ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($child_menu_items as $child_menu_item): ?>
=======
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if (!empty($header_menus) && is_array($header_menus)) : ?>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php foreach ($header_menus as $menu_item) : ?>
                        <?php if (!$menu_item->menu_item_parent) : ?>
                            <?php $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID); ?>

                            <?php $has_children = !empty($child_menu_items) && is_array($child_menu_items); ?>
                            <?php if (!$has_children) : ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="<?php echo esc_url($menu_item->url); ?>"><?php echo esc_html($menu_item->title); ?></a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php echo esc_html($menu_item->title); ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ($child_menu_items as $child_menu_item) : ?>
>>>>>>> refs/remotes/origin/main
                                            <li><a class="dropdown-item" href="<?php echo esc_url($child_menu_item->url); ?>"><?php echo esc_html($child_menu_item->title); ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<?php
// wp_nav_menu(
//     array(
//         'theme_location' => 'aquila-header-menu',
//         'container_class' => 'nav-item'
//     )
// );
// wp_get_nav_menu_items() will get the menu in the form of an array
?>