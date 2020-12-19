







<nav class="navbar navbar-dark bg-dark shadow   navbar-expand-lg fixed-top">
    <a href="{{ url('/') }}" class="navbar-brand">Jefferson Manzano</a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li clas="navbar-item">
          <a href="{{ url('/') }}" class="nav-link  {{ request()->is('/')? ' disabled active':'' }} ">Home</a>
          </li>
          <li clas="navbar-item">
            <a href="{{ url('/contact') }}" class="nav-link  {{ request()->is('contact')? ' disabled active':'' }}">Contact</a>
            </li>
          <li clas="navbar-item">
            <a href="{{ url('/gallarey') }}" class="nav-link {{ request()->is('gallarey')? ' disabled active':'' }}">Image Gallery</a>
        </li>
        <li clas="navbar-item">
            <a href="{{ url('/media') }}" class="nav-link {{ request()->is('media')? ' disabled active':'' }}">Social Media</a>
        </li>
      </ul>
    </div>
  </nav>
