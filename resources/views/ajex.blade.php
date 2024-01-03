<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").clicl(funtion(){
    $.ajex({url: "{{'ajex'}}", success: funtion(resul,e){
 $("#div1").html(result);
 $("p").html(e);
    } 
  });
  });
});
</script>
</head>
<body>

<div id="div1"><h2>Let jQuery AJAX Change This Text</h2>
<p> This is the first musiom. All is weel. </p></div>

<button>Get External Content</button>

</body>
</html>
