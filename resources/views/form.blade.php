
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="conntainer justify-center mt-5 ">
        <div class="row">
            <div class="col-12 h-100">
                <div class="card shadow mx-auto p-4" style="width: 25rem;">
                    <h3 class="text-center  mb-4">Tambah Data Produk</h3>
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                        @break
                    @endforeach
                @endif


                <form method="POST" action="{{isset($product) ? route('form.update', $product->id) : route('form.store') }}">
                    @csrf
                    @if(isset($product))
                    @method('PUT')
                @endif

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Gambar</label>
                        <input type="text" class="form-control" name="gambar" id="gambar"
                            placeholder="masukkan gambar">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="name" id="name"
                            placeholder="masukkan nama produk">

                    </div>
                    <div class="mb-3">
                        <label for="berat" class="form-label">Berat</label>
                        <input type="number" class="form-control" name="berat" id="berat"
                            placeholder="Masukkan berat produk">
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" name="harga" id="harga"
                            placeholder="Masukkan harga produk">
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" name="stock" id="stok"
                            placeholder="Masukkan stok produk">
                    </div>

                    <div class="mb-3">
                        <label for="kondisi" class="form-label">Kondisi</label>
                        <select class="form-select" id="kondisi" name="kondisi">
                            <option value="0" selected>Pilih kondisi Barang</option>
                            <option value="baru">Baru</option>
                            <option value="bekas" >Bekas</option>
                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                        <textarea class="form-control" id="deskripsi" rows="3" placeholder="Masukkan deskripsi produk" name="deskripsi"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark align-items-center">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>

</html>
