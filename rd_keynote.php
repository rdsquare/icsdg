<!DOCTYPE html>
<html>
<?php include 'rd_header.php' ?>
<body class="w3-theme-l5"> <font size="3">
<?php include 'rd_topbar.php' ?>
<?php include 'rd_navbar.php' ?>


<!-- Starting of previous conference details -->

<!-- Page Container -->
<div class="w3-container w3-center" style="max-width:100%;margin-top:20px">    

          <div class="w3-card w3-round w3-white">
<h2 style="padding-top: 10px; padding-bottom: 10px; background: rgba(0,0,0,0.8); color: white"><u>Keynote Speakers</u></h2>

<div class="w3-justify">
<button class="collapsible">KN-1: Updated Soon...  (Click Here for More...)</button>
			<div class="content">
				<p>
				Information about keynote speakers will be updated soon...
				</p>
		 		 <br/><p><a href="#" target="_blank">Click here for profile</a></p> 
			</div>
			<br/>


			
			<script>
				var coll = document.getElementsByClassName("collapsible");
				var i;
				
				for (i = 0; i < coll.length; i++) {
				  coll[i].addEventListener("click", function() {
				    this.classList.toggle("c_active");
				    var content = this.nextElementSibling;
				    if (content.style.display === "block") {
				      content.style.display = "none";
				    } else {
				      content.style.display = "block";
				    }
				  });
				}
			</script>		

	</div>
 </div>
</div>

<!-- Ending of previous conference details -->


<?php include 'rd_footer.php' ?>
</font>
</body>
</html>
