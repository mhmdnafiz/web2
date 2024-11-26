<<<<<<< HEAD
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Buku View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h1>form update data buku</h1>
            <form action="/index.php/update" method="post">
              <input type="hidden" nama ="id" value="<?= $buku ->getId();?>">

              <div class="row mb-3">
                <label for="judul" class="col-sm-4 col-form-label">Judul</label>
                <div class="col-sm-8">
                  <input type="text" name="Judul" id="judul" class="form-control" value="<?= $buku ->getJudul();?>">
                </div>
            <div class="row mb-3">
                <label for="pengarang" class="col-sm-4 col-form-label">Pengarang</label>
                <div class="col-sm-8">
                  <input type="text" name="Pengarang" id="pengarang" class="form-control" value="<?= $buku ->getPengarang();?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="penerbit" class="col-sm-4 col-form-label">Penerbit</label>
                <div class="col-sm-8">
                  <input type="text" name="Penerbit" id="penerbit" class="form-control" value="<?= $buku ->getPenerbit();?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="tahun" class="col-sm-4 col-form-label">Tahun Terbit</label>
                <div class="col-sm-8">
                  <input type="text" name="Tahun" id="tahun" class="form-control" value="<?= $buku ->getTahun();?>">
                </div>
              </div>
            <div class="mb-3">
                <a class= "btn btn-secondary"href="/index.php">kembali</a>
                <button type="submit " class="btn btn-primary">submit</button>
              </div>
            </form>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
=======
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Buku View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col-6">
            <h1>form update data buku</h1>
            <form action="/index.php/update" method="post">
              <input type="hidden" nama ="id" value="<?= $buku ->getId();?>">

              <div class="row mb-3">
                <label for="judul" class="col-sm-4 col-form-label">Judul</label>
                <div class="col-sm-8">
                  <input type="text" name="Judul" id="judul" class="form-control" value="<?= $buku ->getJudul();?>">
                </div>
            <div class="row mb-3">
                <label for="pengarang" class="col-sm-4 col-form-label">Pengarang</label>
                <div class="col-sm-8">
                  <input type="text" name="Pengarang" id="pengarang" class="form-control" value="<?= $buku ->getPengarang();?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="penerbit" class="col-sm-4 col-form-label">Penerbit</label>
                <div class="col-sm-8">
                  <input type="text" name="Penerbit" id="penerbit" class="form-control" value="<?= $buku ->getPenerbit();?>">
                </div>
              </div>
              <div class="row mb-3">
                <label for="tahun" class="col-sm-4 col-form-label">Tahun Terbit</label>
                <div class="col-sm-8">
                  <input type="text" name="Tahun" id="tahun" class="form-control" value="<?= $buku ->getTahun();?>">
                </div>
              </div>
            <div class="mb-3">
                <a class= "btn btn-secondary"href="/index.php">kembali</a>
                <button type="submit " class="btn btn-primary">submit</button>
              </div>
            </form>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
>>>>>>> 44a1cfb85859653982aab3aa7b799ec5b3368a96
</html>