        <section class="info_section layout_padding2">
            <div class="container">
                <div class="row info_main_row">
                    <div class="col-md-6 col-lg-4">

                        <div class="info_links">
                            <h4>
                                Menu
                            </h4>
                            
                            <div class="info_links_menu">
                                <a href="index.html">
                                    Home
                                </a>
                                <a href="about.html">
                                    About
                                </a>
                                <a href="chocolate.html">
                                    Chocolates
                                </a>
                                <a href="testimonial.html">
                                    Testimonial
                                </a>
                                <a href="contact.html">
                                    Contact us
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <h4>
                            Contact Us
                        </h4>
                        <div class="info_contact">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>

                    <?php
                    if (is_active_sidebar('sidebar-1')) {
                        get_sidebar('sidebar-1');
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