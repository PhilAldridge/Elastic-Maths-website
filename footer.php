	<section class="footer">
    	<nav class="navbar navbar-dark align-items-end shadow-sm" style="background-color:#1f4d79;width:100%; text-align:right">
        	<div class="navbar-text text-right w-100" style="padding-right:5px">© Elastic Maths 2021</div>
        </nav>
    </section>
    <button id="topBtn" class="btn btn-primary shadow-sm" onclick="topFunction()" title="Go to top" style="display:none; position:fixed; left:5px; bottom:5px">Top</button>


	
	<script type="text/javascript">
    //Get the button:
    mybutton = document.getElementById("topBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
  </script>
</body></html>
