@extends('layouts.app')

@section('content')
<table>
    <thead>
        <tr>
            <th>User Name</th>
            <th>Files</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>
                <ul>
                    @foreach ($user->files as $file)
                    <li>{{ $file->title }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

