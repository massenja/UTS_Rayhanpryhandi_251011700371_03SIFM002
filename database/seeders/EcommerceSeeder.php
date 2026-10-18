<?php

namespace Database\Seeders;

use App\Models\Ecommerce;
use Illuminate\Database\Seeder;

class EcommerceSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // ===== KAOS =====
            [
                'name' => 'Kaos Hitam Basic Senja',
                'description' => 'Kaos hitam polos berpotongan santai yang nyaman dipakai seharian. Gampang dipadukan dengan jeans maupun celana kargo.',
                'price' => 79000,
                'image' => 'kaos-1.jpg',
                'category' => 'Kaos',
            ],
            [
                'name' => 'Kaos Hitam Grafis Merah',
                'description' => 'Kaos hitam dengan sentuhan grafis merah yang berani. Pilihan pas untuk tampilan streetwear yang tetap simpel.',
                'price' => 119000,
                'image' => 'kaos-2.jpg',
                'category' => 'Kaos',
            ],
            [
                'name' => 'Kaos Hitam Tucked-In',
                'description' => 'Kaos hitam bersih yang cantik dimasukkan ke dalam celana jeans. Kesan kasual rapi tanpa perlu banyak aksesori.',
                'price' => 229000,
                'image' => 'kaos-3.jpg',
                'category' => 'Kaos',
            ],
            [
                'name' => 'Kaos Putih Grafis Naga Merah',
                'description' => 'Kaos putih dengan ilustrasi naga merah di bagian depan. Tampil beda dan penuh karakter untuk gaya sehari-hari.',
                'price' => 69000,
                'image' => 'kaos-4.jpg',
                'category' => 'Kaos',
            ],
            [
                'name' => 'Kaos Putih dengan Outer Biru',
                'description' => 'Kaos putih bersih yang dipadukan dengan kemeja tipis biru kehijauan sebagai outer. Cocok untuk jalan santai di akhir pekan.',
                'price' => 149000,
                'image' => 'kaos-5.jpg',
                'category' => 'Kaos',
            ],
            [
                'name' => 'Kaos Putih Clean Look',
                'description' => 'Kaos putih dengan nuansa serba terang yang segar dan rapi. Paduan sempurna dengan celana putih atau krem.',
                'price' => 259000,
                'image' => 'kaos-6.jpg',
                'category' => 'Kaos',
            ],
            [
                'name' => 'Kaos Putih Essential',
                'description' => 'Kaos putih polos yang wajib ada di lemari. Potongannya sederhana dan mudah dipasangkan dengan bawahan apa pun.',
                'price' => 99000,
                'image' => 'kaos-7.jpg',
                'category' => 'Kaos',
            ],
            [
                'name' => 'Kaos Putih Casual Day',
                'description' => 'Kaos putih santai yang dipadukan dengan jeans untuk tampilan harian yang effortless. Nyaman dipakai kuliah maupun nongkrong.',
                'price' => 129000,
                'image' => 'kemeja-1.jpg',
                'category' => 'Kaos',
            ],
            [
                'name' => 'Tank Top Rainbow Stripe',
                'description' => 'Tank top berpotongan pendek dengan garis warna-warni yang ceria. Cocok untuk cuaca hangat dan gaya yang playful.',
                'price' => 189000,
                'image' => 'kemeja-2.jpg',
                'category' => 'Kaos',
            ],
            [
                'name' => 'Kaos Putih Urban',
                'description' => 'Kaos putih berpotongan rileks untuk aktivitas di kota. Simpel, adem, dan mudah dipadukan dengan celana apa saja.',
                'price' => 219000,
                'image' => 'kemeja-3.jpg',
                'category' => 'Kaos',
            ],

            // ===== KEMEJA =====
            [
                'name' => 'Overshirt Abu Sage',
                'description' => 'Kemeja gaya overshirt berwarna abu kehijauan yang kalem. Bisa dipakai sendiri atau sebagai lapisan luar.',
                'price' => 95000,
                'image' => 'kemeja-4.jpg',
                'category' => 'Kemeja',
            ],
            [
                'name' => 'Kemeja Motif Retro',
                'description' => 'Kemeja bermotif dengan nuansa retro yang hangat. Tampil santai tapi tetap menarik perhatian.',
                'price' => 159000,
                'image' => 'kemeja-5.jpg',
                'category' => 'Kemeja',
            ],
            [
                'name' => 'Kemeja Putih Lengan Pendek',
                'description' => 'Kemeja putih lengan pendek berpotongan longgar yang adem dan rapi. Pas untuk gaya santai bernuansa terang.',
                'price' => 289000,
                'image' => 'kemeja-6.jpg',
                'category' => 'Kemeja',
            ],
            [
                'name' => 'Kemeja Putih Klasik',
                'description' => 'Kemeja putih berkancing yang timeless. Dipadukan dengan jeans langsung terlihat rapi dan segar.',
                'price' => 189000,
                'image' => 'kemeja-7.jpg',
                'category' => 'Kemeja',
            ],

            // ===== HOODIE =====
            [
                'name' => 'Hoodie Biru Muda Pastel',
                'description' => 'Hoodie biru muda berwarna lembut dengan tali serut dan kantong depan. Nyaman dan hangat untuk cuaca sejuk.',
                'price' => 179000,
                'image' => 'hoodie-1.jpg',
                'category' => 'Hoodie',
            ],
            [
                'name' => 'Hoodie Putih Clean',
                'description' => 'Hoodie putih polos dengan potongan longgar. Tampilan minimalis yang mudah dipadukan setiap hari.',
                'price' => 259000,
                'image' => 'hoodie-2.jpg',
                'category' => 'Hoodie',
            ],
            [
                'name' => 'Hoodie Hitam Minimalis',
                'description' => 'Hoodie hitam dengan tudung lebar dan logo kecil di dada. Pilihan aman untuk gaya streetwear.',
                'price' => 89000,
                'image' => 'hoodie-3.jpg',
                'category' => 'Hoodie',
            ],

            // ===== JAKET =====
            [
                'name' => 'Jaket Merah Urban Malam',
                'description' => 'Jaket merah yang mencolok dan tetap terlihat keren di bawah lampu kota. Cocok untuk kamu yang suka tampil berani.',
                'price' => 329000,
                'image' => 'jaket-1.jpg',
                'category' => 'Jaket',
            ],
            [
                'name' => 'Jaket Bomber Terracotta',
                'description' => 'Jaket bomber berwarna terracotta dengan resleting depan dan kerah ribbed. Hangat, ringan, dan gampang dipadukan.',
                'price' => 199000,
                'image' => 'jaket-2.jpg',
                'category' => 'Jaket',
            ],
            [
                'name' => 'Jaket Olive Army',
                'description' => 'Jaket hijau olive bergaya utilitarian dengan kantong praktis. Tampilan maskulin untuk aktivitas harian.',
                'price' => 349000,
                'image' => 'jaket-3.jpg',
                'category' => 'Jaket',
            ],
            [
                'name' => 'Jaket Denim Biru Muda',
                'description' => 'Jaket denim berwarna biru muda yang klasik. Dipadukan dengan atasan gelap, hasilnya kontras dan stylish.',
                'price' => 89000,
                'image' => 'jaket-4.jpg',
                'category' => 'Jaket',
            ],
            [
                'name' => 'Jaket Bulu Teddy Cokelat',
                'description' => 'Jaket berbulu lembut berwarna cokelat dengan tudung. Hangat, lucu, dan jadi pusat perhatian.',
                'price' => 359000,
                'image' => 'kemeja-8.jpg',
                'category' => 'Jaket',
            ],
            [
                'name' => 'Outer Oversize Monokrom',
                'description' => 'Outer berpotongan oversize dengan tampilan monokrom yang elegan. Cocok untuk melapisi outfit saat cuaca dingin.',
                'price' => 189000,
                'image' => 'celana-3.jpg',
                'category' => 'Jaket',
            ],

            // ===== CELANA =====
            [
                'name' => 'Celana Panjang Cokelat',
                'description' => 'Celana panjang berwarna cokelat bernuansa earth tone. Potongan lurus yang nyaman untuk gaya kasual.',
                'price' => 69000,
                'image' => 'celana-1.jpg',
                'category' => 'Celana',
            ],
            [
                'name' => 'Celana Hitam Straight Fit',
                'description' => 'Celana hitam berpotongan lurus yang rapi dan serbaguna. Pas dipadukan dengan kaos, kemeja, atau hoodie.',
                'price' => 139000,
                'image' => 'celana-2.jpg',
                'category' => 'Celana',
            ],
            [
                'name' => 'Celana Jeans Abu Muda',
                'description' => 'Celana jeans warna abu muda berpotongan lurus. Tampilan bersih yang cocok dengan atasan putih.',
                'price' => 299000,
                'image' => 'celana-4.jpg',
                'category' => 'Celana',
            ],
            [
                'name' => 'Celana Wide-Leg Motif Merah',
                'description' => 'Celana potongan lebar dengan motif merah-putih yang meriah. Ringan, adem, dan jadi titik fokus outfit.',
                'price' => 99000,
                'image' => 'celana-5.jpg',
                'category' => 'Celana',
            ],
            [
                'name' => 'Celana Slack Hitam Urban',
                'description' => 'Celana panjang hitam berpotongan rapi untuk gaya kota. Bisa dipakai santai maupun untuk tampilan yang lebih formal.',
                'price' => 169000,
                'image' => 'celana-6.jpg',
                'category' => 'Celana',
            ],
            [
                'name' => 'Celana Jogger Lilac',
                'description' => 'Celana jogger warna lilac dengan karet di pergelangan. Santai, empuk, dan memberi warna lembut pada outfit.',
                'price' => 229000,
                'image' => 'celana-7.jpg',
                'category' => 'Celana',
            ],
            [
                'name' => 'Celana Jeans Biru Tua',
                'description' => 'Celana jeans biru tua dengan detail kantong dan jahitan yang kuat. Klasik dan awet untuk dipakai sehari-hari.',
                'price' => 129000,
                'image' => 'celana-8.jpg',
                'category' => 'Celana',
            ],
            [
                'name' => 'Celana Putih Garis Tipis',
                'description' => 'Celana putih potongan lebar dengan garis vertikal halus. Ringan dan elegan untuk tampilan santai yang rapi.',
                'price' => 99000,
                'image' => 'celana-9.jpg',
                'category' => 'Celana',
            ],

            // ===== SWEATER =====
            [
                'name' => 'Sweater Rajut Cokelat Muda',
                'description' => 'Sweater rajut dengan warna cokelat muda yang hangat. Teksturnya lembut dan nyaman untuk cuaca sejuk.',
                'price' => 79000,
                'image' => 'sweater-1.jpg',
                'category' => 'Sweater',
            ],
            [
                'name' => 'Sweater Rajut Mustard Krem',
                'description' => 'Sweater rajut berwarna mustard dan krem yang cerah. Memberi kesan hangat dan manis pada outfit.',
                'price' => 119000,
                'image' => 'sweater-2.jpg',
                'category' => 'Sweater',
            ],
            [
                'name' => 'Sweater Rajut Hijau Botol',
                'description' => 'Sweater rajut hijau tua berlengan panjang dengan siluet longgar. Elegan dan hangat untuk gaya sehari-hari.',
                'price' => 199000,
                'image' => 'sweater-3.jpg',
                'category' => 'Sweater',
            ],
            [
                'name' => 'Sweater Rajut Pink Soft',
                'description' => 'Sweater rajut merah muda dengan kerah tinggi. Lembut di kulit dan manis untuk tampilan kasual.',
                'price' => 279000,
                'image' => 'sweater-4.jpg',
                'category' => 'Sweater',
            ],
            [
                'name' => 'Sweater Rajut Abu Klasik',
                'description' => 'Sweater rajut abu-abu dengan tekstur tebal. Warna netralnya cocok dipadukan dengan apa saja.',
                'price' => 99000,
                'image' => 'sweater-5.jpg',
                'category' => 'Sweater',
            ],
        ];
        $categoryPrefixes = ['kaos', 'kemeja', 'hoodie', 'jaket', 'celana', 'sweater'];
        $unrecognizedImages = [];
        foreach (glob(public_path('assets/images/*')) ?: [] as $imagePath) {
            $imageName = basename($imagePath);
            $extension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
            if (!in_array($extension, ['jpg', 'jpeg', 'png', 'webp', 'gif'], true) || in_array($imageName, ['hero.jpg', 'banner.jpg'], true)) {
                continue;
            }
            $prefix = strtolower(explode('-', $imageName, 2)[0]);
            if (!in_array($prefix, $categoryPrefixes, true)) {
                $unrecognizedImages[] = $imageName;
            }
        }
        foreach ($products as $product) {
            Ecommerce::create($product);
        }
        if ($unrecognizedImages !== []) {
            echo 'Foto dengan kategori tidak dikenali: ' . implode(', ', $unrecognizedImages) . PHP_EOL;
        }
    }
}
