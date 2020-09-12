<!-- Header section -->
<header class="header">
  <a class="header--logo" href="{{ route('home') }}">
    <img src="{{ route('home') }}{{ $basic->image }}" alt="{{ $basic->name }}" width="100px">
  </a>
  <button class="header--cta cta">Закажите работу</button>
  <div class="header--nav-toggle">
    <span></span>
  </div>
</header>