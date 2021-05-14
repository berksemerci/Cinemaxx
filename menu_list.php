<menu class="menu">
				<p class="menu-name">Film Türleri</p>
				<ul>
					<li class="<?php if($_GET['id']==1){echo "active";} ?>">
						<a href="pages.php?id=1&mid=1">Aksiyon / Macera</a>
						<ul>
							<li class="<?php if($_GET['mid']==1){echo "active";} ?>"><a href="pages.php?id=1&mid=1">En Yeniler</a></li>
							<li class="<?php if($_GET['mid']==2){echo "active";} ?>"><a href="pages.php?id=1&mid=2">Çok İzlenilenler</a></li>
							<li class="<?php if($_GET['mid']==3){echo "active";} ?>"><a href="pages.php?id=1&mid=3">Yüksek Puanlılar</a></li>
						</ul>
					</li>
					<li class="<?php if($_GET['id']==2){echo "active";} ?>"><a href="pages.php?id=2&mid=1">Animasyon</a>
					<ul>
							<li class="<?php if($_GET['mid']==1){echo "active";} ?>"><a href="pages.php?id=2&mid=1">En Yeniler</a></li>
							<li class="<?php if($_GET['mid']==2){echo "active";} ?>"><a href="pages.php?id=2&mid=2">Çok İzlenilenler</a></li>
							<li class="<?php if($_GET['mid']==3){echo "active";} ?>"><a href="pages.php?id=2&mid=3">Yüksek Puanlılar</a></li>
						</ul>
					</li>
					<li class="<?php if($_GET['id']==3){echo "active";} ?>"><a href="pages.php?id=3&mid=1">Bilim Kurgu</a>
					<ul>
							<li class="<?php if($_GET['mid']==1){echo "active";} ?>"><a href="pages.php?id=3&mid=1">En Yeniler</a></li>
							<li class="<?php if($_GET['mid']==2){echo "active";} ?>"><a href="pages.php?id=3&mid=2">Çok İzlenilenler</a></li>
							<li class="<?php if($_GET['mid']==3){echo "active";} ?>"><a href="pages.php?id=3&mid=3">Yüksek Puanlılar</a></li>
						</ul>
					</li>
					<li class="<?php if($_GET['id']==4){echo "active";} ?>"><a href="pages.php?id=4&mid=1">Drama</a>
					<ul>
							<li class="<?php if($_GET['mid']==1){echo "active";} ?>"><a href="pages.php?id=4&mid=1">En Yeniler</a></li>
							<li class="<?php if($_GET['mid']==2){echo "active";} ?>"><a href="pages.php?id=4&mid=2">Çok İzlenilenler</a></li>
							<li class="<?php if($_GET['mid']==3){echo "active";} ?>"><a href="pages.php?id=4&mid=3">Yüksek Puanlılar</a></li>
						</ul>
					</li>
					<li class="<?php if($_GET['id']==5){echo "active";} ?>"><a href="pages.php?id=5&mid=1">Komedi</a>
					<ul>
							<li class="<?php if($_GET['mid']==1){echo "active";} ?>"><a href="pages.php?id=5&mid=1">En Yeniler</a></li>
							<li class="<?php if($_GET['mid']==2){echo "active";} ?>"><a href="pages.php?id=5&mid=2">Çok İzlenilenler</a></li>
							<li class="<?php if($_GET['mid']==3){echo "active";} ?>"><a href="pages.php?id=5&mid=3">Yüksek Puanlılar</a></li>
						</ul>
					</li>
					<li class="<?php if($_GET['id']==6){echo "active";} ?>"><a href="pages.php?id=6&mid=1">Korku / Gerilim</a>
					<ul>
							<li class="<?php if($_GET['mid']==1){echo "active";} ?>"><a href="pages.php?id=6&mid=1">En Yeniler</a></li>
							<li class="<?php if($_GET['mid']==2){echo "active";} ?>"><a href="pages.php?id=6&mid=2">Çok İzlenilenler</a></li>
							<li class="<?php if($_GET['mid']==3){echo "active";} ?>"><a href="pages.php?id=6&mid=3">Yüksek Puanlılar</a></li>
						</ul>
					</li>					
					<li class="<?php if($_GET['id']==7){echo "active";} ?>"><a href="pages.php?id=7&mid=1">Romatik</a>
					<ul>
							<li class="<?php if($_GET['mid']==1){echo "active";} ?>"><a href="pages.php?id=7&mid=1">En Yeniler</a></li>
							<li class="<?php if($_GET['mid']==2){echo "active";} ?>"><a href="pages.php?id=7&mid=2">Çok İzlenilenler</a></li>
							<li class="<?php if($_GET['mid']==3){echo "active";} ?>"><a href="pages.php?id=7&mid=3">Yüksek Puanlılar</a></li>
						</ul>
					</li>
				</ul>

				<div class="separator"></div>

				<ul class="no-bullets">
					<li><a href="pages.php?id=8&mid=4">Son Eklenenler</a></li>
					<li><a href="pages.php?id=9&mid=4">Çok İzlenenler</a></li>
					<li><a href="pages.php?id=10&mid=4">Tavsiye Edilenler</a></li>
					<li><a href="pages.php?id=11&mid=4">IMDB Top 250</a></li>
				</ul>

				<div class="separator"></div>
				
				<ul class="no-bullets">
					<li><a href="about.php">Hakkımızda</a></li>
					<li><a href="contact.php">İletişim</a></li>
					<li><a href="sss.php">SSS / Yardım</a></li>
					<li><a href="legal.php">Yasal Bildiri</a></li>
				</ul>
				<div class="separator"></div>
				
				<ul class="no-bullets">
					<li><table style="margin-left:25%" align="center" width="50%"><tr>
					<td><a href=""><img src="image/facebook.png"></a></td>
					<td><a href=""><img src="image/twitter.png"></a></td>
					<td><a href=""><img src="image/google.png"></a></td>
					<td><a href=""><img src="image/youtube.png"></a></td>
					</tr>
					<tr><td colspan="4"><br><a href="" style="font-size: 13px"><img src="image/paypal.png">&nbsp;ile Bağış Yapın</a></td></tr></table></li>	
					<tr><td colspan="4"><br><p style="font-size: 13px; text-align:center">Cinemaxx ©2015</p></td></tr></table></li>					
				</ul>				
				
				<div class="separator"></div>
			</menu>