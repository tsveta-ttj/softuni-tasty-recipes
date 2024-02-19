        <section class="info_section layout_padding2">
            <div class="container">
                <div class="row info_main_row">
                    <?php
                    if ( is_active_sidebar( 'sidebar-3' ) ) {
                        get_sidebar( 'sidebar-3' );
                    }

                    ?>

                    <?php
                    if ( is_active_sidebar('sidebar-2') ) {
                        get_sidebar( 'sidebar-2' );
                    }

                    ?>

                    <?php
                    if ( is_active_sidebar( 'sidebar-1' ) ) {
                        get_sidebar( 'sidebar-1' );
                    }

                    ?>
                </div>
            </div>
        </section>

        <!-- footer section -->
        <footer class="container-fluid footer_section">
            <div class="container">
                <div class="col-md-11 col-lg-8 mx-auto">
                    <p>
                        &copy; <span id="displayYear"></span> All Rights Reserved By
                        <a href="https://html.design/">Free Html Templates</a>
                    </p>
                </div>
            </div>
        </footer>
        <!-- footer section -->
        <?php wp_footer(); ?>
        </body>

        </html>