<div class="frame4-top">
    <h1>popular topics</h1>
    <div class="frame4-top-section">
        @if(!empty($categories) && count($categories)>0)
        @foreach($categories as $category)
        <div class="card1"><a href="{{ route('single.category',$category->id) }}">{{ $category->name }}</a></div>
        @endforeach

        @else
        <div class="card1"><a href="#">Abductions</a></div>
        <div class="card1"><a href="#">Economy</a></div>
        <div class="card1"><a href="#">Corruption</a></div>
        <div class="card1"><a href="#">Fufua ICC</a></div>
        <div class="card1"><a href="#">Gen Z Protests</a></div>
        <div class="card1">
            <a href="#">Reject Finance Bill 2024</a>
        </div>
        <div class="card1"><a href="#">Education</a></div>
        <div class="card1"><a href="#">Health</a></div>
        @endif
    </div>
</div>