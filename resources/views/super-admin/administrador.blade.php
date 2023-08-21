<x-app-layout>
    <div class="row">
        <div class="col-12">
            <h1>Usuarios</h1>
            <table class="table table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>email</th>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>