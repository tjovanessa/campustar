<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CareerAptitudeTestQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            'Saya seorang pembicara yang baik.',
            'Saya senang bercerita, termasuk cerita dongeng dan cerita yang lucu.',
            'Saya memiliki ingatan yang baik untuk hal-hal yang sepele.',
            'Dalam berargumentasi atau berpendapat saya cenderung menggunakan kata-kata sindiran.',
            'Jika sesuatu rusak dan tidak berfungsi saya akan membaca panduannya terlebih dahulu.',
            'Saya membaca buku hanya sebagai hobi.',
            'Saya senang membicarakan dan menulis ide-ide saya.',
            'Dalam kerja kelompok untuk menyiapkan sebuah presentasi, saya lebih memilih untuk menulis dan melakukan riset pustaka.',
            'Jika saya harus mengingat sesuatu, saya menciptakan irama atau kata-kata yang membantu saya untuk mengingatnya.',
            'Saya suka permainan kata-kata, seperti scrabble atau puzzle.',
            'Dapat memecahkan soal-soal hitungan adalah hal yang menyenangkan bagi saya.',
            'Saya sangat menikmati pelajaran matematika.',
            'Saya menyukai komputer dan permainan angka-angka.',
            'Dalam berargumentasi, saya mencoba mencari solusi yang adil dan logis.',
            'Jika saya harus mengingat sesuatu, saya cenderung menempatkan setiap kejadian dalam urutan yang logis.',
            'Saya suka bermain catur, checkers, atau monopoli.',
            'Saya senang mencari tahu bagaimana cara kerja setiap benda.',
            'Dalam kerja kelompok, saya lebih memilih membuat diagram dan grafik.',
            'Saya menyukai permainan logika.',
            'Jika ada sesuatu yang rusak dan tidak berfungsi, saya akan melihat bagian-bagiannya dan mencari tahu bagaimana cara kerjanya.',
            'Saya senang menggambar atau menciptakan sesuatu.',
            'Saya menikmati hobi saya dalam bidang fotografi.',
            'Jika saya harus mengingat sesuatu yang rumit, saya menggambar diagram untuk membantu mengingatnya.',
            'Saya sering melamun.',
            'Saya lebih memilih peta daripada petunjuk tertulis dalam mencari sebuah alamat.',
            'Dalam kerja kelompok, saya lebih memilih menggambar hal-hal yang penting.',
            'Dalam berargumentasi, biasaya saya menjaga jarak atau tetap berdiam diri.',
            'Saya senang membuat coret-coretan di atas kertas.',
            'Saat membaca majalah, saya lebih suka melihat gambarnya daripada membaca artikelnya.',
            'Jika sesuatu rusak dan tidak berfungsi, saya cenderung mempelajari diagram mengenai cara kerjanya.',
            'Saya senang mengetuk-ngetukkan jari atau memainkan pulpen atau pensil selama jam pelajaran.',
            'Dalam kerja kelompok saya lebih memilih memindahkan barang atau membuat suatu bentuk.',
            'Ketika melihat benda-benda yang menarik hati, saya senang menyentuhnya.',
            'Saya menyukai kegiatan seperti pertukangan, menjahit, dan membuat bentuk-bentuk.',
            'Saya suka berolahraga, saya juga suka senam.',
            'Saya tidak bisa duduk diam dalam waktu yang lama.',
            'Jika saya harus mengingat sesuatu, saya menuliskannya berkali-kali sampai saya memahaminya.',
            'Saat berdiskusi saya cenderung menyerang atau malah menghindari perdebatan.',
            'Saya menggunakan banyak gerakan tubuh ketika berbicara.',
            'Jika sesuatu rusak dan tidak berfungsi, saya cenderung memisahkan setiap bagian lalu menggabungkannya kembali.',
            'Saya suka bernyanyi.',
            'Saya bisa menghafal nada-nada dari banyak lagu.',
            'Saya suka mendengarkan musik sambil belajar atau sambil membaca buku.',
            'Saya bisa memainkan salah satu alat musik dengan baik.',
            'Saya cenderung bersenandung ketika sedang bekerja.',
            'Saya senang mendengarkan musik dan radio.',
            'Jika saya harus mengingat sesuatu, saya mencoba untuk membuat irama tentang hal tersebut.',
            'Dalam berargumentasi, saya cenderung berteriak atau memukul meja/benda atau bergerak dalam satu irama.',
            'Dalam kerja kelompok, saya lebih suka menggunakan kata-kata baru dari nada atau musik yang sudah dikenal.',
            'Jika ada masalah, saya cenderung mengetuk-ngetuk jari saya membentuk suatu irama sambil mencari jalan keluar.',
            'Saya senang berkumpul atau berorganisasi.',
            'Teman-teman sering meminta saran dari saya karena saya dianggap pemimpin mereka.',
            'Dalam berargumentasi, saya cenderung meminta bantuan teman atau pihak-pihak yang ahli dalam bidang tersebut.',
            'Saya suka membantu mengajar murid-murid lain.',
            'Saya mempunyai banyak teman akrab.',
            'Saya senang bekerja sama dalam kelompok.',
            'Saya mampu bergaul baik dengan orang lain.',
            'Dalam kerja kelompok, saya lebih memilih mengatur tugas dalam kelompok.',
            'Jika saya harus mengingat sesuatu, saya meminta seseorang untuk menguji saya apakah saya sudah memahaminya.',
            'Jika sesuatu rusak dan tidak berfungsi, saya mencari seseorang yang dapat menolong saya membetulkannya.',
            'Saya tidak suka keramaian.',
            'Saya memahami kelebihan dan kekurangan diri saya.',
            'Saya suka menulis buku harian.',
            'Saya menyukai diri saya sendiri.',
            'Saya suka bekerja sendirian tanpa ada gangguan orang lain.',
            'Jika saya harus mengingat sesuatu, saya cenderung menutup mata saya dan mencoba merasakan pengalaman itu kembali.',
            'Dalam kerja kelompok, saya senang mengontribusikan sesuatu yang unik berdasarkan apa yang saya miliki dan rasakan.',
            'Dalam berargumentasi saya biasanya menghindar atau keluar ruangan hingga saya dapat menenangkan diri.',
            'Saya memiliki tekad yang kuat, mandiri, dan berpendirian kuat. Saya tidak mudah ikut-ikutan orang lain.',
            'Jika sesuatu rusak dan tidak berfungsi, saya mempertimbangkan apakah benda tersebut masih layak untuk diperbaiki.',
            'Saya senang berkebun.',
            'Saya senang mengoleksi perangko, koin, dan barang semacamnya.',
            'Ketika dewasa, saya ingin pergi dari kota yang ramai ke tempat yang masih alami untuk menikmati alam.',
            'Saya sangat memerhatikan sekeliling dan apa yang sedang terjadi di sekitar saya.',
            'Saya senang berjalan-jalan ke hutan atau taman untuk melihat-lihat pohon atau bunga.',
            'Saya senang mempelajari nama dan jenis makhluk hidup atau tanaman di sekitar lingkungan saya.',
            'Jika saya harus mengingat sesuatu, saya cenderung mengategorikannya dalam kelompok-kelompok.',
            'Dalam kerja kelompok, saya lebih memilih mengatur dan mengelompokkan informasi dalam kategori-kategori sehingga mudah dimengerti.',
            'Dalam berargumentasi, saya cenderung membandingkan lawan saya dengan seseorang atau sesuatu yang pernah saya baca atau dengar lalu bereaksi.',
            'Jika sesuatu rusak dan tidak berfungsi, saya memerhatikan sekeliling saya untuk melihat apa yang bisa saya temukan untuk memperbaikinya.',
        ];

        DB::table('career_aptitude_test_questions')->insert(array_map (function($question) {
            return ['question' => $question];
        }, $questions));
    }
}
