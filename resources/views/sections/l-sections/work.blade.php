<!-- L-Section: Work -->
<li class="l-section section">
  <div class="work">
    <h2>Главние проекты</h2>
    <div class="work--lockup">
    <!-- Slider main container -->
      <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
        <!-- Slides -->
          @foreach($visibleWorks as $visible)
            <div class="swiper-slide">
              <div class="slider--item">
                <a href="#">
                  <div class="slider--item-image">
                    <img src="assets/img/work-victory.jpg" alt="{{ $visible->name }}">
                  </div>
                  <p class="slider--item-title">{{ $visible->name }}</p>
                  <p class="slider--item-description">{{ $visible->brief }}</p>
                </a>
              </div>
            </div>
          @endforeach
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev">
          <div class="slider--prev">
            @include('sections.svgs.prev-btn')
          </div>
        </div>
        <div class="swiper-button-next">
          <div class="slider--next">
            @include('sections.svgs.next-btn')
          </div>
        </div>
      </div>
        <!-- <li class="slider--item slider--item-left">
          <a href="#0">
            <div class="slider--item-image">
              <img src="assets/img/work-victory.jpg" alt="{{ $visible->name }}">
            </div>
            <p class="slider--item-title">{{ $visible->name }}</p>
            <p class="slider--item-description">{{ $visible->brief }}</p>
          </a>
        </l> -->

        <!-- <li class="slider--item slider--item-center">
          <a href="#0">
            <div class="slider--item-image">
              <img src="assets/img/work-metiew-smith.jpg" alt="Metiew and Smith">
            </div>
            <p class="slider--item-title">Metiew &amp; Smith</p>
            <p class="slider--item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
          </a>
        </li>
        <li class="slider--item slider--item-right">
          <a href="#0">
            <div class="slider--item-image">
              <img src="assets/img/work-alex-nowak.jpg" alt="Alex Nowak">
            </div>
            <p class="slider--item-title">Alex Nowak</p>
            <p class="slider--item-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
          </a>
        </li> -->
    </div>
  </div>
</li>
