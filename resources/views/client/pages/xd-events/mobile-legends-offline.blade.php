@extends('layouts.main-2')

@section('title')
	<title>Mobile Legends Offline - XD Events & Competitions - XD Fiesta 2019</title>
@endsection

@section('content')
	<section class="xd-event">
	<!-- Gambar lomba dimasukkan disini -->
		<div class="xd-event-imageBanner">
			<img src="" alt="">
		</div>
	
		<!-- Deskripsi lomba ditulis disini -->
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<div class="xd-event-description border-box">
						<p>COMPETITION</p>
						<p>Mobile Legend Offline</p>
						<p>
							Tunjukan kelihaian serta strategi teammu dalam bermain Mobile Legend, dan 
							menangkan hadiahnya!
						</p>
					</div>

					<!-- Informasi tentang lomba ditulis disini -->
					<div class="xd-event-information border-box">
						<p>Information :</p>
						<table>
							<tr>
								<td>Waktu acara</td>
								<td>:</td>
								<td>Sabtu, 9 November s/d Minggu, 10 November 2019</td>
							</tr>
							<tr>
								<td>Lokasi acara</td>
								<td>:</td>
								<td>Kampus STMIK Primakara</td>
							</tr>
							<tr>
								<td>Tecnical Meeting</td>
								<td>:</td>
								<td>Sabtu, 5 Oktober 2019</td>
							</tr>
							<tr>
								<td>Contact</td>
								<td>:</td>
								<td>Devi (085 960 500 944)</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Yurina (0831 1969 4259)</td>
							</tr>
							<tr>
								<td>Hadiah</td>
								<td>:</td>
								<td>Juara I (Sertifikat + Rp2500k)</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Juara II (Sertifikat + Rp1500k)</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>Juara III (Sertifikat + Rp1000k)</td>
							</tr>
						</table>
					</div>
				</div>

				<div class="col-lg-6 col-12">
					<!-- Syarat dan Ketentuan lomba ditulis disini -->
					<div class="xd-event-term border-box">
						<p>Persyaratan Pendaftaran :</p>
						<ol style="padding-left: 20px !important;">
							<li>
								Peserta dibuka untuk masyarakat umum di Bali.
							</li>
							<li>
								Mengisi formulir pendaftaran secara online atau datang langsung ke sekretariat panitia 
								Aula Lt 1 STMIK Primakara Jalan Tukad Badung No. 135, Renon, Denpasar Selatan.
							</li>
							<li>
								Biaya pendaftaran Rp 100.000,-/ team. Pembayaran dapat dilakukan langsung ketika 
								mendaftar di STMIK Primakara atau transfer ke rekening ().
							</li>
							<li>
								Uang  pendaftaran  tidak dapat dikembalikan ketika peserta  melakukan  
								pembatalan melebihi batas waktu 3 hari terhitung sejak pengisian form pendaftaran.
							</li>
							<li>
								Peserta dinyatakan telah terdaftar apabila telah 
								melunasi biaya pendaftaran dan mengumpulkan persyaratan pendaftaran.
							</li>
							<p class="xd-event-term-text"><b>Download Ketentuan & Kriterian Penilaian:</b></p>
							<div style="text-align: center;">
								<button class="xd-event-term-download-btn">
									<span>DOWNLOAD</span>
								</button>
							</div>
						</ol>
					</div>

					<!-- Form pendaftaran lomba ditulis disini -->
					<div class="xd-event-register border-box">
						<p class="xd-event-register-mainTitle">Form Pendaftaran :</p>
						<form action="">
							<div class="row">
								<div class="col-12">
									<p class="xd-event-register-subTitle">&nbsp;Lomba yang diikuti : </p>
									<input type="text" name="" value="Mobile Legends Offline" disabled class="input-text">
									<p class="xd-event-register-subTitle">&nbsp;Alamat Email : </p>
									<input type="text" name="" placeholder="example@email.com" class="input-text">
									<p class="xd-event-register-subTitle">&nbsp;Nama Team : </p>
									<input type="text" name="" placeholder="ex: RRQ" class="input-text">
									<p class="xd-event-register-subTitle">&nbsp;Nama Ketua : </p>
									<input type="text" name="" placeholder="ex: Steven “Marsha” Kurniawan" class="input-text">
									<p class="xd-event-register-subTitle">&nbsp;No Whatsapp : </p>
									<input type="text" name="" placeholder="08212345678" class="input-text">
								</div>
								<div class="offset-lg-7"></div>
								<div class="col-lg-5 col-12 justify-content-center">
									<button class="reset-button">
										<span>RESET</span>
									</button>
									<button class="submit-button">
										<span>SUBMIT</span>
									</button>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>	
	</section>
@endsection