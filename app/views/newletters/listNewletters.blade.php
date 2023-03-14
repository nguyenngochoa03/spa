@extends('admin.index_master_admin');

@section('content')
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div
            class="breadcrumb-main user-member justify-content-sm-between"
          >
            <div
              class="d-flex flex-wrap justify-content-center breadcrumb-main__wrapper"
            >
              <div
                class="d-flex align-items-center user-member__title justify-content-center me-sm-25"
              >
                <h4 class="text-capitalize fw-500 breadcrumb-title">
             Newletters
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($allData as $value)
          <div class="col-xxl-3 col-lg-4 col-md-6 mb-25">
            <div class="card " style="background-color:#fdf5e6;">
              <div class="card-body text-center pt-30 px-25 pb-0">
                <div class="account-profile-cards" >
                  <div class="ap-img d-flex justify-content-center mb-2">
                    <i class='{{ $value->logo }}' style="font-size:80px;color:#C6651A;"></i>
                  </div>
                  <div class="ap-nameAddress">
                    <h6 class="ap-nameAddress__title">{{ $value->content }}</h6>
                    <p class="ap-nameAddress__subTitle fs-14 pt-1 m-0">
                      {{ $value->meta }}
                    </p>
                    <p class="ap-nameAddress__subTitle fs-14 pt-1 m-0">
                      {{ $value->create_date }}
                    </p>
                  </div>
                  <div
                    class="ap-button account-profile-cards__button button-group d-flex justify-content-center flex-wrap pt-20"
                  >
                    <button onclick="location.href='{{route('edit-newletters/'.$value->id)}}'" class="btn btn-success text-white bg-success btn-default btn-squared btn-shadow-success btn-rounded my-2 ">Sửa
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
