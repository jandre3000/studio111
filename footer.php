<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
        <div id="kontakt">
            <h1>VI.</h1>
            <figure>
                <img alt="kontakt" src="<?php echo get_template_directory_uri()."/img/kontakt.png"?>">
                <figcaption>Kontakt</figcaption>
            </figure>
            <div id="kontakt_stopka">
                <h1>Magdalena Wójcik</h1>
                <p>
                    Managing director</p>
                    <div class="kreseczka">
                    </div>
                    <p>
                    <a href= "mailto:magdalena.wojcik@studio111.pl">magdalena.wojcik@studio111</a><br>
                    +48 662 471 860
                </p>
            </div>
            <nav>
                <ul>
                    <li>
                        <p>Studio111 sp. z.o.o.</p>
                        <p><a href= "mailto:office@studio111.pl">ofﬁce@studio111.pl</a></p>
                        <p>+48 609 501 196</p>
                    </li>
                    <li>
                        <p>Biuro</p>
                        <p>ul. Bukowińska 12 lok. 814
                        </p>
                        <p>02-703 Warszawa</p>
                    </li>
                    <li>
                        <p>Siedziba Spółki:</p>
                        <p>ul. Kminkowa 166c/3</p>
                        <p>62-064 Plewiska</p>
                    </li>
                    <li>
                    <a id="facebook" href="http://facebook.com">
                        &nbsp;
                    </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div><!-- #curtain_container-->


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
        <script src="<?php echo get_template_directory_uri()."/js/plugins.js"?>"></script>
        <script src="<?php echo get_template_directory_uri()."/js/scrolltop.js"?>"></script>
        <script src="<?php echo get_template_directory_uri()."/js/navigation.js"?>"></script>
        <script src="<?php echo get_template_directory_uri()."/js/html5.js"?>"></script>

        <script src="<?php echo get_template_directory_uri()."/js/jquery.superscrollorama.js"?>"></script>
        <script src="<?php echo get_template_directory_uri()."/js/greensock/TweenMax.min.js"?>"></script>
        <script src="<?php echo get_template_directory_uri()."/js/main.js"?>"></script>

    </body>
</html>