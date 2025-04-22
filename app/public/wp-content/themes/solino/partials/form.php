<section class="contact-content fadeup" id="contact-form">
	<div class="head-item fadeup">
		
	</div>
	<div class="content persFormC newF">
		<div class="caption">
			<h6>
				Türkiye’ nin 81 ilinde hizmet veren ekiplerimiz projenizi tekliflendirsin.			
			</h6>
		</div>
	
		<div class="form">
			
			<div id="formArea">	
			
				<p>
					<strong>Formumuzu doldurun;</strong> enerji danışmanlarımız <strong>sizi arasın.</strong>
				</p>
				
				<div class="optErrorBox" id="error1">
					<h4>İlginiz için teşekkürler!</h4>
					<p>
						Üzgünüz apartman dairelerine hizmet verememekteyiz.
					</p>
				</div>
				
				<div class="optErrorBox" id="error2">
					<h4>İlginiz için teşekkürler!</h4>
					<p>
						Üzgünüz fatura tutarınız nedeniyle size hizmet veremiyoruz.
					</p>
				</div>

				<form class="row" id="applyFormNew">
					<div class="col-6 item errItem">
						<div class="selectbox">
							<select class="selectric-select" id="mustakil" autocomplete="off" name="mustakil" required>
								<option value="">Kurulum Tipi?*</option>
								<option value="1">Müstakil Ev / Müstakil İş Yeri</option>
								<option value="2">Apartman Dairesi</option>
								<option value="3">Tiny House / Şebeke Altyapısı Bulunmayan Villa-Müstakil</option>
							</select>
						</div>
					</div>
					<div class="col-6 item errItem">
						<div class="selectbox">
							<select class="selectric-select" id="fatura" autocomplete="off" name="fatura" required>
								<option value="">Ortalama Fatura Tutarınız Nedir?*</option>
								<option value="2.000 TL üstü">2.000 TL Üstü</option>
								<option value="2.000 TL ve altı">2.000 TL ve Altı</option>
							</select>
						</div>
					</div>
					
					<div class="col-12 item formMoreArea">

						<div class="col-6 item errItem">
							<input type="text" id="fName" name="fName" placeholder="İsim Soyad*" autocomplete="off" required>
						</div>
						<div class="col-6 item errItem">
							<input type="tel" id="fPhone" name="fPhone" placeholder="Telefon*" autocomplete="off" class="pMaskN" required>
						</div>
						<div class="col-6 item errItem cityB">
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
							<input type="email" placeholder="E-Posta*" id="fEmail" name="fEmail" autocomplete="off" required>
						</div>
						<div class="col-6 item">
							<textarea placeholder="Mesaj" id="fMsg" name="fMsg" autocomplete="off"></textarea>
						</div>
						<div class="col-12 bottom">
							<div class="checkbox errItem">
								<input type="checkbox" id="check05" name="check05" required>
								<label for="check05">
									<span>
										<a href="/aydinlatma-metni" target="_blank">Aydınlatma metini</a> okudum, anladım ve kabul ediyorum.
									</span>
								</label>
							</div>
							<div class="checkbox">
								<input type="checkbox" id="kvkkCheck" name="kvkkCheck" value="Verildi" />
								<label for="kvkkCheck">
									<span>
										Telefon numaram aracılığıyla pazarlama, promosyon ve bilgilendirme amaçlı SMS almak istiyorum. <a href="/acik-riza-metni" target="_blank">Açık rıza metni</a>
									</span>
								</label>
							</div>
							<button type="submit" id="applyFormSend" class="button dark border-inverse">
								Gönder
							</button>
						</div>
						
					</div>

				</form>
				
			</div>

			<div class="row" id="formResB">
				<div class="col-12 item">
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
                            
                        </p>
					</div>
					<div class="formMsg" id="formError">Beklenmedik bir hata oluştu, lütfen daha sonra tekrar deneyiniz.</div>
				</div>
			</div>

		</div>
		
	</div>

</section>
