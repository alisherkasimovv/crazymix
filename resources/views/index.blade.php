@foreach($basics as $basic)
<!DOCTYPE html>
<html lang="en">
<head>
  @include('sections.partials.head')
</head>
<body>

@include('sections.partials.device-notification')

<div class="perspective effect-rotate-left">
  <div class="container"><div class="outer-nav--return"></div>
    <div id="viewport" class="l-viewport">
      <div class="l-wrapper">
        @include('sections.partials.header')
        @include('sections.partials.side-nav')
        <ul class="l-main-content main-content">
          @include('sections.l-sections.intro')
          @include('sections.l-sections.work')
          @include('sections.l-sections.about')
          @include('sections.l-sections.contact')
          @include('sections.l-sections.hire')
        </ul>
      </div>
    </div>
  </div>
  @include('sections.partials.outer-nav')
</div>

@include('sections.partials.modal')
@include('sections.partials.scripts')
</body>
</html>
@endforeach
