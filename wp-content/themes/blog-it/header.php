<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная | Блог</title>
    <?php wp_head(); ?>

    <?php 
        if (is_singular( 'post' )) {
            echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/assets/style/post.css">';
        }

        if (is_search(  )) {
            echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/assets/style/search.css">';
        }
        
        if (is_category(  )) {
            echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/assets/style/category.css">';
        }

        if (is_page(44)) {
            echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/assets/style/contacts.css">';
        }

        if (is_404(  )) {
            echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/assets/style/404.css">';
        }
    ?>
</head>
<body>
    <?php
    if (is_search() || is_404()) {
        ?>
            <div class = "footer-bottom">
        <?php
    }
    ?>
    <header class="header">
        <div class="container header__container">
            <?php
                if(is_front_page(  )) {
                    ?>               
                        <a class="logo header__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Лого блога">
                        </a>
                    <?php
                } else {
                    ?>
                        <a href="<?php echo home_url(); ?>" class="logo header__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Лого блога">
                        </a>
                    <?php
                }


            ?>
            <div class="header__right">
                
                <nav class="nav menu-nav">
                    <?php wp_nav_menu( [ 'container' => ''] ); ?>
                    <button class="search-link btn-reset">Поиск</button>

                </nav>
                <div class="menu-btn">
            		<span></span>
            		<span></span>
            		<span></span>
            	</div>
                <a href="tel:<?php if(!dynamic_sidebar( 'sidebar-1' )); ?>" class="phone phone__header"><?php if(!dynamic_sidebar( 'sidebar-1' )); ?></a>
     
                
            </div>
            
        </div>
        <div class="header-search">
			<button class="btn-reset header-search__close">
				<svg width="10.000000" height="10.000000" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <desc>
                            Created with Pixso.
                    </desc>
                    <defs>
                        <clipPath id="clip2_456">
                            <rect rx="-0.500000" width="9.000000" height="9.000000" transform="translate(0.500000 0.500000)" fill="white" fill-opacity="0"/>
                        </clipPath>
                    </defs>
                    <rect rx="-0.500000" width="9.000000" height="9.000000" transform="translate(0.500000 0.500000)" fill="#FFFFFF" fill-opacity="0"/>
                    <g clip-path="url(#clip2_456)">
                        <path d="M0.14 0.83C-0.05 0.64 -0.05 0.33 0.14 0.14C0.33 -0.05 0.64 -0.05 0.83 0.14L4.99 4.31L9.16 0.14C9.35 -0.05 9.66 -0.05 9.85 0.14C10.04 0.33 10.04 0.64 9.85 0.83L5.69 4.99L9.85 9.16C10.04 9.35 10.04 9.66 9.85 9.85C9.66 10.04 9.35 10.04 9.16 9.85L4.99 5.69L0.83 9.85C0.64 10.04 0.33 10.04 0.14 9.85C-0.05 9.66 -0.05 9.35 0.14 9.16L4.3 4.99L0.14 0.83Z" fill="#2F2222" fill-opacity="1.000000" fill-rule="nonzero"/>
                    </g>
                </svg>              
			</button>
			<form action="#" class="header-search__form">
				<input type="search" name = "s" class="header-search__input form-input">
				<button class="header-search__btn form-btn btn-reset">
					<span>Найти</span>
					<svg width="20.000000" height="20.000000" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <desc>
                                Created with Pixso.
                        </desc>
                        <defs>
                            <clipPath id="clip2_447">
                                <rect rx="-0.500000" width="19.000000" height="19.000000" transform="translate(0.500000 0.500000)" fill="white" fill-opacity="0"/>
                            </clipPath>
                        </defs>
                        <rect rx="-0.500000" width="19.000000" height="19.000000" transform="translate(0.500000 0.500000)" fill="#FFFFFF" fill-opacity="0"/>
                        <g clip-path="url(#clip2_447)">
                            <path d="M19.87 18.69L14.06 12.88C15.16 11.52 15.83 9.79 15.83 7.91C15.83 3.55 12.28 0 7.91 0C3.55 0 0 3.55 0 7.91C0 12.28 3.55 15.83 7.91 15.83C9.79 15.83 11.52 15.16 12.88 14.06L18.69 19.87C18.86 20.04 19.12 20.04 19.28 19.87L19.87 19.28C20.04 19.12 20.04 18.86 19.87 18.69ZM7.91 14.16C4.47 14.16 1.66 11.36 1.66 7.91C1.66 4.47 4.47 1.66 7.91 1.66C11.36 1.66 14.16 4.47 14.16 7.91C14.16 11.36 11.36 14.16 7.91 14.16Z" fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero"/>
                        </g>
                    </svg>
                    
				</button>
			</form>
		</div>
    </header>