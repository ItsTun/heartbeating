@include('partials._head')
<body>


<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('blood.create')}}">Heart Beating</a>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li>
                   
                      @yield('nav')
                    
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper wrapper-full-page">

    <div class="full-page lock-page" data-color="" data-image="">

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">


            @yield('content')
            

    	
        </div>
        @include('partials._footer');

</div>




</body>

    @include('partials._scripts')

	<script type="text/javascript">
    	$(document).ready(function(){

        	lbd.checkFullPageBackgroundImage();

    	});

        
       $().ready(function(){
            lbd.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
	</script>

</html>
