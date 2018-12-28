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
                  <h4 class="card-title">Blogs</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Title
                          </th>
                          <th>
                            Author
                          </th>
                          <th>
                            Date Created
                          </th>
                          <th>
                            Countries
                          </th>
                          <th>
                            Comments
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($blog as $b)
                        <tr>
                          <td class="py-1">
                            {{$b->id}}
                          </td>
                          <td>
                            {!! substr($b->title, 0, 10)!!}
                          </td>
                          <td>
                            {{$b->user->name}}
                          </td>
                          <td>
                           {{date('d/m/y', strtotime($b->created_at))}}
                          </td>
                          <td>
                            <label class="badge badge-warning">{{$b->countries}}</label>
                          </td>
                          <td>
                            @if(!$b->comment)
                            0
                            @else
                            {{$b->comment->count()}}
                            @endif
                          </td>
                          <td>
                            <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                            <a class="dropdown-item" href="{{route('blog-edit', $b->id)}}"> Edit </a>
                            <form action="{{ route('blog-delete', $b->id) }}" class="pull-left"  method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button class="dropdown-item" onclick="return confirm('Are you sure want to delete this data?')"> Delete
                            </button>
                          </form>
                           
                          </div>
                          </div>
                            <!--  -->
                            <!-- <a class="btn btn-success" onclick="return confirm('Are you sure want to delete this blog ?')" href="{{url('blog-delete', $b->id)}}">Delete</a> -->
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
