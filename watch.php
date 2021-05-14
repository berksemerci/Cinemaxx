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
				<img class="cover" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/22043/backdrop_ggwxvq_1.jpg" alt="" class="cover" />
				<p class="corner-title"><?php echo $_GET['imdb']; ?></p>

				<div class="bottom-bar">
					<div class="title-container">
						<span class="fa fa-play-circle"></span>
						<b><?php echo $_GET['title']; ?></b>
					</div>

					<div class="right">
						<div class="stars">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star-o"></span>
						</div>
					</div> <!-- right -->
				</div> <!-- bottom bar -->
			</div> <!-- featured -->


			<div class="movie-list">

<figure id="video_player">
  <div id="video_container">
  <video controls poster="http://demosthenes.info/assets/images/vid-glacier.jpg">
    <source src="http://demosthenes.info/assets/videos/glacier.mp4" type="video/mp4">
    <source src="http://demosthenes.info/assets/videos/glacier.webm" type="video/webm">
</video>
</div>
<figcaption>
  <a href="http://demosthenes.info/assets/videos/glacier.mp4" class="currentvid">
    <img src="http://demosthenes.info/assets/images/vid-glacier.jpg" alt="Athabasca Glacier">
  </a>
  <a href="http://demosthenes.info/assets/videos/lake.mp4">
    <img src="http://demosthenes.info/assets/images/vid-lake.jpg" alt="Athabasca Lake">
  </a>
  <a href="http://demosthenes.info/assets/videos/mountain.mp4">
    <img src="http://demosthenes.info/assets/images/vid-mountain.jpg" alt="Mountain">
  </a>
</figcaption>
</figure>

<div class="load-more3"><p>Yorumlar</p></div>
<div class="load-more3"><p>Kullanıcı Adı</p><br><p>yazdığı yazı</p></div>
				

<form action="post.php" method="POST">
<div class="load-more3">
Yorum Yaz<br><textarea name="mesaj" style="resize:none" required></textarea>
<input type="checkbox" name="spoiler" value="spoiler" >Bu yorum spoiler içerir.</input> <!-- checked -->
</div>
<button class="load-more">Yorum Gönder</button>
</form>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
			</div> <!-- movie list -->


		</div> <!-- main -->

	</div> <!-- window -->
</div> <!-- window margin -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
  </body>
</html>
