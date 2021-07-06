<style type="text/css">
body {
	font-family: 'kanit';
}
.section-header {
	background: url(<?=base_url()?>assets/images/bg/bg-header.png) center center;
	background-size: cover;
	height: 958px;

}
header {
	padding-top: 40px;
	padding-bottom: 20px;
}
.ul-menu-header {
	list-style: none;
	flex-direction: : row;
	display: flex;
	margin-left: 50px;
}
.ul-menu-header li {
	position: relative;
	padding: 5px 10px
}
.ul-menu-header li a{
	/*padding: 0 0px;*/
	color:  #FFF;
	font-size: 16px;
	text-decoration: none;
}
.ul-menu-header li.user {
	padding-left: 30px;
}
/* Dropdown Online */
.dropbtn-online {
	color: white;
	padding: 10px;
	border: none;
	text-decoration: none;
}

.dropdown-online {
	position: relative;
	display: inline-block;
}

.dropdown-content-online {
	display: none;
	position: absolute;
	background-color: #FFF;
	min-width: 150px;
	/*box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
	z-index: 1;
	border-top: 5px solid #80090F;
	margin-left: -40px;
}
.dropdown-content-online a.menu {
	color: #080A14;
	padding: 5px 15px;
	text-decoration: none;
	display: block;
	font-size: 14px;
}
.dropdown-content-online a.menu:hover {
	color:  #80090F;
}
.dropdown-online:hover .dropdown-content-online {
	display: block;
}

/* Dropdown Blog - Activities */
.dropdown-article {
	position: relative;
	display: inline-block;
}
.dropdown-content-article {
	display: none;
	position: absolute;
	background-color: #FFF;
	min-width: 150px;
	z-index: 1;
	border-top: 5px solid #80090F;
}
.dropdown-content-article a.menu {
	color: #080A14;
	padding: 5px 15px;
	text-decoration: none;
	display: block;
	font-size: 14px;
}
.dropdown-content-article a.menu:hover {
	color:  #80090F;
}
.dropdown-article:hover .dropdown-content-article {
	display: block;
}

/* Dropdown login contact-us */
.dropdown-contact-us {
	position: relative;
	display: inline-block;
}
.dropdown-content-contact-us {
	display: none;
	position: absolute;
	background-color: #FFF;
	min-width: 110px;
	z-index: 1;
	border-top: 5px solid #80090F;
	
}
.dropdown-content-contact-us a.menu {
	color: #080A14;
	padding: 5px 15px;
	text-decoration: none;
	display: block;
	font-size: 14px;
}
.dropdown-content-contact-us a.menu:hover {
	color:  #80090F;
}
.dropdown-contact-us:hover .dropdown-content-contact-us {
	display: block;
}


/* Dropdown login user */
.dropdown-user {
	position: relative;
	display: inline-block;
}
.dropdown-content-user {
	display: none;
	position: absolute;
	background-color: #FFF;
	min-width: 110px;
	z-index: 1;
	border-top: 5px solid #80090F;
	
}
.dropdown-content-user a.menu {
	color: #080A14;
	padding: 5px 15px;
	text-decoration: none;
	display: block;
	font-size: 14px;
}
.dropdown-content-user a.menu:hover {
	color:  #80090F;
}
.dropdown-user:hover .dropdown-content-user {
	display: block;
}

/* Dropdown lang */
.dropdown-lang {
	position: relative;
	display: inline-block;
}
.dropdown-content-lang {
	display: none;
	position: absolute;
	background-color: #FFF;
	min-width: 80px;
	z-index: 1;
}
.dropdown-content-lang a.menu {
	color: #080A14;
	padding: 5px 15px;
	text-decoration: none;
	display: block;
	font-size: 14px;
	text-decoration: none;
}
.dropdown-content-lang a.menu:hover {
	color:  #80090F;
}
.dropdown-lang:hover .dropdown-content-lang {
	display: block;
}

a.login {
	font-size: 16px;
	text-decoration: none; 
	position: relative;
	color: #FFF; 
	padding: 5px 10px;
}

ul.right-header {
	list-style: none;
	flex-direction: : row;
	display: flex;
}
ul.right-header li {
	position: relative;
	padding: 5px 5px;
}

.content-header {
	text-align: center;
	margin-top:  200px;
	color: #FFF;
	font-size: 46px;
}
.sticky-right {
	position: fixed;
	top: 300px;
	right: 10px;
	z-index: 99;
}
.sticky-right a {
	margin-top: 5px;
}

.btn-icon {
	display: flex;
	border-radius: 50%;
	align-items: center;
}
div.tooltip-inner {
	font-family: "kanit";
}
.name-product {
	font-size: 24px;
	font-weight: bold;
	text-decoration: none;
	color: #000;
	overflow: hidden;
	text-overflow: ellipsis;
	display: -webkit-box;
	-webkit-line-clamp: 1;
	-webkit-box-orient: vertical;
}
a.name-product:hover {
	color: #000;
}
.pro-about {
	font-size: 18px;
	margin: 40px 0;
	overflow: hidden;
	text-overflow: ellipsis;
	display: -webkit-box;
	-webkit-line-clamp: 5;
	-webkit-box-orient: vertical;

}
.btn-go-ptoduct {
	width: 180px;
	text-align: center;
	height:50px;
	background-color: #000F77;
	display: inline-flex;
	color: #FFF;
	font-size: 18px;
}
.btn-go-ptoduct:hover {
	color: #FFF;
}
.icon-right-products {
	width: 30px!important;
	height: 24px;
	margin-right: 10px;
}
.about-btn {
	display: inline-flex;
	margin: 0 auto;
	padding-top: 5px;
}
.know-name {
	font-size: 28px;
	text-align:left;
	text-decoration: none;
	color: #000;
}
.know-name:hover {
	color: #000;
}
.know-about {
	font-size: 18px;
	overflow: hidden;
	text-overflow: ellipsis;
	display: -webkit-box;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
	margin: 30px 0;
}
.btn-know {
	width: 180px;
	text-align: center;
	height:50px;
	background-color: #960018;
	display: inline-flex;
	color: #FFF;
	font-size: 18px;
	color: #FFF;
}
.btn-know:hover {
	color: #FFF;
}
.space-know {
	margin: 20px 0;
}
.img-width-100 {
	width: 100%;
}
.news-name {
	font-size: 28px;
	text-align:left;
	text-decoration: none;
	color: #000;
	margin-top: 10px;
}
.news-name:hover {
	color: #000;
}
.news-about {
	font-size: 18px;
	overflow: hidden;
	text-overflow: ellipsis;
	display: -webkit-box;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
	margin: 40px 0;
}
footer {
	margin-top: 50px;
}
.space-footer-1 {
	background-color: #80090F;
	padding: 30px 0;
}
.tab-left-footer {
	margin: 30px 0;
}
.tab-left-footer h5 {
	color: #FFF;
	font-size: 16px;
}
.tab-left-footer p {
	color: #FFF;
	font-size: 16px;
}
.space-menu-footer {
	margin-top: 30px;
}
.footer-menu-category {
	margin-left: 10px;
	margin: 10px 0;
}
.footer-menu-category a {
	text-decoration: none;
	color: #FFF;
	overflow: hidden;
	text-overflow: ellipsis;
	display: -webkit-box;
	-webkit-line-clamp: 1;
	-webkit-box-orient: vertical;
}
.footer-menu-category a:hover {
	color: #FFF;
}
.space-footer-2 {
	background-color: #E9990F;
	padding: 10px 0;
}
.copyright {
	font-size: 16px;
	color: #FFF;
	font-weight: 300;
}
.copyright a {
	text-decoration: none;
	color: #FFF;
}
.copyright a:hover {
	color: #FFF;
}
.we-are-dis {
	font-size:36px;
	text-align: center;
	margin: 50px 0;
}
.banner-1 {
	background-color: #FF1111; 
	width:100%;
	height: 238px;
}
.banner-2 {
	background-color: #FF1111; 
	width:100%;
	height: 238px;
}
.font-title {
	text-align: center;
	font-size: 34px; 
	margin: 10px 0;
}
.header-about {
	background-image: url("../images/bg/about.png");
	height: 274px;
	background-size: 100% auto;
	background-repeat: no-repeat;
	text-align: center;
	width: 100%;
	display: flex;
	flex-wrap: wrap;
	align-content: center;
}
.title-about {
	font-size: 36px;
	color: #FFF;
	margin: 0 auto;
}
.breadcrumb-nav {
	height: 50px;
	display: flex;
	flex-wrap: wrap;
	align-content: center;
	background-color: #E9ECEF;
}
.breadcrumb-nav nav {
	background-color: #E9ECEF;
	margin-top: 10px;
}
.btn-breadcrumb {
	text-decoration: none;
	color: #000;
}
.btn-breadcrumb:hover {
	color: #80090F;
}
.space-about-page {
	margin: 50px 0;
}
.header-products {
	padding: 20px 0; 
	background-color: #960018;
}
.input-search {
	position: relative;
	flex: 1 1 auto;
	width: 1%;
	min-width: 0;
	border: 1px solid #FFF;
	border-radius: 0;
	padding-left: 20px;
}
.btn-seach {
	background-color: #E9990F;
	border-radius: 0;
	width: 60px;
	transition: all 0.2s ease-in-out;
	/*height: 53px;*/
}
.btn-seach:hover {
	opacity: .9;
}
.input-search::placeholder {
	z-index: 3;
	color: #000;
}
.menu-brand {

}
.menu-product-brand {
	list-style: none;
	padding: 20px 0; 
}
.menu-product-brand li a{
	text-decoration: none;
	color: #000;
}
.menu-product-brand li a.a-name-brand {
	padding-left: 20px;
}
.menu-category-product {

}
.category-title {
	font-size: 18px;
	font-weight: 500;
}
.name-category {
	font-size: 16px;
	text-decoration: none;
	color: #080A14;
	margin: 10px 0;
	overflow: hidden;
	text-overflow: ellipsis;
	display: -webkit-box;
	-webkit-line-clamp: 1;
	-webkit-box-orient: vertical;
}
.name-category:hover {
	color: #080A14;
}
.category-menu {
	padding: 10px 0;
}
.brand-product {
	padding: 10px 0;
	margin-bottom: 0;
	color: #80090F;
	font-size: 12px;
}
.brand-product a {
	color: #80090F;
	text-decoration: none;
}
.brand-product a:hover {
	color: #80090F;
}
.product-space {
	padding: 10px 5px;
}
.name-product-o {
	font-size: 18px;
	color: #080A14;
	overflow: hidden;
	text-overflow: ellipsis;
	display: -webkit-box;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
}
.name-product-o a {
	color: #080A14;
	text-decoration: none;
}
.name-product-o a:hover {
	color: #080A14;
}

.price-pro {
	font-size: 18px;
	color: #80090F;
	overflow: hidden;
	text-overflow: ellipsis;
	display: -webkit-box;
	-webkit-line-clamp: 1;
	-webkit-box-orient: vertical;
}
.quotation-pro {
	text-decoration: none;
	color: #080A14;
	font-size: 14px;
}
.quotation-pro:hover {
	color: #080A14;
}
.img-pro img {
	width: 100%;
	border: 1px solid #E1E1E1;
	padding: 30px;
}
.name-pro-de {
	font-size: 24px;
	font-weight: bold;
}
.space-pro-de-head {
	padding: 0 10px;
}
.go-brand {
	padding: 25px 0;
}
.btn-brand-de-pro {
	background-color: #80090F;
	font-size: 20px;
	padding: 0px 10px;
	color: #FFF;
}
.btn-brand-de-pro:hover {
	color: #FFF;
	opacity: 0.9;
	transition: all 0.2s ease-in-out;
}
.price-pro-2 {
	font-size: 24px;
	color: #80090F;
	margin-bottom: 0;
}
.quotation-pro-de {
	color: #080A14;
	font-size: 14px;
}
.quotation-de {
	margin: 50px 0;
}
.quotation-de  input{
	width: 63px;
	height: 40px;
	text-align: center;
}
.quotation-de input::placeholder {
	margin: 0 auto;
	padding-left: 5px;
}
.space-quota {
	margin: 30px 0;
}
.btn-add-quotation {
	padding: 10px 0;
	width: 192px;
	background-color: #80090F;
	font-size: 20px;
	color: #FFF;
	margin-right: 10px;
}
.btn-add-quotation:hover {
	color: #FFF;
	opacity: .9;
	transition: all 0.2s ease-out;
}
.btn-add-quotation img {
	width: 20px;
	height: 19px;
	margin-right: 5px;
}
.btn-quick-contact {
	padding: 10px 0;
	width: 192px;
	background-color: #000F77;
	font-size: 20px;
	color: #FFF;
}
.btn-quick-contact:hover{
	color: #FFF;
	opacity: .9;
	transition: all 0.2s ease-out;
}
.btn-quick-contact img {
	width: 29px;
	height:23px;
	margin-right: 5px;
}
.btn-share {

}
.btn-share img {
	width: 100%;
	height: auto;
}
.title-detail-pro {
	margin: 40px 0 0 0;
	color: #080A14;
	font-size: 24px;
	background-color: #E9ECEF;
	width: 100%;
	padding: 5px 20px;
}
.detail-pro {
	padding: 20px 60px;
	font-size: 20px;
	font-weight: 400;
}
.spec-product {
	margin: 40px 0 0 0;
	color: #FFF;
	font-size: 24px;
	background-color: #80090F;
	width: 100%;
	padding: 5px 20px;
}
.detail-spec-pro {
	padding: 20px 60px;
	font-size: 24px;
	/*font-weight: 400;*/
}
.see-more {
	width: 100%;
	height: 80%;
	filter: blur(8px);
	-webkit-filter: blur(8px);
}
.see-more a{
	text-align: center;
	margin: 0 auto;
}
.relate-product-title {
	margin: 40px 0 40px 0;
	color: #FFF;
	font-size: 24px;
	width: 100%;
	padding: 5px 20px;
	background-color: #000F77;
}
.space-relate-pro {
	padding: 20px;
}
.pro-relate {
	padding: 25px;
	border: 1px solid #E5E5E5;
}
.pro-relate  img {
	width: 100%;
}
.title-tag-product {
	margin: 40px 0 30px 0;
	color: #080A14;
	font-size: 24px;
	width: 100%;
	padding: 5px 20px;
	background-color: #E9ECEF;
}
.space-tag-product {
	max-height: 500px;
	overflow-y: auto;
	margin-bottom: 25px;
	margin-right: -18px;
}
.tag-skip {
	min-height: 50px;
	display: inline-block;
	list-style: outside none none;
}
.tag-skip a {
	margin: 5px;
	padding: 10px 20px;
	color: #080A14;
	font-size: 20px;
	text-decoration: none;
	background-color: #E9ECEF;
	display: inline-block;
}
.tag-all ul{
	/*display: inline-flex;*/
	/*overflow-y: auto;*/
	list-style: none;
	margin-left: -25px;
}
.name-pro-cart {
	color: #080A14;
	font-size: 16px;
	overflow: hidden;
	text-overflow: ellipsis;
	display: -webkit-box;
	-webkit-line-clamp: 5;
	-webkit-box-orient: vertical;
}
.btn-cart-brand {
	font-size: 12px;
	background-color: #80090F;
	color: #FFFFFF;
}
.btn-cart-brand:hover {
	color: #FFF;
}
.btn-amout-cart {
	max-width: 81px;
	border: 1px solid #C4C4C4;
	border-radius: 0;
}
.space-cart-pro {
	margin: 20px 0;
}

.line-cart {
	width: 97%;
	/*height: 1px;*/
	margin: 0 auto;
	/*background-color: #707070;*/
	border: 1px solid #707070;
}
.title-conclude {
	font-size: 24px;
	background-color: #000F77;
	padding: 5px 25px;
	color: #FFF;
	margin: 20px 0;
}
.total-cart {
	margin: 10px 0;
	
}
.to-tal-1 {
	font-size: 24px;
	padding-left: 20px;
	width: 50%;
}
.to-tal-2 {
	font-size: 24px;
	padding-right: 20px;
	text-align: right;
	width: 50%;
}
.to-tal-main {
	display: inline-flex;
	width: 100%;
}




.wrapper {
	display: flex;
	width: 90%;
	justify-content: space-around;
}
.card {
	width: 100%;
	height: 360px;
	border-radius: 15px;
	padding: 1.5rem;
	background: white;
	position: relative;
	display: flex;
	align-items: flex-end;
	transition: 0.4s ease-out;
	box-shadow: 0px 7px 10px rgba(black, 0.5);
}	
.card:hover {
	transform: translateY(20px);
}

.card::before {
	opacity: 1;
}
.card:hover .info {
	opacity: 1;
	transform: translateY(0px);
}

.info::before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	display: block;
	width: 100%;
	height: 100%;
	border-radius: 15px;
	background: #000;
	z-index: 999;
	transition: 0.5s;
	opacity: 0;
}
.img-nn {
	width: 100%;
	height: 100%;
	object-fit: cover;
	position: absolute;
	top: 0;
	left: 0;
	border-radius: 15px;
}
.info {
	position: relative;
	z-index: 3;
	color: white;
	opacity: 0;
	transform: translateY(30px);
	transition: 0.5s;
}
h1 {			
	margin: 0px;
}
p {
	letter-spacing: 1px;
	font-size: 15px;
	margin-top: 8px;
}
.btn-nn {
	padding: 0.6rem;
	outline: none;
	border: none;
	border-radius: 3px;
	background: white;
	color: black;
	font-weight: bold;
	cursor: pointer;
	transition: 0.4s ease;
}
.btn-nn::hover {
	background: dodgerblue;
	color: white;
}
















