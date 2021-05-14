<div class="top-bar">

				<div class="profile-box">
				<b><a href="login.php" style="color:#fff">Giriş Yap</a></b>
				
				<!--	<div class="circle"></div>
					<span class="arrow fa fa-angle-down"></span> -->
				</div>

				<?php  $pageURL = $_SERVER["REQUEST_URI"]; ?>
				
				<ul class="top-menu">
					<li class="menu-icon trigger-sidebar-toggle">
						<div class="line"></div>
						<div class="line"></div>
						<div class="line"></div>
					</li>
					<li class="<?php if($pageURL=="/cine/index.php") {echo "active";} ?>"><a href="index.php" title="Cinemaxx Dünyasının Anasayfası">Anasayfa</a></li>
					<li class="<?php if($pageURL=="/cine/trailer.php") {echo "active";} ?>"><a href="trailer.php" title="Her Zaman İlk İzleyen Siz Olun">Fragmanlar</a></li>
					<li class="<?php if($pageURL=="/cine/coming.php") {echo "active";} ?>"><a href="coming.php" title="Yeni Çıkacak Filmleri Kaçırmayın">Gelecek Vizyon</a></li>					
					<li class="<?php if($pageURL=="/cine/time.php") {echo "active";} ?>"><a href="time-machine/index.php" title="Eski Film Tutkunları İçin Rastgele Film">Zaman Yolcusu</a></li>			
				</ul>

			</div> <!-- top bar -->
