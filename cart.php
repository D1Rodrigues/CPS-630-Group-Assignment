<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name = "viewport" content = "width-device-width, intial-scale = 1.0"> 
        <meta charset = "UTF-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		 <link rel="stylesheet" href = "P_Style.css">
	
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Shopping Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

	<nav class = "nav-wrapper white"> 
        <ul id = "nav-mobile" class="left hide-on-med-and-down">
            <!-- Home -->
            <li> 
                <a class="btn-flat black-text" href = "P_Home.html">Home</a>
             </li>
             <!-- About Us -->
             <li> 
                <a class="btn-flat black-text" href = "aboutus.html">About Us</a>
             </li>
             <!-- Contact Us -->
             <li> 
                <a class="btn-flat black-text" href = "contact-us.html">Contact Us</a>
             </li>
             <!-- Reviews -->
             <li> 
                <a class="btn-flat black-text" >Reviews</a>
             </li>
             <li> 
            
             
        </ul>
            <a href="#" class="brand-logo center"> <img src = "Pictures/D_Logo(1).png" class = "Dman" ></a>
       
        <ul id = "nav-mobile" class="right hide-on-med-and-down"> 
            <!-- Sign-in modal  Note: Add in "Not a member? Sign-up now" link -->
            <li> 
                <a class="btn-flat black-text modal-trigger" href="#modal1">Sign-in</a>
                    <!--- This is all the sign-in stuff which is a modal so it pops up on screen when clicked -->
                    <div id ="modal1" class = "modal black-text"> 
                        <div class = "model-content">
                                <br>
                                <h4 class ="black-text center">Sign-in</h4>
                                <div class ="row"> 
                                    <form action="signin.php" method="post"> 
                                        <!-- Account Username -->
                                        <div class = "row"> 
                                            <div class ="input-field col s4 offset-s4">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input placeholder="Email or Username" id ="login-n" name = "login-name" type="text" class="validate">
                                                <label for = "login-name"> Email or Username </label>
                                            </div> 
                                        </div>
                                        
                                        <!-- Account Password -->
                                        <div class = "row"> 
                                            <div class ="input-field col s4 offset-s4">
                                                <i class="material-icons prefix ">lock</i>
                                                <input placeholder="Password" id ="login-p" name = "login-password"type="Password" class="validate">
                                                <label for = "login-name"> Password </label>
                                            </div> 
                                        </div>

                                        <!-- Can't log in? -->
                                        <div class = "row">
                                            <label class ="col offset-s3">
                                                <input type = "checkbox" class="offset-s4"> 
                                                <span> Keep signed in? </span>
                                            </label>
                                            <label class ="col offset-s2">
                                                <a href="sign-in.html" class ="black-text"> Forgotten Password? </a>
                                            </label> 
                                        </div>
                            
                                        <!-- Submission Button -->
                                        <div class ="row"> 
                                            <button class = "btn waves-effect waves-light col s4 offset-s4 black" type="submit" name="action">Login</button>
                                        </div>
                                </div>
                            
                        </div>
                    </div>
                </div> 
             </li>

             <!-- Sign-up-->
             <li> 
                <a class="btn-flat black-text modal-trigger" href="sign-up.html" >Sign-up</a>
                <!--- This is all the sign-in stuff which is a modal so it pops up on screen when clicked -->
             </li>
             <!-- Shopping Cart -->
            <li> 
                <a class="btn-flat black-text"> <i class="material-icons right">shopping_cart</i> Cart</a>
             </li>
        </ul>
       
    </nav>

    <div id="page">	

	<form method ="post">
		<div class ="row"> 
		<h3 class = "center">Shopping Cart</h3>
		</div>
		<!--Product list -->
		<div class = "row">
			<div class ="col s4 offset-s1">
			<section id="products" class="products">
				<ul class="logo-list">
					<li id="product-1" data-price="1200.00"><span><img src="products/black_toe_j1.png">Jordan 1 Black Toe<br>$1200.00 CAD</span></li>
					<li  id="product-2" data-price="400.00"><span><img src="products/blue_yeezy_350.png">Yeezy Boost 350 V2 Dazzling Blue<br>$400.00 CAD</span></li>
					<li id="product-3" data-price="900.00"><span><img src="products/bred_j4.png">Jordan 4 Bred <br>$900.00 CAD</span></li>
					<li id="product-4" data-price="1800.00"><span><img src="products/dior_canvas.png">Dior B23 Black <br> $1800.00 CAD</span></li>
					<li id="product-5" data-price="200.00"><span><img src="products/fog_black_hoodie.png">FOG Hoodie Black<br>$200.00 CAD</span></li>
					<li  id="product-6" data-price="150.00"><span><img src="products/fog_black_tee.png">FOG Tee Black <br> $150.00 CAD</span></li>
					<li id="product-7" data-price="200.00"><span><img src="products/fog_oatmeal_hoodie.png">FOG Hoodie Oatmeal<br> $200.00 CAD</span></li>
					<li id="product-8" data-price="200.00"><span><img src="products/fog_white_hoodie.png">FOG Hoodie White<br>$200.00</span></li>
					<li id="product-9" data-price="250.00"><span><img src="products/kaws_nf_hoodie.png">KAWS x The North Face Hoodie <br>$250.00 CAD</span></li>
					<li  id="product-10" data-price="300.00"><span><img src="products/nocta_hoodie.png">Nocta Hoodie Cardinal<br> $300.00 CAD</span></li>
					<li  id="product-11" data-price="1000.00"><span><img src="products/nocta_jacket.png">Nike x Drake Nocta Puffer Jacket<br> $1000.00 CAD</span></li>
					<li  id="product-12" data-price="180.00"><span><img src="products/ow_belt.png">Off-White Industrial Belt<br> $180.00 CAD</span></li>
					<li id="product-13" data-price="70.00"><span><img src="products/supreme_beanie.png">Supreme Beanie Black<br>$70.00 CAD</span></li>
					<li id="product-14" data-price="300.00"><span><img src="products/supreme_brick2.png">Supreme Brick<br> $300.00 CAD</span></li>
					<li id="product-15" data-price="220.00"><span><img src="products/supreme_coffeemaker2.png">Supreme Bialetti Moka Express<br> $220.00 CAD</span></li>
					<li  id="product-16" data-price="130.00"><span><img src="products/supreme_sidebag.png">Supreme Sling Bag Black<br> $130.00 CAD</span></li>
					<li  id="product-17" data-price="50.00"><span><img src="products/supreme_workgloves.png">Supreme Grip Work Gloves<br> $50.00 CAD</span></li>
					<li id="product-18" data-price="350.00"><span><img src="products/vlone_hoodie.png">Vlone x Palm Angels Hoodie Black/Purple<br> $350.00 CAD</span></li>
					<li id="product-19" data-price="80.00"><span><img src="products/vlone_jw_tee.png">Juice Wrld x Vlone Butterfly T-shirt<br> $80.00 CAD</span></li>
					<li  id="product-20" data-price="80.00"><span><img src="products/vlone_jw_tee2.png">Juice Wrld x Vlone 999 T-shirt<br> $80.00 CAD</span></li>
					<li id="product-21" data-price="100.00"><span><img src="products/vlone_pop_tee.png">Pop Smoke x Vlone The Woo T-shirt<br> $100.00 CAD</span></li>
					<li id="product-22" data-price="600.00"><span><img src="products/bred_yeezy_350.png">Yeezy Boost 350 V2 Bred<br>$600.00 CAD</span></li>
					<li  id="product-23" data-price="160.00"><span><img src="products/yeezy_gap_hoodie.png">Yeezy x Gap Hoodie Black<br>$160.00 CAD</span></li>
					<li  id="product-24" data-price="330.00"><span><img src="products/yeezy_gap_jacket.png">Yeezy x Gap Round Jacket Black<br>$330.00 CAD</span></li>
				</ul>
			</section>
			</div>
		</div>
		<!-- This is for the shopping cart area -->
		<div class = "row">
		<div class="col s6 offset-s3">
		<section id="cart" class="shopping-cart ">
			<ul id="list" class ="white-text center">
			</ul>
			<span class="total center">0.00</span>
            <a class="btn-flat white-text black" onclick="clearMemory()">Clear</a>
		</section>
		</div>
		</div>

		<div class="row">
			<h5 class =" col s3 offset-s1">Contact Information</h5>
		</div>
		<!--Email/Phone Number --> 
		<div class="row">
				<div class = "input field col s7 offset-s1"> 
					<input placeholder ="Email Or Phone Number" id="EorPN" name="EorPn" type="text" class="validate">
					<label for ="SU-fname">Email Or Phone Number </label>
				</div>
		</div> 
		<div class = "row">
			<label class ="col offset-s1">
				<input type = "checkbox" class="offset-s4"> 
				<span> Email Me with news and offers</span>
			</label>
		</div>

		<div class="row">
			<h5 class =" col s3 offset-s1">Shipping Information </h5>
		</div> 
		<!--Country/Region --> 
		<div class="row">
			<div class="input-field col s7 offset-s1"> 
				<select name ="Country/Region"> 
					<option value ="" disabled selected> Country/Region </option>
					<option value ="Canada"> Canada </option>
					<option value ="India"> India </option>
					<option value ="Mexico"> Mexico </option>
					<option value ="Vietnam"> Philippines </option>
					<option value ="Vietnam"> Vietnam </option>
					<option value ="United Kingdom"> United Kingdom </option>
					<option value ="United States"> United States </option>
				</select>
			</div>
		</div>
		<!--Fname/Lname--> 
		<div class ="row">
			<div class = "input field col s3 offset-s1"> 
				<input placeholder ="First Name" id="SC-fname" name="SC-fname" type="text" class="validate">
				<label for ="SC-fname">First Name  </label>
			</div>
			<div class = "input field col s3 offset-s1"> 
				<input placeholder ="Last Name" id="SC-lname" name="SC-lname" type="text" class="validate">
				<label for ="SC-lname">Last Name  </label>
			</div>
		</div>
		<!--Address (Main) --> 
		<div class ="row">
			<div class = "input field col s7 offset-s1"> 
				<input placeholder ="Address" id="SC-add" name="SC-add" type="text" class="validate">
				<label for ="SC-add">Address </label>
			</div>
		</div>
		<!--Address (Optional)-->
		<div class ="row">
			<div class = "input field col s7 offset-s1"> 
				<input placeholder ="Apartment, Suite, etc (Optional) " id="SC-add2" name="SC-add2" type="text" class="validate">
				<label for ="SC-add2">Apartment, Suite, etc (Optional) </label>
			</div>
		</div>
		<!-- City/Postal Code -->
		<div class ="row">
			<div class = "input field col s3 offset-s1"> 
				<input placeholder ="City" id="SC-city" name="SC-city" type="text" class="validate">
				<label for ="SC-city">City</label>
			</div>
			<div class = "input field col s3 offset-s1"> 
				<input placeholder ="Postal Code" id="SC-postal" name="SC-postal" type="text" class="validate">
				<label for ="SC-postal">Postal Code</label>
			</div>
		</div>
		<!---Branch Location -->
		<div class="row">
			<div class="input-field col s7 offset-s1"> 
				<select name ="Branch Location"> 
					<option value ="" disabled selected> Branch Location </option>
					<option value ="Canada"> Canada </option>
					<option value ="India"> India </option>
					<option value ="Mexico"> Mexico </option>
					<option value ="Vietnam"> Philippines </option>
					<option value ="Vietnam"> Vietnam </option>
					<option value ="United Kingdom"> United Kingdom </option>
					<option value ="United States"> United States </option>
				</select>
			</div>
		</div>

		<!--Check Out Button-->
		<div class ="row"> 
			<button class = "btn waves-effect waves-light col s4 offset-s1 black" type="submit" name="action"> Check Out</button>
		</div>


	</form>
	</div> 	
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>

	console.log(localStorage.getItem("item"));
	function addEvent(element, event, delegate ) {
		
		if (typeof (window.event) != 'undefined' && element.attachEvent)
			element.attachEvent('on' + event, delegate);
		else 
			element.addEventListener(event, delegate, false);
	}
	
	addEvent(document, 'readystatechange', function() {
		if ( document.readyState !== "complete" ) 
			return true;
			
		var items = document.querySelectorAll("section.products ul li");
		var cart = document.querySelectorAll("#cart ul")[0];
		
		function updateCart(){
			var total = 0.0;
			var cart_items = document.querySelectorAll("#cart ul li")
			for (var i = 0; i < cart_items.length; i++) {
				var cart_item = cart_items[i];
				var quantity = cart_item.getAttribute('data-quantity');
				var price = cart_item.getAttribute('data-price');
				
				var sub_total = parseFloat(quantity * parseFloat(price));
				cart_item.querySelectorAll("span.sub-total")[0].innerHTML = " = " + sub_total.toFixed(2);
				
				total += sub_total;
			}
			
			document.querySelectorAll("#cart span.total")[0].innerHTML = total.toFixed(2);
		}
		
		function addCartItem(item, id) {
			var clone = item.cloneNode(true);
			clone.setAttribute('data-id', id);
			clone.setAttribute('data-quantity', 1);
			clone.removeAttribute('id');
			
			var fragment = document.createElement('span');
			fragment.setAttribute('class', 'quantity');
			fragment.innerHTML = ' x 1';
			clone.appendChild(fragment);	
			
			fragment = document.createElement('span');
			fragment.setAttribute('class', 'sub-total');
			clone.appendChild(fragment);					
			cart.appendChild(clone);
			addList();
			clearCart();
			updateList();
			
		}
		
		function updateCartItem(item){
			var quantity = item.getAttribute('data-quantity');
			quantity = parseInt(quantity) + 1
			item.setAttribute('data-quantity', quantity);
			var span = item.querySelectorAll('span.quantity');
			span[0].innerHTML = ' x ' + quantity;
			addList();
			clearCart();
			updateList();
			
		}
		
		function onDrop(event){			
			
			
			if(event.preventDefault) event.preventDefault();
			if (event.stopPropagation) event.stopPropagation();
			else event.cancelBubble = true;
			
			var id = event.dataTransfer.getData("Text");

			var item = document.getElementById(id);			
			
			

			var exists = document.querySelectorAll("#cart ul li[data-id='" + id + "']");
			
			if(exists.length > 0){
				updateCartItem(exists[0]);
			} else {
				addCartItem(item, id);
			}
			
			updateCart();
			
			return false;
		}
		
		function onDragOver(event){
			
			if(event.preventDefault) event.preventDefault();
			if (event.stopPropagation) event.stopPropagation();
			else event.cancelBubble = true;
			return false;
		}				


		

		function addList(){
		window.localStorage.setItem("item", JSON.stringify(document.getElementById("list").innerHTML));
		
		console.log("1");
		console.log(JSON.stringify(document.getElementById("list").outerHTML));
		//window.localStorage.setItem("item", JSON.stringify(document.getElementById("list").outerHTML));
		//console.log(localStorage.getItem("itemList"));
		//console.log(document.getElementById("list"));

		let tempElement = document.createElement("div");
		tempElement.setAttribute("id","delete");
		tempElement.innerHTML = JSON.parse(localStorage.getItem("item"));
		//console.log(tempElement.children[0].innerText);	
		console.log("2");
		console.log(JSON.parse(localStorage.getItem("item")));
		document.getElementById("list").appendChild(tempElement);
		}

		function updateList(){
		console.log("3");
		console.log(JSON.stringify(document.getElementById("list").innerHTML));
		//window.localStorage.setItem("item", JSON.stringify(document.getElementById("list").outerHTML));
		//console.log(localStorage.getItem("itemList"));
		//console.log(document.getElementById("list"));

		let tempElement = document.createElement("div");
		tempElement.setAttribute("id","delete");
		tempElement.innerHTML = JSON.parse(localStorage.getItem("item"));
		//console.log(tempElement.children[0].innerText);	
		console.log("4");
		console.log(JSON.parse(localStorage.getItem("item")));
		document.getElementById("list").appendChild(tempElement);
		}

		updateList();
		updateCart();
		addEvent(cart, 'drop', onDrop);
		addEvent(cart, 'dragover', onDragOver);
		
		function onDrag(event){
			event.dataTransfer.effectAllowed = "move";
			event.dataTransfer.dropEffect = "move";
			var target = event.target || event.srcElement;
			var success = event.dataTransfer.setData('Text', target.id);
		}
			
		for (var i = 0; i < items.length; i++) {
			var item = items[i];
			item.setAttribute("draggable", "true");
			addEvent(item, 'dragstart', onDrag);
		};
	});

	function clearCart(){
		let list = document.getElementById("list");
		[...list.children].forEach(c => list.removeChild(c));
		
		document.querySelectorAll("#cart span.total")[0].innerHTML = "0.00";
		
	};
	function clearMemory(){
		let list = document.getElementById("list");
		[...list.children].forEach(c => list.removeChild(c));
		window.localStorage.setItem("item", JSON.stringify(document.getElementById("list").innerHTML));
		document.querySelectorAll("#cart span.total")[0].innerHTML = "0.00";
	};

	$(document).ready(function(){ 
      $('#demo-carousel').carousel({fullWidth:true, indicators:true});
      setInterval(function(){ $('#demo-carousel').carousel('next');},4500);
  	});
  $(document).ready(function(){ 
      $(".modal").modal();
  	});
	  $(document).ready(function(){
        $('select').formSelect();
        });
</script>
</html>