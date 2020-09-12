<!-- notification for small viewports and landscape oriented smartphones -->
<div class="device-notification">
  <a class="device-notification--logo" href="{{ route('home') }}">
    <img src="{{ route('home') }}{{ $basic->image }}" alt="{{ $basic->name }}" style="width:100px;">
  </a>
  <p class="device-notification--message">{{ $basic->name }} Предлагает вам уникальный интерактивный опыт, который требует экран большего размера или горизонтальной ориентации.<br>Вы не пожалеете от полученного опыта!</p>
</div>