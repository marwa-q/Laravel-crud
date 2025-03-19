@extends('layouts.app')

@section('title', 'Create User')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Create New User</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter full name" required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" autocomplete="new-password" required>
                        </div>

                        <!-- Gender -->
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" id="gender" class="form-select">
                                <option value="Male" selected>Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-3">
                            <label for="mobile_number" class="form-label">Phone Number</label>
                            <input type="text" name="mobile_number" id="mobile_number" class="form-control" placeholder="Enter phone number">
                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Enter address">
                        </div>

                        <!-- Photo URL -->
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo URL</label>
                            <input type="text" name="photo" id="photo" class="form-control" placeholder="Enter photo URL">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-success w-100">Create User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
