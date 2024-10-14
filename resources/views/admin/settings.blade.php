@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">System Settings</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card mb-4">
            <div class="card-header">
                <h3>General Settings</h3>
            </div>
            <div class="card-body">
                <!-- Site Name -->
                <div class="form-group">
                    <label for="site_name">Site Name</label>
                    <input type="text" name="site_name" id="site_name" class="form-control" value="{{ old('site_name', $settings->site_name) }}" required>
                </div>

                <!-- Admin Email -->
                <div class="form-group mt-3">
                    <label for="admin_email">Admin Email</label>
                    <input type="email" name="admin_email" id="admin_email" class="form-control" value="{{ old('admin_email', $settings->admin_email) }}" required>
                </div>

                <!-- Default Timezone -->
                <div class="form-group mt-3">
                    <label for="timezone">Default Timezone</label>
                    <select name="timezone" id="timezone" class="form-control">
                        @foreach(timezone_identifiers_list() as $timezone)
                            <option value="{{ $timezone }}" {{ $settings->timezone == $timezone ? 'selected' : '' }}>{{ $timezone }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Maintenance Mode -->
                <div class="form-group mt-4">
                    <label for="maintenance_mode">Maintenance Mode</label>
                    <select name="maintenance_mode" id="maintenance_mode" class="form-control">
                        <option value="0" {{ $settings->maintenance_mode == 0 ? 'selected' : '' }}>Disabled</option>
                        <option value="1" {{ $settings->maintenance_mode == 1 ? 'selected' : '' }}>Enabled</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Save Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save Settings</button>
        </div>
    </form>

    <!-- System Control Section -->
    <div class="card mt-5">
        <div class="card-header">
            <h3>System Controls</h3>
        </div>
        <div class="card-body">
            <p class="text-danger">Use the following controls with caution.</p>
            
            <!-- Clear Cache -->
            <form action="{{ route('admin.settings.clear-cache') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-warning">Clear Cache</button>
            </form>

            <!-- Backup System -->
            <form action="{{ route('admin.settings.backup') }}" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-success">Backup System</button>
            </form>

            <!-- Reset System -->
            <form action="{{ route('admin.settings.reset') }}" method="POST" class="mt-3">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Reset System</button>
            </form>
        </div>
    </div>
</div>
@endsection
