<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{asset('/assets')}}/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{config('app.name')}}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{asset('/assets')}}/img/faces/avatar.jpg"/>
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="" class="username">
              <span>
                {{ Auth::user()->name }}
              </span>
                </a>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item active ">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">dashboard</i>
                    <p> Users </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">dashboard</i>
                    <p> Categories </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">dashboard</i>
                    <p> Posts </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">dashboard</i>
                    <p> Post Categories </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">dashboard</i>
                    <p> Favorites </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">dashboard</i>
                    <p> Medias </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">dashboard</i>
                    <p> Comments </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">dashboard</i>
                    <p> Subscribers </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">dashboard</i>
                    <p> Tags </p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="material-icons">dashboard</i>
                    <p> Likes </p>
                </a>
            </li>
        </ul>
    </div>
</div>
