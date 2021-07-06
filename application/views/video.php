<video id="videoElementID" width="320" height="240" controls>
  <source oncontextmenu="return false;" src="<?=base_url()?>Compare/indexnew" type="video/mp4">
 
</video>

 <script>  
 $(function() {  
     $(this).bind("contextmenu", function(e) {  
       e.preventDefault();  
     });  
   });  
 </script>  