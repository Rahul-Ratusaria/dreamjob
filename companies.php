<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
    input{
	    margin-top:40px;
		}
	input[type="search"]{
		width:600px;
		height:40px;
		background:transparent;
		border:none;
		border-bottom:solid 1px black;
		color:red;
		padding:20px;
		margin-right:10px;
		color:#CC0099;
		}
	input[type="submit"]{
		height:40px;
		width:100px;
		}	
	input[type="submit"]:hover{
		border:1px solid red;
		}	
	.names{
	    margin:40px;
		}	
	.socialmedia1{
	         height:47px;
			 width:45px;
			 border-radius:30px;
			 background:transparent url('facebook0.png');
			 position:relative;
			 top:110px;
			 left:990px;
			 }
	.socialmedia1:hover{
	         height:45px;
			 width:45px;
			 border-radius:30px;
			 background:transparent url('facebook1.png');
			 }
    .socialmedia2{
	         height:47px;
			 width:45px;
			 border-radius:30px;
			 background:transparent url('insta0.png');
			 position:relative;
			 top:110px;
			 left:990px;
			 }
	.socialmedia2:hover{
	         height:45px;
			 width:45px;
			 border-radius:30px;
			 background:transparent url('insta1.png');
			 }
	.socialmedia3{
	         height:47px;
			 width:45px;
			 border-radius:30px;
			 background:transparent url('twitter0.png');
			 position:relative;
			 top:110px;
			 left:990px;
			 }
    .socialmedia3:hover{
	         height:45px;
			 width:45px;
			 border-radius:30px;
			 background:transparent url('twitter1.png');
			 }	 	 
	ul li a{
		     text-decoration:none;
			 color:blue;
			 }		
	.imageleft img{
		     position:absolute;
			 top:250px;
			 left:500px;
			 animation-name:convert;
			 animation-duration:5s;
			 animation-iteration-count:infinite;
			 animation-direction:alternate;
			 } 
	@keyframes convert{
		     0%{position:absolute;top:250px;left:500px;}
		     100%{position:absolute;top:1000px;left:500px;}		  
			 }
				
</style>		
</head>

<body style="background-color:#ffff11;">

<a href="login.php" style="float:right; height:30px; width:80px;"><button style="border-radius:30px 0px 0px 30px; color:red; position:fixed; font-size:15px;"><b>Login Here</b></button></a>


<div style="position:fixed;">
<div class="socialmedia1">
<a href="https://www.facebook.com/" target="_blank"><svg width="45px" height="47px"><circle fill="green"></circle></svg></a>
</div>
<div class="socialmedia2">
<a href="https://www.instagram.com/" target="_blank"><svg width="45px" height="47px"><circle fill="green"></circle></svg></a>
</div>
<div class="socialmedia3">
<a href="https://www.twitter.com/" target="_blank"><svg width="45px" height="47px"><circle fill="green"></circle></svg></a>
</div>
</div>



<div class="upperpart">


<form>
<center><input type="search" placeholder="Enter the company name you want to search" name="search" onKeyUp="myFunction()" id="myinput"/><input type="submit" value="search" /></center>
</form>

</div>

