<!-- L-Section: Hire -->
<li class="l-section section">
  <div class="hire">
    <h2>You want us to do</h2>
    <!-- checkout formspree.io for easy form setup -->
    <form class="work-request">
      <div class="work-request--options">
        <span class="options-a">
          <input id="opt-1" type="checkbox" value="app design">
          <label for="opt-1">
            @include('sections.svgs.tic-btn')
            App Design
          </label>
          <input id="opt-2" type="checkbox" value="graphic design">
          <label for="opt-2">
            @include('sections.svgs.tic-btn')
            Graphic Design
          </label>
          <input id="opt-3" type="checkbox" value="motion design">
          <label for="opt-3">
            @include('sections.svgs.tic-btn')
            Motion Design
          </label>
        </span>
        <span class="options-b">
          <input id="opt-4" type="checkbox" value="ux design">
          <label for="opt-4">
            @include('sections.svgs.tic-btn')
            UX Design
          </label>
          <input id="opt-5" type="checkbox" value="webdesign">
          <label for="opt-5">
            @include('sections.svgs.tic-btn')
            Webdesign
          </label>
          <input id="opt-6" type="checkbox" value="marketing">
          <label for="opt-6">
            @include('sections.svgs.tic-btn')
            Marketing
          </label>
        </span>
      </div>
      <div class="work-request--information">
        <div class="information-name">
          <input id="name" type="text" spellcheck="false">
          <label for="name">Ваше имя</label>
        </div>
        <div class="information-email">
          <input id="email" type="email" spellcheck="false">
          <label for="email">Email</label>
        </div>
      </div>
      <input type="submit" value="Отправить запрос">
    </form>
  </div>
</li>