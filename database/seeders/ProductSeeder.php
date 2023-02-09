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
            'name' => 'Westlife Concert 2023',
            'description' => ' Grup vokal dengan penjualan album terlaris di Inggris pada abad ke-21, Westlife, akan datang ke Indonesia untuk “Their biggest ever stadium show in Indonesia 2023”. Konser bertajuk Westlife The Wild Dreams Tour 2023 Jakarta yang dipromotori oleh PK Entertainment dan Sound Rhythm ini akan mengguncang Stadion Madya Gelora Bung Karno Jakarta pada Sabtu, 11 Februari 2023. Semua tiket untuk pertunjukan konser Westlife The Wild Dreams Tour 2023 Jakarta telah habis terjual dengan cepat. Dengan begitu, banyak penggemar Westlife yang masih mencari tiket untuk konser Westlife terbesar yang berskala stadion di Indonesia pada Februari tahun depan. Melalui konfirmasi dari pihak manajemen Westlife, pihak penyelenggara PK Entertainment & Sound Rhythm baru saja mendapat informasi karena permintaan yang sangat tinggi dari para penggemar Westlife di Indonesia dan jadwal tur Westlife telah padat sehingga manajemen harus mencari tanggal yang masih memungkinkan untuk mengadakan show tambahan yang akan dilakukan di luar daerah Ibukota Jakarta atau skala Regional Show.',
            'type_id' => 1,
            'price' => 2370047,
            'quantity' => 100,
            'picture' => 'images/Konser/Westlife Concert 2023.png'
        ]);

        Product::create([
            'name' => 'BlackPink Concert 2023',
            'description' => 'BLACKPINK IN YOUR AREAAA~
             Grup K-pop legendaris, BLACKPINK akan datang kembali ke Jakarta untuk mempromosikan album terbaru mereka, BORN PINK melalui tur dunia mereka yang bertajuk, BLACKPINK WORLD TOUR [BORN PINK] JAKARTA pada tanggal 11 & 12 Maret 2023 di Stadion Utama Gelora Bung Karno, Jakarta!
             Grup beranggotakan empat orang ini akan menyapa BLINK Indonesia selama dua hari! Jadi, BLINKS, persiapkan dirimu untuk menari dan menyanyi bersama lagu-lagu hits mereka mulai dari Pink Venom, DDU-DU DDU-DU, Shut Down, BOOMBAYAH, dan masih banyak lagi!
            Segera beli tiket konser BLACKPINK ',
            'type_id' => 1,
            'price' => 2679500,
            'quantity' => 100,
            'picture' => 'images/Konser/BlackPink 2023.jpg'
        ]);
        Product::create([
            'name' => 'Ever Blast Concert 2023',
            'description' => 'Everblast Festival merupakan jadwal konser musik tahun 2023 yang tidak boleh kamu lupakan. Soalnya, acara ini bertaburan musisi lokal dan internasional, seperti Simple Plan, Hoobastank, Padi Reborn, sampai J-Rocks. Konsernya diadakan pada tanggal 4-5 Maret 2023 di Gambir Expo Kemayoran, Jakarta. ',
            'type_id' => 1,
            'price' => 1300000,
            'quantity' => 100,
            'picture' => 'images/Konser/Ever_Blast.jpg'
        ]);

        Product::create([
            'name' => 'Arctic Monkeys Concert 2023',
            'description' => 'Pelantun lagu Do I Wanna Know? ini, akhirnya kembali lagi mengadakan konser di Asia, salah satunya Jakarta. Kalau ingin menonton, konsernya berlangsung pada 18 Maret 2023 di Beach International Stadium, Ancol. ',
            'type_id' => 1,
            'price' => 2832461,
            'quantity' => 125,
            'picture' => 'images/Konser/Arctic Monkeys.jpg'
        ]);



        Product::create([
            'name' => 'Dufan Ancol Jakarta',
            'description' => 'Mencari wahana bermain yang enggak jauh dari rumahmu? Yuk Lepas penatmu dengan bermain di Dunia Fantasi (Dufan) Ancol. Banyak wahana asyik yang ada di Dufan dan terbagi menjadi empat kategori, yakni Children Rides, Family Ride, Water Ride, dan Thrill Ride.

            Di wahana Children Rides, anak-anak bisa bermain di atraksi Ontang-anting. Permainan ini akan membawa anak-anak beterbangan di udara dengan kursi yang mereka duduki. Selain itu, anak-anak juga bisa mengunjungi wahana lainnya, seperti Istana Boneka, Bianglala, Perang Bintang, dan lainnya.
            
            Buat kamu yang ingin memacu adrenalin, enggak ada salahnya mencoba wahana-wahana di Thrill Ride. Kamu bisa naik Roller Coaster untuk menikmati rasanya naik dan turun kereta dengan kecepatan tinggi sampai membuatmu berteriak. Wahana menantang lainnya yang bisa kamu coba adalah Halilintar, Hysteria, Tornado, dan Kicir-kicir.
            
            Jam kunjungan KHUSUS di Pantai sepanjang kawasan Symphony of The Sea:
            
            Kunjungan Sesi 1: 06.00-11.00 WIB
            Kunjungan Sesi 2: 11.00-16.00 WIB
            Kunjungan Sesi 3: 16.00-21.00 WIB
            Pembatasan ini hanya berlaku di pantai sepanjang kawasan Symphony of The Sea sesuai tiket masuk pantai yang kamu pilih. Di luar jam kunjungan, kamu tetap dapat melakukan rekreasi sesuai jam operasional di Dunia Fantasi, Seaworld Ancol, Ocean Dream Samudra, Faunaland, Gondola, Allianz Ecopark, Pasar Seni, Pantai Indah, Pantai Festival, dan Restoran. ',
            'type_id' => 2,
            'price' => 189500,
            'quantity' => 100,
            'picture' => 'images/Wisata/dufan.jpg'
        ]);

        Product::create([
            'name' => 'Trans Studio Bandung',
            'description' => 'Tempat wisata di Indonesia memang beragam dan tidak ada habisnya untuk dinikmati. Salah satu provinsi favorit para pelancong adalah Jawa Barat. Lokasinya yang dekat dengan Jakarta membuat Jawa Barat selalu ramai di akhir pekan. Tempat wisata di Jawa Barat memang sebagian besar menyuguhkan keindahan alam yang menakjubkan.',
            'type_id' => 2,
            'price' => 166250,
            'quantity' => 50,
            'picture' => 'images/Wisata/TransStudio Bandung.jpg'
        ]);

        Product::create([
            'name' => 'Universal Singapore',
            'description' => 'Ajak keluargamu untuk senang-senang di Universal Studios Singapore! Jelajahi beragam atraksi asyik di beberapa zona tematik mulai dari Hollywood, New York, hingga Mesir Kuno.

            Tantang adrenalinemu dengan naik roller coaster yang mendebarkan atau kejar-kejaran dengan T-Rex di The Lost World.
            
            Untuk kamu penggemar film, lihat beberapa karakter film Hollywood. Siapkan kameramu dan foto-foto ya!    ',
            'type_id' => 2,
            'price' => 710331,
            'quantity' => 100,
            'picture' => 'images/Wisata/Universal Singapore.jpg'
        ]);
        Product::create([
            'name' => 'Disney Land Japan',
            'description' => 'Sering dicap sebagai tempat paling menyenangkan di muka Bumi, Tokyo Disneyland adalah taman bermain tematik yang cocok dikunjungi bareng keluarga dan sahabat! Kamu akan melihat dan berinteraksi dengan karakter-karakter familiar dari Disney, seperti Mickey Mouse, Donald Duck, Cinderella, dan lainnya! Gak cuma itu aja, kamu juga bisa menaiki berbagai macam wahana yang seru, seperti Jungle Cruise, Splash Mountain, dan Pirates of the Caribbean! Jangan lupa untuk menyaksikan parade Dreaming Up! serta pertunjukan kembang api di Disney Light the Night yang akan membuatmu berdecak kagum.',
            'type_id' => 2,
            'price' => 1024900,
            'quantity' => 100,
            'picture' => 'images/Wisata/Disney Land Japan.jpg'
        ]);

        //Gunung

        Product::create([
            'name' => 'Paket Mendaki Gunung Agung (Private Tour)',
            'description' => 'Ringkasan
            Melihat matahari terbit dari ketinggian Gunung berapi aktif di Bali
            Nikmati pengalaman pendakian dengan pemandu yang profesional
            Terdapat dua pilihan rute untuk pendakian yang bisa dipilih
            Layanan private tour peserta tidak digabung dengan grup lain',
            'type_id' => 3,
            'price' => 900000,
            'quantity' => 10,
            'picture' => 'images/Gunung/Gunung Agung.png'
        ]);
        Product::create([
            'name' => 'PAKET TREKKING RINJANI 3 HARI 2 MALAM VIA SEMBALUN',
            'description' => 'Selama 3 hari 2 malam dimana satu malam diantaranya anda akan menginap di salah satu penginapan di Desa Sembalun, barulah keesokan harinya anda akan melakukan trekking di Gunung Rinjani melalui jalur Sembalun dan turunnya pun kembali lagi melaului jalur yang sama.',
            'type_id' => 3,
            'price' => 1780000,
            'quantity' => 10,
            'picture' => 'images/Gunung/Gunung_Sembalun_Lombok.jpg'
        ]);
        Product::create([
            'name' => 'Oneasia Mount Pinang Panoramic Tour Package By OneAsia Tours Indonesia',
            'description' => 'Melihat pemandangan saat trekking menuju Gunung Pinang.
            Menikmati suasana sore hari dan foto-foto di Karang Balong.
            Mengunjungi Anyer Mercusuar dan belanja di Anyer.
            Cocok untuk: Sang Petualang dan Geng Asyik.',
            'type_id' => 3,
            'price' => 3646500,
            'quantity' => 15,
            'picture' => 'images/Gunung/Gunung Pinang.png'
        ]);
        Product::create([
            'name' => 'Mount Kerinci - Gunung Tujuh',
            'description' => 'The 5 days Climb Mount Kerinci include visit Lake Gunung Tujuh –  a lost world hidden in the clouds,  after summit Mount Kerinci.  Lake Gunung Tujuh (1,996 m asl)  has a breathtaking and mysterious panoramic non-active watered crater of 1,000 hectares surrounded by the 7 peaks and pristine rain forest with abundant wildlife. It is the highest altitude fresh Water Lake in South East Asia.',
            'type_id' => 3,
            'price' => 2100000,
            'quantity' => 10,
            'picture' => 'images/Gunung/Gunung_Kerinci_dari_Muaralabuh.jpg'
        ]);
    }
}