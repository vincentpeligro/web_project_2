<div class="table-responsive">
    <table class="table" id="students-table">
        <thead>
            <tr>
                <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>Address</th>
        <th>Relegion</th>
        <th>Teacher</th>
        <th>Subject</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->firstname }}</td>
            <td>{{ $student->lastname }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->relegion }}</td>
            <td>{{ $student->teacher }}</td>
            <td>{{ $student->subject }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('students.show', [$student->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('students.edit', [$student->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
