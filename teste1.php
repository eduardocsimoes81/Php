<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>animate demo</title>
  <style>
  div {
    position: absolute;
    background-color: #abc;
    left: 50px;
    width: 90px;
    height: 90px;
    margin: 5px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
 
<button id="left">&laquo;</button>
<button id="right">&raquo;</button>
<div class="block"></div>
 
<script>
$( "#right" ).click(function() {
  $( ".block" ).animate({ "left": "+=50px" }, "slow" );
});
 
$( "#left" ).click(function(){
  $( ".block" ).animate({ "left": "-=50px" }, "slow" );
});

    $('.block').mouseenter(function(){                
        //$(this).css({"width": "300px", "height": "300px"});  
        $( ".block" ).animate({ "left": "+=50px" }, "slow" ); 
    });
</script>
 
</body>
</html>