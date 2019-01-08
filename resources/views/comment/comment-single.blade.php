@if(count($b->comments) > 0)

            <div class="pt-5">
              <h3 class="mb-5">{{$b->comments->count()}} Comments</h3>
              <ul class="comment-list">

            @foreach($b->comments as $c)           
                <li class="comment">
                  <div class="vcard">
                    @if (is_null($c->user->image))
                    <img src="/images/profile.png" alt="Image placeholder">
                    @else
                    <img src="/images/{{ $c->user->image }}" alt="Image placeholder">                    
                    @endif
                  </div>
                  <div class="comment-body">
                    <h3>{{$c->user->name}}</h3>
                    <div class="meta">{{$c->created_at}}</div>
                    <p>{{$c->content}}</p>

                    <!--TO DO - Nested Loop Reply -->
                      <!-- <form action="{{ url('store-comment')}}" method="post">
                      {!! csrf_field() !!}
                      <div class="form-group">
                      <input type="text" name="replycomment" placeholder="Reply">
                      </div>
                      <div class="form-group">
                      <input type="submit" value="Send" class="btn btn-primary">
                      </div>
                      </form> -->
                      <!-- -->

                  </div>
                </li>
            @endforeach
              </ul>
            </div>

        @else

            <div class="pt-5">
              <h3 class="mb-5">0 Comments</h3>
            </div>


@endif            









