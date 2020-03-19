<?php
/**
 * The front page template file.
 *
 * The front-page.php template file is used to render your site’s front page,
 * whether the front page displays the blog posts index (mentioned above) or a static page.
 * The front page template takes precedence over the blog posts index (home.php) template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package OnePress
 */

get_header();

$layout = onepress_get_layout();

    /**
     * @since 2.0.0
     * @see onepress_display_page_title
     */
    do_action( 'onepress_page_before_content' );
    ?>
<section class="NTcontent NTcontent001">
    <div class="Lcontent">
        <!--        <h1>An assistant to perform daily activities</h1>-->
        <h2><?php get_field('hero'); the_field('hero_title')?></h2>
        <div class="main-button-div"><a class="get-started-button" href="#">Get started</a></div>
        welkom op de website, hierop komt alle informatie over Robin assistance service

        Lorem ... ipsum dolor sit amet, consectetur adipiscing elit. Aliquam congue vitae sem ut imperdiet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi hendrerit viverra tellus. Ut velit lorem, maximus nec fringilla id, scelerisque tristique justo. Quisque euismod ultricies est eu lobortis. Etiam at mi pellentesque, molestie purus porta, lacinia turpis. Nullam ac urna magna. Donec pulvinar, nisl vitae porttitor aliquet, lectus felis pulvinar erat, ut dictum nisl eros non augue.

    </div>
    <div class="Rcontent"><img class="contentimg" title="" src="http://24935.hosts1.ma-cloud.nl/bewijzenmap/pvb/wordpress/wp-content/uploads/2020/03/ondercontent01-e1583491135307.png" alt="" /></div>
</section><section class="NTcontent NTcontent002">
    <div class="Lcontent"><img class="contentimg" title="" src="http://24935.hosts1.ma-cloud.nl/bewijzenmap/pvb/wordpress/wp-content/uploads/2020/03/homepage-content002n2v2.png" alt="" /></div>
    <div class="Rcontent space Rcontent001">

        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.

    </div>
    <div class="Lcontent Lcontent002">

        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.

    </div>
    <div class="Rcontent space"><img class="contentimg" title="" src="http://24935.hosts1.ma-cloud.nl/bewijzenmap/pvb/wordpress/wp-content/uploads/2020/03/homepage-content002n1v2.png" alt="" /></div>
    <div class="Lcontent"><img class="contentimg" title="" src="http://24935.hosts1.ma-cloud.nl/bewijzenmap/pvb/wordpress/wp-content/uploads/2020/03/Iphone-Robin-1.png" alt="" width="300" /></div>
    <div class="Rcontent space Rcontent003">

        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.

    </div>
</section><section class="NTcontent NTcontent003">
    <div class="product-container product01">
        <div class="image-container"><img class="product-image" title="" src="http://24935.hosts1.ma-cloud.nl/bewijzenmap/pvb/wordpress/wp-content/uploads/2020/03/placeholder-image.png" alt="" /></div>
        <div class="content-container">
            <ul class="product-checklist">
                <li>packagege</li>
                <li>package</li>
                <li>1 to 5 persons</li>
            </ul>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.
            <div class="product-knop-container"><a class="product-knop" href="#">Get started</a></div>
        </div>
    </div>
    <div class="product-container product02">
        <div class="image-container"><img class="product-image" title="" src="http://24935.hosts1.ma-cloud.nl/bewijzenmap/pvb/wordpress/wp-content/uploads/2020/03/placeholder-image.png" alt="" /></div>
        <div class="content-container">
            <ul class="product-checklist">
                <li>Whole package</li>
                <li>package</li>
                <li>1 to 5 people</li>
            </ul>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.
            <div class="product-knop-container"><a class="product-knop" href="#">Get started</a></div>
        </div>
    </div>
    <div class="product-container product03">
        <div class="image-container"><img class="product-image" title="" src="http://24935.hosts1.ma-cloud.nl/bewijzenmap/pvb/wordpress/wp-content/uploads/2020/03/placeholder-image.png" alt="" /></div>
        <div class="content-container">
            <ul class="product-checklist">
                <li>packagege</li>
                <li>package</li>
                <li>1 to 5 persons</li>
            </ul>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.
            <div class="product-knop-container"><a class="product-knop" href="#">Get started</a></div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
