<!-- L-Section: About -->
<li class="l-section section">
  <div class="about">
    <div class="about--banner">
      <h2>We<br>believe in<br>passionate<br>people</h2>
      <img src="assets/img/about-visual.png" alt="Об {{ $basic->name }}">
    </div>
    <div class="about--options">
      @foreach($about as $item)
        <a href="#" id="aboutItem{{ $loop->index }}" style="background-image: url('{{ $item->image }}');">
          <h3>{{ $item->name }}</h3>
        </a>
      @endforeach
    </div>
  </div>
</li>