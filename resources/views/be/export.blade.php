<table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>staff_code</th>
            <th>lead</th>
            <th>dob</th>
            <th>dayin</th>
            <th>vacation</th>
            <th>department</th>
            <th>position</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->fullname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->staff_code }}</td>
                <td>{{ $user->lead }}</td>
                <td>{{ $user->birthday }}</td>
                <td>{{ $user->dayin }}</td>
                <td>{{ $user->vacation }}</td>
                <td>{{ $user->department->name }}</td>
                <td>{{ $user->position->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>