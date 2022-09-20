<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo"/> <span
                    class="logo-name">Otika</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{route('dashboard')}}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="briefcase"></i><span>Mobile Banking</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('mobilebanking')}}">Add Amount</a></li>
                    <li><a class="nav-link" href="#">Show History</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="command"></i><span>Telecom Service</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('telecom')}}">Add Amount</a></li>
                    <li><a class="nav-link" href="#">Show History</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="mail"></i><span>Due</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('customer')}}">Add Customer</a></li>
                    <li><a class="nav-link" href="{{route('due')}}">Add Due</a></li>
                    <li><a class="nav-link" href="#">Show Due</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>
                  Sim Management</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Add Sim</a></li>
                    <li><a class="nav-link" href="#">Show History</a></li>


                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="copy"></i><span>
                  Card Management</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('card')}}">Add Card</a></li>
                    <li><a class="nav-link" href="#">Show History</a></li>


                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="shopping-bag"></i><span>Expense Management</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('expense')}}">Add Expense</a></li>
                    <li><a class="nav-link" href="#">Show History</a></li>

                </ul>
            </li>


            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="layout"></i><span>Cash Management</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('cash')}}">Add cash</a></li>
                    <li><a class="nav-link" href="#">Show history</a></li>

                </ul>
            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
