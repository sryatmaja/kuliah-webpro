# Repositori Tugas Mata Kuliah Pemrograman Web

Repositori ini digunakan untuk menyimpan tugas yang dikerjakan selama masa kuliah. 

## Deskripsi

Repositori ini berisi kode PHP yang menggunakan framework CodeIgniter 3. Kode ini mencakup tugas-tugas yang diberikan selama kuliah.

## Struktur Direktori

Repositori ini memiliki struktur direktori berikut:

- `controller`: Sesuai namanya, file-file yang ada pada folder ini berguna sebagai kontrol utama pada project yang dibuat dengan menggunakan function yang ada pada file di dalam folder models, dan menampilkan tampilan yang tersimpan pada folder view.

- `models`: Singkatnya file-file yang berisikan beberapa function siap pakai yang akan digunakan pada file controller.

- `view`: Direktori ini berisi file-file view yang digunakan untuk menghasilkan halaman web yang nantinya akan digunakan pada file controller.

## Tugas Modul 3
```
files = [
    'controller' => $modul_3,
    'models' => array(['pengamatan2_2_model', 'pengamatan2_4_model', 'hitung_luas_lingkaran_2_model', 'hitung_luas_lingkaran_4_model']),
    'views' => array(['pengamatan2_3_view', 'pengamatan2_4_view', 'hitung_luas_lingkaran_3_view', 'hitung_luas_lingkaran_4_view'])
]
```
## Helper
```
cara panggil helper
/config/autoload.php : line 92
         atau
$this->load->helper('array');

files = [
    'controller' => $cobahelper,
    'models' => $na,
    'views' => array(['cobahelper_view', 'aritmatika_helper_view'])
]
```
## Tugas Modul 4
```
modul_4_hitunh_ppn = [
    'controller' => $ppn,
    'models' => $ppn_model,
    'views' => [$ppn_input, $ppn_output]
];

modul_4_total_bayar_dengan_ppn = [
    'controller' => $bayar,
    'models' => $bayar_model,
    'views' => array(['bayar_total', 'bayar_total_view'])
]

```


## End of note

Jangan suka bolos kek adit
૮ ˶ᵔ ᵕ ᵔ˶ ა
