@foreach ($data as $row)
<div>
    Id : {{ $row->id }} 
    Name : {{ $row->name }} <br>
</div>
    
@endforeach