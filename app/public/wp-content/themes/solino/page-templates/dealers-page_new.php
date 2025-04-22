<?php
/*
Template Name: Dealers (NEW)
Template Post Type: page
*/
get_header(); ?>


<section class="contact-content grey" id="contact-form">
	<div class="head-item fadeup">
		
	</div>
	<div class="content">
		<div class="caption">
			<h6>
				Enerji Dönüşüm Merkezlerimiz arasında yerinizi alın, geleceğe yatırım yapın!
			 </h6>
		</div>
		<div class="form dealersForm">
			
			<div id="deaForm" class="persFormC2">			
			
				<p>
					İletişim formumuzu doldurun en kısa zamanda size ulaşalım.
				</p>

				<form class="row" id="dealersFormNew">
					<div class="col-12">
						<div class="checkbox-radio">
							<input id="Radio1" name="Radios" type="radio" value="Bayi Formu" checked="checked">
							<label class="first" for="Radio1">
								<i>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.0007 15.1709L19.1931 5.97852L20.6073 7.39273L10.0007 17.9993L3.63672 11.6354L5.05093 10.2212L10.0007 15.1709Z"></path></svg>
								</i>
								Bayi 
							</label>
							<input id="Radio2" name="Radios" type="radio" value="Teknik Çözüm Ortağı">
							<label for="Radio2">
								<i>
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10.0007 15.1709L19.1931 5.97852L20.6073 7.39273L10.0007 17.9993L3.63672 11.6354L5.05093 10.2212L10.0007 15.1709Z"></path></svg>
								</i>
								Teknik Çözüm Ortağı
							</label>
						</div>					
					</div>

					<div class="col-6 item errItem">
						<input type="text" name="fName" id="fName" placeholder="İsim Soyad*" required />
					</div>
					<div class="col-6 item errItem">
						<input type="tel" name="fPhone" id="fPhone" placeholder="Telefon*" class="pMaskN" required />
					</div>
					<div class="col-6 item errItem">
						<div class="selectbox">
							<select class="selectric-select " id="fCity" autocomplete="off" name="fCity" required>
								<option value="">İl*</option>
							</select>
						</div>
					</div>
					<div class="col-6 item errItem">
						<div class="selectbox">
							<select class="selectric-select " id="fDistrict" autocomplete="off" name="fDistrict" required>
								<option value="">İlçe*</option>
							</select>
						</div>
					</div>
					<div class="col-6 item errItem">
						<div class="selectbox">
							<select class="selectric-select " id="fSector" autocomplete="off" name="fSector" required>
								<option value="">Lütfen sektör seçiniz*</option>
								<option value="Gıda ve İçecek">Gıda ve İçecek</option>
								<option value="Tekstil ve Konfeksiyon">Tekstil ve Konfeksiyon</option>
								<option value="Otomotiv">Otomotiv</option>
								<option value="İnşaat ve Emlak">İnşaat ve Emlak</option>
								<option value="Bilgi Teknolojileri">Bilgi Teknolojileri</option>
								<option value="Sağlık ve Tıp">Sağlık ve Tıp</option>
								<option value="Eğitim ve Öğretim">Eğitim ve Öğretim</option>
								<option value="Turizm ve Otelcilik">Turizm ve Otelcilik</option>
								<option value="Perakende Ticaret">Perakende Ticaret</option>
								<option value="Finans ve Bankacılık">Finans ve Bankacılık</option>
								<option value="Tarım ve Hayvancılık">Tarım ve Hayvancılık</option>
								<option value="Enerji ve Çevre">Enerji ve Çevre</option>
								<option value="Medya ve İletişim">Medya ve İletişim</option>
								<option value="Elektronik ve Elektrik">Elektronik ve Elektrik</option>
								<option value="Hizmet Sektörü (danışmanlık, temizlik, güvenlik vb.)">Hizmet Sektörü (danışmanlık, temizlik, güvenlik vb.)</option>
							</select>
						</div>
					</div>
					<div class="col-6 item errItem">
						<input type="email" name="fEmail" id="fEmail" placeholder="E-Posta*"  required />
					</div>
					<div class="col-6 item errItem">
						<textarea placeholder="Adres" rows="1" cols="50" name="fAddress" id="fAddress"></textarea>
					</div>
					<div class="col-6 item errItem">
						<textarea placeholder="Mesaj" rows="1" cols="50" name="fComment" id="fComment"></textarea>
					</div>
					<div class="col-12 bottom">
						<div class="checkbox errItem">
							<input type="checkbox" id="check05" name="check05" style="display: inline-block;" required>
							<label for="check05"><span>
								<a href="/aydinlatma-metni" target="_blank">Aydınlatma metini</a> okudum, anladım ve kabul ediyorum.
							</span></label>
						</div>
						<button type="submit" id="deaFormBtn" class="button dark border-inverse">
							Gönder
						</button>
					</div>			
				</form>
				
			</div>

			<div class="row" id="formResB">
				<div class="col-12">
					<div class="formMsg" id="formSuccess">
						<div class="check-icon">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_115_107)">
                                <path d="M11.5 23C5.16 23 0 17.84 0 11.5C0 5.16 5.16 0 11.5 0C17.84 0 23 5.16 23 11.5C23 17.84 17.84 23 11.5 23ZM11.5 1C5.71 1 1 5.71 1 11.5C1 17.29 5.71 22 11.5 22C17.29 22 22 17.29 22 11.5C22 5.71 17.29 1 11.5 1Z"/>
                                <path d="M10 16.5C9.87 16.5 9.74 16.45 9.65 16.35L4.65 11.35C4.45 11.16 4.45 10.84 4.65 10.64C4.85 10.44 5.16 10.45 5.36 10.64L10.01 15.29L17.66 7.64C17.85 7.45 18.17 7.45 18.37 7.64C18.57 7.83 18.56 8.15 18.37 8.35L10.37 16.35C10.27 16.45 10.14 16.5 10.02 16.5H10Z" />
                                </g>
                                <defs>
                                <clipPath id="clip0_115_107">
                                <rect width="23" height="23" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                                
                        </div>
                        <p>
                            Form başarıyla gönderilmiştir. Teşekkür ederiz.
                        </p>
					</div>
					<div class="formMsg" id="formError">Beklenmedik bir hata oluştu, lütfen daha sonra tekrar deneyiniz.</div>
				</div>
			</div>
			
		</div>
	</div>

</section>

<?php get_footer(); ?>