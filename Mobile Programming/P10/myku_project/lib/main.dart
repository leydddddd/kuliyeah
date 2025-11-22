import 'package:flutter/material.dart';
import 'dart:math';

void main() {
  // Titik awal aplikasi Flutter
  // runApp() akan memuat widget pertama (root widget)
  runApp(MyApp());
}

// -------------------------------------------------------------
// 1. StatelessWidget = widget yang TIDAK punya state
//    (konfigurasinya tetap, tidak berubah saat aplikasi berjalan)
// -------------------------------------------------------------
class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    // MaterialApp = widget pembungkus utama aplikasi gaya material design
    return MaterialApp(
      title: 'Dasar Flutter Sederhana',

      // home = halaman pertama yang ditampilkan
      home: CounterPage(),

      // menghilangkan tulisan debug di pojok kanan atas
      debugShowCheckedModeBanner: false,
    );
  }
}

// -------------------------------------------------------------
// 2. StatefulWidget = widget yang PUNYA state (data yang bisa berubah)
//    Contoh: angka counter, nilai input, posisi animasi, dll.
// -------------------------------------------------------------
class CounterPage extends StatefulWidget {
  const CounterPage({super.key});

  @override
  _CounterPageState createState() => _CounterPageState();
}

// -------------------------------------------------------------
// 3. State class = tempat menyimpan dan mengubah data
//    State inilah yang membuat UI bisa berubah (rebuild)
// -------------------------------------------------------------
class _CounterPageState extends State<CounterPage> {
  // State (data) yang bisa berubah
  int _count = 0;

  // Fungsi untuk mengubah state
  // setState() memberi tahu Flutter untuk melakukan rebuild UI
  void _increment() {
    setState(() {
      _count++;
    });
  }

  void _removal() {
    setState(() {
      _count--;
    });
  }

  void _factors() {
    setState(() {
      _count = pow(_count, 2).toInt();
    });
  }

  // -------------------------------------------------------------
  // 4. build() = metode yang membangun UI (Widget Tree)
  //    Setiap kali setState() dipanggil, build() akan dipanggil ulang
  // -------------------------------------------------------------
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      // AppBar = bagian atas aplikasi
      appBar: AppBar(title: Text('Counter Sederhana')),

      // body = isi halaman
      body: Center(
        child: Column(
          mainAxisSize: MainAxisSize.min, // susun widget secara vertikal
          children: [
            // Contoh Stateless Widget di dalam UI
            Text('Angka saat ini:', style: TextStyle(fontSize: 20)),

            SizedBox(height: 8),

            // Tampilkan nilai state
            Text(
              '$_count',
              style: TextStyle(fontSize: 32, fontWeight: FontWeight.bold),
            ),

            SizedBox(height: 16),

            // Tombol untuk menaikkan angka
            SizedBox(height: 8),

            Row(
              mainAxisSize: MainAxisSize.min,
              children: [
                ElevatedButton(onPressed: _removal, child: Text("Kurangi")),

                SizedBox(width: 5),

                ElevatedButton(
                  onPressed: _increment, // saat ditekan, panggil _increment()
                  child: Text('Tambah'),
                ),

                SizedBox(width: 5),

                ElevatedButton(onPressed: _factors, child: Text("Faktor")),
              ],
            ),
          ],
        ),
      ),
    );
  }
}

/*
========================
PENJELASAN
========================

Mengapa kode diatas dianggap kerangka dasar Flutter?
1. Selalu dimulai dengan main() + runApp()
Semua aplikasi Flutter dimulai dari sini.

2. Selalu ada root widget (biasanya MaterialApp)
Ini adalah “rumah besar” aplikasi:
tema,
halaman awal,
route,
dll.

3. Selalu memakai build() untuk membentuk Widget Tree
Karena UI Flutter = susunan widget dalam method build().
4. Selalu ada penggabungan antara:
StatelessWidget (UI yang tidak berubah),
StatefulWidget (UI yang bisa berubah / interaktif).
Hampir semua app butuh keduanya.

5. Selalu menggunakan setState() atau state management lain
Di awal belajar Flutter, setState() adalah dasar untuk membuat UI dinamis.
Pada aplikasi besar, state management bisa naik level:
Provider,
Bloc,
Riverpod,
MobX,
GetX,
dsb.
Namun fondasinya tetap sama: State → Rebuild → UI berubah.

6. Struktur Scaffold dan widget dasar
Kerangka UI hampir selalu menggunakan:
AppBar,
Body,
Column/Row,
Text, Button, Container.
Ini adalah “blok Lego” standar untuk membuat halaman apa pun.

Kesimpulan
Kode diatas adalah kerangka dasar yang akan terus kaanda gunakan
walaupun nanti aplikasimu berkembang menjadi besar, kompleks, dan profesional.

Struktur dasarnya tidak berubah:
main() → runApp() → root widget → halaman → state → widget tree → rebuild UI
*Thank you for your business! We look forward to working with you again.*
*/
