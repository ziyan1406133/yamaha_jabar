
<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ route('dashboard') }}" class="{{ activeClass('dashboard') }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="{{ route('pengguna.index') }}" class="{{ activeClass('pengguna') }}"><i class="lnr lnr-user"></i> <span>Admin</span></a></li>
                <li>
                    <a href="#subSoal" data-toggle="collapse" class="collapse {{ activeClass('partner')  }}"><i class="lnr lnr-heart"></i> <span>Dealer Partners</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subSoal" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ route('partner-region.index') }} " class="{{ activeClass('partner-region.index') }}">Regions</a></li>
                            <li><a href="{{ route('partner-network.index') }}" class="{{ activeClass('partner-network.index') }}">Networks</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{ route('product.index') }}" class="{{ activeClass('product') }}"><i class="lnr lnr-bicycle"></i> <span>Products</span></a></li>
                <li><a href="{{ route('message.index') }}" class="{{ activeClass('message') }}"><i class="lnr lnr-envelope"></i> <span>Messages</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->