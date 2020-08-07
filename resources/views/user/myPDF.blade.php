<html>
    <head>
    <title>ok</title>
    </head>
    <body>
        <ul>
            <li>name: {{$data->username}}</li>
            <li style="margin-bottom:50px">email: {{$data->email}}</li>
            <li>image: {{$data->img_url}}</li>
            <li>joined: {{$data->created_at}}</li>
        </ul>
        <hr>
        <h5 style="text-center">Role: {{$role}}</h5>
        <hr>
        <h5 style="text-center">List of Tickets</h5>
            @foreach($tickets as $ticket)
        <ul>
            <li>ticket_subject: {{$ticket->ticket_subject}}</li>
            <li>ticket_category: {{$ticket->ticket_category}}</li>
            <li>ticket_body: {{$ticket->ticket_body}}</li>
            <li>priority: {{$ticket->priority}}</li>
            <li>status: {{$ticket->status}}</li>
            <li>assigned_on_id: {{$ticket->assigned_on_id}}</li>
            <li>created_at: {{$ticket->created_at}}</li>
            <li>updated_at: {{$ticket->updated_at}}</li>
        </ul>
            <hr>
            <br>
            @endforeach
    </body>
</html>