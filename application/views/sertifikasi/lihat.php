
        <div class="col-md-10 mt-5">
          <h2>Arsip Surat >> Lihat</h2>
          <?php
                      $no = 1;
                      $query = $this->db->get_where('test', array('id' => $id));
                      foreach ($query->result() as $row) {
                    ?>
          
          <h4>Nomor : <?php echo $row->nomor ?></h4>
          <h4>Kategori : <?php echo $row->kategori ?></h4>
          <h4>Judul : <?php echo $row->judul ?></h4>
          <h4>Waktu Unggah : <?php echo $row->waktu ?></h4>

          <iframe src="<?= base_url()?>/uploads/<?php echo $row->namaFile ?>" width="100%" height="500px">
          </iframe>

          <div class="row mt-3">
            <div class="col-md-2">
              <a href="<?= base_url();?>sertifikasi/test" class="btn btn-secondary"> << Kembali</a>
            </div>
            <div class="col-md-2">
              <a href="<?= base_url();?>sertifikasi/download/<?= $row->namaFile?>" class="btn btn-primary"> Unduh </a>
            </div>
            
          </div>
          

          <?php
                        }
                    ?>
        </div>
        
      </div>
    </div>

    



