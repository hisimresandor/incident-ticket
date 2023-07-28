@props(['ticket'])

<tr>
    <td>
        {{ $ticket->subject }}
    </td>
    <td>
        {{ $ticket->content }}
    </td>
    <td>
        {{ $ticket->name }}
    </td>
    <td>
        <a href="{{ route('tickets.index', ['sender_id' => $ticket->sender_id]) }}">
            {{ $ticket->email }}
        </a>
    </td>
    <td>
        {{ $ticket->created_at }}
    </td>
    <td>
        {{ $ticket->due_date }}
    </td>
</tr>