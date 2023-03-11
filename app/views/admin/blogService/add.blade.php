@extends('admin.index_master_admin');

@section('content')

<div class="contents">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-main">
          <h4 class="text-capitalize breadcrumb-title">New Document</h4>
          <div class="breadcrumb-action justify-content-center flex-wrap">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#"><i class="uil uil-estate"></i>Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Thêm mới bài viết
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="form-element">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-default card-md mb-4">
            <div class="card-header">
              <h6>Thêm mới bài viết</h6>
            </div>
            <div class="card-body py-md-25">
              <form action="#">
                <div class="row">
{{--                  <div class="col-md-4">--}}
{{--                    <div class="form-group">--}}
{{--                      <label--}}
{{--                        for="a1"--}}
{{--                        class="il-gray fs-14 fw-500 align-center mb-10"--}}
{{--                      >One of Three Columns</label--}}
{{--                      >--}}
{{--                      <input--}}
{{--                        type="text"--}}
{{--                        class="form-control ih-medium ip-light radius-xs b-light px-15"--}}
{{--                        id="a1"--}}
{{--                        placeholder="One of Three Columns"--}}
{{--                      />--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-md-4">--}}
{{--                    <div class="form-group">--}}
{{--                      <label--}}
{{--                        for="a2"--}}
{{--                        class="il-gray fs-14 fw-500 align-center mb-10"--}}
{{--                      >One of Three Columns</label--}}
{{--                      >--}}
{{--                      <input--}}
{{--                        type="text"--}}
{{--                        class="form-control ih-medium ip-light radius-xs b-light px-15"--}}
{{--                        id="a2"--}}
{{--                        placeholder="One of Three Columns"--}}
{{--                      />--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-md-4">--}}
{{--                    <div class="form-group">--}}
{{--                      <label--}}
{{--                        for="a3"--}}
{{--                        class="il-gray fs-14 fw-500 align-center mb-10"--}}
{{--                      >One of Three Columns</label--}}
{{--                      >--}}
{{--                      <input--}}
{{--                        type="text"--}}
{{--                        class="form-control ih-medium ip-light radius-xs b-light px-15"--}}
{{--                        id="a3"--}}
{{--                        placeholder="One of Three Columns"--}}
{{--                      />--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                      <label--}}
{{--                        for="a4"--}}
{{--                        class="il-gray fs-14 fw-500 align-center mb-10"--}}
{{--                      >One of Four Columns</label--}}
{{--                      >--}}
{{--                      <input--}}
{{--                        type="text"--}}
{{--                        class="form-control ih-medium ip-light radius-xs b-light px-15"--}}
{{--                        id="a4"--}}
{{--                        placeholder="One of Four Columns"--}}
{{--                      />--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                      <label--}}
{{--                        for="a5"--}}
{{--                        class="il-gray fs-14 fw-500 align-center mb-10"--}}
{{--                      >One of Four Columns</label--}}
{{--                      >--}}
{{--                      <input--}}
{{--                        type="text"--}}
{{--                        class="form-control ih-medium ip-light radius-xs b-light px-15"--}}
{{--                        id="a5"--}}
{{--                        placeholder="One of Four Columns"--}}
{{--                      />--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                      <label--}}
{{--                        for="a6"--}}
{{--                        class="il-gray fs-14 fw-500 align-center mb-10"--}}
{{--                      >One of Four Columns</label--}}
{{--                      >--}}
{{--                      <input--}}
{{--                        type="text"--}}
{{--                        class="form-control ih-medium ip-light radius-xs b-light px-15"--}}
{{--                        id="a6"--}}
{{--                        placeholder="One of Four Columns"--}}
{{--                      />--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-md-3">--}}
{{--                    <div class="form-group">--}}
{{--                      <label--}}
{{--                        for="a7"--}}
{{--                        class="il-gray fs-14 fw-500 align-center mb-10"--}}
{{--                      >One of Four Columns</label--}}
{{--                      >--}}
{{--                      <input--}}
{{--                        type="text"--}}
{{--                        class="form-control ih-medium ip-light radius-xs b-light px-15"--}}
{{--                        id="a7"--}}
{{--                        placeholder="One of Four Columns"--}}
{{--                      />--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-md-6">--}}
{{--                    <div class="form-group">--}}
{{--                      <label--}}
{{--                        for="a8"--}}
{{--                        class="il-gray fs-14 fw-500 align-center mb-10"--}}
{{--                      >One of Two Columns</label--}}
{{--                      >--}}
{{--                      <input--}}
{{--                        type="text"--}}
{{--                        class="form-control ih-medium ip-light radius-xs b-light px-15"--}}
{{--                        id="a8"--}}
{{--                        placeholder="One of Two Columns"--}}
{{--                      />--}}
{{--                    </div>--}}
{{--                  </div>--}}
                  <div class="col-md-12">
                    <div class="form-group">
                      <label
                        for="a9"
                        class="il-gray fs-14 fw-500 align-center mb-10"
                      >Tiêu đề bài viết</label
                      >
                      <input
                        type="text"
                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                        id="a9"
                        placeholder="One of Two Columns"
                      />
                    </div>
                    <div class="form-group">
                      <label
                        for="a9"
                        class="il-gray fs-14 fw-500 align-center mb-10"
                      >Tiêu đề bài viết</label
                      >
                      <input
                        type="text"
                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                        id="a9"
                        placeholder="One of Two Columns"
                      />
                    </div>
                    <div class="form-group">
                      <label
                        for="a9"
                        class="il-gray fs-14 fw-500 align-center mb-10"
                      >Nội dung bài viết</label
                      >
                      <textarea id="ckeditor1" class="form-control ih-medium ip-light radius-xs b-light px-15"></textarea>
{{--                      <input--}}
{{--                        type="text"--}}
{{--                        class="form-control ih-medium ip-light radius-xs b-light px-15"--}}
{{--                        id="a9"--}}
{{--                        placeholder="One of Two Columns"--}}
{{--                      />--}}
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

