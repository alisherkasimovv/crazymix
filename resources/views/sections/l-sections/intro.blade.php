<!-- L-Section: Intro -->
<li class="l-section section section--is-active">
  <div class="intro">
    <div class="intro--banner">
      <h1>Ваш<br>интерактивный<br>опыт</h1>
      <button class="cta">Закажите работу
        @include('sections.svgs.order-work-btn')
        <span class="btn-background"></span>
      </button>
      <img src="assets/img/introduction-visual.png" alt="Welcome">
    </div>
    <div class="intro--options">
    @foreach($workTypeAtMain as $work)
      <a href="#0">
        <h3>{{ $work->name }}</h3>
        <p>{{ $work->description }}</p>
      </a>
    @endforeach
    </div>
  </div>
</li>