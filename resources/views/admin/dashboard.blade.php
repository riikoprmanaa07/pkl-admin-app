<h1>Selamat Datang di Dashboard Admin!</h1>

<p>Anda telah berhasil login sebagai admin.</p>

{{-- Tombol Logout --}}
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>