@extends('layouts.layout')
@section('title')
    Selamat Datang ke Ekolej
@endsection
@section('contents')
    
    <div>
        <form action="post">
            <div>
                Senarai Aktiviti <br>
                <button type="enter" name="reservation_facility">Tempahan Kemudahan</button>
                <button type="enter" name="reservation_parking_lot">Permohonan Tempat Letak Kenderaan</button> 
            </div>
        </form>
    </div>
@endsection