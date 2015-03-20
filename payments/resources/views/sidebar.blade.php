<!-- sidebar 3 columns -->
<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 sidebar">
  <div class="row">
    <ul class="nav nav-pills nav-stacked">
      <li id="home" class="active"><a href="/home">Home</a></li>
      <li id="history"><a href="/payment/history">History</a></li>
     <!-- <li><a href="/settings">Settings</a></li>-->
    </ul>
  </div>
</div>
<script>
	if (location.pathname === '/payment/history') {
		$('#history')
			.addClass('active')
			.siblings()
			.removeClass('active');
	}
	
	if (location.pathname === '/home') {
		$('#home')
			.addClass('active')
			.siblings()
			.removeClass('active');
	}
</script>