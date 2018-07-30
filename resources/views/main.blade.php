@include('partials._head')
<body class="sidebar-mini">

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="../assets/img/full-screen-image-3.jpg">
        

       @include('partials._dashboard')


        <div class="main-content">
            <div class="container-fluid">


                   @yield('content')



            </div>
        </div>


       @include('partials._footer')

    </div>
</div>


</body>
   @include('partials._scripts')


</html>
