@if(count($products) > 0)
        @foreach($products as $product)
            <li class="list-group-item"><a href="{{ url('product/'.$product->id) }}">{{ $product->product }}</a></li>
        @endforeach
    @else
        <li class="list-group-item">No Results Found</li>
    @endif