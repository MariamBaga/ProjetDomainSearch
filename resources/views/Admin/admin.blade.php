@extends('layouts.master1')

@section('content')
<div class="container">
    <h1>Tableau de bord Admin</h1>
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
            @if ($user->hasRole('user')) <!-- Vérifiez si l'utilisateur a le rôle 'user' -->
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>

                    <form action="" method="POST">

                        <select name="role" class="form-control">
                            @foreach ($roles as $role)
                            <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                            @endforeach
                        </select>



                    </form>
                </td>
                <td>
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
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                </td>
                <td>
                    <!-- Ajoutez ici des actions supplémentaires si nécessaire -->
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection
