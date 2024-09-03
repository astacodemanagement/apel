@extends('front.layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)


@section('content')



<div class="offers md:pt-10 text-md">
            <p class="text-sm">et up to ₹8000 instant savings on selected products with eligible HDFC Bank cards. Plus No Cost EMI from most leading banks.
                </p>
            <a href="#" class="text-blue-500">See Offers </a>
        </div>
<div class="back-video">
    <video autoplay loop muted play-inline>
        <source src="video.mp4" type="video/mp4">
    </video>
    <!-- <iframe src="https://www.youtube.com/embed/zXJbdtxh0XE?autoplay=1&mute=1&controls=0&rel=0&modestbranding=1&showinfo=0" frameborder="0"
    style="width: 100%; height: calc(100vw * 9 / 16); max-width: 1920px; max-height: 1080px; margin: 0 auto; display: block; border: none;"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"
    allowfullscreen></iframe> -->

</div>

<div class="section ">
    <div class="container flex">

        <div class="text-center md:text-start text-lg">
        <h1> Store.The best way to buy theproducts you love. </h1>

        </div>

    </div>

</div>
<div class="products py-10">

    <div class="container flex md:justify-between justify-center md:gap-0 w-full flex-wrap items-center gap-3">
        @foreach ($kategori_produk as $p)
        <div class="product md:w-[12%] w-[45%] bg-gray-100 border-2 border-gray-200 my-2 items-center p-4 rounded-lg  hover:scale-105 transition duration-300">

            <img src="/upload/kategori_produk/{{ $p->gambar }}" alt="{{ $p->nama_kategori_produk }}" class=" w-[80%]" >
            <a href="">{{ $p->nama_kategori_produk }}</a>
        </div>
        @endforeach


    </div>
</div>
<div class="mt-11 md:px-14 px-4 gap-5">
    <h1 class="text-2xl font-medium">The latest. Take a look at what’s new right now.</h1>
    <div class="cards flex justify-center gap-5 flex-wrap">
        @foreach ($produk as $p)
        <div class="card md:w-1/6 w-full">
            <span class="text-lg text-red-700"><b>{{ $p->kategoriProduk->nama_kategori_produk }}</b></span>
            <a href="{{ route('produk_sale.produk_sale_detail', $p->slug) }}">
                <h1 class="font-bold text-3xl text-gray-900">{{ $p->nama_produk }}.</h1>
                <p class="text-gray-600"><b>Rp. {{ number_format($p->harga_jual, 0, ',', '.') }}</b></p>
                <img src="/upload/produk/{{ $p->gambar }}" class="m-auto" alt="{{ $p->nama_produk }}">
            </a>
        </div>
        @endforeach
    </div>
</div>
<div class="apple-events mt-8">
    <h1 class="text-2xl font-medium leading-5 tracking-wide mb-4">
        Let's Explore Apple Events Photos
    </h1>
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-6 flex justify-center">
            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MWR53?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1713934300288" alt="events" class="w-full object-cover object-top rounded-lg shadow-lg">
        </div>
        <div class="col-span-6 flex justify-center">
            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MWR53?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1713934300288" alt="events" class="w-full object-cover object-top rounded-lg shadow-lg">
        </div>
        <div class="col-span-6 flex justify-center">
            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MWR53?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1713934300288" alt="events" class="w-full object-cover object-top rounded-lg shadow-lg">
        </div>
        <div class="col-span-6 flex justify-center">
            <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MWR53?wid=1144&hei=1144&fmt=jpeg&qlt=90&.v=1713934300288" alt="events" class="w-full object-cover object-top rounded-lg shadow-lg">
        </div>
        <!-- Tambahkan lebih banyak gambar jika diperlukan -->
    </div>
</div>






<div class="owl-carousel owl-theme section-3 mt-8">
    <div class="item">
        <img src="{{ asset('themplete/front/images/iphone-14-mockup-png-890-download-96223.png') }}" alt="phone">
        <h1>iPhone 14 Pro Leather Case</h1>
    </div>
    <div class="item">
        <img src="{{ asset('themplete/front/images/iphone-14-mockup-png-890-download-96223.png') }}" alt="phone">
        <h1>Another Product Description 1</h1>
    </div>
    <div class="item">
        <img src="{{ asset('themplete/front/images/iphone-14-mockup-png-890-download-96223.png') }}" alt="phone">
        <h1>Another Product Description 2</h1>
    </div>
    <!-- Tambahkan lebih banyak item sesuai kebutuhan -->
</div>



@endsection
