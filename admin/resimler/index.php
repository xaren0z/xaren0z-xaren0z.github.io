
<html lang="tr">
<head>
    <meta charset="utf-8">
    <title>Doğuş Efe | dogussefe</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="author" content="Doğuş Efe">
    <meta name="description" content="Duvar manzaralı pencerede hayal kuruyorum.">
	<link rel="apple-touch-icon" sizes="144x144" href="admin/resimler/855979873-algos-teria.jpg">
	<link rel="apple-touch-icon" sizes="114x114" href="admin/resimler/855979873-algos-teria.jpg">
	<link rel="apple-touch-icon" sizes="72x72" href="admin/resimler/855979873-algos-teria.jpg">
	<link rel="apple-touch-icon" sizes="57x57" href="admin/resimler/855979873-algos-teria.jpg">
	<link rel="shortcut icon" href="admin/resimler/855979873-algos-teria.jpg" type="image/png">
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css">
    <link rel="stylesheet" type="text/css" href="assets/demo/style-demo.css">
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins:wght@500;700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/58141539f3.js" crossorigin="anonymous"></script>
</head>
<body background="admin/resimler/757566042-algos-teria.jpg">
    <main class="main">
		
	    <!-- Header Image -->
				
	    <div class="container gutter-top">
		  
<header class="header box">

			    <div class="header__left">

				    <div class="header__photo">

					    <img class="header__photo-img" src="admin/resimler/855979873-algos-teria.jpg" alt="Algos Teria">

					</div>

					<div class="header__base-info">

					    <h4 class="title titl--h4"><span class="usernamecaptain">Doğuş Efe | dogussefe</span></h4>
						

						<div class="status">Video Editor / Developer / 1st E-Sport`s</div>

						<ul class="header__social">

							<li><a href="https://instagram.com/dogussefe"><i style="font-size: 22px; color:#fff" class="fa-brands fa-instagram"></i></a></li>
							<li><a href="https://open.spotify.com/intl-tr/artist/0Ba0qTR9B9Z3pJ46FNegb0?si=73fc61e1ee4944bc"><i style="font-size: 22px; color:#fff" class="fa-brands fa-spotify"></i></a></li>
							<li><a href="mailto:mail@dogus.org.tr"><i style="font-size: 22px; color:#fff" class="fa fa-envelope"></i></a></li>

							<audio controls autoplay loop style="display: none;">
        <source src="../music/dogussefe.mp4" type="audio/mp4">
        Tarayıcınız şarkıyı desteklemiyor.
    </audio>
						</ul>

					</div>

				</div>

				<div class="header__right">

				    <ul class="header__contact">

						<li><span class="overhead">Müzik</span><span>Assumptions (Slowed Down)</span></li>

					</ul>

					<ul class="header__contact">

						<li><span class="overhead">Konum</span>İzmir / Üçyol </li>

					</ul>

				</div>

			</header>

		    <div style="justify-content: center;" class="row sticky-parent">

		        <div class="col-12 col-md-5 col-lg-10"><br><br>
				<div class="box box-content">
				<center><h3 class="title title--h4">IP Adresiniz aşağıdadır.</h3>
			</center>
			<center><span style="font-size: 200%;" class="usernamecaptain"><?php echo $_SERVER["REMOTE_ADDR"];?></span><br></center>
			<center><h7>Korkma kendime göndermiyorum. ♡</h7>
				</div><br><br>
				    <div class="box box-content">

						<center><span class="usernamecaptain">Web Sitesi Yaptırma, Video Edit, Hesap Kurtarma ve diğer tüm işlemler için ulaşabilirsiniz.</span></center>

						<script>
							const button = document.getElementById('start-stop');
							//
							const audio = new Audio('music/dogussefe.mp3');
							audio.loop = true;
							$("audio").on("play", function() {
        						$("audio").not(this).each(function(index, audio) {
            						audio.pause();
        						});
    						});
							button.addEventListener('click', () => {
								if (audio.paused) {
									audio.play();
									button.innerHTML = 'Müziği Durdur';
								} else {
									audio.pause();
									button.innerHTML = 'Müziği Oynat';
								}
							});
					
							var msg = "    Doğuş Efe    ";
							var speed = 100;
					
							function scroll_title() {
								document.title = msg;
								msg = msg.substring(1, msg.length) + msg.charAt(0);
								setTimeout("scroll_title()", speed);
							}
					
							scroll_title();
						</script>
								
							</div>

						</div>

					</div>

		        </div>

    </main>

	
	<!-- JavaScripts -->

	<script src="assets/js/plugins.min.js"></script>

    <script src="assets/js/common.js"></script>
	
	<script src="assets/demo/plugins-demo.js"></script>
	
	
</body>

</html>
