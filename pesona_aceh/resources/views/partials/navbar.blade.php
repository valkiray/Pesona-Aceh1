<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <div class="container">
      <a class="navbar-brand" href="/">
          <img src="{{ asset('img/pesona_aceh.png') }}" alt="Pesona Aceh Logo" style="height: 40px; width: auto;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Post") ? 'active' : '' }}" href="/posts">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Gallery") ? 'active' : '' }}" href="{{ route('posts.gallery') }}">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About Us") ? 'active' : '' }}" href="{{ route('posts.about') }}">About Us</a>
          </li>
        </ul>
      </div>
  </div>
</nav>
