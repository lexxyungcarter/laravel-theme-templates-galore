<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#dashboard">
                <i class="zmdi zmdi-home m-r-5"></i>
                @php $site_name_initials = explode(' ', $site_name) @endphp
                @foreach($site_name_initials as $sni)
                    {{ substr($sni, 0, 1) }}
                @endforeach
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#user">
                <i class="zmdi zmdi-account m-r-5"></i>User</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <div class="slimScrollDiv">
                    <ul class="list">
                        <li>
                            <div class="user-info">
                                <div class="image">
                                    <a href="#" class=" waves-effect waves-block">
                                        <img src="/templates/dashy/assets/img/profile_av.jpg" alt="User">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h4>Michael</h4>
                                    <small>UI UX Designer</small>
                                </div>
                                <a title="facebook" href="#" class=" waves-effect waves-block">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                                <a title="twitter" href="#" class=" waves-effect waves-block">
                                    <i class="zmdi zmdi-twitter"></i>
                                </a>
                                <a title="instagram" href="#" class=" waves-effect waves-block">
                                    <i class="zmdi zmdi-instagram"></i>
                                </a>
                            </div>
                        </li>
                        <li class="header">MAIN</li>
                        <li class="active open">
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="zmdi zmdi-home"></i>
                                <span>Dashboard</span>
                            </a>
                            <ul class="ml-menu" style="display: none;">
                                <li class="active">
                                    <a href="{{ route('pages.show', ['dashy', 'index']) }}" class="toggled waves-effect waves-block">Main</a>
                                </li>
                                <li>
                                    <a href="#" class=" waves-effect waves-block">RTL</a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.show', ['dashy', 'index2']) }}" class=" waves-effect waves-block">Horizontal (index2)</a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.show', ['dashy', 'ec-dashboard']) }}" class=" waves-effect waves-block">Ecommerce</a>
                                </li>
                                <li>
                                    <a href="blog-dashboard.html" class=" waves-effect waves-block">Blog</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="zmdi zmdi-apps"></i>
                                <span>App</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="mail-inbox.html" class=" waves-effect waves-block">Inbox</a>
                                </li>
                                <li>
                                    <a href="chat.html" class=" waves-effect waves-block">Chat</a>
                                </li>
                                <li>
                                    <a href="events.html" class=" waves-effect waves-block">Calendar</a>
                                </li>
                                <li>
                                    <a href="file-dashboard.html" class=" waves-effect waves-block">File Manager</a>
                                </li>
                                <li>
                                    <a href="contact.html" class=" waves-effect waves-block">Contact list</a>
                                </li>
                                <li>
                                    <a href="blog-dashboard.html" class=" waves-effect waves-block">Blog</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="zmdi zmdi-shopping-cart"></i>
                                <span>Ecommerce</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="ec-dashboard.html" class=" waves-effect waves-block">Dashboard</a>
                                </li>
                                <li>
                                    <a href="ec-product.html" class=" waves-effect waves-block">Product</a>
                                </li>
                                <li>
                                    <a href="ec-product-List.html" class=" waves-effect waves-block">Product List</a>
                                </li>
                                <li>
                                    <a href="ec-product-detail.html" class=" waves-effect waves-block">Product detail</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="zmdi zmdi-swap-alt"></i>
                                <span>User Interface (UI)</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="ui_kit.html" class=" waves-effect waves-block">UI KIT</a>
                                </li>
                                <li>
                                    <a href="alerts.html" class=" waves-effect waves-block">Alerts</a>
                                </li>
                                <li>
                                    <a href="collapse.html" class=" waves-effect waves-block">Collapse</a>
                                </li>
                                <li>
                                    <a href="colors.html" class=" waves-effect waves-block">Colors</a>
                                </li>
                                <li>
                                    <a href="dialogs.html" class=" waves-effect waves-block">Dialogs</a>
                                </li>
                                <li>
                                    <a href="icons.html" class=" waves-effect waves-block">Icons</a>
                                </li>
                                <li>
                                    <a href="list-group.html" class=" waves-effect waves-block">List Group</a>
                                </li>
                                <li>
                                    <a href="media-object.html" class=" waves-effect waves-block">Media Object</a>
                                </li>
                                <li>
                                    <a href="modals.html" class=" waves-effect waves-block">Modals</a>
                                </li>
                                <li>
                                    <a href="notifications.html" class=" waves-effect waves-block">Notifications</a>
                                </li>
                                <li>
                                    <a href="progressbars.html" class=" waves-effect waves-block">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="range-sliders.html" class=" waves-effect waves-block">Range Sliders</a>
                                </li>
                                <li>
                                    <a href="sortable-nestable.html" class=" waves-effect waves-block">Sortable &amp; Nestable</a>
                                </li>
                                <li>
                                    <a href="tabs.html" class=" waves-effect waves-block">Tabs</a>
                                </li>
                                <li>
                                    <a href="waves.html" class=" waves-effect waves-block">Waves</a>
                                </li>
                            </ul>
                        </li>
                        <li class="header">FORMS, CHARTS, TABLES</li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="zmdi zmdi-assignment"></i>
                                <span>Forms</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="basic-form-elements.html" class=" waves-effect waves-block">Basic Elements</a>
                                </li>
                                <li>
                                    <a href="advanced-form-elements.html" class=" waves-effect waves-block">Advanced Elements</a>
                                </li>
                                <li>
                                    <a href="form-examples.html" class=" waves-effect waves-block">Form Examples</a>
                                </li>
                                <li>
                                    <a href="form-validation.html" class=" waves-effect waves-block">Form Validation</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html" class=" waves-effect waves-block">Form Wizard</a>
                                </li>
                                <li>
                                    <a href="form-editors.html" class=" waves-effect waves-block">Editors</a>
                                </li>
                                <li>
                                    <a href="form-upload.html" class=" waves-effect waves-block">File Upload</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="zmdi zmdi-grid"></i>
                                <span>Tables</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="normal-tables.html" class=" waves-effect waves-block">Normal Tables</a>
                                </li>
                                <li>
                                    <a href="jquery-datatable.html" class=" waves-effect waves-block">Jquery Datatables</a>
                                </li>
                                <li>
                                    <a href="editable-table.html" class=" waves-effect waves-block">Editable Tables</a>
                                </li>
                                <li>
                                    <a href="footable.html" class=" waves-effect waves-block">Foo Tables</a>
                                </li>
                                <li>
                                    <a href="table-color.html" class=" waves-effect waves-block">Tables Color</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="zmdi zmdi-chart"></i>
                                <span>Charts</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="morris.html" class=" waves-effect waves-block">Morris</a>
                                </li>
                                <li>
                                    <a href="flot.html" class=" waves-effect waves-block">Flot</a>
                                </li>
                                <li>
                                    <a href="chartjs.html" class=" waves-effect waves-block">ChartJS</a>
                                </li>
                                <li>
                                    <a href="sparkline.html" class=" waves-effect waves-block">Sparkline</a>
                                </li>
                                <li>
                                    <a href="jquery-knob.html" class=" waves-effect waves-block">Jquery Knob</a>
                                </li>
                            </ul>
                        </li>
                        <li class="header">EXTRA COMPONENTS</li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="zmdi zmdi-delicious"></i>
                                <span>Widgets</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="widgets-app.html" class=" waves-effect waves-block">Apps Widgetse</a>
                                </li>
                                <li>
                                    <a href="widgets-data.html" class=" waves-effect waves-block">Data Widgetse</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="zmdi zmdi-lock"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="ml-menu" style="display: none;">
                                <li>
                                    <a href="sign-in.html" class=" waves-effect waves-block">Sign In</a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.show', ['dashy', 'sign-up']) }}" class=" waves-effect waves-block">Sign Up</a>
                                </li>
                                <li>
                                    <a href="forgot-password.html" class=" waves-effect waves-block">Forgot Password</a>
                                </li>
                                <li>
                                    <a href="404.html" class=" waves-effect waves-block">Page 404</a>
                                </li>
                                <li>
                                    <a href="500.html" class=" waves-effect waves-block">Page 500</a>
                                </li>
                                <li>
                                    <a href="page-offline.html" class=" waves-effect waves-block">Page Offline</a>
                                </li>
                                <li>
                                    <a href="locked.html" class=" waves-effect waves-block">Locked Screen</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="zmdi zmdi-copy"></i>
                                <span>Sample Pages</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="{{ route('pages.show', ['dashy', 'blank']) }}" class=" waves-effect waves-block">Blank Page</a>
                                </li>
                                <li>
                                    <a href="image-gallery.html" class=" waves-effect waves-block">Image Gallery</a>
                                </li>
                                <li>
                                    <a href="profile.html" class=" waves-effect waves-block">Profile</a>
                                </li>
                                <li>
                                    <a href="timeline.html" class=" waves-effect waves-block">Timeline</a>
                                </li>
                                <li>
                                    <a href="pricing.html" class=" waves-effect waves-block">Pricing</a>
                                </li>
                                <li>
                                    <a href="invoices.html" class=" waves-effect waves-block">Invoices</a>
                                </li>
                                <li>
                                    <a href="search-results.html" class=" waves-effect waves-block">Search Results</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="zmdi zmdi-map"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="google.html" class=" waves-effect waves-block">Google Map</a>
                                </li>
                                <li>
                                    <a href="yandex.html" class=" waves-effect waves-block">YandexMap</a>
                                </li>
                                <li>
                                    <a href="jvectormap.html" class=" waves-effect waves-block">jVectorMap</a>
                                </li>
                            </ul>
                        </li>
                        <li class="header">Extra</li>
                        <li>
                            <div class="progress-container progress-primary m-t-10">
                                <span class="progress-badge">Traffic this Month</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 67%;">
                                        <span class="progress-value">67%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="progress-container progress-info">
                                <span class="progress-badge">Server Load</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 86%;">
                                        <span class="progress-value">86%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.2); width: 2px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 3px; z-index: 99; left: 1px; height: 343.408px;"></div>
                    <div class="slimScrollRail" style="width: 2px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 0px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; left: 1px;"></div>
                </div>
            </div>
        </div>
        
        <div class="tab-pane stretchLeft" id="user">
            <div class="menu">
                <div class="slimScrollDiv">
                    <ul class="list">
                        <li>
                            <div class="user-info m-b-20 p-b-15">
                                <div class="image">
                                    <a href="#" class=" waves-effect waves-block">
                                        <img src="/templates/dashy/assets/img/profile_av.jpg" alt="User">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h4>Michael</h4>
                                    <small>UI UX Designer</small>
                                </div>
                                <a title="facebook" href="#" class=" waves-effect waves-block">
                                    <i class="zmdi zmdi-facebook"></i>
                                </a>
                                <a title="twitter" href="#" class=" waves-effect waves-block">
                                    <i class="zmdi zmdi-twitter"></i>
                                </a>
                                <a title="instagram" href="#" class=" waves-effect waves-block">
                                    <i class="zmdi zmdi-instagram"></i>
                                </a>
                                <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                <div class="row">
                                    <div class="col-4">
                                        <h5 class="m-b-5">852</h5>
                                        <small>Following</small>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="m-b-5">13k</h5>
                                        <small>Followers</small>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="m-b-5">234</h5>
                                        <small>Post</small>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <small class="text-muted">Email address: </small>
                            <p>michael@gmail.com</p>
                            <hr>
                            <small class="text-muted">Phone: </small>
                            <p>+ 202-555-0191</p>
                            <hr>
                            <ul class="list-unstyled">
                                <li>
                                    <div>Photoshop</div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%">
                                            <span class="sr-only">62% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>Wordpress</div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar l-green " role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%">
                                            <span class="sr-only">87% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>HTML 5</div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar l-amber" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                                            <span class="sr-only">32% Complete</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>Angular</div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar l-blush" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%">
                                            <span class="sr-only">56% Complete</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>