<div class="names">
<ul id="myul" style="list-style-type:none;">
<li><a href="https://business.mapsofindia.com/india-company/apollo-tyre.html">Apollo Tyre</a></li>
<li><a href="https://business.mapsofindia.com/india-company/gulf-oil-corporation.html">Gulf Oil Corporation</a></li>
<li><a href="https://business.mapsofindia.com/india-company/n/nrb-bearings.html">NRB Bearings</a></li>
<li><a href="https://business.mapsofindia.com/india-company/ashok-leyland.html">Ashok Leyland</a></li>
<li><a href="https://business.mapsofindia.com/india-company/gammon-india.html">Gammon India</a></li>
<li><a href="https://business.mapsofindia.com/india-company/n/nucleus-software-experts.html">Nucleus Software Experts</a></li>
<li><a href="https://business.mapsofindia.com/india-company/a/aditya-birla-nuvo.html">Aditya Birla Nuyo</a></li>
<li><a href="https://business.mapsofindia.com/india-company/gillette-india.html">Gillette India</a></li>
<li><a href="https://business.mapsofindia.com/india-company/n/niit-technologies.html">NIIT Technologies</a></li>
<li><a href="https://business.mapsofindia.com/india-company/a/alok-industries.html">Alok Industries</a></li>
<li><a href="https://business.mapsofindia.com/india-company/havells-india.html">Havell's India</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/n/ntpc.html">NTPC</a></li>
<li><a href="https://business.mapsofindia.com/india-company/a/atlas-copco.html">Atlas Copco</a></li>
<li><a href="https://business.mapsofindia.com/india-company/hindustan-zinc.html">Hindustan Zinc</a></li>
<li><a href="https://business.mapsofindia.com/india-company/o/ocl-india.html">OCL India</a></li>
<li><a href="https://business.mapsofindia.com/india-company/a/atn-international.html">ATN International</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/HCL-infosystems.html">HCL Infosystems</a></li>
<li><a href="https://business.mapsofindia.com/india-company/o/opto-circuits.html">Opto Circuits</a></li>
<li><a href="https://business.mapsofindia.com/india-company/b/bajaj-electricals.html">Bajaj Electricals</a></li>
<li><a href="https://business.mapsofindia.com/india-company/hdfc-bank.html">HDFC Bank</a></li> 
<li><a href="https://business.mapsofindia.com/india-company/ongc.html">ONGC</a></li>  
<li><a href="https://business.mapsofindia.com/india-company/b/bata-india.html">Bata India</a></li>
<li><a href="https://business.mapsofindia.com/india-company/hero-honda-motors.html">Hero Honda Motors</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/p/prithvi-information-solutions.html">Prithvi Information Solutions</a></li>
<li><a href="https://business.mapsofindia.com/india-company/b/berger-paints-india.html">Berger Paints India</a></li>
<li><a href="https://business.mapsofindia.com/india-company/ht-media.html">HT Media</a></li>  
<li><a href="https://business.mapsofindia.com/india-company/p/procter-gamble-hygiene.html">Procter Gamble Hygiene</a></li> 
<li><a href="https://business.mapsofindia.com/india-company/b/bharat-earth-movers.html">Bharat Earth Movers</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/i/india-cements.html">India Cements</a></li>
<li><a href="https://business.mapsofindia.com/india-company/r/ranbaxy-laboratories.html">Ranbaxy Laboratories</a></li>
<li><a href="https://business.mapsofindia.com/india-company/b/britannia.html">Britannia</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/i/indian-hotels-co.html">Indian Hotels Co</a></li>
<li><a href="https://business.mapsofindia.com/india-company/r/reliance-industries.html">Reliance Industries</a></li>
<li><a href="https://business.mapsofindia.com/india-company/b/bajaj-hindustan.html">Bajaj Hindustan</a></li> 
<li><a href="https://business.mapsofindia.com/india-company/i/indraprastha-gas.html">Indraprastha Gas</a></li>  
<li><a href="https://business.mapsofindia.com/india-company/r/rolta-india.html">Rolta India</a></li>
<li><a href="https://business.mapsofindia.com/india-company/c/castrol-india.html">Castrol India</a></li>  
<li><a href="https://business.mapsofindia.com/india-company/i/infotech-enterprises.html">Infotech Enterprises</a></li> 
<li><a href="https://business.mapsofindia.com/india-company/r/raymond.html">Raymond</a></li>
<li><a href="https://business.mapsofindia.com/india-company/c/century-plywoods.html">Century Plywoods</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/i/infosys.html">Infosys</a></li>
<li><a href="https://business.mapsofindia.com/india-company/r/reliance-energy.html">Reliance Energy</a></li>
<li><a href="https://business.mapsofindia.com/india-company/c/century-textiles-ind.html">Century Textiles Ind.</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/i/indian-oil-corporation.html">Indian Oil Corporation</a></li>
<li><a href="https://business.mapsofindia.com/india-company/r/reliance-power-plant.html">Reliance Power Plant</a></li>
<li><a href="https://business.mapsofindia.com/india-company/c/classic-diamonds.html">Classic Diamonds</a></li>  
<li><a href="https://business.mapsofindia.com/india-company/j/jk-cements.html">JK Cements Limited</a></li> 
<li><a href="https://business.mapsofindia.com/india-company/s/sakthi-sugars.html">Sakthi Sugars</a></li>
<li><a href="https://business.mapsofindia.com/india-company/c/clariant-chemicals.html">Clariant Chemicals</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/j/jindal-saw.html">Jindal Saw</a></li>
<li><a href="https://business.mapsofindia.com/india-company/s/sangam.html">Sangam</a></li>
<li><a href="https://business.mapsofindia.com/india-company/c/colgate-palmolive.html">Colgate Palmolive</a></li>  
<li><a href="https://business.mapsofindia.com/india-company/j/jindal-stainless.html">Jindal Stainless</a></li>
<li><a href="https://business.mapsofindia.com/india-company/s/sanghi-industries.html">Sanghi Industries</a></li>
<li><a href="https://business.mapsofindia.com/india-company/d/dabur-india.html">Dabur India</a></li>
<li><a href="https://business.mapsofindia.com/india-company/j/jindal-steel-and-power.html">Jindal Steel And Power</a></li>
<li><a href="https://business.mapsofindia.com/india-company/s/satyam-computer-services.html">Satyam Computer Services</a></li>
<li><a href="https://business.mapsofindia.com/india-company/d/dalmia-cements.html">Dalmia Cements</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/j/jsw-steel.html">JSW Steel</a></li>
<li><a href="https://business.mapsofindia.com/india-company/s/shiping-corporation-of-india.html">Shiping Corporation Of India</a></li>
<li><a href="https://business.mapsofindia.com/india-company/d/dynamatic-technologies.html">Dynamatic Technologies</a></li> 
<li><a href="https://business.mapsofindia.com/india-company/j/jet-airways.html">Jet Airways</a></li>
<li><a href="https://business.mapsofindia.com/india-company/s/simplex-infrastructures.html">Simplex Infrastructures</a></li>  
<li><a href="https://business.mapsofindia.com/india-company/d/divis-laboratories.html">Divi's Laboratories</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/k/kajaria-ceramics.html">Kajaria Ceramics</a></li>
<li><a href="https://business.mapsofindia.com/india-company/t/tata-chemicals.html">TATA chemicals</a></li>
<li><a href="https://business.mapsofindia.com/india-company/d/donear-industries.html">Donear Industries</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/k/kansai-nerolac-paints.html">Kansai Nerolac Paints</a></li>
<li><a href="https://business.mapsofindia.com/india-company/t/tata-elxsi.html">TATA Elxsi</a></li>
<li><a href="https://business.mapsofindia.com/india-company/d/ds-kulkarni-developers.html">DS Kulkarni Developers</a></li> 
<li><a href="https://business.mapsofindia.com/india-company/k/kei-industries.html">KEI Industries</a></li>
<li><a href="https://business.mapsofindia.com/india-company/t/tata-power-company.html">TATA Power Company</a></li>  
<li><a href="https://business.mapsofindia.com/india-company/e/exide-industries.html">Exide Industries</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/k/kirloskar-brothers.html">Kirloskar Brothers</a></li>
<li><a href="https://business.mapsofindia.com/india-company/t/tata-tea.html">TATA Tea</a></li>
<li><a href="https://business.mapsofindia.com/india-company/e/eicher-motor.html">Eicher Motor</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/k/ksb-pumps.html">KSB Pumps</a></li>
<li><a href="https://business.mapsofindia.com/india-company/t/tata.htmk">TATA</a></li>
<li><a href="https://business.mapsofindia.com/india-company/e/essel-propack.html">Essel Propack</a></li>  
<li><a href="https://business.mapsofindia.com/india-company/k/kotak-mahindra-bank">Kotak Mahindra Bank</a></li> 
<li><a href="https://business.mapsofindia.com/india-company/t/titan-industries.html">Titan Industries</a></li>
<li><a href="https://business.mapsofindia.com/india-company/e/etc-networks.html">Etc Networks</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/l/lakshmi-energy-and-foods.html">Lakshmi Energy And Foods</a></li>
<li><a href="https://business.mapsofindia.com/india-company/u/united-spirits.html">United Spirits</a></li>
<li><a href="https://business.mapsofindia.com/india-company/e/eveready-industries.html">Eveready Industries</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/l/lakshmi-machine-works.html">Lakshmi Machine Works</a></li>
<li><a href="https://business.mapsofindia.com/india-company/u/usha-martin.html">Usha Martin</a></li>
<li><a href="https://business.mapsofindia.com/india-company/e/excel-industries.html">Excel Industries</a></li>  
<li><a href="https://business.mapsofindia.com/india-company/l/lic-housing-finance.html">LIC Housing Finance</a></li>
<li><a href="https://business.mapsofindia.com/india-company/u/uttam-galva-steel.html">Uttam Galva Steel</a></li>
<li><a href="https://business.mapsofindia.com/india-company/f/finolex-industries.html">Finolex Industries</a></li>  
<li><a href="https://business.mapsofindia.com/india-company/l/lumax-industries.html">Lumax Industries</a></li> 
<li><a href="https://business.mapsofindia.com/india-company/v/vaibhav-gems.html">Vaibhav Gems</a></li>
<li><a href="https://business.mapsofindia.com/india-company/f/flex-industries.html">Flex Industries</a></li> 
<li><a href="https://business.mapsofindia.com/india-company/m/mrf-india.html">MRF India</a></li> 
<li><a href="https://business.mapsofindia.com/india-company/v/videocon-industries.html">Videocon Industries</a></li> 
<li><a href="https://business.mapsofindia.com/india-company/f/force-motors.html">Force Motors</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/m/mastek.html">Mastek</a></li>
<li><a href="https://business.mapsofindia.com/india-company/v/videsh-sanchar-nigam.html">Videsh Sanchar Nigam</a></li>
<li><a href="https://business.mapsofindia.com/india-company/f/fcl-technologies.html">FCL Technologies</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/m/max-india.html">Max India</a></li>
<li><a href="https://business.mapsofindia.com/india-company/v/voltas.html">Voltas</a></li>
<li><a href="https://business.mapsofindia.com/india-company/f/finolex-cables.html">Finolex Cables</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/m/megasoft.html">Megasoft</a></li>
<li><a href="https://business.mapsofindia.com/india-company/v/vakrangee-softwares.html">Vakrangee softwares</a></li>
<li><a href="https://business.mapsofindia.com/india-company/f/fronties-information.html">Fronties Information</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/m/merck.html">Merck</a></li>
<li><a href="https://business.mapsofindia.com/india-company/v/varun-shipping-company.html">Varun Shipping company</a></li>
<li><a href="https://business.mapsofindia.com/india-company/g/godrej-consumer-products.html">Godrej Consumer Products</a></li>
<li><a href="https://business.mapsofindia.com/india-company/m/mrpl.html">MRPL</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/w/wockhardt.html">Wockhardt</a></li>
<li><a href="https://business.mapsofindia.com/india-company/g/godrej-industries.html">Godrej Industries</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/n/national-fertilizer.html">National Fertilizer</a></li>
<li><a href="https://business.mapsofindia.com/india-company/w/wipro.html">Wipro</a></li>
<li><a href="https://business.mapsofindia.com/india-company/g/graphite-india.html">Graphite India</a></li>   
<li><a href="https://business.mapsofindia.com/india-company/n/nestle-india.html">Nestle India</a></li>
<li><a href="https://business.mapsofindia.com/india-company/y/yes-bank-india.html">Yes Bank India</a></li>
</ul>
</div>

<div class="imageleft">
<img src="degree.png" height="300px" width="200px">
</div>

<?php
require('copyright.php');
?>

<script>
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myinput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myul");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
</body>
</html>
