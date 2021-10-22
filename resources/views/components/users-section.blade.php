<div class="user-data full-width">
    <div class="categories-left-heading">
        <h3>Service Providers</h3>
    </div>
    @foreach($users as $user)
    <div class="sugguest-user">
        <div class="sugguest-user-dt">
            <a href="{{url('chatify', $user->id)}}"><img src="{{ asset($user->image_url) }}" alt=""></a>
            <a href="{{url('chatify', $user->id)}}">
                <h4>{{ $user->name }}</h4>
            </a>
        </div>
        <button class="request-btn"><i class="fas fa-user-plus"></i></button>
    </div>
    @endforeach
</div>