<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset("assets/js/vendor/jquery-2.2.4.min.js") }}"><\/script>')</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{ asset("assets/js/functions-min.js") }}"></script>

<script>
var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
})
</script>

<script>

let modalData = [
  @foreach($about as $item)
    {
      name: "{{ $item->name }}",
      image: "{{ $item->image }}"
    },
  @endforeach
];

// Get the modal
var modal = document.getElementById("aboutModal");

// Get the button that opens the modal
var btn = document.getElementById("aboutItem0");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("modal--close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  console.log("clocked");
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>