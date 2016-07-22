<div id="page-sidebar">
    <div class="scroll-sidebar">


        <ul id="sidebar-menu">
            <li class="header"><span>Overview</span></li>
            <?php
            if ( $typeee==0){

            ?>
            <li>
                <a href="index.html" title="Admin Dashboard">
                    <i class="glyph-icon icon-linecons-tv"></i>
                    <span>Admin dashboard</span>
                </a>
            </li>
            <li class="divider"></li>
            <li class="no-menu">
                <a href="https://agileui.com/demo/monarch/demo/frontend-template/index.html" title="Frontend template">
                    <i class="glyph-icon icon-linecons-beaker"></i>
                    <span>Frontend template</span>
                    <span class="bs-label label-danger">
                        NEW
                    </span>
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
                <a href="add_slider.php" title="slider">
                    <i class="glyph-icon icon-linecons-lightbulb"></i>
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
                    <i class="glyph-icon icon-linecons-fire"></i>
                    <span>view serial</span>
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
            <li>
                <a href="#" title="Advanced tables">
                    <i class="glyph-icon icon-linecons-megaphone"></i>
                    <span>Advanced tables</span>
                </a>
                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="tables.html" title="Basic tables"><span>Basic tables</span></a></li>
                        <li><a href="responsive-tables.html" title="Responsive tables"><span>Responsive tables</span></a></li>
                        <li><a href="data-tables.html" title="Data tables"><span>Data tables</span></a></li>
                        <li><a href="advanced-datatables.html" title="Advanced data tables"><span>Advanced data tables</span></a></li>
                        <li><a href="fixed-datatables.html" title="Fixed data tables"><span>Fixed data tables</span></a></li>
                        <li><a href="responsive-datatables.html" title="Responsive data tables"><span>Responsive data tables</span></a></li>
                    </ul>

                </div><!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Charts">
                    <i class="glyph-icon icon-linecons-paper-plane"></i>
                    <span>Charts</span>
                </a>
                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="flot-charts.html" title="Flot charts"><span>Flot charts</span></a></li>
                        <li><a href="sparklines.html" title="Sparklines"><span>Sparklines</span></a></li>
                        <li><a href="pie-gages.html" title="PieGages"><span>PieGages</span></a></li>
                        <li><a href="just-gage.html" title="justGage"><span>justGage</span></a></li>
                        <li><a href="morris-charts.html" title="Morris charts"><span>Morris charts</span></a></li>
                        <li><a href="xcharts.html" title="xCharts"><span>xCharts</span></a></li>
                        <li><a href="chart-js.html" title="Chart.js"><span>Chart.js</span></a></li>
                    </ul>

                </div><!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Maps">
                    <i class="glyph-icon icon-linecons-sound"></i>
                    <span>Maps</span>
                </a>
                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="gmaps.html" title="gMaps"><span>gMaps</span></a></li>
                        <li><a href="vector-maps.html" title="Vector maps"><span>Vector maps</span></a></li>
                        <li><a href="mapael.html" title="Mapael"><span>Mapael</span></a></li>
                    </ul>

                </div><!-- .sidebar-submenu -->
            </li>
            <?php
             }  
            ?>
            <li class="header"><span>Extra</span></li>
            <li>
                <a href="#" title="Pages">
                    <i class="glyph-icon icon-linecons-fire"></i>
                    <span>Pages</span>
                    <span class="bs-label badge-yellow">NEW</span>
                </a>
                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="index-alt.html" title="Alternate dashboard"><span>Alternate dashboard</span></a></li>
                        <li><a href="view-profile.html" title="View profile"><span>View profile</span></a></li>
                        <li><a href="faq-section.html" title="FAQ section"><span>FAQ section</span></a></li>
                        <li><a href="auto-menu.html" title="Auto menu"><span>Auto menu</span></a></li>
                        <li><a href="invoice.html" title="Invoice"><span>Invoice</span></a></li>
                        <li><a href="admin-blog.html" title="Blog posts list"><span>Blog posts list</span></a></li>
                        <li><a href="admin-pricing.html" title="Pricing tables"><span>Pricing tables</span></a></li>
                        <li><a href="portfolio-gallery.html" title="Portfolio gallery"><span>Portfolio gallery</span></a></li>
                        <li><a href="portfolio-masonry.html" title="Portfolio masonry"><span>Portfolio masonry</span></a></li>
                        <li><a href="slidebars.html" title="Slidebars"><span>Slidebars</span></a></li>
                    </ul>

                </div><!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Other Pages">
                    <i class="glyph-icon icon-linecons-cup"></i>
                    <span>Other Pages</span>
                </a>
                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="login-1.html" target="_blank" title="Login page 1"><span>Login page 1</span></a></li>
                        <li><a href="login-2.html" target="_blank" title="Login page 2"><span>Login page 2</span></a></li>
                        <li><a href="login-3.html" target="_blank" title="Login page 3"><span>Login page 3</span></a></li>
                        <li><a href="login-4.html" target="_blank" title="Login page 4"><span>Login page 4</span></a></li>
                        <li><a href="login-5.html" target="_blank" title="Login page 5"><span>Login page 5</span></a></li>
                        <li><a href="lockscreen-1.html" target="_blank" title="Lockscreen page 1"><span>Lockscreen page 1</span></a></li>
                        <li><a href="lockscreen-2.html" target="_blank" title="Lockscreen page 2"><span>Lockscreen page 2</span></a></li>
                        <li><a href="lockscreen-3.html" target="_blank" title="Lockscreen page 3"><span>Lockscreen page 3</span></a></li>
                        <li><a href="server-1.html" target="_blank" title="Server page 1"><span>Error 404 page</span></a></li>
                        <li><a href="server-2.html" target="_blank" title="Server page 2"><span>Error 404 alternate</span></a></li>
                        <li><a href="server-3.html" target="_blank" title="Server page 3"><span>Server 500 error</span></a></li>
                    </ul>

                </div><!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Mailbox">
                    <i class="glyph-icon icon-linecons-mail"></i>
                    <span>Mailbox</span>
                    <span class="bs-badge badge-danger">3</span>
                </a>
                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="mailbox-inbox.html" title="Inbox"><span>Inbox</span></a></li>
                        <li><a href="mailbox-compose.html" title="Compose message"><span>Compose message</span></a></li>
                        <li><a href="mailbox-single.html" title="Single message"><span>Single message</span></a></li>
                    </ul>

                </div><!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Snippets">
                    <i class="glyph-icon icon-linecons-cd"></i>
                    <span>Snippets</span>
                </a>
                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="timeline.html" title="Timeline"><span>Timeline</span></a></li>
                        <li><a href="chat.html" title="Chat"><span>Chat</span></a></li>
                        <li><a href="checklist.html" title="Checklist"><span>Checklist</span></a></li>
                    </ul>

                </div><!-- .sidebar-submenu -->
            </li>
            <li>
                <a href="#" title="Helpers">
                    <i class="glyph-icon icon-linecons-doc"></i>
                    <span>Helpers</span>
                </a>
                <div class="sidebar-submenu">

                    <ul>
                        <li><a href="helper-classes.html" title="Helper classes"><span>Helper classes</span></a></li>
                        <li><a href="page-transitions.html" title="Page transitions"><span>Page transitions</span></a></li>
                        <li><a href="animations.html" title="Animations"><span>Animations</span></a></li>
                    </ul>

                </div><!-- .sidebar-submenu -->
            </li>
        </ul><!-- #sidebar-menu -->


    </div>
</div>