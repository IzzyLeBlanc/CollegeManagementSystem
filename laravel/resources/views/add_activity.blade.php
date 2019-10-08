@extends('layouts.layout')
@section('title')
    Penambahan Senarai Aktiviti
@endsection
@section('contents')
    
    <div>
        <form action="post">
            <div>
                No. Aktiviti: <br>
               <input type="text" name="activiti_id" id="activity_id" disabled> 
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
                Merit: <br>
                <input type="number" name="activity_merit" id="activity_merit">
            </div>
            <div>
                <input type="submit" name="submit_activity" id="submit_activity" class="button-primary">
            </div>
        </form>
        
    </div>
@endsection