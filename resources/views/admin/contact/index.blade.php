@extends('admin.layout.master')
@section('container')
    <div class="container mt-4" style="max-width: 1212px">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Contact Messages</h2>
        </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $message->full_name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ Str::limit($message->message, 50) }}</td>
                            <td>
                                @if ($message->status)
                                    <span class="badge bg-success">Seen</span>
                                @else
                                    <span class="badge bg-warning">Unseen</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admin.contact.destroy', $message->id) }}" method="POST"
                                    onsubmit="return confirm('Delete this message?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