@media(min-width:  300px) and (max-width:  767px) {
	.screen-pc {
		display: none;
	}
	.content-header {
		font-size: 18px;
		margin-top: 0px;
	}
	.we-are-dis {
		font-size:18px;
		text-align: center;
		margin: 50px 0;
	}
	.banner-1 {
		margin: 10px 0;
	}
	.banner-2 {
		margin: 10px 0;
	}
	.sticky-right {
		display: none;
	}
	.font-title {
		font-size: 24px;
	}
	.name-product {
		font-size: 18px;
	}
	.btn-go-ptoduct {
		width: 150px;
	}
	.know-name {
		margin-top: 20px;
	}
	.btn-know {
		width: 150px;
	}
	.section-header {
		margin-top: 65px;
	}
}
@media(min-width:  768px) and (max-width:  1023px) {
	.screen-pc {
		display: none;
	}
	.section-header {
		margin-top: 65px;
	}
	.content-header {
		font-size: 30px;
		margin-top: 50px;
	}
}
@media(min-width:  1024px) and (max-width:  1359px) {
	.content-header {
		margin-top: 10px;
		font-size: 36px;
	}
}
@media(min-width:  1360px) and (max-width:  1600px) {
	.content-header {
		margin-top: 70px;
	}
}
@media(min-width:  1601px) {

}








</style>