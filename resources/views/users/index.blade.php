@extends('layouts.app')
@section('title', 'All Users')

@section('content')
    <h1>Users List</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">Create User</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>
                        <img src="{{ $user->photo }}" alt="User Photo" width="50" height="50" 
                            class="img-thumbnail user-photo" data-bs-toggle="modal" 
                            data-bs-target="#photoModal" data-photo="{{ $user->photo }}">
                    </td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->mobile_number }}</td>
                    <td>{{ $user->address }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;" 
                            onsubmit="return confirm('Are you sure you want to delete this user?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center">
        {{ $users->links() }}
    </div>

    <!-- Modal for displaying user photo -->
    <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="photoModalLabel">User Photo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalPhoto" src="" class="img-fluid rounded" alt="User Photo">
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript to handle the image modal -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const photoModal = document.getElementById("photoModal");
            const modalPhoto = document.getElementById("modalPhoto");

            document.querySelectorAll(".user-photo").forEach(photo => {
                photo.addEventListener("click", function () {
                    const photoSrc = this.getAttribute("data-photo");
                    modalPhoto.src = photoSrc;
                });
            });
        });
    </script>
@endsection
