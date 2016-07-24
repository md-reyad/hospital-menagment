<div id="page-sidebar">
    <div class="scroll-sidebar">


        <ul id="sidebar-menu">
            <li class="header"><span>Overview</span></li>
            <?php
            if ( $typeee==0){

            ?>
            <li>
                <a href="dashboard.php" title="Admin Dashboard">
                    <i class="glyph-icon icon-linecons-tv"></i>
                    <span>Admin dashboard</span>
                </a>
            </li>
            
            <li class="header"><span>Components</span></li>
            <li>
                <a href="#" title="Category">
                    <i class="glyph-icon icon-linecons-diamond"></i>
                    <span>Category</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="add_category.php" title="Chart boxes"><span>Add Category</span></a></li>
                        <li><a href="view_category.php" title="Tile boxes"><span>View Category</span></a></li>
                    </ul>

                </div>

            </li>
            <li>
                <a href="#" title="doctor boxes">
                    <i class="glyph-icon icon-linecons-lightbulb"></i>
                    <span>Doctor</span>
                    <span class="bs-label label-primary">Hot</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="add_doctor.php" title="Chart boxes"><span>Add Doctor</span></a></li>
                        <li><a href="view_doctor.php" title="Tile boxes"><span>View Doctor</span></a></li>
                       
                    </ul>

                </div><!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Contact">
                    <i class="glyph-icon icon-linecons-mail "></i>
                    <span>Contact</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="add_contact.php" title="add_contact boxes"><span>Add contact</span></a></li>
                        <li><a href="view_contact.php" title="Tile boxes"><span>View contact</span></a></li>
                       
                    </ul>

                </div><!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Contact">
                    <i class="glyph-icon icon-picture-o "></i>
                    <span>Add Photo</span>
                </a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="add_photo.php" title="photo boxes"><span>Add Photo</span></a></li>
                        <li><a href="view_photo.php" title="View Photo"><span>View Photo</span></a></li>
                       
                    </ul>

                </div><!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="add_slider.php" title="slider">
                    <i class="glyph-icon icon-picture-o"></i>
                    <span>Add Slider</span>
                </a>
            
               
            </li>
            <li>
                <a href="add_footer.php" title="footer">
                    <i class="glyph-icon icon-linecons-fire"></i>
                    <span>Add Footer</span>
                </a>
            </li>
            <li>
                <a href="serial_admin.php" title="admin serial">
                    <i class="glyph-icon icon-arrows-alt"></i>
                    <span>view serial</span>
                </a>
            </li>
            <li>
                <a href="change_password.php" title="change_password">
                    <i class="glyph-icon icon-linecons-lock"></i>
                    <span>Change Password</span>
                </a>
            </li>
            <?php
            } else{
            
        
                
           
            ?>
            <li>
                <a href="#" title="SERIAL">
                    <i class="glyph-icon icon-linecons-eye"></i>
                    <span>Serial</span>
                </a>
                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="add_serial.php" title="add serial"><span>add serial</span></a></li>
                        <li><a href="view_serial.php" title="view_serial"><span>View Serial</span></a></li>
                    
                    </ul>

                </div><!-- .sidebar-submenu -->
            </li>
            
            <?php
             }  
            ?>
            
        </ul><!-- #sidebar-menu -->


    </div>
</div>