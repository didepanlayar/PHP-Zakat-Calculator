<?php include 'section-zakat.php' ?>

<div class="container mt-3">
<ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="?page=penghasilan">Zakat Penghasilan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active jarak" href="?page=maal">Zakat Maal</a>
        </li>
    </ul>
    <div class="row">

        <div class="col-md-6">
            <div class="content pojok">
                <div class="well">
                    <form method="POST" action="">

                        <div class="form-group">
                            <label>Nilai Emas, Perak, dan/atau Permata</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control uang" placeholder="0" id="harta_saya" onkeypress="return HanyaAngka(event)" onkeyup="HitungZakatMaal();">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Uang Tunai, Tabungan, Deposito</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control uang" placeholder="0" id="harta_lain" onkeypress="return HanyaAngka(event)" onkeyup="HitungZakatMaal();">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Kendaraan, Rumah, Aset lain</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control uang" placeholder="0" id="aset_lain" onkeypress="return HanyaAngka(event)" onkeyup="HitungZakatMaal();">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Jumlah Hutang/Cicilan</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control uang" placeholder="0" id="cicilan_tahunan" onkeypress="return HanyaAngka(event)" onkeyup="HitungZakatMaal();">
                            </div>
                        </div>

                        <div class="form-group">
                            <label><strong>Jumlah Harta 1 Tahun.</strong></label>
                            <p><strong>Rp. <span id="harta_tahunan">0</span></strong></p>
                        </div>

                        <div class="form-group">
                            <label>Masukan Harga Emas (per gram)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp.</span>
                                </div>
                                <input type="text" class="form-control uang" placeholder="0" id="harga_emas" onkeypress="return HanyaAngka(event)" onkeyup="HitungZakatMaal();">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Besar Nisab Zakat Maal per Tahun</label>
                            <p>Rp. <span id="nisab_zakat_maal">0</span></p>
                        </div>

                        <div class="form-group">
                            <label><strong>Wajib Membayar Zakat?</strong></label>
                            <p id="jawab_zakat">-</p>
                        </div>

                        <div class="form-group">
                            <label><strong>Jumlah Zakat Wajib per Tahun</strong></label>
                            <p><strong>Rp. <span id="jumlah_zakat_maal">0</span></strong></p>
                        </div>

                        <div class="form-group">
                            <label><strong>Jumlah Zakat Wajib per Bulan</strong></label>
                            <p><strong>Rp. <span id="jumlah_zakat_maal_bulanan">0</span></strong></p>
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
                    <p><strong>Zakat Maal</strong> adalah zakat yang dikeluarkan ketika memiliki harta simpanan seperti uang, emas, atau perak.</p>
                    <p><strong>Nishab</strong> adalah batas harga wajib zakat, yaitu senilai <strong>85 gram emas 24 karat</strong>. Jika jumlah harta simpanan lebih dari jumlah nishab maka diwajibkan untuk membayar zakat simpanan, sedangkan jika jumlah harta simpanan kurang dari jumlah nishab maka tidak diwajibkan untuk membayar zakat maal.</p>
                    <p>Klik di sini: <a href="https://harga-emas.org/1-gram/" target="_blank">Daftar Harga Emas</a></p>
                    <p>Zakat yang harus dikeluarkan adalah sebesar 2,5% dari jumlah harta 1 tahun.</p>
                    <h5>Keterangan</h5>
                    <ol>
                        <li>Kendaraan yang digunakan sehari-hari, <strong>TIDAK DIKENAKAN ZAKAT</strong>.</li>
                        <li>Rumah (properti) yang digunakan sehari-hari, <strong>TIDAK DIKENAKAN ZAKAT</strong>.</li>
                        <li>Aset Lain merupakan nilai tunai dari Reksadana, Saham, Obligasi, Unit Link, dll.</li>
                    </ol>
                </div>
            </div>
        </div>
        
    </div>
</div>