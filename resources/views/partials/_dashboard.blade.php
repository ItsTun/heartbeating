 <div class="logo">
            <a href="{{route('blood.create')}}" class="simple-text logo-mini">
                HB
            </a>

            <a href="{{route('blood.create')}}" class="simple-text logo-normal">
                Heart Beating
            </a>
        </div>

        <div class="sidebar-wrapper">

            

            <ul class="nav">
                <li>
                    <a data-toggle="collapse" href="#componentsExamples">
                        <i class="pe-7s-plugin"></i>
                        <p>Customize Info !
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div>
                        <ul class="nav">
                            <li>
                                <a href="{{route('fdonor.create')}}">
                                    <span class="sidebar-mini">SM</span>
                                    <span class="sidebar-normal">Search Member !</span>
                                </a>
                            </li>


                            <li>
                                <a href="{{route('donor.index')}}">
                                    <span class="sidebar-mini">MI</span>
                                    <span class="sidebar-normal">Member Info !</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="{{route('donor.create')}}">
                                    <span class="sidebar-mini">RD</span>
                                    <span class="sidebar-normal">Register Donor!</span>
                                </a>
                            </li>
                            
                            
                            
                        </ul>
                    </div>
                </li>
               
                <li>
                    <a data-toggle="collapse" href="#componentsExamples">
                        <i class="pe-7s-plugin"></i>
                        <p>Admin Info !
                           <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="componentsExamples">
                        <ul class="nav">
                            <li>
                                <a href="{{route('register')}}">
                                    <span class="sidebar-mini">RD</span>
                                    <span class="sidebar-normal">Register New Admin !</span>
                                </a>
                            </li>


                            <li>
                                <a href="{{route('admin.index')}}">
                                    <span class="sidebar-mini">MI</span>
                                    <span class="sidebar-normal">Admin List !</span>
                                </a>
                            </li>
                            
                           
                            
                            
                            
                        </ul>
                    </div>
                </li>

                

            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn   btn-round btn-icon">
                        <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                        <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                    </button>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Admin Panel</a>
                </div>
                <div class="collapse navbar-collapse">

                    <form class="navbar-form navbar-left navbar-search-form" role="search">
                        
                    </form>

                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li>
                            <form class="navbar-form navbar-left navbar-search-form" role="search" >
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" value="" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                            
                        </li> -->

                       

                        

                        
                       
 


                            <li class="dropdown dropdown-with-icons">
                            <a id="navbarDropdown" class="" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            <ul class="dropdown-menu dropdown-with-icons">
                                
                                <li>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="pe-7s-close-circle"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                                </li>
                            </ul>
                        </li>
                        
                    
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>