@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Feedback List</h1>

    @if($feedbacks->isEmpty())
        <p>No feedback available.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient</th>
                    <th>Doctor</th>
                    <th>Feedback</th>
                    <th>Submitted On</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($feedbacks as $feedback)
                    <tr>
                        <td>{{ $feedback->id }}</td>
                        <td>{{ $feedback->patient->name }}</td>
                        <td>{{ $feedback->doctor->name }}</td>
                        <td>{{ Str::limit($feedback->message, 50) }}</td>
                        <td>{{ $feedback->created_at->format('d M Y, h:i A') }}</td>
                        <td>
                            <a href="{{ route('admin.feedback.show', $feedback->id) }}" class="btn btn-sm btn-info">View</a>
                            <form action="{{ route('admin.feedback.destroy', $feedback->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
