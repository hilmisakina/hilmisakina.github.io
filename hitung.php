<?php

/////////////////////|
///tiket Kereta Api//|
/////////////////////|
class tiketKA{
    public $jumlah;
    public $ulangi;
    public $namaPemesan;
    public $noHP;

    public $tglBerangkat;
    public $blnBerangkat;
    public $thnBerangkat;
    public $jam;

    public $pilihKA;
    public $dibyr;
    public $harga1tiket;
    public $harTot;
    public $kembalian;

    function pembelian(){
        echo "<b>pemesan atas nama   : ",$this->namaPemesan,"</br>";
        echo "No Hp/ WhatsApp        : ",$this->noHP,"</br>";
        echo "tanggal keberngkatan   : ",$this->tglBerangkat,"-",$this->blnBerangkat,"-",$this->thnBerangkat,"</br>";
        echo "jumlah pembelian tiket : ",$this->jumlah,"</br>";
        echo "Id Pemesanan           : ",$this->tglBerangkat,$this->blnBerangkat,$this->thnBerangkat,$this->jumlah,$this->noHP,"</b></br>";
    }

    function CetakTiketKA(){
        for($this->ulangi = 0; $this->ulangi < $this->jumlah; $this->ulangi++){
            echo $this->ulangi;
            echo "<h2>****************************</h2>";
            if ($this->pilihKA == 1) {
                $this->harga1tiket = 20000;
                $this->jam = "00:30";
                echo "Id tiket :",$this->tglBerangkat,$this->blnBerangkat,$this->thnBerangkat,$this->jam,$this->ulangi,"</br>";
                echo "<b>KA Pangandaran // st.Banjar - st.Tanah Abang</b></br>";
            }
            if ($this->pilihKA == 2) {
                $this->harga1tiket = 30000;
                $this->jam = "15:30";
                echo "Id tiket :",$this->tglBerangkat,$this->blnBerangkat,$this->thnBerangkat,$this->jam,$this->ulangi,"</br>";
                echo "<b>KA Lokal Cibatu // st.Cibatu - st.Purwakarta</b></br>";
            }
            if ($this->pilihKA == 3) {
                $this->harga1tiket = 40000;
                $this->jam = "20:45";
                echo "Id tiket :",$this->tglBerangkat,$this->blnBerangkat,$this->thnBerangkat,$this->jam,$this->ulangi,"</br>";
                echo "<b>KA Lodaya Malam // st.Tasikmalaya - st.Yogyakarta</b></br>";
            }
            echo "---------------------------------------------------------</br>";  
            echo "tanggal keberngkatan   : ",$this->tglBerangkat,"-",$this->blnBerangkat,"-",$this->thnBerangkat,"</br>";
            echo "Jam Keberangkatan      :",$this->jam,"</br>";
            echo "</br>Rp ",$this->harga1tiket,"</br>";
            echo "<h2>****************************</h2>";       
        }
    }
    function pilih_KA(){
        //harga tiket kereta berbeda jadi di ketik lagi//
        if ($this->pilihKA == 1) {
            $this->harga1tiket = 20000;
        }
        if ($this->pilihKA == 2) {
            $this->harga1tiket = 30000;
        }
        if ($this->pilihKA == 3) {
            $this->harga1tiket = 40000;
        }
        //
        $this->harTot=$this->harga1tiket*$this->jumlah;
        echo "<b>Harga Total : IDR.",$this->harTot,"</b></br>";
        //utama
        echo "---------------------------------------------------------</br>";
        if ($this->dibyr == $this->harTot) {
            echo "<h2>Lunas</h2>";
            echo "<b>Dibayar : IDR.",$this->dibyr,"</b></br>";
            echo "<b>Uang Anda Pas</b>";
        }
        if ($this->dibyr < $this->harTot){
            echo "<h2>Belum Lunas</h2>";
            echo "<b>Dibayar : IDR.",$this->dibyr,"</b></br>";
            $this->kembalian=$this->harTot-$this->dibyr;
            echo "<b>Kurang : IDR.",$this->kembalian,"</b></br>";
            echo "Ngutang dulu ya :)";
        }
        if ($this->dibyr > $this->harTot){
            echo "<h2>Lunas</h2>";
            echo "<b>Dibayar : IDR.",$this->dibyr,"</b></br>";
            $this->kembalian=$this->dibyr-$this->harTot;
            echo "<b>Kembalian : IDR.",$this->kembalian,"</b></br>";
        }
    }
}
//////////////|
//tiket bus///|
//////////////|
class tiketBUS extends tiketKA{
    public $pilihBus;
 
