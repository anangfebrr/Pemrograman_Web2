@php

$nama = "Anang Febryan Sutarja";
$nilai =  59.99;
echo "Halo ". $nama;
echo "<br>";
echo "Nilai anda adalah ". $nilai;

@endphp
{{--  Struktur if  --}}
@if ($nilai >= 60)
    @php $ket = "Lulus"; @endphp
@else
    @php $ket = "Gagal"; @endphp
@endif

siswa {{$nama}} dengan nilai {{$nilai}}
<br>
dinyatakan {{$ket}}
    
    