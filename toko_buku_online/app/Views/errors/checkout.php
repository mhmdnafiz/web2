<?= $this->extend('template')?>

<?= $this->section('main')?>
<div class="container">
    <h2>Checkout</h2>
    <div class="mb-3">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Detail BUKU</th>
                    <th scope="col">JUMLAH</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">Total</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="<?= base_url ('images/buku.jpg'); ?>" alt="" style="widht:150px; height:auto;">
                            <h6>Stand by me Doraemon</h6>
                        </td>
                        <td>
                            x1
                        </td>
                        <td>
                            Rp.65.000
                        </td>
                        <td>
                        
                    </tr>
                </tbody>
        </table>
         </table>
         </div>
         <h2 class="mb-5">Total: Rp.160.000</h2>
        <h2 class="mb-3">DATA pembeli</h2>
        <div class="mb-5">
            nafiz </br>
            083183302799</br>
        </div>
         <h2 class=mb-3>Alamat pengiriman</h2>
         <div class="mb-5">
            <span>jl.jambi</span>
         </div>
         <h2 class="mb-3">metode bayar</h2>
         <div class="mb-5">
            transfer bank </br>
            bca. nafiz </br>
            1273646478
         </div>
        <div class="mb-5"></div>

<?= $this->endSection ()?>

