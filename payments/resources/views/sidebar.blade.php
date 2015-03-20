<!-- sidebar 3 columns -->
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 sidebar">
  <div class="row">
    <ul class="nav nav-pills nav-stacked">
      <li class="active"><a href="/home">Home</a></li>
      <li><a href="/payment/history">History</a></li>
     <!-- <li><a href="/settings">Settings</a></li>-->
    </ul>
  </div>
</div>
<script>
	
	$('.nav').on('click', function (e) {
		console.log($(this));

		//	.addClass('active')
		//	.siblings()
		//	.removeClass('active');

	});

</script>