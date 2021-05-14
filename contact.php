<!DOCTYPE html>
<html >
  
  <?php include 'head_inc.php'; ?>
  
  <body>
    <div class="window-margin">
	<div class="window">

		<aside class="sidebar">
			<div class="top-bar" align="center">
				<img src="image/logo.png">
			</div>

			<div class="search-box">
				<input type="text" placeholder="Ara..."/>
				<p class="fa fa-search"></p>
			</div>

			<?php include 'menu_list.php'; ?>
			
		</aside>


		<div class="main" role="main">

			<?php include 'top_bar.php'; ?>
			
			<div class="featured-movie">
				<img class="cover" src="image/banner_contact.jpg" alt="" class="cover" />
				
				<div class="bottom-bar">
					<div class="title-container">
						
						<b>İletişim</b>
					</div>
				</div> <!-- bottom bar -->
			</div> <!-- featured -->
			<div class="movie-list">
			<div class="title-bar">
					<div class="left">
						<p class="bold">Cinemaxx</p>
						<p class="grey">İletişim</p>
					</div> <!-- left -->
				</div> <!-- title-bar -->
				<form action="post.php" method="POST">
<div class="load-more2">
<p>Burada bizlere soru/görüş/önerilerinizi paylaşabilir yada telif hakkı sahibi olduğunuz içerik için kaldırma talebinde bulunabilirsiniz.</p><br>
<p>Veya,</p><br>
<p>Resmi talep ve görüşme için: <a href="mailto:yasal@cinemaxx.com">yasal@cinemaxx.com</a> ,</p>
<p>Yazılı site bilgisi almak için: <a href="mailto:bilgi@cinemaxx.com">bilgi@cinemaxx.com</a> ,</p>
<p>Detaylı bilgi ve destek için: <a href="mailto:destek@cinemaxx.com">destek@cinemaxx.com</a> ,adresleri yoluyla iletişime geçebilirsiniz.</p><br>
Ad Soyad<br><input style="width:50%; height:25px" type="text" required /><br><br>
E-Mail<br><input style="width:50%; height:25px" type="text" required /><br><br>
Konu<br><input style="width:50%; height:25px" type="text" required /><br><br>
Mesaj<br><textarea style="resize:none" required ></textarea>
</div>
<button class="load-more">Mesajı Gönder</button>
</form>
</div>
	</div> <!-- window -->
</div> <!-- window margin -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
    
  </body>
</html>
