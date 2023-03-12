
@extends('admin.index_master_admin');

@section('content')


<div class="row">
  <div class="col-lg-12">
    <div class="userDatatable global-shadow border-light-0 p-30 bg-white radius-xl w-100 mb-30">
      <div class="table-responsive">
        <table class="table mb-0 table-borderless">
          <thead>
          <tr class="userDatatable-header">
            <th>
              <div class="d-flex align-items-center">
                <div class="custom-checkbox  check-all">
                  <input class="checkbox" type="checkbox" id="check-44">

                </div>
              </div>
            </th>
            <th>
              <span class="userDatatable-title">id</span>
            </th>
            <th>
              <span class="userDatatable-title">name</span>
            </th>
            <th>
              <span class="userDatatable-title">password</span>
            </th>
            <th>
              <span class="userDatatable-title">phone number</span>
            </th>
            <th>
              <span class="userDatatable-title">email</span>
            </th>
            <th>
              <span class="userDatatable-title">images</span>
            </th>
            <th>
              <span class="userDatatable-title">total_price</span>
            </th>
            <th>
              <span class="userDatatable-title">role_id</span>
            </th>
            <th>
              <span class="userDatatable-title">reate_date</span>
            </th>
            <th>
              <span class="userDatatable-title">update_date</span>
            </th>
            <th>
              <span class="userDatatable-title float-end">action</span>
            </th>
          </tr>
          </thead>
          <tbody>
          @foreach($users as $item => $value)
          <tr>
            <td>
              <div class="d-flex">
                <div class="userDatatable__imgWrapper d-flex align-items-center">
                  <div class="checkbox-group-wrapper">
                    <div class="checkbox-group d-flex">
                      <div class="checkbox-theme-default custom-checkbox checkbox-group__single d-flex">
                        <input class="checkbox" type="checkbox" id="check-grp-content12">
                      </div>
                    </div>
                  </div>
<div>
              </div>
            </td>
            <td>
              <div class="userDatatable-content">
                <a href="https://demo.dashboardmarket.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c363334327137393030392e1c3b313d3530723f3331">{{$value->id}}</a>
              </div>
            </td>
            <td>
              <div class="userDatatable-content">
               {{$value->name}}
              </div>
            </td>
            <td>
              <div class="userDatatable-content">
                {{$value->password}}
              </div>
            </td>
            <td>
              <div class="userDatatable-content">
                {{$value->sdt}}
              </div>
            </td>
            <td>
              <div class="userDatatable-content">
                {{$value->email}}
              </div>
            </td>
            <td>
              <div class="userDatatable-content">
                {{$value->image}}
              </div>
            </td>
            <td>
              <div class="userDatatable-content">
                {{$value->total_price}}
              </div>
            </td>
            <td>
              <div class="userDatatable-content">
                {{$value->role_id}}
              </div>
            </td>
            <td>
              <div class="userDatatable-content">
                {{$value->create_date}}
              </div>
            </td>
            <td>
              <div class="userDatatable-content">
                {{$value->update_date}}
              </div>
            </td>

            <td>
              <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                <li>
                  <a href="./add-user" class="view">
                    <i class="uil uil-eye">Thêm</i>
                  </a>
                </li>
                <li>
                  <a href="{{route('update-user/'.$value->id)}}" class="edit">
                    <i class="uil uil-edit">Sửa</i>
                  </a>
                </li>
                <li>
                  <a href="{{route('delete-user/'.$value->id)}}" class="remove">
                    <i class="uil uil-trash-alt">Xóa</i>
                  </a>
                </li>
              </ul>
            </td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
@endsection
