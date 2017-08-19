<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script>

		var counter = 0;

var add = function(valueToAdd){
  var a = parseInt(document.getElementById('Value').innerHTML);
  a += valueToAdd;
  document.getElementById('Value').innerHTML = a;
}

function reset(){
  document.getElementById('Value').innerHTML=0;  
  }
</script>
  
  <body>
  Value $<span id="Value">0</span> 
    <button width="500" height="500" id = "add" class="button button1" onclick="javascript:add(1)">Add Value</button>

    <button width="500" height="500" id = "aadd" class="button button1" onclick="javascript:reset()">Reset</button>
  
  
  
  
  </body>
  
  </html>