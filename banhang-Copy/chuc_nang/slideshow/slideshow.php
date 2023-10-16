<!-- <style type="text/css" >
	div.slideshow img {width:100%;height:260px}
</style> -->
<div class="slideshow col l-12" id="slideshow" >
	<?php 
		$tv="select hinh,lien_ket from slideshow order by id";
		$tv_1=mysqli_query($connect,$tv);
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$link_hinh="hinh_anh/slideshow/".$tv_2['hinh'];
			echo "<a href='".$tv_2['lien_ket']."'>";
				echo "<img src='".$link_hinh."'>";
			echo "</a>";
		}
	?>
</div>
<script type="text/javascript" >

	var i_img=0;
	var div_slideshow=document.getElementById("slideshow");
	var img_slideshow=div_slideshow.getElementsByTagName("img");
	for(var i=0;i<img_slideshow.length;i++)
	{
		img_slideshow[i].style.display="none";
	}
	img_slideshow[0].style.display="block";
	
	setInterval(function(){
		img_slideshow[i_img].style.display="none";
		i_img=i_img+1;
		if(i_img>=img_slideshow.length){i_img=0;}
		img_slideshow[i_img].style.display="block";		
	},5000);
</script>