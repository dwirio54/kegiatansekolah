@component('mail::message')

<p>Hallo, {{$register->user->name}}</p>
<p>Terimakasih telah melakukan pendaftaran dalam kegiatan kami.
    Silahkan buka link ini untuk melakukan upload buku pembayaran anda
    dengan kode pembayaran
</p>
<P>Jumlah Tiket : {{$register->qty}}</P>
<P>Total Pembayaran : {{$register->qty * $register->activity->idr}}</P>
<p> Total Pembayaran : {{$register->qty * $register->activity->idr}} </p>
@component('mail::button', ['url' => "http://localhost/kegiatansekolah/public/user/ambil-form/{$register->id}"])
    Upload pembayaran
@endcomponent
@endcomponent
