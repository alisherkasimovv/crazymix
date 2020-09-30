<!-- L-Section: Contact -->
<li class="l-section section">
  <div class="contact">
    <div class="contact--lockup">
      <div class="modal">
        <div class="modal--information">
          <p>{{ $basic->address_main }}, {{ $basic->city }}, {{ $basic->country }}</p>
          <a href="mailto:{{ $basic->email }}">{{ $basic->email }}</a>
          <a href="tel:{{ $basic->phone_main }}">{{ $basic->phone_main }}</a>
        </div>
        <ul class="modal--options">
          @foreach ($socials as $social)
            <li>
              <a href="{{ $social->url }}" target="_blank">
                <img class="contact--icon" src="{{ $social->icon }}" alt="">
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</li>