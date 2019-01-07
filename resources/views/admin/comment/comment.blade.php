@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

} );
</script>
@stop
@extends('admin.layout.app')
@section('content')



      <!-- partial:partials/_sidebar.html -->


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <!-- Section for manage blogs -->
          <div class="row" >
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <h4 class="card-title">Comments</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Content
                          </th>
                          <th>
                            User ID
                          </th>
                          <th>
                            Blog ID
                          </th>
                          <th>
                            Reply ID
                          </th>
                          <th>
                            Date Created
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($comment as $c)
                        <tr>
                          <td class="py-1">
                            {{$c->id}}
                          </td>
                          <td>
                            {!! substr($c->content, 0, 10) !!}
                          </td>
                          <td>
                            {{$c->user->id}}
                          </td>
                          <td>
                           {{$c->blog->id}}
                          </td>
                          <td>
                            @if(!$c->reply)
                            No Reply
                            @else
                            {{$c->reply}}
                            @endif
                          </td>
                          <td>
                           {{date('d/m/y', strtotime($c->created_at))}}
                          </td>
                          <td>
                            <a class="btn btn-success" onclick="return confirm('Are you sure want to delete this comment ?')" href="{{url('comment-delete', $c->id)}}">Delete</a>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="/admin/http://www.bootstrapdash.com/" target="_blank">HafizhThibo</a>. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

@stop
