  <nav class="navbar navbar-default navbar-background">
     
      <div class="navbar-header navbar-background">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <!--<span>Menu</span>-->
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-background" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li class="active navbar-background ">
            <a href="{{ URL::to('/')}}" class="navbar-background">About Author </a>
        </li>
        <li><a href="#">My Work</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="{{ URL::to('contact')}}">Contact</a></li>
        <li><a href="#">Register</a></li>
       <!--  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">About Author</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
            </ul>
        </li> -->
    </ul>
</div><!-- /.navbar-collapse --><!-- /.container-fluid -->
    
</nav>