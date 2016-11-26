<table id="{{ $id }}" class="table table-striped table-bordered table-hover" width="100%">
    <thead>
            <tr>
                <th>
                    <input type="checkbox" id="selectAll">
                </th>
                <th class="hasinput">
                    {!! Form::text('id', null, ['class' => 'form-control', 'placeholder' => 'Id']) !!}
                </th>
                <th class="hasinput">
                    <div class="col-md-12">
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                    </div>
                </th>
                <th>

                </th>
            </tr>
            <tr>
                <th class=""></th>
                <th class="">Id</th>
                <th class="">Name</th>
                <th class="col-md-2"></th>
            </tr>
        </thead>
    <tbody>
        @foreach($admins as $index => $admin)
            <tr>
                @include('admin.admins.tables.row.default', ['admin' => $admin])
            </tr>
        @endforeach
    </tbody>
</table>