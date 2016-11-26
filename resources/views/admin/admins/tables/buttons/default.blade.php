<div class="btn-group pull-right">
    @permission('show-admin')
    <a href="/admin/admins/{{ $admin->id }}" class="btn btn-primary">Podgląd</a>
    @endpermission
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="caret"></span>
        <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="/admin/admins/{{ $admin->id }}/edit">Edytuj</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Usuń</a></li>
    </ul>
</div>