<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi," SELECT * FROM tb_mahasiswa WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>

<section class = "content">
<div class="container-fluid">
           <!-- general form elements disabled -->
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit Data Mahasiswa</h3>
        </div>
              <!-- /.card-header -->
            <div class="card-body">
                <form method='post' action='update/update_data.php' enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" value = "<?php echo $view['nama'];?>">
                        <input type="text" name="id" class="form-control" placeholder="Nama" value = "<?php echo $view['id'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nim</label>
                        <input type="text" name = "nim" class="form-control" placeholder="Nim" value = "<?php echo $view['nim'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                      <label >Semester:</label>
                        <select class="custom-select" name = "semester" required >
                    <option value="<?php echo $view['semester'];?>" selected><?php echo $view['semester'];?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                    <label class="from-label" for="customFile">Upload Foto</label>
                    <input type="file" name="foto" class="form-control" id="customFile"/>
                    </div>
                  </div>
                  <div class="row"> 
                  <div class="col-sm-12">
                  <img src="foto/<?php echo $view['foto'];?>" width="100px" class="rounded"/>
                  </div>
                  </div>
                  <div class="row">
                      <button type="submit" class="btn btn-info">Simpan</button>
                  </div>
                </form>
            </div>
              <!-- /.card-body -->
    </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
</div>
</section>