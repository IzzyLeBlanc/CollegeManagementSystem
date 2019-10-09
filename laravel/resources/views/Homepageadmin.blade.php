@extends('layouts.layout')
@section('title')
    Laman Utama Admin
@endsection
@section('contents')
    
    <div>
        <form action="post">
            <div>
                <button type="button1" name="senarai">SENARAI</button>
            </div>
            <div>
                <button type="button2" name="daftarpel">Pendaftaran Pelajar/Staff</button>
            </div>
            <div>
                <button type="button8" name="daftarrek">Pendaftaran Rekod Bilik</button>
            </div>
            <div>
                <button type="button3" name="bilik">Penambahan Bilik</button>
            </div>
            <div>
                <button type="button4" name="facility">Penambahan Ruang Kemudahan</button>
            </div>
            <div>
                <button type="button5" name="parking">Penambahan Tempat Letak Kereta</button>
            </div>
            <div>
                <button type="button6" name="pengesahan">PENGESAHAN</button>
            </div>
            <div>
                <button type="button7" name="permohonan">Permohonan Tempat Letak Kereta</button>
            </div>
            <div>
                <button type="button9" name="parkper">Permohonan Ruang Kemudahan</button>
            </div>
        </form>
        
    </div>
@endsection