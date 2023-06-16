<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Admin Pages</div>
                <a class="nav-link {{ Request::is('admin/product') ? 'active':'' }}" href="{{url('admin/product')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-cart-shopping"></i></div>
                    Product
                </a>

                {{-- user data  --}}
                {{-- <a class="nav-link {{ Request::is('admin/pengguna')||Request::is('admin/kategori-produk') ? 'collapse active':'collapsed' }} collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    User Data
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/pengguna') ? 'show':'' }}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/pengguna') ? 'active':'' }}" href="{{url('admin/pengguna')}}">Data Pengguna</a>
                        <a class="nav-link {{ Request::is('admin/grup-pengguna') ? 'active':'' }}" href="layout-sidenav-light.html">Grup Pengguna</a>
                    </nav>
                </div> --}}

                {{-- pages --}}
                <a class="nav-link {{ Request::is('admin/category')||Request::is('admin/add-category') ? 'collapse active':'collapsed' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/category')||Request::is('admin/add-category') ? 'show':'' }}" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        {{-- <a class="nav-link {{ Request::is('admin/produk') ? 'active':'' }} collapsed" href="{{url('admin/produk')}}" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Produk
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a> --}}
                        {{-- <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Produk</a>
                                <a class="nav-link" href="register.html">Kategori Produk</a>
                            </nav>
                        </div> --}}
                        {{-- data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" --}}
                        <a class="nav-link {{ Request::is('admin/category') ? 'active':'' }} collapsed" href="{{url('admin/category')}}"  aria-expanded="false" aria-controls="pagesCollapseError">
                            Category
                           </a>
                        <a class="nav-link {{ Request::is('admin/add-category') ? 'active':'' }} collapsed" href="{{url('admin/add-category')}}"  aria-expanded="false" aria-controls="pagesCollapseError">
                            Add Category
                            {{-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
                        </a>
                        {{-- <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        
                        </div> --}}
                    </nav>
                </div>

                {{-- <div class="sb-sidenav-menu-heading">Addons</div> --}}
                <a class="nav-link {{ Request::is('admin/sliders') ? 'active':'' }}" href="{{url('admin/sliders')}}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-clone"></i></div>
                    Sliders
                </a>
                {{-- <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a> --}}
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">ElektroniKu Admin</div>
        </div>
    </nav>
</div>