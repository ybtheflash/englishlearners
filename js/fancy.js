var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})

var button = document.getElementById('button'); // Assumes element with id='button'

var icse_tog  = document.getElementById("icse-tog");
var icse = document.getElementById("icse");

icse_tog.addEventListener("click", function() {
  icse.classList.toggle("show");
});

var isc_tog  = document.getElementById("isc-tog");
var isc = document.getElementById("isc");

isc_tog.addEventListener("click", function() {
  isc.classList.toggle("show");
});

var cbse_tog  = document.getElementById("cbse-tog");
var cbse = document.getElementById("cbse");

cbse_tog.addEventListener("click", function() {
  cbse.classList.toggle("show");
});
