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
          <!-- Card -->
          <div class="row">
            <!-- For counting comments -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-receipt text-warning icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Comments</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$comment->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Whole Comments
                  </p>
                </div>
              </div>
            </div>
            <!--  -->
            <!-- For counting blogs -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-poll-box text-success icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Blogs</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$blog->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Whole Blogs
                  </p>
                </div>
              </div>
            </div>
            <!--  -->
            <!-- For counting user -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Users</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">{{$user->count()}}</h3>
                      </div>
                    </div>
                  </div>
                  <p class="text-muted mt-3 mb-0">
                    <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Whole Users
                  </p>
                </div>
              </div>
            </div>
            <!--  -->
          </div>
          <!-- End of row -->

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
                            Date Updated
                          </th>
                          <th>
                            Countries
                          </th>
                          <th>
                            Comments
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
                            {{$b->title}}
                          </td>
                          <td>
                            {{$b->user->name}}
                          </td>
                          <td>
                           {{date('d/m/y', strtotime($b->created_at))}}
                          </td>
                          <td>
                            {{date('d/m/y', strtotime($b->updated_at))}}
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
