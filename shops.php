<script>
  function itemavornot(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadyststechange = function(){
    if (xhttp.onreadystste == 4 && xhttp.status == 200) {
      var isAvailable = document.getElementByClass("availiablity")
      isAvailable.innerHTML = xhttp.responseText;
      if (isAvailable.innerHTML == 'available'){
        if($('availablity').hasClass('btn-danger')){
        $('availablity').removeClass('btn-danger');
        $('availablity').addClass('btn-success');
      }
      }else if (isAvailable.innerHTML !== 'available'){
        if ($('availablity').hasClass('btn-success')){
          $('availablity').removeClass('btn-success');
          $('availablity').addClass('btn-danger');
      }
      }

    }
  };
  xhttp.open("POST","ajax-av-or-not.php",true);
  xhttp.send();
  }
</script>

<div class="jumbotron-fluid">
<div class="col-sm">
<div class="thumbnail">
<img src="Bazaar.jpg" width="85%" alt="My desktop" class="rounded mx-auto d-block">
</div>
</div>
</div>
<div class="container">
<div class="jumbotron">
<div class="row">
<div class="col-sm">
		<div class="img-thumbnail text-center">
		<img src="shops\Arriada Group.jpg" alt="My desktop">
				<div class="caption">
				<h5>Arriada Group</h5>
				<p>
						Benghazi, Libya <br>
					  Prices <br>
                <a href="#">900 DL</a>
				</p>
         <!-- موقع المحل في الخريطه -->
        <a href=" https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiQXJyaWFkYSBHcm91cCIsImFkZHJlc3MiOiJcdTA2NDVcdTA2MmNcdTA2NDVcdTA2MzkgXHUwNjJlXHUwNjI3XHUwNjQ0XHUwNjJmIFx1MDYyOFx1MDY0NiBcdTA2MjdcdTA2NDRcdTA2NDhcdTA2NDRcdTA2NGFcdTA2MmYgXHUwNjI3XHUwNjQ0XHUwNjJhXHUwNjJjXHUwNjI3XHUwNjMxXHUwNjRhIC0gXHUwNjI3XHUwNjQ0XHUwNjJkXHUwNjJmXHUwNjI3XHUwNjI2XHUwNjQyLCBCZW5naGF6aSwgTGlieWEiLCJsYXRpdHVkZSI6MzIuMDkzNDMyMzU2Mzc0LCJsb25naXR1ZGUiOjIwLjEwMTQ5MDkxNDgyMiwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoxMTE1NjgxMjYxNDM3MjF9?map=32.093432356374,20.101490914822,15,normal&ref=facebook&link=addresses&fb_locale=en_US">Get Directions</a>
				<p>
				<a id= "" style="color : white;" class="btn btn-danger  availiablity" role="button">Not Available</a></p>
				<!--<span><a href="#" class="btn btn-primary" role="button">By Now</a></span>-->
			</div>
		</div>
</div>

<div class="col-sm">
		<div class="img-thumbnail text-center">
		<img src="shops\alwatekon.jpg" alt="My desktop">
				<div class="caption">
				<h5>Alwatekon</h5>
				<p>
						Tripoly, Libya <br>
					  Prices <br>
                <a href="#">850 DL</a>
				</p>
				<p>
          <!-- موقع المحل في الخريطه -->
         <a href=" https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiQXJyaWFkYSBHcm91cCIsImFkZHJlc3MiOiJcdTA2NDVcdTA2MmNcdTA2NDVcdTA2MzkgXHUwNjJlXHUwNjI3XHUwNjQ0XHUwNjJmIFx1MDYyOFx1MDY0NiBcdTA2MjdcdTA2NDRcdTA2NDhcdTA2NDRcdTA2NGFcdTA2MmYgXHUwNjI3XHUwNjQ0XHUwNjJhXHUwNjJjXHUwNjI3XHUwNjMxXHUwNjRhIC0gXHUwNjI3XHUwNjQ0XHUwNjJkXHUwNjJmXHUwNjI3XHUwNjI2XHUwNjQyLCBCZW5naGF6aSwgTGlieWEiLCJsYXRpdHVkZSI6MzIuMDkzNDMyMzU2Mzc0LCJsb25naXR1ZGUiOjIwLjEwMTQ5MDkxNDgyMiwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoxMTE1NjgxMjYxNDM3MjF9?map=32.093432356374,20.101490914822,15,normal&ref=facebook&link=addresses&fb_locale=en_US">Get Directions</a>
 				<p>
 				<a id= "" style="color : white;" class="btn btn-danger availiablity" role="button">Not Available</a></p>
			</div>
		</div>
