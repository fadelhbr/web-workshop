@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Inventory List</h1>
        <a href="{{ route('inventory.create') }}" class="btn btn-primary">Add New Item</a>
        <table class="table mt-3">
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @foreach($inventories as $inventory)
                <tr>
                    <td>{{ $inventory->item_name }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>{{ $inventory->description }}</td>
                    <td>
                        <a href="{{ route('inventory.edit', $inventory->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('inventory.destroy', $inventory->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
