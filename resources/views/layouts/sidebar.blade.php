<section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ set_active('home.index') }}">
            <a href="{{ route('home.index') }}"><i class="fa fa-home"></i> 
                <span>Home</span>
            </a>
        </li>
        <li class="treeview {{ set_active(['role.index', 'user.index']) }}">
            <a href="#">
                <i class="fa fa-folder-o"></i> <span> Manage Users </span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu {{ set_active(['role.index', 'user.index']) }}">
                <li class="{{ set_active('role.index') }}"><a href="{{ url('role') }}"><i class="fa fa-circle-o"></i> Role </a></li>
                <li class="{{ set_active('user.index') }}"><a href="{{ url('user') }}"><i class="fa fa-circle-o"></i> User </a></li>
            </ul>
        </li>
        <li class="{{ set_active('category.index') }}">
            <a href="{{ route('category.index') }}"><i class="fa fa-folder-o"></i> 
                <span>Category</span>
            </a>
        </li>
        <li class="{{ set_active('product.index') }}">
            <a href="{{ route('product.index') }}"><i class="fa fa-folder-o"></i> 
                <span>Product</span>
            </a>
        </li>
        
    </ul>

</section>