    function cetakTiketBus(){
        for($this->ulangi = 0; $this->ulangi < $this->jumlah; $this->ulangi++){
            echo $this->ulangi;
            echo "<h2>****************************</h2>";
            if ($this->pilihBus == 1) {
                $this->harga1tiket = 24000;
                $this->jam = "06:00";
                echo "Id tiket :",$this->tglBerangkat,$this->blnBerangkat,$this->thnBerangkat,$this->jam,$this->ulangi,"</br>";
                echo "<b>Bus Budiman // Tasikmalaya - Yogyakarta</b></br>";
            }
            if ($this->pilihBus == 2) {
                $this->harga1tiket = 50000;
                $this->jam = "10:30";
                echo "Id tiket :",$this->tglBerangkat,$this->blnBerangkat,$this->thnBerangkat,$this->jam,$this->ulangi,"</br>";
                echo "<b>Bus Primajasa // Bandung - Solo</b></br>";
            }
            if ($this->pilihBus == 3) {
                $this->harga1tiket = 40000;
                $this->jam = "20:45";
                echo "Id tiket :",$this->tglBerangkat,$this->blnBerangkat,$this->thnBerangkat,$this->jam,$this->ulangi,"</br>";
                echo "<b>Bus Sinar Jaya // Yogyakarta - Malang</b></br>";
            }
            echo "---------------------------------------------------------</br>";  
            echo "tanggal keberngkatan   : ",$this->tglBerangkat,"-",$this->blnBerangkat,"-",$this->thnBerangkat,"</br>";
            echo "Jam Keberangkatan      :",$this->jam,"</br>";
            echo "</br>Rp ",$this->harga1tiket,"</br>";
            echo "<h2>****************************</h2>";       
        }
    }
    function pilih_Bus(){
        //harga tiket Bus berbeda jadi di ketik lagi//
        if ($this->pilihBus == 1) {
            $this->harga1tiket = 24000;
        }
        if ($this->pilihBus == 2) {
            $this->harga1tiket = 50000;
        }
        if ($this->pilihBus == 3) {
            $this->harga1tiket = 40000;
        }
        //
         $this->harTot=$this->harga1tiket*$this->jumlah;
         echo "<b>Harga Total : IDR.",$this->harTot,"</b></br>";
         //utama
         echo "---------------------------------------------------------</br>";
        if ($this->dibyr == $this->harTot) {
             echo "<h2>Lunas</h2>";
             echo "<b>Dibayar : IDR.",$this->dibyr,"</b></br>";
             echo "<b>Uang Anda Pas</b>";
        }
        if ($this->dibyr < $this->harTot){
             echo "<h2>Belum Lunas</h2>";
             echo "<b>Dibayar : IDR.",$this->dibyr,"</b></br>";
             $this->kembalian=$this->harTot-$this->dibyr;
             echo "<b>Kurang : IDR.",$this->kembalian,"</b></br>";
             echo "Ngutang dulu ya :)";
        }
        if ($this->dibyr > $this->harTot){
             echo "<h2>Lunas</h2>";
             echo "<b>Dibayar : IDR.",$this->dibyr,"</b></br>";
             $this->kembalian=$this->dibyr-$this->harTot;
             echo "<b>Kembalian : IDR.",$this->kembalian,"</b></br>";
        }
    }
}
//////////////////|
///tiket Pesawat//|
//////////////////|
class tiketPswt extends tiketKA{
    public $pilihPswt;

