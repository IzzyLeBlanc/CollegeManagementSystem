@extends('layouts.layout')
@section('title')
    Borang Penyertaan Aktiviti
@endsection
@section('contents')
    
    <div>
        <form action="post">
            <div>
                Kategori <br>
                <select name="category" id="category">
                    <option value="">Select an option</option>
                    <option value="foreign">Luar Kolej</option>
                    <option value="college">Kolej</option>
                </select> 
               
            </div>
            <div>
                Nama Aktiviti: <br>
                <input type="text" name="activity_name" id="activity_name">
            </div>
            <div>
                Tarikh Mula: <br>
                <input type="date" name="activity_date_start" id="activity_date_start">
            </div>
            <div>
                Tarikh Tamat: <br>
                <input type="date" name="activity_date_end" id="activity_date_end">
            </div>
            <div>
                Tempat: <br>
                <input type="text" name="activity_place" id="activity_place">
            </div>
            <div>
                No. ID Penyelia:  <br>
                <input type="text" name="activity_supervisor_id" id="activity_superior_id">
            </div>
            <div>
                Nama Penyelia: <br>
                <input type="text" name="activity_supervisor_name" id="activity_supervisor_name">
            </div>
            <div>
                <input type="submit" name="submit_activity" id="submit_activity" class="button-primary">
            </div>
        </form>
        
    </div>
@endsection