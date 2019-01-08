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
                  <h4 class="card-title">Users</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Name
                          </th>
                          <th>
                            Date Created
                          </th>
                          <th>
                            Blogs
                          </th>
                          <th>
                            Bio
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($user as $u)
                        <tr>
                          <td class="py-1">
                            {{$u->id}}
                          </td>
                          <td>
                            {{$u->email}}
                          </td>
                          <td>
                            {{$u->name}}
                          </td>
                          <td>
                           {{date('d/m/y', strtotime($u->created_at))}}
                          </td>
                          <td>
                            @if(!$u->blog)
                            0
                            @else
                            {{$u->blog->count()}}
                            @endif
                          </td>
                          <td>
                            @if(!$u->bio)
                            Empty
                            @else
                            {!! substr($u->bio, 0, 10) !!}
                            @endif
                          </td>
                          <td>
                            <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                            <a class="dropdown-item" href="{{route('user-edit', $u->id)}}"> Edit </a>
                            <!-- form action="{{ route('user-delete', $u->id) }}" class="pull-left"  method="post">
                            {!! csrf_field() !!}
                            {{ method_field('POST') }}
                            <button class="dropdown-item" onclick="return confirm('Are you sure want to delete this data?')" href="{{route('user-delete', $u->id)}}"> Delete
                            </button>
                          </form> -->
                          <a class="dropdown-item" onclick="return confirm('Are you sure want to delete this user ?')" href="{{route('user-delete', $u->id)}}">Delete</a>
                          </div>
                          </div>
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
