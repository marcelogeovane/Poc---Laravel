<section id="comment" class="primary">
    <div class="container">
        <div class="row">
         <ul class="list-group">
         @if(!empty($posts))    
                @foreach($posts as $post)
                    <li class="list-group-item">
                        <strong>
                            <h3>{{$post->name}}</h3>
                            <br>
                            {{$post->created_at->diffForHumans()}} &nbsp
                        </strong>

                        {{$post->body}}
                        
                    
                    </li>

                @endforeach
         @endif
        </div>
    
    </div>



</section>