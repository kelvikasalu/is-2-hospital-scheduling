<!-- doctor/show.blade.php -->
@if(isset($doctor))
    <h1>{{ $doctor->name }}</h1>
    <p>{{ $doctor->specialization }}</p>
@else
    <p>Doctor not found.</p>
@endif