</div>
<div class="col-sm">
		<div class="img-thumbnail text-center">
		<img src="shops\Million Mobile.jpg" alt="My desktop">
				<div class="caption">
				<h5>Million Mobile</h5>
				<p>
						Tripoli, Libya <br>
					  Prices <br>
                <a href="#">500 DL</a>
				</p>
				<p>
          <!-- موقع المحل في الخريطه -->
         <a href=" https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiQXJyaWFkYSBHcm91cCIsImFkZHJlc3MiOiJcdTA2NDVcdTA2MmNcdTA2NDVcdTA2MzkgXHUwNjJlXHUwNjI3XHUwNjQ0XHUwNjJmIFx1MDYyOFx1MDY0NiBcdTA2MjdcdTA2NDRcdTA2NDhcdTA2NDRcdTA2NGFcdTA2MmYgXHUwNjI3XHUwNjQ0XHUwNjJhXHUwNjJjXHUwNjI3XHUwNjMxXHUwNjRhIC0gXHUwNjI3XHUwNjQ0XHUwNjJkXHUwNjJmXHUwNjI3XHUwNjI2XHUwNjQyLCBCZW5naGF6aSwgTGlieWEiLCJsYXRpdHVkZSI6MzIuMDkzNDMyMzU2Mzc0LCJsb25naXR1ZGUiOjIwLjEwMTQ5MDkxNDgyMiwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoxMTE1NjgxMjYxNDM3MjF9?map=32.093432356374,20.101490914822,15,normal&ref=facebook&link=addresses&fb_locale=en_US">Get Directions</a>
         <p>
         <a id= "" style="color : white;" class="btn btn-success  availiablity" role="button">Available</a></p>
			</div>
		</div>
</div>
<div class="col-sm">
		<div class="img-thumbnail text-center">
		<img src="shops\albadeel.jpg" alt="My desktop">
				<div class="caption">
				<h5>Albadeel</h5>
				<p>
						Tripoli, Libya <br>
					  Prices <br>
                <a href="#">920 DL</a>
				</p>
				<p>
          <!-- موقع المحل في الخريطه -->
         <a href=" https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiQXJyaWFkYSBHcm91cCIsImFkZHJlc3MiOiJcdTA2NDVcdTA2MmNcdTA2NDVcdTA2MzkgXHUwNjJlXHUwNjI3XHUwNjQ0XHUwNjJmIFx1MDYyOFx1MDY0NiBcdTA2MjdcdTA2NDRcdTA2NDhcdTA2NDRcdTA2NGFcdTA2MmYgXHUwNjI3XHUwNjQ0XHUwNjJhXHUwNjJjXHUwNjI3XHUwNjMxXHUwNjRhIC0gXHUwNjI3XHUwNjQ0XHUwNjJkXHUwNjJmXHUwNjI3XHUwNjI2XHUwNjQyLCBCZW5naGF6aSwgTGlieWEiLCJsYXRpdHVkZSI6MzIuMDkzNDMyMzU2Mzc0LCJsb25naXR1ZGUiOjIwLjEwMTQ5MDkxNDgyMiwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoxMTE1NjgxMjYxNDM3MjF9?map=32.093432356374,20.101490914822,15,normal&ref=facebook&link=addresses&fb_locale=en_US">Get Directions</a>
 				<p>
 				<a id= "" style="color : white;" class="btn btn-success  availiablity" role="button">Available</a></p>
			</div>
		</div>
