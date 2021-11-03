<div class="container">

    <!-- Banner -->
    <div class="banner">
        <img src="{{ url('assets/slider/slider1.png') }}" alt="">
    </div>

    <!-- Pilihan Liga -->
    <section class="pilih-liga mt-3">
        <h3><strong>Pilih Liga</strong></h3>      
        <div class="row mt-4">
            @foreach($ligas as $liga)
                <div class="col">
                    <div class="card shadow">
                        <div class="card-body text-center">
                    <img src="{{ url ('assets/liga') }}/{{ $liga->gambar }}" class="img-fluid">
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </section>

    <!-- Best Product -->
    <section class="best-product mt-3 mb-5">
        <h3><strong>Best Product</strong></h3>      
        <div class="row mt-4">
            @foreach($products as $product)
                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                    <img src="{{ url ('assets/jersey') }}/{{ $product->gambar }}" class="img-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h5><strong>{{ $product->nama }}</strong></h5>
                            <p>Rp. {{number_format($product->harga) }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                           <a href="#" class="btn btn-info btn-block">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </section>
</div>
