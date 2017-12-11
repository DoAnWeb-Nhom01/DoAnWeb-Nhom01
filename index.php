<!DOCTYPE html>
<html>
<title>Vascara | Th??ng hi?u th?i trang túi xách</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/logo/logo3.ico" type="image/ico" >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<link href="assets/js/bxslider/dist/jquery.bxslider.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
<script type="text/javascript">
	$(function(){
	$(window).scroll(function () {
	if ($(this).scrollTop() > 100) $('#goTop').fadeIn();
	else $('#goTop').fadeOut();
	});
	$('#goTop').click(function () {
	$('body,html').animate({scrollTop: 0}, 'slow');
	});
	});
</script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.mySlides {display:none;}
</style>
<body >
<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left " style="display:none;z-index:2;width:20%;min-width:300px" id="mySidebar">
  	<div class="w3-row w3-bar-block w3-card w3-bar-item w3-bar ">
	  	<a href="javascript:void(0)" onclick="w3_close()" class=" w3-button w3-left w3-hover-red w3-text-red">?</a>
	  	<div class="w3-left w3-button w3-padding-small w3-hover-white">
	  		<a href="#" onclick="w3_close()">
	  			<img src="images/logo/logo.png" title="Trang ch? Vascara">
	  		</a>
	  	</div>
  	</div>

  	<div class="w3-dropdown-click">
	    <div class="w3-bar-item w3-button w3-hover-red w3-hover-text-white w3-text-red w3-white w3-tag" onclick="myProduct()">
	      S?n Ph?m <i class="fa fa-caret-down"></i>
	    </div>
	    <div id="product" class=" w3-white w3-card-4 w3-hide">
	      <a href="#product-new" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-hover-text-red w3-text-gray">S?n ph?m m?i</a>
		  <a href="#product-selling" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-hover-text-red w3-text-gray">S?n ph?m bán ch?y</a>
		  <a href="#product-see" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-hover-text-red w3-text-gray">S?n ph?m xem nhi?u</a>
	    </div>
	</div>

	<div class="w3-dropdown-click">
	  	<div class="w3-bar-item w3-button w3-hover-red w3-hover-text-white w3-text-red w3-white w3-tag" onclick="myList()">
	  	Danh M?c <i class="fa fa-caret-down"></i>
		</div>
		<div id="list" class=" w3-hide w3-white w3-card-4 ">
		    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-hover-text-red w3-text-gray">Backpack</a>
		    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-hover-text-red w3-text-gray">Bucket</a>
		    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-hover-text-red w3-text-gray">Duffle</a>
		    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-hover-text-red w3-text-gray">Trapeze</a>
		    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-hover-text-red w3-text-gray">Tote</a>
		</div>
	</div>

	<div class="w3-dropdown-click">
		<div class="w3-bar-item w3-button w3-hover-red w3-hover-text-white w3-text-red w3-white w3-tag" onclick="myTrademark()">
	      Th??ng Hi?u <i class="fa fa-caret-down"></i>
	    </div>
	    <div id="trademark" class="w3-dropdown-content w3-white w3-card-4">
			<a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-hover-text-red w3-text-gray">Efora</a>
	      	<a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-hover-text-red w3-text-gray">Gino Rossi</a>
	      	<a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-hover-text-red w3-text-gray">Bric's</a>
	      	<a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-hover-text-red w3-text-gray">Gianni Chiarini</a>
	      	<a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white w3-hover-text-red w3-text-gray">Nicoli</a>
		</div>
	</div>