</div>
<div class="col-sm">
		<div class="img-thumbnail text-center">
		<img src="shops\Kvrat.jpg" alt="My desktop">
				<div class="caption">
				<h5>Kvrate</h5>
				<p>
						Tripoli, Libya <br>
						Prices <br>
								<a href="#">500 DL</a>
				</p>
				<p>
          <!-- موقع المحل في الخريطه -->
         <a href=" https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiQXJyaWFkYSBHcm91cCIsImFkZHJlc3MiOiJcdTA2NDVcdTA2MmNcdTA2NDVcdTA2MzkgXHUwNjJlXHUwNjI3XHUwNjQ0XHUwNjJmIFx1MDYyOFx1MDY0NiBcdTA2MjdcdTA2NDRcdTA2NDhcdTA2NDRcdTA2NGFcdTA2MmYgXHUwNjI3XHUwNjQ0XHUwNjJhXHUwNjJjXHUwNjI3XHUwNjMxXHUwNjRhIC0gXHUwNjI3XHUwNjQ0XHUwNjJkXHUwNjJmXHUwNjI3XHUwNjI2XHUwNjQyLCBCZW5naGF6aSwgTGlieWEiLCJsYXRpdHVkZSI6MzIuMDkzNDMyMzU2Mzc0LCJsb25naXR1ZGUiOjIwLjEwMTQ5MDkxNDgyMiwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoxMTE1NjgxMjYxNDM3MjF9?map=32.093432356374,20.101490914822,15,normal&ref=facebook&link=addresses&fb_locale=en_US">Get Directions</a>
         <p>
         <a id= "" style="color : white;" class="btn btn-success  availiablity" role="button">Available</a></p>
			</div>
		</div>
</div>

<div class="col-sm">
		<div class="img-thumbnail text-center">
		<img src="shops\37186874_2206092812954270_5054372536758829056_n.jpg" alt="My desktop">
				<div class="caption">
				<h5>Gsm mobile</h5>
				<p>
						Benghazi, Libya <br>
						Prices <br>
								<a href="#">670 DL</a>
				</p>
				<p>
          <!-- موقع المحل في الخريطه -->
         <a href=" https://wego.here.com/directions/mylocation/e-eyJuYW1lIjoiQXJyaWFkYSBHcm91cCIsImFkZHJlc3MiOiJcdTA2NDVcdTA2MmNcdTA2NDVcdTA2MzkgXHUwNjJlXHUwNjI3XHUwNjQ0XHUwNjJmIFx1MDYyOFx1MDY0NiBcdTA2MjdcdTA2NDRcdTA2NDhcdTA2NDRcdTA2NGFcdTA2MmYgXHUwNjI3XHUwNjQ0XHUwNjJhXHUwNjJjXHUwNjI3XHUwNjMxXHUwNjRhIC0gXHUwNjI3XHUwNjQ0XHUwNjJkXHUwNjJmXHUwNjI3XHUwNjI2XHUwNjQyLCBCZW5naGF6aSwgTGlieWEiLCJsYXRpdHVkZSI6MzIuMDkzNDMyMzU2Mzc0LCJsb25naXR1ZGUiOjIwLjEwMTQ5MDkxNDgyMiwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoxMTE1NjgxMjYxNDM3MjF9?map=32.093432356374,20.101490914822,15,normal&ref=facebook&link=addresses&fb_locale=en_US">Get Directions</a>
         <p>
         <a id= "" style="color : white;" class="btn btn-danger  availiablity" role="button">Not Available</a></p>
			</div>
		</div>
</div>

</div>
</div></div>
<script>
$(document).ready(function (){
  itemavornot();
});
</script>
