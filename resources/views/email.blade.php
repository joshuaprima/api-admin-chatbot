@foreach($data as $dt)
<h3>Halo {{$dt->nama_tk}}! <br>Akun anda akan direset dengan data:</h3>

<p>NIK : {{$dt->nik_tk}}</p>
<p>No. KPJ : {{$dt->no_kpj}}</p>
<p>Nama Ibu : {{$dt->nama_ibu}}</p>
<p>Email: {{$dt->email}}</p>
@endforeach
<h4>Kode reset : {{$digit}}</h4>
