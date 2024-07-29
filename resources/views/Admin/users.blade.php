@extends('layouts.master1')

@section('content')
<div class="container">
    <h1>Tableau de bord de l'utilisateur</h1>

    <h2>Mes informations</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Permissions</th>
                @can('update-user-info') <!-- Vérifiez si l'utilisateur a la permission de mettre à jour ses informations -->
                <th>Action</th>
                @endcan
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ auth()->user()->name }}</td>
                <td>{{ auth()->user()->email }}</td>
                <td>{{ auth()->user()->roles->pluck('name')->join(', ') }}</td>
                <td>{{ auth()->user()->permissions->pluck('name')->join(', ') }}</td>
                @can('update-user-info')
                <td>
                    <!-- Formulaire pour mettre à jour les informations de l'utilisateur -->
                    <form action="{{ route('user.updateInfo') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Mettre à jour mes informations</button>
                    </form>
                </td>
                @endcan
            </tr>
        </tbody>
    </table>

    @can('manage users') <!-- Vérifiez si l'utilisateur a la permission de gérer les utilisateurs -->
    <h2>Gérer les utilisateurs</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
                <th>Permissions</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->roles->pluck('name')->join(', ') }}</td>
                <td>{{ $user->permissions->pluck('name')->join(', ') }}</td>
                <td>
                    <!-- Formulaire pour mettre à jour le rôle et les permissions de l'utilisateur -->
                    <form action="{{ route('admin.users.updateRole', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <select name="role" class="form-control">
                            @foreach ($roles as $role)
                            <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary">Mettre à jour le rôle</button>
                    </form>

                    <form action="{{ route('admin.users.updatePermissions', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @foreach ($permissions as $permission)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}" {{ $user->hasPermissionTo($permission->name) ? 'checked' : '' }}>
                            <label class="form-check-label">
                                {{ $permission->name }}
                            </label>
                        </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Mettre à jour les permissions</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endcan
</div>
@endsection
