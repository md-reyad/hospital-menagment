<?php
require 'class/fontend_function.php';
$index_objjs = new fontend_function();
$dataa = $index_objjs->select_photo();
?>

<?php
include './include/head.php';
?>
<body>
    <?php
    include './include/nav.php';
    ?>


    <section class="gallery-content">
        <div class="container">
            <div class="row port">
                <div class="col-md-8 col-md-offset-2 text-center button-group" id="filters">

                    <button type="button" class="gallery-btn btn-primary btn is-checked all_items" data-filter="*">All</button>
                    <button type="button" class="gallery-btn btn-primary btn" data-filter=".care">Care</button>
                    <button type="button" class="gallery-btn btn-primary btn" data-filter=".treatment">Treatment</button>
                    <button type="button" class="gallery-btn btn-primary btn" data-filter=".staff">Staff</button>
                    <button type="button" class="gallery-btn btn-primary btn" data-filter=".donation">Donation</button>
                    <button type="button" class="gallery-btn btn-primary btn" data-filter=".pharmacy">Pharmacy</button>

                </div>
            </div>	<!-- row -->
            <div class="row">
                <div class="isotope" id="port-items">
                    <?php
                    while ($row = mysqli_fetch_assoc($dataa)) {
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-6 element-item care" data-category="care">
                            <img style="height: 300px" class="img-responsive center-block" src="admin/photo/<?php echo $row['photo']; ?>" alt="Image">
                            <div class="item-desc hidden-xs">
                                <div class="item-tags">
                                    <p>
                                        <?php
                                        echo $row['description'];
                                        ?>
                                    </p>
                                </div>
                            </div><!-- /.item-desc -->
                        </div>
                        <?php
                    }
                    ?>

                </div>	<!-- isotope -->
            </div>	<!-- row -->
        </div>
    </section>

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <ul class="text-center contact">
                        <li class= "socials-icons">
                            <a href="#" data-toggle="tooltip" title="Share in Facebook" class="facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class= "socials-icons">
                            <a href="#" data-toggle="tooltip" title="Share in Twitter" class="twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class= "socials-icons">
                            <a href="#" data-toggle="tooltip" title="Share in Google +" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class= "socials-icons">
                            <a href="#" data-toggle="tooltip" title="Share in Instagram" class="instagram"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class= "socials-icons">
                            <a href="#" data-toggle="tooltip" title="Share in Pinterest" class="pinterest"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li class= "socials-icons">
                            <a href="#" data-toggle="tooltip" title="Connect with Skype" class="skype"><i class="fa fa-skype"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copy-right-text text-center">
                        &copy; Copyright 2014, Your Website Link. Theme by <a href="https://themewagon.com/">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script>
        new WOW().init();
    </script>

    <script>
        $(function () {
            //dropdown on hover



            // init Isotope
            var $container = $('.isotope');
            $container.imagesLoaded(function () {
                $('.isotope').isotope
                        ({
                            itemSelector: '.element-item',
                            layoutMode: 'fitRows'
                        });
            });


            // bind filter button click
            $('#filters').on('click', 'button', function ()
            {
                var filterValue = $(this).attr('data-filter');
                // use filterFn if matches value
                $container.isotope({filter: filterValue});
            });

            // change is-checked class on buttons
            $('.button-group').each(function (i, buttonGroup)
            {
                var $buttonGroup = $(buttonGroup);
                $buttonGroup.on('click', 'button', function ()
                {
                    $buttonGroup.find('.is-checked').removeClass('is-checked');
                    $(this).addClass('is-checked');
                });
            });

        });

        $(document).ready(function () {
            $('#filters .all_items').click();

        });
    </script>

</body>

<!-- Mirrored from markup.themewagon.com/healthcare_pro/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Jul 2016 17:56:26 GMT -->
</html>
