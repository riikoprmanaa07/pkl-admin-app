<form action="{{ route('formulir.store') }}" method="POST">
    @csrf

    <label for="id_pelatihan">Nama Pelatihan</label>
    <select name="id_pelatihan" id="id_pelatihan">
        @foreach($diklats as $id => $nama)
            <option value="{{ $id }}">{{ $nama }}</option>
        @endforeach
    </select>

    <label for="nip_widyaiswara">Nama Widyaiswara</label>
    <select name="nip_widyaiswara" id="nip_widyaiswara">
        @foreach($widyaiswaras as $nip => $nama)
            <option value="{{ $nip }}">{{ $nama }}</option>
        @endforeach
    </select>

    <label for="tanggal">Tanggal</label>
    <input type="date" name="tanggal" id="tanggal">

    <label for="jam_mulai">Jam Mulai</label>
    <input type="time" name="jam_mulai" id="jam_mulai">

    <label for="jam_selesai">Jam Selesai</label>
    <input type="time" name="jam_selesai" id="jam_selesai">

    <label for="jp">Jumlah JP</label>
    <input type="number" name="jp" id="jp">

    <button type="submit">Simpan</button>
</form>