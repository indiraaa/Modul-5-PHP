# Modul-5-PHP
1. Fungsi adalah sekumpulan intruksi yang dibungkus dalam sebuah blok. Fungsi dapat digunakan ulang tanpa harus menulis ulang instruksi di dalamnya.

Fungsi pada PHP dapat dibuat dngan kata kunci function, lalu diikuti dengan nama fungsinya.
2. a. Fungsi Built - in
      Fungsi built-in adalah fungsi yang disediakan oleh PHP dan dapat langsung dipakai. Fungsi dengan jenis ini tidak perlu kita deklarasikan lagi karena pada bahasa pemrograman PHP sendiri sudah menyediakan fitur tersebut. 
   b. UDF (User Defined Function)
      User defined function (UDF) adalah function yang dibuat oleh pemrogram, karena tidak ada function built-in yang tersedia untuk penyelesaikan kebutuhan pemrogram. UDF terkadang dibuat karena built-in function yang disediakan tidak sesuai dengan kebutuhan.
      UDF dibuat dan diletakkan dimana saja dalam script PHP, sebaiknya diletakkan pada bagian paling atas script PHP agar memudahkan proses debugging dalam tahap pembuatan dan pengembangan program.
      User defined function (UDF) dibutuhkan untuk memudahkan proses pengembangan suatu aplikasi. UDF dibuat oleh pemrogram.
   c. Function External    
      Function external merupakan daftar function yang belum diaktifkan (di-link) dalam keseluruhan modul PHP, functionnya diletakkan pada library atau file yang terpisah dari modul PHP. Function external ini dapat diaktifkan secara otomatis dengan meregistrasikan pada file PHP.ini.
      Apabila ada library function yang belum diaktifkan secara otomatis maka pemanggilannya harus didahului dengan memberikan perintah secara eksplisit untuk meload library dari function external tersebut berada supaya dapat dipanggil atau digunakan oleh script PHP.
