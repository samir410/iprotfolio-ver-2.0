<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li class="menu-title">Menu</li>

        <li>
            <a href="{{ route('admin.index') }}" class="waves-effect">
                <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                <span>Dashboard</span>
            </a>
        </li>

        <li>
            <a href="calendar.html" class=" waves-effect">
                <i class="ri-calendar-2-line"></i>
                <span>Calendar</span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-mail-send-line"></i>
                <span>Email</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="email-inbox.html">Inbox</a></li>
                <li><a href="email-read.html">Read Email</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-layout-3-line"></i>
                <span>Layouts</span>
            </a>
            <ul class="sub-menu" aria-expanded="true">
                <li>
                    <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                        <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                        <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                        <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                        <li><a href="layouts-preloader.html">Preloader</a></li>
                        <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="layouts-horizontal.html">Horizontal</a></li>
                        <li><a href="layouts-hori-topbar-light.html">Topbar light</a></li>
                        <li><a href="layouts-hori-boxed-width.html">Boxed width</a></li>
                        <li><a href="layouts-hori-preloader.html">Preloader</a></li>
                        <li><a href="layouts-hori-colored-header.html">Colored Header</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="menu-title">Pages</li>
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-profile-line"></i>
                <span>Elements</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('admin.about_update') }}">Update About</a></li>
            </ul>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('HomeSliders') }}">Home slide</a></li>
            </ul>
        </li>

        <li class="menu-title">Components</li>
        <li>
            <a href="javascript: void(0);" class="waves-effect">
                <i class="ri-eraser-fill"></i>
                <span class="badge rounded-pill bg-danger float-end">8</span>
                <span>Forms</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="form-elements.html">Form Elements</a></li>
                <li><a href="form-validation.html">Form Validation</a></li>
                <li><a href="form-advanced.html">Form Advanced Plugins</a></li>
                <li><a href="form-editors.html">Form Editors</a></li>
                <li><a href="form-uploads.html">Form File Upload</a></li>
                <li><a href="form-xeditable.html">Form X-editable</a></li>
                <li><a href="form-wizard.html">Form Wizard</a></li>
                <li><a href="form-mask.html">Form Mask</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-table-2"></i>
                <span>Tables</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="tables-basic.html">Basic Tables</a></li>
                <li><a href="tables-datatable.html">Data Tables</a></li>
                <li><a href="tables-responsive.html">Responsive Table</a></li>
                <li><a href="tables-editable.html">Editable Table</a></li>
            </ul>
        </li>

  
        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-map-pin-line"></i>
                <span>Maps</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="maps-google.html">Google Maps</a></li>
                <li><a href="maps-vector.html">Vector Maps</a></li>
            </ul>
        </li>
    </ul>
</div>