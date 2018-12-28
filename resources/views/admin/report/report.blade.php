<div class="row">

</div>
<div class="row" style="margin-top: 20px;">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <h4 class="card-title">Report</h4>
                  <div class="btn-group dropdown">
                          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b><i class="fa fa-download"></i> Export PDF</b>
                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                            <a class="dropdown-item" href="{{url('laporan/trs/pdf')}}"> Blogs </a>
                            <a class="dropdown-item" href="{{url('laporan/trs/pdf?status=pinjam')}}"> Users </a>
                          </div>
                        </div>
                        <div class="btn-group dropdown">
                          <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <b><i class="fa fa-download"></i> Export EXCEL</b>
                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                            <a class="dropdown-item" href="{{url('laporan/trs/excel')}}"> Blogs </a>
                            <a class="dropdown-item" href="{{url('laporan/trs/excel?status=pinjam')}}"> Users </a>
                          </div>
                        </div>
                </div>
              </div>
            </div>
          </div>