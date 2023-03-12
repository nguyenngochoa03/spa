@extends('admin.index_master_admin');

@section('content')

<div class="contents">
  <div class="blog-page2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title">Blog Details</h4>
            <div
              class="breadcrumb-action justify-content-center flex-wrap"
            >
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#"
                    ><i class="uil uil-estate"></i>Dashboard</a
                    >
                  </li>
                  <li class="breadcrumb-item"><a href="#">Pages</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Blog Details
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10 col-12">
          <div class="blog-details-thumbnail">
            <img src="{{route('public/upload/blogSv/').$blog->image}}" alt="" />
          </div>
          <article class="blog-details">
            <div class="blog-details-content">
              <h1 class="main-title mb-30">
                {{$blog->title}}
              </h1>
              <div class="blog-body">
                <div class="mb-50 blog-content">
                  {!!$blog->content!!}
                </div>
              </div>
              <div class="blog-tags">
                <ul>
                  <li><a href="#">Design Process</a></li>
                  <li><a href="#">Prototype</a></li>
                  <li><a href="#">Design Process</a></li>
                  <li><a href="#">Prototype</a></li>
                </ul>
              </div>
              <div class="blog-share">
                <span>Share this article:</span>
                <ul>
                  <li>
                    <a href="#" class="facebook">
                      <i class="uil uil-facebook-f"></i>
                      share
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <i class="uil uil-twitter"></i>
                      tweet
                    </a>
                  </li>
                  <li>
                    <a href="#" class="pinterest">
                      <i class="lab la-pinterest"></i>
                      share
                    </a>
                  </li>
                  <li>
                    <a href="#" class="linkedin">
                      <i class="uil uil-linkedin"></i>
                      share
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link copy-to-clickboard">
                      <i class="uil uil-copy"></i>
                      copy
                    </a>
                  </li>
                </ul>
              </div>

            </div>
            <div class="blog-share-top">
              <div class="blog-share-fixed">
                <span>share</span>
                <ul>
                  <li>
                    <a href="#" class="facebook">
                      <i class="uil uil-facebook-f"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="twitter">
                      <i class="uil uil-twitter"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="pinterest">
                      <i class="lab la-pinterest"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="linkedin">
                      <i class="uil uil-linkedin"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="link copy-to-clickboard">
                      <i class="uil uil-copy"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

