$(document).ready(function() {
    // Navbar Aktif
    $.each($('.navbar').find('li'), function() {
        $(this).toggleClass('active', 
            window.location.pathname.indexOf($(this).find('a').attr('href')) > -1);
    }); 
});
$(document).ready(function(){
    // Format mata uang.
    $( '.uang' ).mask('#.##0', {reverse: true});
})
function HitungZakatPenghasilan() {
    // Menghitung Penghasilan Bulanan
    var PenghasilanSaya = document.getElementById('penghasilan_saya').value.replace(/\./gi,"");
    var PenghasilanLain = document.getElementById('penghasilan_lain').value.replace(/\./gi,"");
    var CicilanBulanan = document.getElementById('cicilan_bulanan').value.replace(/\./gi,"");
    var PenghasilanBulanan = Number(PenghasilanSaya) + Number(PenghasilanLain) - Number(CicilanBulanan);
    if (!isNaN(PenghasilanBulanan)) {
        document.getElementById('penghasilan_bulanan').innerHTML = PenghasilanBulanan.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
    // Menghitung Nisab
    var HargaBeras = document.getElementById('harga_beras').value.replace(/\./gi,"");
    var NisabZakatPenghasilan = Number(HargaBeras) * 522
    if (!isNaN(NisabZakatPenghasilan)) {
        document.getElementById('nisab_zakat_penghasilan').innerHTML = NisabZakatPenghasilan.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
    // Kondisi Bayar Zakat
    if ( PenghasilanBulanan > NisabZakatPenghasilan ) {
        document.getElementById("jawab_zakat").innerHTML = '<span style="color: green;">YA!</span>'
    }
    else if ( PenghasilanBulanan < NisabZakatPenghasilan ) {
        document.getElementById("jawab_zakat").innerHTML = '<span style="color: red;">TIDAK!</span>'
    }
    else {
        document.getElementById("jawab_zakat").innerHTML = '';
    }
    // Jumlah Bayar Zakat
    if ( PenghasilanBulanan > NisabZakatPenghasilan ) {
        var JumlahZakat = document.getElementById("jumlah_zakat_penghasilan").innerHTML;
        var JumlahBayar = Number(PenghasilanBulanan) * 0.025
        document.getElementById("jumlah_zakat_penghasilan").innerHTML = JumlahBayar.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
    else if ( PenghasilanBulanan < NisabZakatPenghasilan ) {
        document.getElementById("jumlah_zakat_penghasilan").innerHTML = '0';
    }
}
function HitungZakatMaal(){
    // Menghitung Harta Tahunan
    var HartaSaya = document.getElementById('harta_saya').value.replace(/\./gi,"");
    var HartaLain = document.getElementById('harta_lain').value.replace(/\./gi,"");
    var AsetLain = document.getElementById('aset_lain').value.replace(/\./gi,"");
    var CicilanTahunan = document.getElementById('cicilan_tahunan').value.replace(/\./gi,"");
    var HartaTahunan = Number(HartaSaya) + Number(HartaLain) + Number(AsetLain) - Number(CicilanTahunan);
    if (!isNaN(HartaTahunan)) {
        document.getElementById('harta_tahunan').innerHTML = HartaTahunan.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
    // Menghitung Nisab
    var HargaEmas = document.getElementById('harga_emas').value.replace(/\./gi,"");
    var NisabZakatMaal = Number(HargaEmas) * 85
    if (!isNaN(NisabZakatMaal)) {
        document.getElementById('nisab_zakat_maal').innerHTML = NisabZakatMaal.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
    // Kondisi Bayar Zakat
    if ( HartaTahunan > NisabZakatMaal ) {
        document.getElementById("jawab_zakat").innerHTML = '<span style="color: green;">YA!</span>'
    }
    else if ( HartaTahunan < NisabZakatMaal ) {
        document.getElementById("jawab_zakat").innerHTML = '<span style="color: red;">TIDAK!</span>'
    }
    else {
        document.getElementById("jawab_zakat").innerHTML = '';
    }
    // Jumlah Bayar Zakat
    if ( HartaTahunan > NisabZakatMaal ) {
        var JumlahZakat = document.getElementById("jumlah_zakat_maal").innerHTML;
        var JumlahBayarTahunan = Number(HartaTahunan) * 0.025
        var JumlahBayarBulanan = Number(JumlahBayarTahunan) / 12
        var Bulatkan = JumlahBayarBulanan.toFixed(0);
        document.getElementById("jumlah_zakat_maal").innerHTML = JumlahBayarTahunan.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        document.getElementById("jumlah_zakat_maal_bulanan").innerHTML = Bulatkan.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
    else if ( HartaTahunan < NisabZakatMaal ) {
        document.getElementById("jumlah_zakat_maal").innerHTML = '0';
        document.getElementById("jumlah_zakat_maal_bulanan").innerHTML = '0';
    }
}
function HanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
        return true;
    }
}