<td><input type="checkbox" data-id="{{ $admin->id }}"></td>
<td>{{ $admin->id }}</td>
<td>{{ $admin->email }}</td>
<td>
    @include('admin.admins.tables.buttons.' . $buttons)
</td>

