<style type="text/css">
	.color-menu{
		font-size: 14px;
	}
	.display-header {
		visibility: hidden;
	}
	.header-top {
		margin-top: 100px;
	}
	#view-code{
		color:#4183d7; 
		font-size:13px;
		text-transform:uppercase;
		font-weight:700;
		text-decoration:none;
		position:absolute;top:640px; left:50%;margin-left:-35px;
	}
	div.screen{
		width: 100%;
		height:55px;	
		overflow:hidden;
		position : absolute; 
		top : 0; 
		left: 0;
		margin-left: 0;
		background:#FFF;
	}

	.list { 
		margin-top:36px; 
		text-align:left;
	}
	div.burger {
		height: 40px; 
		width: 40px;
		position: absolute;
		top: 0; 
		left: 21px;
		cursor: pointer;	
	}
	div.x,
	div.y,
	div.z {
		position: absolute; margin: auto;
		top: 0px; bottom: 0px;		
		border-radius:2px;
		-webkit-transition: all 200ms ease-out;
		-moz-transition: all 200ms ease-out;
		-ms-transition: all 200ms ease-out;
		-o-transition: all 200ms ease-out;
		transition: all 200ms ease-out;
	}
	div.x, div.y, div.z {
		height: 3px;
		width: 26px; 
	}
	div.y{
		top: 18px;
	}
	div.z{
		top: 37px;
	}
	div.collapse2{
		top: 20px;
		background:#4a89dc;
		-webkit-transition: all 70ms ease-out;
		-moz-transition: all 70ms ease-out;
		-ms-transition: all 70ms ease-out;
		-o-transition: all 70ms ease-out;
		transition: all 70ms ease-out;
	}
	div.rotate30{
		-ms-transform: rotate(30deg); 
		-webkit-transform: rotate(30deg); 
		transform: rotate(30deg);	
		-webkit-transition: all 50ms ease-out;
		-moz-transition: all 50ms ease-out;
		-ms-transition: all 50ms ease-out;
		-o-transition: all 50ms ease-out;
		transition: all 50ms ease-out;					
	}
	div.rotate150{
		-ms-transform: rotate(150deg); 
		-webkit-transform: rotate(150deg); 
		transform: rotate(150deg);	
		-webkit-transition: all 50ms ease-out;
		-moz-transition: all 50ms ease-out;
		-ms-transition: all 50ms ease-out;
		-o-transition: all 50ms ease-out;
		transition: all 50ms ease-out;					
	}
	
	div.rotate45{
		-ms-transform: rotate(45deg); 
		-webkit-transform: rotate(45deg); 
		transform: rotate(45deg);	
		-webkit-transition: all 100ms ease-out;
		-moz-transition: all 100ms ease-out;
		-ms-transition: all 100ms ease-out;
		-o-transition: all 100ms ease-out;
		transition: all 100ms ease-out;					
	}
	div.rotate135{
		-ms-transform: rotate(135deg); 
		-webkit-transform: rotate(135deg); 
		transform: rotate(135deg);	
		-webkit-transition: all 100ms ease-out;
		-moz-transition: all 100ms ease-out;
		-ms-transition: all 100ms ease-out;
		-o-transition: all 100ms ease-out;
		transition: all 100ms ease-out;					
	}

	div.navbar {
		height:73px;
		background : #F6F6F6;
	}

	div.circle{	
		border-radius: 50%;
		width: 0px;
		height: 0px; 
		position:absolute;
		top: 35px;
		left: 36px;
		/*background:#000;*/
		opacity:1;
		-webkit-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-moz-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-ms-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-o-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);	
	}
	div.circle.expand{
		width:1200px;
		height:1200px;
		top: -560px;
		left: -565px; 	
		-webkit-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-moz-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-ms-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-o-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);					

	}
	div.menu {
		height: 10px; 
		width: 100%;
		position: fixed;
		top: 0px; left: 0px;
	}
	div.menu ul li {
		list-style: none;
		position:absolute;
		visibility: hidden;
		top:50px;;
		left:0;
		opacity:0;
		width:320px;
		text-align:center;
		font-size:0px;
		-webkit-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-moz-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-ms-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-o-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	}
	div.menu ul li a {
		color:#FFF;
		text-transform:uppercase;
		text-decoration:none;	
		letter-spacing:0.5px;			
	}

	div.menu li.animate{
		font-size:21px;
		opacity:1;
		-webkit-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-moz-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-ms-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-o-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		display: contents;
	}

	/* end Header mobile*/


	.navbar-expand-lg .navbar-nav a.nav-link-new:hover {
		color: #79818C !important;
	}
	.size-font-i {
		font-size: 18px;
	}
	.navbar-expand-lg .navbar-nav .nav-link-new{
		color: #000 !important;
		font-size: 28px;
	}
	a.menu-products:hover {
		color: #79818C;
	}
	a.menu-home:hover {
		color: #79818C;
	}
	.nav-link-new:hover {
		color: #555555;
	}
	.navbar-light .navbar-toggler {
		background-color: #FFF;
	}
	.button-color {
		font-size: 16px;
		background-color: #545b6200 !important;
		color : #000 !important;
		border :none !important;
		line-height: 0;
	}
	.drop-menu-desk {
		font-size: 
	}
	.nav-1 , .nav-2 , .nav-3 , .nav-4 , .nav-5 , .nav-6 ,  .nav-8  {
		position: relative;
	}
	.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
		content: '';
		height: 50%;
		width: 2px;
		position: absolute;
		right: 0;
		top: 6px;
		background-color: #000;

	}
	.nav-color {
		text-align: center;
		float: right;
	}
	.changlang {
		padding-top: 5px;
		padding-right: 15px;
	}
	.nav-link-new:hover {
		color: #a6acb1 !important;
		transition: all 0.4s;
	}
	.drop-new {
		font-size: 16px;
		
	}
	.dropdown-menu-new {
		min-width: 5px;
		left: 20px;
		padding: 0;
		margin: 0;
	}
	.navbar-expand-lg .navbar-nav .nav-link-new {
		padding-right: 1.5rem;
		padding-left: 1.5rem;
	}
	.img-logo img {
		width: 50%;
		float: right;
	}
	.img-flag img {
		/*width: 70%;*/
	}
	#header {
		position: fixed;
		height: 50px;
		display: block;
		width: 100%;
		z-index: 9;
		text-align: center;
		color: #f2f2f2;
		padding: 0;
	}
	img.img-flag {
		width: 20px;
	}

	/* ////////////////////////// Responsive ////////////////////////// */
	@media only screen and (max-device-width: 480px) {
		/*header nobile*/
		a.changlang {
			color: #FFF;
		}
		.header-top {
			margin-top: 50px;
		}
		.nav-link-new {
			font-size: 16px;
			color: #FFF;
		}
		#header {
			padding: 0 !important;
		}
		.display-header {
			visibility: visible;
		}
		div.x {
			background-color: #000;
		}
		div.y{
			background-color: #000;
		}
		div.z {
			background-color: #000;
		}
		.navbar-nav-new {
			background-color: #0d176feb;
		}
		.button-color {
			color: #FFF !important;
			font-size: 25px !important;
		}
		/* end header nobile*/
		.img-logo img {
			width: 55%;
		}
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 5px;
			font-size: 23px !important;
		}

		.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
			width: 0;
		}
		
		.drop-color {
			background-color: #0d176feb;
		}
	}

	@media (max-device-width: 1023px)  and  (min-device-width: 768px) {
		/*header nobile*/
		a.changlang {
			color: #FFF;
		}
		.header-top {
			margin-top: 50px;
		}
		.nav-link-new {
			font-size: 25px;
			color: #FFF;
		}
		#header {
			padding: 0 !important;
		}
		.display-header {
			visibility: visible;
		}
		div.x {
			background-color: #000;
		}
		div.y{
			background-color: #000;
		}
		div.z {
			background-color: #000;
		}
		.navbar-nav-new {
			background-color: #0d176feb;
		}
		.button-color {
			color: #FFF !important;
			font-size: 25px !important;
		}
		/* end header nobile*/
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 5px;
			font-size: 25px;
		}
		.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
			width: 0;
		}
		.navbar-nav-new {
			/*background-color : #0d176feb;*/
		}
		.drop-color {
			background-color: #0d176feb;
		}
		.scrollbar {
			overflow-y: auto;
			max-height: 250px;
		}
		#navbarNav::-webkit-scrollbar {
			width: 4px;
			margin-right: -15px;
		}
		#navbarNav::-webkit-scrollbar-thumb {
			background-color: #4367dae0;
		}
		#navbarNav::-webkit-scrollbar-track {
			background-color: #EEE;
		}
		.img-logo img {
			width: 60%;
		}
		.nav-color {
			float: none;
		}
	}
	@media (max-width: 1359px) and (min-width: 1024px) {
		.img-logo img {
			width: 100%;
		}
		.ul-share{
			font-size: 7px;
		}
		.ul-share span{
			font-size: 7px;
		}
		.quotation a{
			font-size: 12px;
		}
		.compare-product a{
			font-size: 12px;

		}
		
		.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
			width: 0;
		}
		.button-color {
			font-size: 18px;
		}
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 0px 6px;
			font-size: 13px !important;
		}
		a.button-color {
			padding: .2rem .3rem;
		}
		.drop-new {
			font-size: 18px;
		}
		.compare-product-new h3 {
			font-size: 24px;
			letter-spacing: 1px;
		}
		.compare-product-new p {
			font-size: 24px;
			letter-spacing: 1px;
			line-height: 35px;
		}
		.compare-product-new h4 {
			font-size: 24px;
			letter-spacing: 1px;
		}
		.list-color {
			font-size: 15px;
		}
		.circle-color {
			font-size: 15px;
		}
		.quotation-compare a {
			letter-spacing: .5px;
		}
		.nav-color {
			padding: 20px 0;
		}
	}

	@media (max-width: 1400px) and (min-width: 1360px) {
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 10px !important;
			font-size: 16px !important;
		}
		.nav-1:before , .nav-2:before , .nav-3:before , .nav-4:before , .nav-5:before , .nav-6:before , .nav-8:before {
			top: 15px;
			width: 1px;
		}
		.nav-link-new {
			font-size: 25px;
		}
		.nav-color {
			padding: 0 0;
		}
		.img-logo img {
			width: 60%;
		}

	}
	@media (max-width: 1599px) and (min-width: 1401px)  {
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 0 10px;
			font-size: 16px !important;
		}
		.header-top {
			margin-top: 60px;
		}
	}

	@media (max-width: 1699px) and (min-width: 1600px) {
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 0 10px;
			font-size: 16px !important;
		}
		.header-top {
			margin-top: 80px;
		}
	}
	@media (min-width: 1700px) {
		.navbar-expand-lg .navbar-nav .nav-link-new {
			padding: 0 20px;
			font-size: 16px !important;
		}
		.header-top {
			margin-top: 120px;
		}
	}






</style>