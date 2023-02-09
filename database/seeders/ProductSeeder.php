<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductType;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductType::create([
            'name' => 'Konser'
        ]);

        ProductType::create([
            'name' => 'Wisata'
        ]);

        ProductType::create([
            'name' => 'Gunung'
        ]);

        Product::create([
            'name' => 'Scarlett Whitening 7X Ceramide Moisturizer',
            'description' => ' Manfaat :

- Membantu menjaga kelembapan pada kulit

- Membantu merawat skin barrier

- Membantu merawat kulit agar tetap halus dan lembut

- Membantu mencerahkan kulit dan merawat warna kulit',
            'type_id' => 1,
            'price' => 20000,
            'quantity' => 20,
            'picture' => 'images/Beauty/product-1.png'
        ]);

        Product::create([
            'name' => 'FLASH SALE! Maybelline Super Stay Matte Ink Lipcream SuperStay Lip Cream stay ink Lipstik Original',
            'description' => 'Super Stay Matte Ink ini adalah liquid lipstick matte yang dikombinasikan dengan ink formula dan menghasilkan warna-warna lipstick yang unik dan juga intens. ',
            'type_id' => 1,
            'price' => 20000,
            'quantity' => 40,
            'picture' => 'images/Beauty/product-2.png'
        ]);
        Product::create([
            'name' => 'FLASH SALE! Maybelline Super Stay Matte Ink Lipcream SuperStay Lip Cream stay ink Lipstik Original',
            'description' => 'Super Stay Matte Ink ini adalah liquid lipstick matte yang dikombinasikan dengan ink formula dan menghasilkan warna-warna lipstick yang unik dan juga intens. ',
            'type_id' => 1,
            'price' => 20000,
            'quantity' => 40,
            'picture' => 'images/Beauty/product-2.png'
        ]);

        Product::create([
            'name' => 'ROREC / HCHANA NATURAL SKIN CARE MASK MASKER SHEET & ROREC SNAIL MASK / MASK SHEET',
            'description' => 'PERHATIAN:
ROREC PACKAGING BARU MENJADI HCHANA HANYA BERUBAH LOGO
ISI DAN KEMASAN & KHASIAT TETAP SAMA

JADI BARANG AKAN DIKIRIM SESUAI STOK YG ADA

MEMBELI = SETUJU

Aloe vera :
Melembabkan kulit
Mencegah keriput
Memutihkan kembali kulit yang terbakar matahari
Kulit berjerawat
Mengandung antioksidan
Membuat wajah cerah Dan glowing',
            'type_id' => 1,
            'price' => 20000,
            'quantity' => 125,
            'picture' => 'images/Beauty/product-3.png'
        ]);



        Product::create([
            'name' => 'M231 Kemeja Pria Koko Pendek Cream 2325A',
            'description' => 'Material: Katun



Size pada Model:

Pria: Tinggi 185-186 cm, Berat 75 kg, Menggunakan Ukuran L



Size Chart:

Lebar Dada (cm) x Panjang Kemeja (cm):

S: 52 cm x 72,5 cm

M: 54 cm x 75 cm

L: 56 cm x 77,5 cm

XL: 58 cm x 80 cm

XXL: 60 cm x 81,5 cm ',
            'type_id' => 2,
            'price' => 22500,
            'quantity' => 70,
            'picture' => 'images/Clothes/product-6.png'
        ]);

        Product::create([
            'name' => 'M231 Celana Cargo Adjustable Formal Function Hijau C1174B',
            'description' => 'Material: Katun Baby Canvas



Size pada Model:

Pria: Tinggi 185-186 cm, Berat 75 kg, Menggunakan Ukuran L



Size Chart: 

Lingkar Pinggang (cm) x Panjang Celana (cm) :

S : 68 cm x 100 cm

M : 70 cm x 100 cm

L : 74 cm x 100 cm

XL : 80 cm x 103 cm

XXL : 84 cm x 103 cm',
            'type_id' => 2,
            'price' => 10900,
            'quantity' => 50,
            'picture' => 'images/Clothes/product-7.png'
        ]);

        Product::create([
            'name' => 'Koko MAKHI bayya muslimin koko kurta pakistan original premium dengan bahan sigaret super premium',
            'description' => 'Koko Pakistan Kurta Qurta Dewasa Katun sigaret Terbaru MAKHI BAYYA -  PROMO Flash Sale COD Bayar di Tempat Baju Koko Pakistan KURTA premium  Pria Dewasa Katun Import. COD (Cash On Delivery) Bisa Bayar di Tempat Harga GROSIR Inbox ya! ',
            'type_id' => 2,
            'price' => 20000,
            'quantity' => 30,
            'picture' => 'images/Clothes/product-8.png'
        ]);
        Product::create([
            'name' => 'Koko MAKHI bayya muslimin koko kurta pakistan original premium dengan bahan sigaret super premium',
            'description' => 'Koko Pakistan Kurta Qurta Dewasa Katun sigaret Terbaru MAKHI BAYYA -  PROMO Flash Sale COD Bayar di Tempat Baju Koko Pakistan KURTA premium  Pria Dewasa Katun Import. COD (Cash On Delivery) Bisa Bayar di Tempat Harga GROSIR Inbox ya! ',
            'type_id' => 2,
            'price' => 20000,
            'quantity' => 30,
            'picture' => 'images/Clothes/product-8.png'
        ]);

        Product::create([
            'name' => 'Lenovo GM2 Pro Gaming Wireless Bluetooth low-latency Earphone TWS Headset Hoise-cancelling HD Calling Long Battery Life',
            'description' => 'itur:
1. Mode permainan, latensi sangat rendah, game seluler yang mulus.

2. Kualitas suara HIFI, analisis kualitas suara resolusi tinggi, mengubah ritme musik.

3. Kompartemen pengisian berkapasitas besar, pengisian Tipe-C lebih nyaman.

4. Mikrofon sensitivitas tinggi di kedua sisi, panggilan definisi tinggi, panggilan lebih jelas.

5. Penekanan kebisingan panggilan ENC secara efektif menekan kebisingan lingkungan.

6. Ini dapat dihubungkan segera setelah membuka penutup, telinga tunggal dan ganda dapat digunakan secara independen, dan dapat diaktifkan secara bebas terlepas dari master dan slave.',
            'type_id' => 3,
            'price' => 20000,
            'quantity' => 120,
            'picture' => 'images/Electronics/product-9.png'
        ]);
        Product::create([
            'name' => 'Lenovo GM2 Pro Gaming Wireless Bluetooth low-latency Earphone TWS Headset Hoise-cancelling HD Calling Long Battery Life',
            'description' => 'itur:
1. Mode permainan, latensi sangat rendah, game seluler yang mulus.

2. Kualitas suara HIFI, analisis kualitas suara resolusi tinggi, mengubah ritme musik.

3. Kompartemen pengisian berkapasitas besar, pengisian Tipe-C lebih nyaman.

4. Mikrofon sensitivitas tinggi di kedua sisi, panggilan definisi tinggi, panggilan lebih jelas.

5. Penekanan kebisingan panggilan ENC secara efektif menekan kebisingan lingkungan.

6. Ini dapat dihubungkan segera setelah membuka penutup, telinga tunggal dan ganda dapat digunakan secara independen, dan dapat diaktifkan secara bebas terlepas dari master dan slave.',
            'type_id' => 3,
            'price' => 20000,
            'quantity' => 120,
            'picture' => 'images/Electronics/product-9.png'
        ]);
        Product::create([
            'name' => 'Lenovo thinkplus XT93 True Wireless Bluetooth Earphone Mini Earbuds TWS',
            'description' => 'Vallina Outfit saat ini merupakan salah satu lini outfit muslim terbaik dan berkualitas tinggi di antara Local Brand Indonesia. 

            Bahan: Fleece 
            Ukuran: One Size Fit L 
            LD: 102 cm (-+)
            Kualitas Premium',
            'type_id' => 3,
            'price' => 90000,
            'quantity' => 30,
            'picture' => 'images/Electronics/product-10.png'
        ]);
        Product::create([
            'name' => 'Lenovo thinkplus XT93 True Wireless Bluetooth Earphone Mini Earbuds TWS',
            'description' => 'Thinkplus Lenovo xt93 True Wireless Bluetooth Earphone Mini Earbuds TWS Stereo',
            'type_id' => 3,
            'price' => 90000,
            'quantity' => 30,
            'picture' => 'images/Electronics/product-11.png'
        ]);
    }
}