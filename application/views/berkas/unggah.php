<div class="col-12">
    <div class="row">
        <div class="col-3">
             <div class="badge badge-warning badge-fw">
                 <h6><i class="icon-info"></i> pilih berkas ber ektensi (.jpg)</h6>
             </div>
        </div>
        <div class="col-3">
            <div class="badge badge-warning badge-fw">
                <h6><i class="icon-info"></i> pilih berkas lebih kecil dari 3MB</h6>
            </div>
        </div>
        <div class="col-3">
            <div class="badge badge-warning badge-fw">
                <h6><i class="icon-info"></i> pilih berkas lebih kecil dari skala 1840px X 1240px</h6>
            </div>
        </div>
    </div>
</div>

<div class="col-12 mb-4 user-detail" id="<?= $this->uri->segment(3);?>">
    
    <?= form_open_multipart('#',array('class' => 'form form-row pt-3','id' => 'berkas'))?>
    
        <ul class="list-group col-6 " style="height: 480px!important;overflow: auto">
            <li class="list-group-item">
                <h3 class="font-weight-light">Surat keterangan untuk nikah - model N1</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60"
                               data-max-width="100" data-max-file-size="3M" name="n1">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Surat keterangan asal usul - model N2</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="n2">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Surat persetujuan mempelai - model N3</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="n3">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Surat keterangan orangtua - model N4</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="n4">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Surat izin orangtua - model N5</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="n5">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Surat kematian suami/istri - model N6</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="n6">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Photo  Copy KTP dan KK catin</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="KTP-suami">
                    </div>
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="KTP-istri">
                    </div>
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="KK-suami">
                    </div>
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="KK-istri">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Akta Cerai</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="akta-cerai">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Pas Foto 2x3 = 4 Lbr dan 4x6 = 1 lbr</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="pas-foto">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Surat izin komandan bagi anggota TNI/POLRI</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="surat-izin-komandan">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Photo Copy KTP Wali Nikah</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="ktp-wali-nikah">
                    </div>
                </div>
            </li>
        </ul>

        <ul class="list-group col-6 " style="height: 480px!important;overflow: auto">
            <li class="list-group-item">
                <h3 class="font-weight-light">Izin Pengadilan bagi Catin di bawah umur</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="izin-pengadilan-suami">
                    </div>
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="izin-pengadilan-istri">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Izin poligami dari PA</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="izin-poligami">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Surat Rekomendasi Pindah Nikah</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="surat-rekomendasi-pindah-nikah">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Dispensai Camat bagi yang kurang 10 hari kerja</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="dispensasi-camat">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Photo Copy Sertifikat Pra Nikah</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="sertifikat-pra-nikah">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Slip Asli Setoran Biaya Nikah (PNBP) dan di Copy 2 Lembar</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="slip-setoran-biaya-nikah">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Photo  Copy KTP saksi Nikah</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="ktp-saksi-nikah-suami">
                    </div>
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="ktp-saksi-nikah-istri">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h3 class="font-weight-light">Photo  Copy Ijazah SLTA/Akta Kelahiran</h3>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="ijazah-slta">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h4 class="font-weight-light">Photo Copy buku nikah orangtua catin pria (jika anak pertama)</h4>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="buku-nikah-orangtua">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h4 class="font-weight-light">Photo Copy buku nikah orangtua jika wali nikah anak pertama </h4>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="buku-nikah-wali">
                    </div>
                </div>
            </li>
            <li class="list-group-item">
                <h4 class="font-weight-light">Map hijau (Nikah di LBN) Map Kuning (Nikah di BN) 2 lembar</h4>
                <div class="row">
                    <div class="form-group col-3" class="text-center">
                        <input type="file" class="dropify form-berkas" data-height="60" data-width="100" data-max-file-size="3M" name="map-hijau">
                    </div>
                </div>
            </li>
        </ul>
        
        <div class="col-12 justify-content-center">
            <button type="submit" class="btn btn-primary right col-3 mt-4 " name="unggah" id="btn-unggah"> simpan </button>
        </div>
        
    </form>
</div>