</nav>
<!-- Sidebar (hidden by default) -->
<!-- Top menu -->
<div class="w3-top w3-white">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-large w3-left w3-hover-red w3-text-red" onclick="w3_open()">?</div>
    <div class="w3-left w3-padding"><img src="images/logo/logo.png" title="Trang ch? Vascara"></div>
    <div class="container w3-left w3-row">
    	<input class=" w3-border-red w3-border-0 w3-border-bottom w3-margin-left w3-large" type="text" placeholder="Search ..." style="width:200px">
    	<button class="w3-button w3-padding-small w3-hover-text-red w3-white w3-text-red w3-hover-white"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
    <div class="w3-right w3-padding-16">Mail</div>
    <div class="w3-center w3-padding-16">My Food</div>
  </div>
</div>
<!--Top Menu-->
<!--Slide-->
<div class="w3-content w3-center w3-padding-top w3-margin-top">
  	<div class="mySlides w3-animate-fading">
  		<img src="images/slidebanner/banner1.jpg" width="100%">
  		<div class=" w3-large w3-container w3-center w3-text-red">
    		ETTYDANO FRENCH
  		</div>
  	</div>
  	<div class="mySlides w3-animate-fading">
  		<img src="images/slidebanner/banner2.jpg" width="100%">
  		<div class=" w3-large w3-container w3-center w3-text-red">
    		ESOOP WOMEN BAGS
  		</div>
  	</div>
  	<div class="mySlides w3-animate-fading">
  		<img src="images/slidebanner/banner5.jpg" width="100%">
  		<div class=" w3-large w3-container w3-center w3-text-red">
    		BLUE SKY
  		</div>
  	</div>
</div>
<!--Slide-->
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content " style="max-width:1200px">
  <hr id="product-new" class="w3-padding-large w3-padding-32 w3-margin-top">
  <div class="w3-content">
  		<div class="w3-left w3-xlarge " >
  			<h5 ><span class="w3-tag w3-wide w3-padding-16 w3-red">S?N PH?M M?I</span></h5>
  		</div>
	  	<div class="w3-content w3-padding">
		  	<div class="w3-padding-16 w3-center w3-row-padding">
				  	<div class="w3-quarter">
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Sandwich" style="width:100%">
				      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
				      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Sandwich" style="width:100%">
				      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
				      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Steak" style="width:100%">
				      <h3>Let Me Tell You About This Steak</h3>
				      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Cherries" style="width:100%">
				      <h3>Cherries, interrupted</h3>
				      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				      <p>What else?</p>
				    </div>
		  	</div>
		  	<div class="w3-padding-16 w3-center w3-row-padding">
				  	<div class="w3-quarter">
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Sandwich" style="width:100%">
				      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
				      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Sandwich" style="width:100%">
				      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
				      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Steak" style="width:100%">
				      <h3>Let Me Tell You About This Steak</h3>
				      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Cherries" style="width:100%">
				      <h3>Cherries, interrupted</h3>
				      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				      <p>What else?</p>
				    </div>
		  	</div>
		  	<div class="w3-center w3-padding-32">
			    <div class="w3-bar">
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">«</a>
			      <a href="#" class="w3-bar-item w3-red w3-button w3-hover-red w3-hover-text-white">1</a>
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">2</a>
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">3</a>
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">4</a>
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">»</a>
			    </div>
  			</div>
	  	</div>
  </div>
  <hr id="product-selling" class="w3-padding-large w3-padding-32 w3-margin-top">
  <div class="w3-content">
  		<h5 ><span class="w3-tag w3-wide w3-padding-16 w3-red">S?N PH?M BÁN CH?Y</span></h5>
	  	<div class="w3-content w3-padding">
		  	<div class="w3-padding-16 w3-center w3-row-padding">
				  	<div class="w3-quarter">
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Sandwich" style="width:100%">
				      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
				      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Sandwich" style="width:100%">
				      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
				      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Steak" style="width:100%">
				      <h3>Let Me Tell You About This Steak</h3>
				      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Cherries" style="width:100%">
				      <h3>Cherries, interrupted</h3>
				      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				      <p>What else?</p>
				    </div>
		  	</div>
		  	<div class="w3-padding-16 w3-center w3-row-padding">
				  	<div class="w3-quarter">
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Sandwich" style="width:100%">
				      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
				      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Sandwich" style="width:100%">
				      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
				      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Steak" style="width:100%">
				      <h3>Let Me Tell You About This Steak</h3>
				      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Cherries" style="width:100%">
				      <h3>Cherries, interrupted</h3>
				      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				      <p>What else?</p>
				    </div>
		  	</div>
		  	<div class="w3-center w3-padding-32">
			    <div class="w3-bar">
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">«</a>
			      <a href="#" class="w3-bar-item w3-red w3-button w3-hover-red w3-hover-text-white">1</a>
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">2</a>
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">3</a>
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">4</a>
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">»</a>
			    </div>
  			</div>
	  	</div>
  </div>
  <hr id="product-see" class="w3-padding-large w3-padding-32 w3-margin-top">
  <div class="w3-content">
  		<h5 ><span class="w3-tag w3-wide w3-padding-16 w3-red">S?N PH?M XEM NHI?U</span></h5>
	  	<div class="w3-content w3-padding">
		  	<div class="w3-padding-16 w3-center w3-row-padding">
				  	<div class="w3-quarter">
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Sandwich" style="width:100%">
				      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
				      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Sandwich" style="width:100%">
				      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
				      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Steak" style="width:100%">
				      <h3>Let Me Tell You About This Steak</h3>
				      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Cherries" style="width:100%">
				      <h3>Cherries, interrupted</h3>
				      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				      <p>What else?</p>
				    </div>
		  	</div>
		  	<div class="w3-padding-16 w3-center w3-row-padding">
				  	<div class="w3-quarter">
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Sandwich" style="width:100%">
				      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
				      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Sandwich" style="width:100%">
				      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
				      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Steak" style="width:100%">
				      <h3>Let Me Tell You About This Steak</h3>
				      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				    </div>
				    <div class="w3-quarter" >
				      <img src="images/sp/1/4-GIA-BS5245LSR-ACQ-2-copy_171016_113121.jpg" alt="Cherries" style="width:100%">
				      <h3>Cherries, interrupted</h3>
				      <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
				      <p>What else?</p>
				    </div>
		  	</div>
		  	<div class="w3-center w3-padding-32">
			    <div class="w3-bar">
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">«</a>
			      <a href="#" class="w3-bar-item w3-red w3-button w3-hover-red w3-hover-text-white">1</a>
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">2</a>
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">3</a>
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">4</a>
			      <a href="#" class="w3-bar-item w3-button w3-hover-red">»</a>
			    </div>
  			</div>
	  	</div>
  </div>
