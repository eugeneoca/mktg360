<label for="myCheck">Checkbox:</label> 
<input type="checkbox" id="clients--cb-heading" onclick="myFunction()">

<p id="clients--filter-select" style="display:none">Checkbox is CHECKED!</p>

<script>
function myFunction() {
  var checkBox = document.getElementById("clients--cb-heading");
  var text = document.getElementById("clients--filter-select");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>