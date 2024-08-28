var div = document.querySelector(".for_modal_content");
var popup = document.querySelector(".modal_content");
var storage = localStorage.getItem("[name=person]");
var storage_child = localStorage.getItem("[name=number]");
var storage_name = localStorage.getItem("[name=name]");

div.addEventListener("click", function(event) {
  event.preventDefault();
  popup.classList.add("modal_content_show");    
  div.classList.add("active");    
if (storage) {
  person.value = storage;    
}
if (storage_child) {
  number.value = storage;    
}
if (storage_name) {
  name.value = storage;    
}
});