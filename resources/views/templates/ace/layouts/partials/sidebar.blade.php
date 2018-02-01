<div id="sidebar" class="sidebar responsive ace-save-state">
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </button>

            <button class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </button>

            <button class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </button>

            <button class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </button>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="active">
            <a href="{{ route('pages.show', ['ace', 'index']) }}">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Dashboard </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text">
                    UI &amp; Elements
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Layouts
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="{{ route('pages.show', ['ace', 'top-menu']) }}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Top Menu
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="{{ route('pages.show', ['ace', 'two-menu-1']) }}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Two Menus 1
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="{{ route('pages.show', ['ace', 'two-menu-2']) }}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Two Menus 2
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="{{ route('pages.show', ['ace', 'mobile-menu-1']) }}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Default Mobile Menu
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="{{ route('pages.show', ['ace', 'mobile-menu-2']) }}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Mobile Menu 2
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="{{ route('pages.show', ['ace', 'mobile-menu-3']) }}">
                                <i class="menu-icon fa fa-caret-right"></i>
                                Mobile Menu 3
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'typography']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Typography
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'elements']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Elements
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'buttons']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Buttons &amp; Icons
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'content-slider']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Content Sliders
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'treeview']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Treeview
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'jquery-ui']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        jQuery UI
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'nestable-list']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Nestable Lists
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="#" class="dropdown-toggle">
                        <i class="menu-icon fa fa-caret-right"></i>

                        Three Level Menu
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="">
                            <a href="#">
                                <i class="menu-icon fa fa-leaf green"></i>
                                Item #1
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="">
                            <a href="#" class="dropdown-toggle">
                                <i class="menu-icon fa fa-pencil orange"></i>

                                4th level
                                <b class="arrow fa fa-angle-down"></b>
                            </a>

                            <b class="arrow"></b>

                            <ul class="submenu">
                                <li class="">
                                    <a href="#">
                                        <i class="menu-icon fa fa-plus purple"></i>
                                        Add Product
                                    </a>

                                    <b class="arrow"></b>
                                </li>

                                <li class="">
                                    <a href="#">
                                        <i class="menu-icon fa fa-eye pink"></i>
                                        View Products
                                    </a>

                                    <b class="arrow"></b>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text"> Tables </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'tables']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Simple &amp; Dynamic
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'jqgrid']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        jqGrid plugin
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-pencil-square-o"></i>
                <span class="menu-text"> Forms </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'form-elements']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Form Elements
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'form-elements-2']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Form Elements 2
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'form-wizard']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Wizard &amp; Validation
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'wysiwyg']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Wysiwyg &amp; Markdown
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'dropzone']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Dropzone File Upload
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="{{ route('pages.show', ['ace', 'widgets']) }}">
                <i class="menu-icon fa fa-list-alt"></i>
                <span class="menu-text"> Widgets </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="{{ route('pages.show', ['ace', 'calendar']) }}">
                <i class="menu-icon fa fa-calendar"></i>

                <span class="menu-text">
                    Calendar

                    <span class="badge badge-transparent tooltip-error" title="2 Important Events">
                        <i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
                    </span>
                </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="{{ route('pages.show', ['ace', 'gallery']) }}">
                <i class="menu-icon fa fa-picture-o"></i>
                <span class="menu-text"> Gallery </span>
            </a>

            <b class="arrow"></b>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-tag"></i>
                <span class="menu-text"> More Pages </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'profile']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        User Profile
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'inbox']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Inbox
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'pricing']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Pricing Tables
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'invoice']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Invoice
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'timeline']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Timeline
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'search']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Search Results
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'email']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Email Templates
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'login']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Login &amp; Register
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>

        <li class="">
            <a href="#" class="dropdown-toggle">
                <i class="menu-icon fa fa-file-o"></i>

                <span class="menu-text">
                    Other Pages

                    <span class="badge badge-primary">5</span>
                </span>

                <b class="arrow fa fa-angle-down"></b>
            </a>

            <b class="arrow"></b>

            <ul class="submenu">
                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'faq']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        FAQ
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'error-404']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Error 404
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'error-500']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Error 500
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'grid']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Grid
                    </a>

                    <b class="arrow"></b>
                </li>

                <li class="">
                    <a href="{{ route('pages.show', ['ace', 'blank']) }}">
                        <i class="menu-icon fa fa-caret-right"></i>
                        Blank Page
                    </a>

                    <b class="arrow"></b>
                </li>
            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>
</div>