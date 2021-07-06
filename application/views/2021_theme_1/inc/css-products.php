<style type="text/css">
	div.tooltip-inner {
		font-family: kanit;
		font-size: 16px;
	}
		.page-item.active .page-link{
			background-color: #1B1464;
			border: solid 1px #1B1464;
		}
		.page-link a{
			color: black;
		}
	span.count-compare {
		background-color: #FF0000;
		border-radius: 100%;
		position: fixed;
		font-size: 12px;
		font-weight: 400;
		height: 26px;
		left: 30px;
		line-height: 26px;
		position: absolute;
		top: -13px;
		width: 26px;
		color: #FFF;
		z-index: 99999;
	}

	.compare{
		position: fixed;
		left: 10px;
		top: 300px;
		z-index: 99999;
	}
	.btn-compare {
		background-color: #1B1464;
		border: none;
		font-size: 20px;
	}
	button.btn-compare:hover {
		background-color: #56549B;
	}
	
	.find-pro .form-control{
		font-size: 14px;
		padding: 11px;
	}
	.color-menu , .color-menu a {
		color: #000;
	}
	.breadcrumb .color-menu-active {
		color: #0a0180;
		font-weight: bold;
		font-size:14px;
	}
	/* New */
	.overlay-img-2 h3 {
		font-size: 16px;
	}
	.detail-product {
		text-align: center;
		margin-top: 20px;
	}
	.detail-product h3{
		font-size: 16px;
		font-weight: bold;
	}
	.detail-product p {
		font-size: 14px;
		font-weight: 200px;
	}
	.scrollbar-search {
		max-height: 400px;
		overflow-y: auto;
	}
	.tags-a {
		padding: 2px 2px;
		display: inline-block;
	}
	.tags-a a {
		letter-spacing: 0.5px;
	    padding: 4px 20px;
	    background-color: #1208a7b3;
	    line-height: 35px;
	    color: #FFF;
	    border-radius: 80px;
	    font-size: 16px;
	}
	.tags-a a:hover {
		background-color: #403E7F;
	}
	.tags-a-new {
		padding: 2px 2px;
		display: inline-block;
	}
	.tags-pro {
		display: -webkit-inline-box;
	}
	.tags-a-new a {
		color: #000;
		font-size: 18px;
		line-height: normal;
	}
	.tags-a-new a:hover {
		color: #403E7F;
	}
	.detail-product-pro h3{
		font-size: 26px;
	}
	.breadcrumb-detail-pro {
		display: flex;
		padding-bottom: 10px;
		padding-top: 8px;
	}
	.breadcrumb-detail:after {
		content: ':';
		display: inline-block;
	}
	.breadcrumb-detail {
		display: flex;
	}
	.menu-pro-detail {
		font-size: 20px;
		font-weight: bold;
		line-height: 30px;
		
	}
	.category-menu-detail {
		font-size: 20px;
		line-height: 30px;
		color: #666666;
		display: inline-block;
		
	}
	.tags-products {
		display: inline-block;
	}
	/*Share Face*/
	.face-color {
		color: #FFF;
		font-size: 18px;
	}
	.share-face {
		padding: 0 5px;
		background-color: #2D4376;
		border-radius: 5px; 
	}
	.share-face a {
		padding: 0px 10px;
	}
	.share-face a span {
		color: #FFF;
		font-size: 20px;
		margin-top:0px;
		font-weight: 300;
	}

	/* Share Line */
	.line-color {
		color: #FFF;
		font-size: 18px;
	}
	.share-line {
		padding: 0 5px;
		background-color: #3E8E43;
		border-radius: 5px; 
	}
	.share-line a {
		padding: 0px 10px;
	}
	.share-line a span {
		color: #FFF;
		font-size: 20px;
		margin-top: 0px;
	}

	/* Share Twitter */
	.twitter-color {
		color: #FFF;
		font-size: 18px;
	}
	.share-twitter {
		padding: 0 5px;
		background-color: #3D94B5;
		border-radius: 5px; 
	}
	.share-twitter a {
		padding: 0px 10px;
	}
	.share-twitter a span {
		color: #FFF;
		font-size: 20px;
		margin-top: 0px;
	}

	/* Share mail */
	.mail-color {
		color: #FFF;
		font-size: 18px;
	}
	.share-mail {
		padding: 0 5px;
		background-color: #03877B;
		border-radius: 5px; 
	}
	.share-mail a {
		padding: 0px 10px;
	}
	.share-mail a span {
		color: #FFF;
		font-size: 20px;
		margin-top: 0px;
	}

	/* Share print */
	.print-color {
		color: #FFF;
		font-size: 18px;
	}
	.share-print {
		padding: 0 5px;
		background-color: #D27928;
		border-radius: 5px; 
	}
	.share-print a {
		padding: 0px 10px;
	}
	.share-print a span {
		color: #FFF;
		font-size: 20px;
		margin-top: 0px;
	}
	.category-menu-detail a {
		color: #666666;
	}
	.category-menu-detail a:hover {
		color: #2F23B0;
	}

	img.hr-product {
		
		left: 0;
		width: 70px;
		height: 6px;
		background-image: url(<?=base_url()?>assets/img/line.png);
	}
	.about-product p {
		font-size: 18px;
		color: #666666;
	}
	.about-tools {
		display: flex;
		margin-top: 30px;
	}
	.quotation {
		margin-right: 10px;
	}
	.quotation a {
		padding : 10px 35px;
		background-color: #2F23B0;
		border-radius: 5px;
		color: #FFF;
		font-size: 15px;	
	}
	.compare-product {
		margin-right: 10px;
	}
	.compare-product a {
		padding : 10px 35px;
		background-color: #1B1464;
		border-radius: 5px;
		color: #FFF;
		font-size: 15px;	
	}
	.button-contact {
		padding: 10px 35px;
		display: inline;
		font-size: 15px;
		background-color: #009245 !important;
		border: none;
	}
	.drop-contact a {
		font-size: 15px;
	}
	.drop-contact a:hover {
		background-color: #009245;
		color: #FFF;
	}
	.foot-detail a {
		border-bottom: 2px solid #1d1d1f;
	}
	
	.picture-product .overlay-img-3 {
		position: absolute;
		bottom: 113px;
		background: #4030F0;
		color: #f1f1f1;
		left: 15px;
		right: 15px;
		transition: .5s ease;
		opacity: 0;
		color: white;
		font-size: 20px;
		padding: 5px;
		text-align: center;
	}
	.pro-about h3 {
		font-size: 25px;
	}

	.picture-product:hover .overlay-img-3 {
		opacity: 1;
	}

	.owl-carousel-pro-about {
		margin-top: 30px;
	}
	.compare-product-new h3 {
		margin-top: 20px;
		font-size: 20px;
		font-weight: bold;
	}
	.compare-product-new p {
		font-size: 16px;
		margin-top: -10px;

	}
	.compare-product-new h4 {
		font-size: 20px;
		font-weight: bold;
		color: #000;
	}
	p.compare-detail{
		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical;
		line-height: 20px;
		font-size: 16px;
		padding-top: 15px;
		height: 100px;
		
	}

	.picture-product .overlay-img-4 {
		position: absolute;
		bottom: 336px;
		background: #4030F0;
		color: #f1f1f1;
		left: 15px;
		right: 15px;
		transition: .5s ease;
		opacity: 0;
		color: white;
		font-size: 20px;
		padding: 5px;
		text-align: center;
	}
	.picture-product:hover .overlay-img-4 {
		opacity: 1;
	}

	.ul-share {
		list-style: none;
		display: flex;
		padding-left: 0;
	}
	ul.ul-share li {
		padding-right: 5px;
	}

	.compare-detail-pro {
		display: flex;
		list-style: none;
		margin-top: 20px;
		padding-left: 20px;
	}
	.quotation-compare a {
		padding : 10px 15px;
		background-color: #2F23B0;
		border-radius: 5px;
		color: #FFF;
		font-size: 16px;
		transition: all 0.5s ease;
	}
	.quotation-compare a:hover {
		background-color: #56549B;
		transition: all 0.5s ease;
	}
	.delete-compare a:hover {
		background-color: #424247;
		transition: all 0.5s ease;
	}
	.quotation-compare {
		margin-right: 5px;
	}
	.delete-compare a {
		padding: 10px 20px;
		background-color: #1A1A1A;
		border-radius: 5px;
		color: #FFF;
		font-size: 16px;
		color: #FFF;
		transition: all 0.5s ease;
	}
	.tab-select {
		font-size: 18px;
	}
	.margin-top {
		margin-top: 20px;
	}
	.date-knowledge span:nth-child(1){
		font-size: 14px;

	}
	.date-knowledge span:nth-child(2){
		font-size: 14px;
		color: #2f22b0;

	}
	.border-tab {
		border-left: 1px solid #e5e5e5;
		border-bottom: 1px solid #e5e5e5;
		border-right : 1px solid #e5e5e5;
	}
	.dot-border {
		border-bottom: 1px dotted #e5e5e5;
		padding-top: 10px;
		margin-bottom: 10px;
	}
	ul.ul-knowledge {
		list-style: none;
		display: flex;
		padding: 0;
	}
	ul.ul-knowledge li {
		padding: 0 5px 0 0;
		font-size: 18px;
		color: #000;
	}
	.detail-knowledge p {
		font-size: 23px;
		margin-top: 20px;
		letter-spacing: .5px;
	}
	.img-knowledge img {
		width: 100%;
	}
	.ul-knowledge-share {
		margin-top: 50px;
		margin-bottom: 50px;
	}
	.line-know-about {
		border-bottom: 2px solid #c6c6c6;
		margin-top: 30px;
		margin-bottom: 30px;
	}
	.knowledge-about img {
		width: 100%;
	}
	.knowledge-about h3 {
		margin-top: 20px;
		font-size: 16px;
		font-weight: bold;
		color: #000;
	}
	.knowledge-about p {
		font-size: 16px;
		line-height: 25px;
		overflow: hidden;
		display: -webkit-box;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical;
		text-transform: none;
		white-space: normal;
		text-overflow: ellipsis;
		height: 70px;
	}
	.face-follow {
		padding: 30px 0;
	}
	.knowledge-advice h5 {
		color: #000;
	}
	img.news-detail-img {
		width: 100%;
	}
	img.knowledge-detail-img {
		width: 100%;
	}
	.scrollbar {
		overflow-y: auto;
		max-height: 130px;
	}
	#tags::-webkit-scrollbar {
		width: 4px;
		background-color: #EEE;
	}
	#tags::-webkit-scrollbar-thumb {
		background-color: #524c92;
	}
	h3.detail-head-pro-about {
		color: #000000; 
		font-weight: bold; 
		font-size: 20px;
		
	}
	h3.head-pro-about {
		color: #000000;
		font-weight: bold;
		letter-spacing: .5px;
		font-size: 20px;
	}
	h3.name-pro-about {
		font-size:20px;
		color: #1D1D1E;
		font-weight: bold;
	}
	a.goto-productdetail {
		color: #FFF;
	}
	a.goto-productdetail:hover {
		color: #D6D6D6;
	}
	a.goto-productdetail-2 {
		color: #000;
	}
	a.goto-productdetail-2:hover {
		color: #D6D6D6;
	}
	.detail-product h3 {
		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-line-clamp: 2;
		-webkit-box-orient: vertical;
	}
	.detail-product p {
		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-line-clamp: 2;
		-webkit-box-orient: vertical;
	}
	.table-quotation {

	}
	.breadcrumb-item+.breadcrumb-item::before {
		display: inline-block;
		padding-right: .5rem;
		color: #6c757d;
		content: "/";
	}
	.color-menu { 
		font-size: 24px;
	}
	.breadcrumb {
		background-color: #e9ecef00;
		padding: 0;
	}
	.head-join {
		border-top : 1px solid #EEE;
		border-bottom : 1px solid #EEE; 
		
	}
	.head-join td {
		padding-top: 5px;
		padding-bottom: 0px;
	}
	.quotation-detail-tr-1 {
		/*background-color: #EEE;*/
	}
	.quotation-detail-tr-1 td {
		padding-top: 30px;
		padding-bottom: 30px;
	}
	.quotation-detail-tr-1 h3 {
		font-size: 24px;	
	}
	.img-products-quotation img{
		max-width: 100px;
		width: 100%;
	}
	input.pro-cart {
		background: transparent none repeat scroll 0 0;
		border: 1px solid #e1e1e1;
		border-radius: 5px;
		color: #000;
		height: 33px;
		padding: 0;
		text-align: center;
		width: 94px;
	}
	.quotation-count {
		display: -webkit-inline-box
	}
	.quotation-count h3 {
		padding: 0 5px;
	}
	.menu-quotation button ,.menu-quotation a{
		font-size: 20px;
	}
	.cart-tax {
		padding-top: 20px;
		padding-bottom: 30px;
	}
	.tax-select input {
		background: transparent none repeat scroll 0 0;
		border: 1px solid #ebebeb;
		height: 40px;
		width: 100%;
		font-size: 18px;
		padding: 1px 2px 1px 10px
	}
	.tax-select {
		margin: 0 0 26px;
	}
	.tax-select-wrapper {
		margin: 1px 0 0;
	}
	.tax-select textarea {
		resize: vertical;
		background: #eceff8;
		border: 2px solid #eceff8;
		padding: 10px;
		width: 100%;
		font-size: 20px;
	}
	.copyright {
		background-color: #1B1464;
		padding: 15px 0;
		/*position: relative;*/
		bottom: 0;
		margin-top: 30px;
	}
	.detail-copy {
		color: #FFF;
		text-align: center;
		font-size: 16px;

	}




	@media only screen and (max-width: 415px) {
		

	}



	@media (max-width: 767px) and (min-width: 300px) {
		ol.breadcrumb {
			padding-top: 20px;
		}
		.compare-product-new h3{
			font-size: 16px;
		}
		.category-menu-detail {
			font-size: 16px;
		}
		.menu-pro-detail {
			font-size: 16px;
		}
		.detail-product p{
			font-size: 14px;
		}
		.tags-a-new a {
			font-size: 16px;
		}
		.about-product p {
			font-size: 16px;
		}
		h3.name-pro-about { 
			font-size: 24px;
		}
		h3.head-pro-about  {
			font-size: 24px;
		}
		h3.detail-head-pro-about {
			font-size: 24px;
		}
		.detail-product-pro h3 {
			font-size: 20px;
			font-weight: bold;
			padding-top: 20px;
		}
		.list-color {
			font-size: 15px;
		}
		.color-columns {
			font-size: 15px;
		}
		.color-comment {
			font-size: 15px;
		}
		ul.ul-knowledge {
			display: -webkit-inline-box;
			line-height: 28px;

		}
		ul.ul-knowledge li {
			font-size: 14px;
		}
		.breadcrumb-detail-pro {
			padding-bottom: 0px;
			padding-top: 0px;
		}
		.quotation {
			margin-right: 5px;
		}
		.quotation a {
			padding: 10px 5px;
			font-size: 10px;
		}
		.compare-product {
			margin-right: 5px;
		}
		
		.compare-product a {
			padding: 10px 5px;
			font-size: 10px;
		}
		.button-contact {
			padding: 10px 5px;
			font-size: 12px;
		}
		.picture-product .product-overlay {
			bottom: 50%;
		}
		.category-menu h3 {
			font-size: 24px;
		}
		.detail-product h3 {
			font-size: 16px;
		}
		.compare-detail-pro {
			display: inline-block;
		}
		ul.compare-detail-pro {
			padding: 0;
		}
		.quotation-compare {
			text-align: center;
		}
		.quotation-compare a {
			padding: 10px 10px;

		}
		.delete-compare {
			margin-top: 10px;
			text-align: left;
		}
		.delete-compare a {
			padding: 5px 10px;
		}
		.ul-share {
			display: inline-block;
		}
		ul.ul-share li {
			display: inline-block;
			padding-bottom: 10px;
		}
		.picture-product .overlay-img-3 {
			bottom: 185px;
		}
		.picture-product .overlay-img-4 {
			bottom: 380px;	
		}
		.tags-pro {
			display: inline-block;
		}
		h3.name-knowledge {
			letter-spacing: .5px;
		}
		.detail-knowledge p {
			letter-spacing: .5px;
			line-height: 23px;
		}
		.ul-knowledge-share {
			margin-top: 5px;
			margin-bottom: 5px;
		}
		h3.h3-know-advice {
			font-size: 24px;
		}
	}
	@media (max-width: 992px) and (min-width: 768px) {
		.detail-product-pro h3 {
			font-size: 30px;
			padding-top: 20px;
		}

		.category-menu-detail {
			font-size: 24px;
		}
		.menu-pro-detail {
			font-size: 24px;
		}
		.detail-product p{
			font-size: 23px;
		}
		.tags-a-new a {
			font-size: 24px;
		}
		.about-product p {
			font-size: 24px;
		}
		h3.detail-head-pro-about {
			font-size: 24px;
		}
		h3.head-pro-about {
			font-size: 24px;
		}
		.picture-product .product-overlay {
			bottom: 75px;
		}
		.picture-product .overlay-img-3 {
			bottom: 185px;
		}
		.products-all {
			margin-top: 20px;
		}
		.ul-knowledge-share {
			margin-top: 25px;
			margin-bottom: 25px;
		}
	}
	@media (max-width: 1199px) and (min-width: 993px) {

		.quotation a {
			padding: 10px 25px;
		}
		.compare-product a {
			padding: 10px 25px;
		}
		.button-contact {
			padding: 10px 25px;

		}

		.header-top {
			margin-top: 10px;
		}
		.picture-product .product-overlay {
			bottom: 185px;
		}
		.share-face a , .share-line a , .share-twitter a , .share-mail a , .share-print a  {
			padding: 0px 2px;
		}
		.share-face , .share-line , .share-twitter , .share-mail , .share-print  {
			padding: 0 10;
		}
		.picture-product .overlay-img-3 {
			bottom: 185px;
		}
		.picture-product .overlay-img-4 {
			bottom: 345px;	
		}
		.compare-detail-pro {
			padding: 0;
		}
		.quotation-compare a {
			padding: 10px 5px;
		}
	}
	@media (max-width: 1399px) and (min-width: 1200px) {
		.picture-product .overlay-img-2 {
			bottom: 185px;
		}
		.button-contact {
			vertical-align: 20px;
		}
		.picture-product .overlay-img-3 {
			bottom: 115px;
		}
		.picture-product .overlay-img-4 {
			bottom: 323px;	
		}
		.header-top {
			margin-top: 90px !important;
		}
		.compare-detail-pro {
			padding-left: 0;
		}
		.quotation-compare a {
			padding: 10px 20px;
		}
		.delete-compare a {
			padding: 10px 10px;
		}
		.compare-product-new h3 {
			font-size: 20px;
			
		}
		.compare-product-new p {
			font-size: 16px;
			letter-spacing: .5px;
		}
		.compare-product-new h4 {
			font-size: 24px;
			letter-spacing: .5px;
		}
	}
	@media (min-width: 1400px) {
		.picture-product .product-overlay {
			bottom: 115px; 
		}
		.share-face a , .share-line a , .share-twitter a , .share-mail a , .share-print a  {
			padding: 0px 10px;
		}
		.share-face , .share-line , .share-twitter , .share-mail , .share-print  {
			padding: 0 0;
		}
	}


</style>