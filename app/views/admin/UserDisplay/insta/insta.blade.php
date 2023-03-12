@extends('admin.index_master_admin');

@section('content')
  <div class="contents">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 mb-30">
          <div class="card mt-30">
            <div class="card-body">
              <div
                class=" global-shadow border-light-0 w-100 adv-table"
              >
                <div class="table-responsive">
                  <div class="adv-table-table__header mb-3">
                    <h4>Insta</h4>
                  </div>
                  <table
                    class="table mb-0 table-borderless"
                    data-sorting="true"
                    data-filter-container="#filter-form-container"
                    data-paging-current="1"
                    data-paging-position="right"
                    data-paging-size="10"
                  >
                    <thead>
                    <tr class="userDatatable-header">
                      <th>
                        <span class="userDatatable-title">id</span>
                      </th>
                      <th>
                        <span class="userDatatable-title">image</span>
                      </th>
                      <th>
                        <span class="userDatatable-title">link</span>
                      </th>
                      <th>
                              <span class="userDatatable-title"
                              >action</span
                              >
                      </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($allData as $value)
                    <tr>
                      <td>
                        <div class="userDatatable-content">{{$value->id}}</div>
                      </td>
                      <td>
                        <div class="userDatatable-content">
                          <img src="./public/upload/insta/{{$value->link}}" alt="" class="rounded" width="50">
                        </div>
                      </td>
                      <td>
                        <div class="userDatatable-content text-truncate" style="max-width: 150px;">
                          <a
                            href="./public/upload/insta/{{$value->link}}"
                            class="__cf_email__"
                            data-cfemail="a9c3c6c1c784c2ccc5c5ccdbe9cec4c8c0c587cac6c4"
                          >Xem trực quan</a
                          >
                        </div>
                      </td>
                      <td>
                        <button class="btn btn-primary btn-default btn-rounded bg-primary text-white " onclick="location.href='{{route('edit-insta/'.$value->id)}}'"> <i class='bx bx-edit-alt'></i>sửa
                        </button>
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
    </div>
  </div>
@endsection
