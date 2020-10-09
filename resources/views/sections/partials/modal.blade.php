<!-- Modal window -->
<div id="aboutModal" class="modal--main">
  <!-- Modal content -->
  <div class="modal--content">
    <div class="modal--header">
      <span class="modal--close">&times;</span>
      <h1></h1>
    </div>
    <div class="modal--body">
      <img src="" alt="Изображение">
      <p></p>
    </div>
    <div class="modal--footer">
      <button class="modal--close close-btn">Закрыть</button>
    </div>
  </div>
</div>

<style>
.modal--main {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.modal--content {
  position: relative;
  background-color: black;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 900px;
  box-shadow: 0 0 30px #0f33ff;
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.modal--close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.modal--close:hover,
.modal--close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal--header {
  padding: 2px 16px;
  background-color: black;
  color: white;
}

.modal--body {padding: 2px 16px;}

.modal--footer {
  padding: 2px 16px;
  background-color: black;
  color: white;
}
</style>