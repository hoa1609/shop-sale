
    <div class="leftside-navigation">
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="{{ route('auth.dashboard')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Tổng quan</span>
                </a>
            </li>
            
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Danh mục SP</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('all-category-product')}}">Liệt kê danh mục</a></li>
                    <li><a href="{{ route('add-category-product') }}">Thêm danh mục</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Hiệu SP</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('all-brand-product')}}">Liệt kê hiệu sản phẩm</a></li>
                    <li><a href="{{ route('add-brand-product')}}">Thêm hiệu sản phẩm</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Sản phẩm</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('all-product')}}">Liệt kê sản phẩm</a></li>
                    <li><a href="{{ route('add-product')}}">Thêm sản phẩm</a></li>
                </ul>
            </li>
        
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-th"></i>
                    <span>Người dùng</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('user.index')}}">QL người dùng</a></li>
                    <li><a href="{{ route('moreUser')}}">Thêm người dùng </a></li>
                </ul>
            </li>
            
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Bình luận</span>
                </a>
                <ul class="sub">
                    <li><a href="{{ route('list_comment')}}">QL bình luận</a></li>
                   
                </ul>
            </li>
            
            <li>
                <a href="login.html">
                    <i class="fa fa-user"></i>
                    <span>Vào trang</span>
                </a>
            </li>
        </ul>            
    </div>