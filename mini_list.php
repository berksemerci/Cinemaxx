<p class="bold">
<?php 
if($_GET['mid']==1){echo "En Yeniler";} 
elseif($_GET['mid']==2) {echo "Çok İzlenilenler";}
elseif($_GET['mid']==3) {echo "Yüksek Puanlılar";}
elseif($_GET['mid']==4) {echo "Cinemaxx";}

?>
</p>
<p class="grey">
<?php if($_GET['id']==1){echo "Aksiyon / Macera";} 
elseif($_GET['id']==2) {echo "Animasyon";}
elseif($_GET['id']==3) {echo "Bilim Kurgu";}
elseif($_GET['id']==4) {echo "Drama";}
elseif($_GET['id']==5) {echo "Komedi";}
elseif($_GET['id']==6) {echo "Korku / Gerilim";}
elseif($_GET['id']==7) {echo "Romatik";}
elseif($_GET['id']==8) {echo "Son Eklenenler";}
elseif($_GET['id']==9) {echo "Çok İzlenenler";}
elseif($_GET['id']==10) {echo "Tavsiye Edilenler";}
elseif($_GET['id']==11) {echo "IMDB Top 250";}
?>						
</p>