</div>
<!--Page Content-->
<!--Map Address-->
<div id="googleMap" style="min-height:400px;" class="w3-grayscale-max"></div>
<script src="assets/js/index.js">
function myMap() ;
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNf5RP0WT8sDDQ6E6M_o-v-c829aX-1LY&callback=myMap"></script>
<!--Map Address-->
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32 w3-gray">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Lorem</span><br>
          <span>Sed mattis nunc</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Ipsum</span><br>
          <span>Praes tinci sed</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Salmon</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">France</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavors</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Chicken</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dressing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fried</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Fish</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Duck</span>
      </p>
    </div>

    <a class="w3-button w3-xlarge w3-circle w3-theme-action w3-text-white w3-red w3-hover-text-red w3-hover-sand" title="Lên ??u trang" 	id="goTop"
  		style="position:fixed;bottom:48px;right:24px;">
  		<i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>
	<div class="w3-btn w3-white w3-border w3-border-red w3-round-large w3-text-red" title="Hotline"
  			style="position:fixed;bottom:48px;left:8px;">
  		Hotline : 01638469858
	</div>
  </footer>

<!-- End page content -->

<script src="assets/js/index.js">
// Script to open and close sidebar
function w3_open();
function w3_close();
function myDropFunc();
function carousel();
</script>

</body>
</html>
