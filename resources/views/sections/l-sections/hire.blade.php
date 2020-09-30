<!-- L-Section: Hire -->
<li class="l-section section" id="anchor-to-hire">
  <div class="hire">
    <h2>You want us to do</h2>
    <!-- checkout formspree.io for easy form setup -->
    <form class="work-request">
      <div class="work-request--options">
        @foreach($workTypes as $item)
          <div class="work-request--item">
            <input id="{{ $item->name }}" type="checkbox" value="{{ $item->name }}">
            <label for="{{ $item->name }}">
              @include('sections.svgs.tic-btn')
              {{ $item->name }}
            </label>
          </div>
        @endforeach
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