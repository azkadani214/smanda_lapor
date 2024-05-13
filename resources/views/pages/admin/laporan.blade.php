@extends('layouts.admin')

@section('title')
Laporan
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container grid px-6 mx-auto">
    <div class="my-6 mb-6">
      <a href="{{ url('admin/laporan/cetak')}} "
        class="px-5 py-3  font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
        Export ke PDF
      </a>
    </div>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
          </ul>
        </div>
        @endif
        <style>
<style>
  /* CSS untuk modal */
  .modal {
    display: none; /* Sembunyikan modal secara default */
    position: fixed; /* Tetapkan posisi modal */
    z-index: 1; /* Atur z-index modal agar muncul di atas konten lain */
    left: 0;
    top: 0;
    width: 100%; /* Atur lebar modal menjadi 100% dari lebar layar */
    height: 100%; /* Atur tinggi modal menjadi 100% dari tinggi layar */
    overflow: auto; /* Aktifkan overflow untuk memungkinkan scroll jika konten lebih panjang dari jendela modal */
    background-color: rgba(0, 0, 0, 0.4); /* Buat latar belakang semi transparan */
  }

  /* Konten modal */
  .modal-content {
    background-color: #fefefe;
    margin: 5% auto; /* Atur margin atas dan bawah untuk menempatkan modal di tengah vertikal */
    padding: 20px;
    border: 1px solid #888;
    width: 70%; /* Atur lebar konten modal */
    max-height: 80%; /* Atur tinggi maksimum konten modal */
    overflow-y: auto; /* Aktifkan overflow untuk konten modal jika lebih panjang dari tinggi maksimum */
    border-radius: 10px; /* Tambahkan border radius agar modal terlihat lebih rapi */
    position: relative; /* Atur posisi relatif untuk konten modal */
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* Tambahkan bayangan untuk efek ketinggian */
  }

  /* Tombol tutup modal */
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    position: absolute; /* Atur posisi absolut untuk tombol tutup */
    top: 10px; /* Geser tombol tutup ke atas */
    right: 20px; /* Geser tombol tutup ke kanan */
  }

  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }
</style>

        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">No</th>
              <th class="px-4 py-3">NIS</th>
              <th class="px-4 py-3">Nama</th>
              <th class="px-4 py-3">Pengaduan</th>
              <th class="px-4 py-3">Tanggal</th>
              <th class="px-4 py-3">Status</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @forelse ($pengaduan as $item)
            <tr class="text-gray-700 dark:text-gray-400 ">
              <td class="px-4 py-3 text-sm">
                {{ $item->id }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $item->user_nik }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $item->name }}
              </td>
              <td class="px-4 py-3 text-sm pengaduan-detail" data-pengaduan="{{ $item->description }}">
                {{ \Illuminate\Support\Str::limit($item->description, 20, $end='...') }}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $item->created_at->format('l, d F Y') }}
              </td>
              @if($item->status =='Belum di Proses')
              <td class="px-4 py-3 text-xs">
                <span
                  class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-md dark:text-red-100 dark:bg-red-700">
                  {{ $item->status }}
                </span>
              </td>
              @elseif ($item->status =='Sedang di Proses')
              <td class="px-4 py-3 text-xs">
                <span
                  class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-md dark:text-white dark:bg-orange-600">
                  {{ $item->status }}
                </span>
              </td>
              @else
              <td class="px-4 py-3 text-xs">
                <span
                  class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-md dark:bg-green-700 dark:text-green-100">
                  {{ $item->status }}
                </span>
              </td>
              @endif
            </tr>
            @empty
            <tr>
              <td colspan="7" class="text-center text-gray-400">
                Data Kosong
              </td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

  </div>
</main>

<!-- Modal -->
<div id="pengaduanModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p id="pengaduanDetail"></p>
  </div>
</div>

<script>
  // Dapatkan elemen modal dan tombol tutup
  var modal = document.getElementById("pengaduanModal");
  var span = document.getElementsByClassName("close")[0];

  // Dapatkan sel pengaduan
  var pengaduanCells = document.querySelectorAll('.pengaduan-detail');

  // Atur event handler untuk setiap sel pengaduan
  pengaduanCells.forEach(function(cell) {
    cell.addEventListener('click', function() {
      // Tampilkan modal dan isi kontennya dengan detail pengaduan
      document.getElementById('pengaduanDetail').textContent = cell.getAttribute('data-pengaduan');
      modal.style.display = "block";
    });
  });

  // Event handler untuk menutup modal ketika tombol tutup diklik
  span.onclick = function() {
    modal.style.display = "none";
  }

  // Event handler untuk menutup modal ketika area di luar modal diklik
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>
@endsection
