<?php
/*
Template Name: Our Systems - Page
Template Post Type: page
*/
get_header(); ?>

<style>
	.video-content.content { height: 104vh; }
	.video-content:before { display: none; }
</style>

<div class="start-content">
	<figure>
		<img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/pages/system/system.jpg">
	</figure>
	<div class="start-caption">
		<div class="caption fadeup">
			<div class="info">
				<span>
					<div class="split-text">
						Güneş Enerjisi Sistemleri Nasıl Çalışır?
					</div>
				</span>
				
			</div>
		</div>
	</div>
</div>

<div class="head-item type-4 fadeup">
	
	<span>
		GES, güneşten gelen enerjiyi kullanarak elektrik üreten santrallerdir. 
	
	</span>
</div>

<section class="fadeup" id="start">
	<div class="card">
		<div class="caption">
			<p>
			Güneş enerjisi sistemleri, güneş ışığını elektriğe dönüştüren teknolojik sistemlerdir. Bu sistemler genellikle güneş panelleri, invertörler ve batarya depolama birimlerini içerir. Güneş panelleri, güneşten gelen ışığı fotovoltaik hücreler aracılığıyla yakalar ve elektrik enerjisine dönüştürür. Bu elektrik akımı, invertörler aracılığıyla doğru akımdan alternatif akıma dönüştürülerek evler veya işyerleri için kullanılabilir hale getirilir. Aynı zamanda, güneş enerjisi sistemi genellikle batarya depolama birimleriyle birleştirilir, böylece güneş ışığının olmadığı zamanlarda bile elektrik enerjisi sağlanabilir. Sonuç olarak, güneş enerjisi sistemleri temiz, yenilenebilir ve sürdürülebilir bir elektrik kaynağı sağlar, çevreyi korurken enerji ihtiyaçlarını karşılar.

				
			</p>
			<div class="info pl">
				<!--<p>
					Doğaya hiçbir şekilde zarar vermemesinden, çevreyi kirletmemesinden, gürültüsüz, yenilenebilir ve sürdürülebilir enerji olmasından dolayı güneş enerjisi geleceğin en önemli enerji yatırım sistemleri arasındadır.
				</p>-->
			</div>
		</div>
		<div class="image radius">
			<figure class="image-parallax">
				<img data-speed=".5" src="/wp-content/uploads/2023/08/sistemlerimiz.jpg">
			</figure>
		</div>
	</div>
</section>

<div class="head-item fadeup">
	
</div>

<!--
<div class="systems-content">
	<div class="container">
		<div class="head fadeup">
			<figure>
				<img src="<?php echo get_stylesheet_directory_uri()?>/assets/images/pages/system/solino-fotovoltaik.jpg">
			</figure>
		</div>
	</div>
</div>
-->

<section class="video-item-content container">
	<video playsinline autoplay loop muted poster="<?php echo get_stylesheet_directory_uri()?>/assets/images/pages/system/solino-fotovoltaik.jpg">
		<source src="<?php echo get_stylesheet_directory_uri()?>/assets/video/fotovoltaik.mp4" type="video/mp4">
	</video>
</section>

<section id="section1" class="section systems-feed container">
	<span>
On Grid Sistemler 
	</span>
	<p>
Şebekeye bağlı olarak çalışan, güneş varken üretilen elektrik enerjisinin üretildiği anda tüketilmesi ve üretim yeterli olmadığı zamanlarda şebekeden beslenen sistemlerdir. 
	</p>
	<div class="info">
		<div class="list yellow">
			<ol>
				<li>Şebekeye bağlanır.  </li>
				<li>Tüketimden fazla üretim olursa şebekeye satma fırsatı vardır.</li>
				<li>Üretim olmadığında veya azaldığında şebekeden beslenir.  </li>
				<li>Projelendirme ve izin süreci 3-4 ay sürebilir.  </li>
			<!--	<li>Sistemde fazla üretilen elektriği 
					satabilir, Smart Meter kullanılarak şebekeye enerji vermeden kullanılabilir.<br>
					( Geçici süreli )
				</li>-->
			</ol>
		</div>

		<div class="image">
			<figure>
				<img src="/wp-content/uploads/2023/09/Grid.png">
			</figure>
		</div>
	</div>

</section>

<section id="section2" class="section systems-feed container">
	<span>Hibrit Grid Sistemler 
		</span>
	<p>
On Grid sistemlerin çalışma mantığı ile aynıdır. Tek fark Hibrit Grid Sistem için kullanılan çeviriciye daha sonradan ihtiyaç olması durumunda batarya eklenebilir. 
	</p>
	<div class="info">
		<div class="list yellow">
			<ol>
				<li>Şebekeye bağlanır.  </li>
				<li>Tüketimden fazla üretim olursa şebekeye satma fırsatı vardır. </li>
				<li>Üretim olmadığında veya azaldığında şebekeden beslenir.  </li>
				<li>
					Projelendirme ve izin süreci 3-4 ay sürebilir. 
				</li>
			</ol>
		</div>
		<div class="image">
			<figure>
				<img src="/wp-content/uploads/2023/09/Hybrid_pil_haric.png">
			</figure>
		</div>
	</div>
