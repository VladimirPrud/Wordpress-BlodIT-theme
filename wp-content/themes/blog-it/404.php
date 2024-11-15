<?php get_header(); ?>
<main class="main">
    <section class="not-found">
        <h1 class="visually-hidden">Страница не найдена</h1>
        <div class="container not-found__container">
            <img src="<?php echo get_template_directory_uri(); ?> ../assets/img/404.png" alt="" aria-hidden="true" class="not-found__img">
            <h2 class="not-found__title blog-title">Что-то пошло не так...</h2>
            <a href="<?php echo home_url() ?>" class="not-found__back">
                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <path
                            d="M2.41344 5.22558L7.03874 0.613083C7.19028 0.462049 7.43563 0.462303 7.58692 0.613865C7.73809 0.765407 7.7377 1.01089 7.58614 1.16205L3.23616 5.50002L7.58629 9.83797C7.73784 9.98914 7.73823 10.2345 7.58708 10.386C7.51124 10.462 7.41188 10.5 7.31253 10.5C7.21342 10.5 7.11446 10.4623 7.03876 10.3868L2.41344 5.77443C2.34046 5.70181 2.2995 5.60299 2.2995 5.50002C2.2995 5.39705 2.34057 5.29834 2.41344 5.22558Z"
                            fill="#5D71DD" />
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="10" height="10" fill="white" transform="matrix(-1 0 0 1 10 0.5)" />
                        </clipPath>
                    </defs>
                </svg>
                <span>Вернуться назад</span>
            </a>
        </div>
    </section>
</main>
<?php get_footer(); ?>