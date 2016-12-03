	<!-- Footer -->
	<footer class="footer">

			<!-- Footer Container -->
      <div class="container">

				<!-- Footer Container: Content -->
        <p>Development and design by <a href="http://themeforest.net/user/LycheeDesigns">Kasper</a> and <a href="http://themeforest.net/user/LycheeDesigns">Janika</a>.</p>
        <p>Copyrighted <a href="http://themeforest.net/user/LycheeDesigns">Lychee Designs</a> 2013. All rights resserved.</p>

        <p><a href="http://fortawesome.github.io/Font-Awesome/">Fontawesome</a> licensed under <a href="http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL">SIL OFL </a>.</p>

        <ul>
          <li><a href="http://themeforest.net/user/LycheeDesigns">Buy Theme</a></li>
          <li class="muted">·</li>
          <li><a href="http://themeforest.net/user/LycheeDesigns">Lychee</a></li>
          <li class="muted">·</li>
          <li><a href="https://twitter.com/lycheedesigns">Twitter</a></li>
        </ul>
        <!-- / Footer Container: Content -->

      </div>
      <!-- / Footer Container -->

	</footer>
	<!-- / Footer -->

</body>

	<!-- Javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src='<?php echo base_url; ?>public/assets/js/jquery.hotkeys.js'></script>
	<script src='<?php echo base_url; ?>public/assets/js/calendar/fullcalendar.min.js'></script>
	<script src="<?php echo base_url; ?>public/assets/js/jquery-ui-1.10.2.custom.min.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/jquery.pajinate.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/jquery.prism.min.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/charts/jquery.flot.time.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/charts/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/charts/jquery.flot.resize.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/bootstrap/bootstrap-wysiwyg.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/bootstrap/bootstrap-typeahead.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/jquery.easing.min.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/jquery.chosen.min.js"></script>
	<script src="<?php echo base_url; ?>public/assets/js/avocado-custom.js"></script>
  <script src="<?php echo base_url; ?>public/assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script>
<script src="<?php echo base_url; ?>public/assets/js/bkb-counter.js"></script>
	<script>
$(document).ready(function()
{

	var options = { 
    beforeSend: function() 
    {
    	$("#progress").show();
    	//clear everything
    	$("#bar").width('0%');
    	$("#message").html("");
		$("#percent").html("0%");
    },
    uploadProgress: function(event, position, total, percentComplete) 
    {
    	$("#bar").width(percentComplete+'%');
    	$("#percent").html(percentComplete+'%');

    
    },
    success: function() 
    {
        $("#bar").width('100%');
    	$("#percent").html('100%');

    },
	complete: function(response) 
	{
		$("#message").html("<font color='green'>"+response.responseText+"</font>");
	},
	error: function()
	{
		$("#message").html("<font color='red'> ERROR: unable to upload files</font>");

	}
     
}; 

     $("#myForm").ajaxForm(options);

});


$(document).ready(function(){
  $(document).ajaxStart(function(){
    $("#wait").css("display","block");
  });
  $(document).ajaxComplete(function(){
    $("#wait").css("display","none");
  });
});

  $(function() {
    $('#datetimepicker1').datetimepicker({
      language: 'pt-BR'
    });

        $('#datetimepicker2').datetimepicker({
      language: 'pt-BR'
    });
  });

    $(function () { 
// set the date we're counting down to
// update the tag with id "countdown" every 1 second
setInterval(function () {

  var tenderid=$("#tenderid").val();
$("#pointtable").load("calculatepoint.php?tid="+tenderid);

}, 3000);
});
</script>
<div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;"><img src='images/demo_wait.gif' width="64" height="64" /><br>Loading..</div>
</html>