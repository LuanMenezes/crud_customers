<h4>Users View</h4>

@if($checked == true)
    <p>
        @foreach($users as $user)
            <strong>Name:</strong> {{$user}} <br>
        @endforeach
    </p>
@endif