    function cetakTiketPswt(){
        for($this->ulangi = 0; $this->ulangi < $this->jumlah; $this->ulangi++){
            echo $this->ulangi;
            echo "<h2>****************************</h2>";
            if ($this->pilihPswt == 1) {
                $this->harga1tiket = 2000000;
                $this->jam = "06:00";
                echo "Id tiket :",$this->tglBerangkat,$this->blnBerangkat,$this->thnBerangkat,$this->jam,$this->ulangi,"</br>";
                echo "<b>Air Asia // to Singapura</b></br>";
            }
            if ($this->pilihPswt == 2) {
                $this->harga1tiket = 1500000;
                $this->jam = "10:00";
                echo "Id tiket :",$this->tglBerangkat,$this->blnBerangkat,$this->thnBerangkat,$this->jam,$this->ulangi,"</br>";
                echo "<b>Batik Air // to Yogyakarta</b></br>";
            }
            if ($this->pilihPswt == 3) {
                $this->harga1tiket = 1400000;
                $this->jam = "12:45";
                echo "Id tiket :",$this->tglBerangkat,$this->blnBerangkat,$this->thnBerangkat,$this->jam,$this->ulangi,"</br>";
                echo "<b>CityLink // to Medan</b></br>";
            }
            echo "---------------------------------------------------------</br>";  
            echo "tanggal keberngkatan   : ",$this->tglBerangkat,"-",$this->blnBerangkat,"-",$this->thnBerangkat,"</br>";
            echo "Jam Keberangkatan      :",$this->jam,"</br>";
            echo "</br>Rp ",$this->harga1tiket,"</br>";
            echo "<h2>****************************</h2>";       
        }
    }
    function pilih_Pswt(){
        //harga tiket Bus berbeda jadi di ketik lagi//
        if ($this->pilihPswt == 1) {
            $this->harga1tiket = 2000000;
        }
        if ($this->pilihPswt == 2) {
            $this->harga1tiket = 1500000;
        }
        if ($this->pilihPswt == 3) {
            $this->harga1tiket = 1400000;
        }
        //
         $this->harTot=$this->harga1tiket*$this->jumlah;
         echo "<b>Harga Total : IDR.",$this->harTot,"</b></br>";
         //utama
         echo "---------------------------------------------------------</br>";
        if ($this->dibyr == $this->harTot) {
             echo "<h2>Lunas</h2>";
             echo "<b>Dibayar : IDR.",$this->dibyr,"</b></br>";
             echo "<b>Uang Anda Pas</b>";
        }
        if ($this->dibyr < $this->harTot){
             echo "<h2>Belum Lunas</h2>";
             echo "<b>Dibayar : IDR.",$this->dibyr,"</b></br>";
             $this->kembalian=$this->harTot-$this->dibyr;
             echo "<b>Kurang : IDR.",$this->kembalian,"</b></br>";
             echo "Ngutang dulu ya :)";
        }
        if ($this->dibyr > $this->harTot){
             echo "<h2>Lunas</h2>";
             echo "<b>Dibayar : IDR.",$this->dibyr,"</b></br>";
             $this->kembalian=$this->dibyr-$this->harTot;
             echo "<b>Kembalian : IDR.",$this->kembalian,"</b></br>";
        }
    }
}

//input
$busKApswt = $_POST['kendaraan'];
if ($busKApswt == 1) {
    $kereta = new tiketKA ();
    //isi variabel//
    $kereta->namaPemesan = $_POST['nama'];
    $kereta->noHP = $_POST['nomor'];
    $kereta->jumlah = $_POST['jumlah'];
    $kereta->tglBerangkat = $_POST['tanggal'];
    $kereta->blnBerangkat = $_POST['bulan'];
    $kereta->thnBerangkat = $_POST['tahun'];
    $kereta->pilihKA = $_POST['ka'];
    $kereta->dibyr = $_POST['bayar'];
    //print//
    echo "<h2>Struk Pemesanan Tiket Kereta Api</h2>";
    echo "---------------------------------------------------------</br>";
    $kereta->pembelian();
    $kereta->pilih_KA();
    echo "<h2>_______Cetak Tiket _________</h2>";   
    $kereta->CetakTiketKA(); 
}
if ($busKApswt == 2) {
    //isi variabel//
    $bus1 = new tiketBUS ();
    $bus1->namaPemesan = $_POST['name'];
    $bus1->noHP = $_POST['no'];
    $bus1->jumlah = $_POST['jmlh'];
    $bus1->tglBerangkat = $_POST['tgl'];
    $bus1->blnBerangkat = $_POST['bln'];
    $bus1->thnBerangkat = $_POST['thn'];
    $bus1->pilihBus = $_POST['bus'];
    $bus1->dibyr = $_POST['byr'];
    //print//
    echo "<h2>Struk Pemesanan Tiket Bus</h2>";
    echo "---------------------------------------------------------</br>";
    $bus1->pembelian();
    $bus1->pilih_Bus();
    echo "<h2>_______Cetak Tiket _________</h2>";   
    $bus1->cetakTiketBus(); 
}
if ($busKApswt == 3) {
    //isi variabel//
    $pswt = new tiketPswt ();
    $pswt->namaPemesan = $_POST['nam'];
    $pswt->noHP = $_POST['nomr'];
    $pswt->jumlah = $_POST['jmlah'];
    $pswt->tglBerangkat = $_POST['tggl'];
    $pswt->blnBerangkat = $_POST['buln'];
    $pswt->thnBerangkat = $_POST['year'];
    $pswt->pilihPswt = $_POST['pesawat'];
    $pswt->dibyr = $_POST['byar'];
    //print//
    echo "<h2>Struk Pemesanan Tiket Bus</h2>";
    echo "---------------------------------------------------------</br>";
    $pswt->pembelian();
    $pswt->pilih_Pswt();
    echo "<h2>_______Cetak Tiket _________</h2>";   
    $pswt->cetakTiketPswt(); 
}

?>