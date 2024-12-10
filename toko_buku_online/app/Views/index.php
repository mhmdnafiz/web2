<?= $this->extend('template') ?>

<?= $this->section('main') ?>
<div class="container p-5 bg-danger-subtle rounded-bottom-4">
    <h1>SELAMAT DATANG di TOKO BUKU ONLINE</h1>
    <h5>KAMI MENYEDIAKAN BERBAGAI JENIS BUKU DARI PENERBIT TERPERCAYA.</h5>
    <a href="<?= base_url() ?>" class="btn btn-primary">Lihat Produk</a>
</div>

<div class="container">
    <h2 class="mt-5">Buku Best Seller</h2>
    <div class="row">
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url('images/buku.jpg') ?>" class="card-img-top" alt="Gambar Buku">
                <div class="card-body">
                    <h5 class="card-title">Stand By Me Doraemon</h5>
                    <p class="card-text">Rp 85.000</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection()?>
