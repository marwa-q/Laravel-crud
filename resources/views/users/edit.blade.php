@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header bg-warning text-white">
                    <h4 class="mb-0">Edit User</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                        </div>

                        <!-- Gender -->
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" id="gender" class="form-select">
                                <option value="Male" {{ $user->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                <option value="Female" {{ $user->gender == 'Female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-3">
                            <label for="mobile_number" class="form-label">Phone Number</label>
                            <input type="text" name="mobile_number" id="mobile_number" class="form-control" value="{{ $user->mobile_number }}" placeholder="Enter phone number">
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{ $user->address }}" placeholder="Enter address">
                        </div>

                        <!-- Photo URL -->
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo URL</label>
                            <input type="text" name="photo" id="photo" class="form-control" value="{{ $user->photo }}" placeholder="Enter photo URL">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100">Update User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

