<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="/css/stle-custom.css" rel="stylesheet">

<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main"> 
	<div class="container-fluid">
	<!--<nav class="navbar navbar-horizontal navbar-expand-lg navbar-dark bg-default">-->
	  <div class="media align-items-center-home">
		<a href="/Home/logout"><i class="fa fa-sign-out fa-flip-horizontal" style="font-size:26px ; color:white"></i></a>
	  </div>
	  <div class="media align-items-center">
	    <a href="/Account/infoAccount/<?= esc(session()->get('ruolo')) ?>"><div class="media-body ml-2 d-none d-lg-block">
			<span class="mb-0 text-sm font-weight-bold">Il Mio Account</span>
        </div></a>
      </div>
    </div>
</nav>
