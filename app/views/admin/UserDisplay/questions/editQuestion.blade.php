@extends('admin.index_master_admin');

@section('content')
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div
            class="d-flex align-items-center user-member__title mb-30 mt-30"
          >
            <h4 class="text-capitalize">Thêm câu hỏi</h4>
          </div>
        </div>
      </div>
      @if(isset($_SESSION['errors']) && isset($_GET['msg']))
        <div class="alert">
          @foreach($_SESSION['errors'] as $er)
            <div
              class="alert alert-warning alert-dismissible fade show"
              role="alert"
            >
              <div class="alert-content">
                <p>
                  {{$er}}
                </p>
                <button
                  type="button"
                  class="btn-close text-capitalize"
                  data-bs-dismiss="alert"
                  aria-label="Close"
                >
                  <img
                    src="{{route(''.'app/views/admin/public/assets/img/svg/x.svg')}}"
                    alt="x"
                    class="svg"
                    aria-hidden="true"
                  />
                </button>
              </div>
            </div>
          @endforeach
        </div>
      @endif
      <div class="card mb-50">
        <div class="row justify-content-center">
          <div class="col-md-5 col-10">
            <div class="mt-40 mb-50">
              <div class="edit-profile__body">
                <form>
                  <div class="form-group mb-25">
                    <label for="name1">Câu hỏi</label>
                  </div>
                  <div class="form-group mb-25">
                    <label for="name2">Trả lời</label>
                    <textarea name="reply" id="" cols="30" rows="10"></textarea>
                  </div>
                  <div
                    class="button-group d-flex pt-25 justify-content-md-end justify-content-start"
                  >
                    <button
                      class="btn btn-primary btn-default btn-squared text-capitalize radius-md shadow2 btn-sm"
                    >
                      Thêm
                    </button>
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
