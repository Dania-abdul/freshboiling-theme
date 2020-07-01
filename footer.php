

        <footer class="footer">                
            <div class="container">
                <p class="footer__text">
                    copyrights 2020 | Dee
                </p>

                <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'footer__menu'
                    )
                ) ?>
            </div>      
        </footer>
            <?php wp_footer(); ?>
    
    </body>
</html>