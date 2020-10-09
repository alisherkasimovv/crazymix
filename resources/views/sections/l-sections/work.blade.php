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
          <!-- @foreach($visibleWorks as $visible)
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
          @endforeach -->
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
    </div>
  </div>
</li>
