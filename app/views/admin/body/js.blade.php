<script src="{{route(''.'app/views/admin/public/assets/js/plugins.min.js')}}"></script>
<script src="{{route(''.'app/views/admin/public/assets/js/script.min.js')}}"></script>
<script src="{{route(''.'app/views/admin/public/ckeditor/ckeditor.js')}}"></script>
<script src="{{route(''.'app/views/admin/public/ckfinder/ckfinder.js')}}"></script>
<script type="text/javascript">
  CKEDITOR.replace('ckeditor1');
  CKEDITOR.replace( 'ckeditor1', {
    filebrowserBrowseUrl: "{{route(''.'app/views/admin/public/ckfinder/ckfinder.html')}}" ,
    filebrowserImageBrowseUrl: "{{route(''.'app/views/admin/public/ckfinder/ckfinder.html?Type=Images')}}",
    filebrowserUploadUrl: "{{route(''.'app/views/admin/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files')}}",
    filebrowserImageUploadUrl: "{{route(''.'app/views/admin/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images')}}",
    filebrowserWindowWidth : '1000',
    filebrowserWindowHeight : '700'
  });
</script>
{{--<script>--}}
{{--  var editor = CKEDITOR.replace( 'ckeditor1' );--}}
{{--</script>--}}

