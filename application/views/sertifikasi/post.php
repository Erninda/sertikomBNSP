
        

        <div class="col-md-10 mt-5">
            <h2>Arsip Surat >> Unggah</h2>

            <h4>
            Unggah surat yang telah terbit pada form ini untuk diarsipkan
            Catatan :
                -  Gunakan file berformat PDF
            </h4>
            <h4>
            Catatan :
            </h4>
            <h4>
                -  Gunakan file berformat PDF
            </h4>

            <div class="formInput mt-5">

              <?php echo form_open_multipart('sertifikasi/insert') ?>

              <form>
                <div class="form-group row">
                  <label for="nomor" class="col-sm-2 col-form-label">Nomor Surat</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="nomor" name="nomor" value="">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                  <div class="col-sm-4">
                    <select class="form-control" id="kategori" name="kategori">
                      <option>Undangan</option>
                      <option>Pengumuman</option>
                      <option>Nota Dinas</option>
                      <option>Pemberitahuan</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="judul" name="judul" value="">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="namaFile" class="col-sm-2 col-form-label">File Surat (PDF)</label>
                  <div class="col-sm-3">
                    <input type="file" class="form-control-file" id="namaFile" name="namaFile">
                  </div>

                  
                </div>
                <?php if($this->session->flashdata('error')){
                      ?>
                      <div class="col-sm-10">
                        <div class="alert alert-danger" role="alert">
                          <?php echo $this->session->flashdata('error')?>
                        </div>
                      </div>
                      
                      <?php 
                    }
                      ?>

                <div class="form-group row">
                  <div class="col-sm-2">
                    <a href="<?= base_url();?>sertifikasi/test" class="btn btn-secondary "><< Kembali</a>
                  </div>
                  <div class="col-sm-10">
                    <button type="submit" id="submit" class="btn btn-success">Simpan</button>
                  </div>
                </div>
                
              </form>
              
              <?php echo form_close() ?>

            </div>
        </div>
        
      </div>
    </div>

    

</body>

