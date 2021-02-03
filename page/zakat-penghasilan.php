<?php include 'section-zakat.php' ?>

<div class="container mt-3">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="?page=penghasilan">Zakat Penghasilan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link jarak" href="?page=maal">Zakat Maal</a>
        </li>
    </ul>
    <div class="row">
    
        <div class="col-md-6">
            <div class="content pojok">
                <div class="well">
                    <form method="POST" action="">

                        <div class="form-group">
                            <label>Penghasilan/Gaji per Bulan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control uang" placeholder="0" id="penghasilan_saya" onkeypress="return HanyaAngka(event)" onkeyup="HitungZakatPenghasilan();">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Penghasilan Lain-lain per Bulan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control uang" placeholder="0" id="penghasilan_lain" onkeypress="return HanyaAngka(event)" onkeyup="HitungZakatPenghasilan();">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Hutang/Cicilan Kebutuhan Pokok</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control uang" placeholder="0" id="cicilan_bulanan" onkeypress="return HanyaAngka(event)" onkeyup="HitungZakatPenghasilan();">
                            </div>
                        </div>

                        <div class="form-group">
                            <label><strong>Jumlah Penghasilan per Bulan</strong></label>
                            <p><strong>Rp. <span id="penghasilan_bulanan">0</span></strong></p>
                        </div>

                        <div class="form-group">
                            <label>Masukan Harga Beras (per kg)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control uang" placeholder="0" id="harga_beras" onkeypress="return HanyaAngka(event)" onkeyup="HitungZakatPenghasilan();">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Besar Nisab Zakat Penghasilan</label>
                            <p>Rp. <span id="nisab_zakat_penghasilan">0</span></p>
                        </div>

                        <div class="form-group">
                            <label><strong>Wajib Membayar Zakat per Bulan?</strong></label>
                            <p id="jawab_zakat">-</p>
                        </div>

                        <div class="form-group">
                            <label><strong>Jumlah Zakat Wajib per Bulan</strong></label>
                            <p><strong>Rp. <span id="jumlah_zakat_penghasilan">0</span></strong></p>
                        </div>

                        <div class="form-group">
                            <center><button type="submit" class="btn btn-primary" onClick="location.reload();">RESET</button></center>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="content">
                <div class="well">
                    <h5>Pengertian</h5>
                    <p><strong>Zakat penghasilan</strong> adalah zakat yang dikeluarkan setiap menerima gaji/penghasilan, termasuk THR (Tunjangan Hari Raya) dan bonus.</p>
                    <p><strong>Nishab</strong> adalah syarat jumlah minimum (ambang batas) harta yang dapat dikategorikan sebagai harta wajib zakat. Untuk penghasilan yang diwajibkan zakat adalah penghasilan yang berada diatas nisab. Nisab Zakat Penghasilan adalah setara <strong>522 kg beras normal</strong>.</p>
                    <p>Klik di sini: <a href="https://hargapangan.id/" target="_blank">Daftar Harga Beras</a></p>
                    <p>Zakat yang harus dikeluarkan adalah sebesar 2,5% dari jumlah penghasilan per bulan.</p>
                    <h5>Studi Kasus</h5>
                    <p>Jika harga beras pada hari ini sebesar <strong>Rp10.000,-/kg</strong>, maka nishab zakat penghasilan dalam satu bulan adalah <strong>Rp5.220.000,-</strong>. Penghasilan Bapak Fulan sebesar <strong>Rp10.000.000,-</strong>/ bulan. Artinya penghasilan Bapak Fulan sudah wajib zakat. Maka zakat Bapak Fulan adalah <strong>Rp250.000,-</strong>/ bulan.</p>
                    <h5>Keterangan</h5>
                    <p>Kebutuhan Pokok adalah kebutuhan sandang, pangan, papan, pendidikan, kesehatan dan alat transportasi primer.</p>
                </div>
            </div>
        </div>

    </div>
</div>