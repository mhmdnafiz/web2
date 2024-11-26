<<<<<<< HEAD
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    
<div class="container">
    <h1>Daftar Buku</h1>
    <div class="my-3">
        <button class="btn btn-primary" data-bs-toggle="model"
        data-bs-target="#tambahmodal"><i class="bi-plus-circle-fill"></i> Tambah</button>

    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        
                        <?php foreach($data->getkolomTabel() as $kolom): ?>
                            <th scope="col">
                                <?php echo $kolom?>
                            </th>
                        <?php endforeach; ?>
                        <th>aksi</th>
                    </tr>
                    ''''''''''''''
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    
                    <?php foreach($data->getdata() as $buku): ?>
                    <tr>
                        <td><?php echo ++$no; ?></td>
                        
                        <td><?php echo $buku->getjudul(); ?></td>
                        <td><?php echo $buku->getpengarang(); ?></td>
                        <td><?php echo $buku->getpenerbit(); ?></td>
                        <td><?php echo $buku->gettahun(); ?></td>
                        <td>
                            <a href="#" class="btn btn-success"><i class="bi-pencil-square"></i> Edit</a>

                            <button class="btn btn-danger"><i class="bi-trash"></i> Hapus</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahmodal" tabindex="-1" aria-labelledby="tambahmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahmodalLabel">Form Tambah Buku</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/index.php/buku/simpan" id="formTambah"></form>
        <div class="mb-3"></div>
        <label for="judul">judul</label>
        <input type="text" nama="judul" id="judul" class="form-control">
      </div>

      <div class="mb-3"></div>
        <label for="pengarang">pengarang</label>
        <input type="text" nama="pengarang" id="pengarang" class="form-control">
      </div>

      <div class="mb-3"></div>
        <label for="penerbit">penerbit</label>
        <input type="text" nama="penerbit" id="penerbit" class="form-control">
      </div>
       
      <div class="mb-3"></div>
        <label for="tahun">tahun</label>
        <input type="text" nama="tahun" id="tahun" class="form-control">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!--hapus Modal -->
<div class="modal fade" id="hapusmodal" tabindex="-1" aria-labelledby="hapusmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="hapusmodalLabel">konnfirmasi hapus</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/index.php/buku/hapus" id="formhapus" method="POST">
            <input type="hidden" nama="id_hapus" id="hidden-id">
        </form>
        <p>apakah anda yakin menghapus data dengan id <span id="text_id">...</span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formhapus" class="btn btn-danger"><i class="bi bi-trash"></i>Hapus</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<SCRipt>
    const hapusmodal = document.getElementById('hapusmodal')
if (hapusmodal) {
  hapusmodal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const id = button.getAttribute('data-bs-id')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const hidden_id = hapusmodal.querySelector('#hidden_id')
    const text_id = hapusmodal.querySelector('#hidden_id')

    hidden_id.value = id;
    text_id.textContent = id;
  })
}
</SCRipt>
  </body>
</html>
=======
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    
<div class="container">
    <h1>Daftar Buku</h1>
    <div class="my-3">
        <button class="btn btn-primary" data-bs-toggle="model"
        data-bs-target="#tambahmodal"><i class="bi-plus-circle-fill"></i> Tambah</button>

    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        
                        <?php foreach($data->getkolomTabel() as $kolom): ?>
                            <th scope="col">
                                <?php echo $kolom?>
                            </th>
                        <?php endforeach; ?>
                        <th>aksi</th>
                    </tr>
                    ''''''''''''''
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    
                    <?php foreach($data->getdata() as $buku): ?>
                    <tr>
                        <td><?php echo ++$no; ?></td>
                        
                        <td><?php echo $buku->getjudul(); ?></td>
                        <td><?php echo $buku->getpengarang(); ?></td>
                        <td><?php echo $buku->getpenerbit(); ?></td>
                        <td><?php echo $buku->gettahun(); ?></td>
                        <td>
                            <a href="#" class="btn btn-success"><i class="bi-pencil-square"></i> Edit</a>

                            <button class="btn btn-danger"><i class="bi-trash"></i> Hapus</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahmodal" tabindex="-1" aria-labelledby="tambahmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tambahmodalLabel">Form Tambah Buku</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/index.php/buku/simpan" id="formTambah"></form>
        <div class="mb-3"></div>
        <label for="judul">judul</label>
        <input type="text" nama="judul" id="judul" class="form-control">
      </div>

      <div class="mb-3"></div>
        <label for="pengarang">pengarang</label>
        <input type="text" nama="pengarang" id="pengarang" class="form-control">
      </div>

      <div class="mb-3"></div>
        <label for="penerbit">penerbit</label>
        <input type="text" nama="penerbit" id="penerbit" class="form-control">
      </div>
       
      <div class="mb-3"></div>
        <label for="tahun">tahun</label>
        <input type="text" nama="tahun" id="tahun" class="form-control">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!--hapus Modal -->
<div class="modal fade" id="hapusmodal" tabindex="-1" aria-labelledby="hapusmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="hapusmodalLabel">konnfirmasi hapus</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/index.php/buku/hapus" id="formhapus" method="POST">
            <input type="hidden" nama="id_hapus" id="hidden-id">
        </form>
        <p>apakah anda yakin menghapus data dengan id <span id="text_id">...</span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="formhapus" class="btn btn-danger"><i class="bi bi-trash"></i>Hapus</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<SCRipt>
    const hapusmodal = document.getElementById('hapusmodal')
if (hapusmodal) {
  hapusmodal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const id = button.getAttribute('data-bs-id')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const hidden_id = hapusmodal.querySelector('#hidden_id')
    const text_id = hapusmodal.querySelector('#hidden_id')

    hidden_id.value = id;
    text_id.textContent = id;
  })
}
</SCRipt>
  </body>
</html>
>>>>>>> 44a1cfb85859653982aab3aa7b799ec5b3368a96
