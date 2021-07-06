<style type="text/css">
  .breadcrumb {
    background-color:white;
    font-size:24px;
    padding: .75rem 0rem;
  }
  .btn-search{
    background-color:#312C82;
    border-radius:0px;
    padding:11px 20px;
    border:none;
    color:white;
  }
  .search-product .form-inline{
   float:right;
 }
 .search-product .form-control{
  border-radius:0px;
  width:270px;
}
.search-product .form-group{
  margin-bottom: 0rem;
}

.all-product .nav-link{
  border-bottom: dotted 2px #d7d7d7;
  padding: .5rem 0rem;
  font-size:16px;
  color:#4D4D4D;
}
.all-product .icon-cate{
  font-size:13px;
  padding-right:5px;
}
.products-all img{
  display: block;
  width: 100%;
  height: auto;
}

.picture-product .overlay-img-2 {
  position: absolute; 
  bottom: 80px; 
  /*background: rgb(0, 0, 0);*/
  /*background: rgba(0, 0, 0, 0.5); */ /* Black see-through */
  background : #4030F0;
  color: #f1f1f1; 
  left: 15px;
  right:15px;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 10px;
  text-align: center;
}
.picture-product:hover .overlay-img-2 {
  opacity: 1;
}



@media (max-width: 414px){
  .products-all{
    order: 1;
  }
  .search-product .form-inline{
   float:left;
 }
 .breadcrumb{
  margin-bottom:0rem;
}

}

</style>