</section>

<section id="section3" class="section systems-feed container">
	<span>Hibrit Grid Sistemler 
		Batarya Dahil</span>
	<p>
İlave olarak sisteme batarya eklenir. Gün içinde tüketilmeyen enerji bataryaya depolanır ve tüketimin fazla olduğu akşam saatlerinde şebekeden enerji almak yerine bataryaya depolanan enerji tüketilir. 
	</p>
	<div class="info">
		<div class="list yellow">
			<ol>
				<li>Şebekeye bağlanır.  </li>
				<li>Tüketimden fazla üretim olursa şebekeye satma veya bataryaya depolama imkanı vardır. </li>
				<li>Üretim olmadığında veya azaldığında önce bataryadan sonra gerekirse şebekeden beslenir.  </li>
				<li>Projelendirme ve izin süreci 3-4 ay sürebilir.  </li>

			</ol>
		</div>
		<div class="image">
			<figure>
				<img src="/wp-content/uploads/2023/09/Hybrid_batarya_dahil.png">
			</figure>
		</div>
	</div>
</section>

<section id="section4" class="section systems-feed container">
	<span>Off Grid Sistemler </span>
	<p>
Daha çok şebekeye erişim olmayan yerlerde tercih edilir. Şebeke olan yerlerde de kurulabilir. Ancak şebekeye enerji satışı veya iletimi olmaz.  
	</p>
	<div class="info">
		<div class="list yellow">
			<ol>
				<li>Şebekeye ihtiyaç yoktur.  </li>
				<li>Şebekeye enerji vermez. </li>
				<li>Ancak şebeke bağlantı imkanı var ise enerji alabilir. </li>
				<li>Tüketimden fazla üretim olursa bataryaya depolama imkanı vardır.</li>
				<li>Üretim olmadığında veya azaldığında önce bataryadan sonra gerekirse şebekeden beslenebilir.  </li>
				<li>Projeye gerek yoktur.</li>
				<li>Evrak izin süreçleri yoktur. </li>
				<li>Tak Çalıştır sistem olarak kullanılır. </li>


			  
			</ol>
		</div>
		<div class="image">
			<figure>
				<img src="/wp-content/uploads/2023/09/Off_grid-1.png">
			</figure>
		</div>
	</div>
</section>

<section class="container">
	<figure>
		<img src="/wp-content/uploads/2023/09/Toplu-1.png">
	</figure>
</section>

<div class="head-item fadeup">
	
	<div class="head-caption">
		<div class="caption">
			<h6>
				Güneş enerjisi sistemi kurulum süreci nasıl işler?
			</h6>
			<div class="item">
				<span>
					Çatınıza güneş enerjisi sistemini 
					5 aşamada kuruyoruz.
				</span>
			</div>
		</div>
	</div>
</div>

<section class="sticky-menu-hide">
	<ul class="setup-steps">
		<li class="fadeup">
			<span>1.</span>
			<p>
				<strong> Keşif aşamasında;</strong> evinizin ne kadar güneş enerjisinden elektrik üreteceğine, evinizdeki elektrik tüketim miktarına ve çatınızın teknik uygunluğuna bakılır.
			</p>
		</li>
		<li class="fadeup">
			<span>2.</span>
			<p>
				<strong>Tekliflendirme aşamasında</strong>; Çatınızın konumu ve metrekaresine,  
tüketiminize  ve ihtiyacınıza göre size özel hazırlanan donanım 
paketi, projelendirme ve kurulumu kapsayan anahtar teslim 
teklif oluşturulur. 

		</li>
		<li class="fadeup">
			<span>3.</span>
			<p>
				<strong>İzinler ve idari süreçler</strong>; Eğer şebekeye fazla üretilen elektriği satmak isteyen bir kullanıcı iseniz , 
Bu satışın gerçekleşmesi için gereken izin,evrak ve idari süreçleri Solino sizin adınıza 
takip eder. 
 


			</p>
		</li>
		<li class="fadeup">
			<span>4.</span>
			<p>
				<strong>Kurulum</strong>; güneş paneli, inverter, konstrüksiyon ve sistemde kullanılacak her bir ekipman proje özelinde tedarik edilerek kurulum yapılır. Çatıya özgü mühendislik detayları alanında uzman mühendislerimiz tarafından analiz edilir. Sistemin kurulumu uygun bir şekilde en iyi mühendislik çözümüyle tamamlanır.
			</p>
		</li>
		<li class="fadeup">
			<span>5.</span>
			<p>
				<strong>Teknik Servis </strong>:Evinizde kurulu sistemimizin 1 yıl boyunca bakımı alanında 
uzman mühendislerimizden oluşan Solino Teknik  Servis ekiplerimizce 
yapılmaktadır. 
1 yılın sonrasında Bakım&Servis anlaşmamız kapsamında yılda 2 kez 
sistemleriniz kontrol edilmektedir. 





			</p>
		</li>
	</ul>
</section>


<?php get_template_part('partials/form'); ?>

<?php get_footer(); ?>
