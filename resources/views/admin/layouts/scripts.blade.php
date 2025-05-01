<script src="{{asset('admin/assets/modules/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/modules/popper.js')}}"></script>
<script src="{{asset('admin/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('admin/assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->
<script src="{{asset('admin/assets/modules/summernote/summernote-bs4.js')}}"></script>
<script src="{{asset('admin/assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Template JS File -->
<script src="{{asset('admin/assets/js/scripts.js')}}"></script>

<script>
    @if($errors->any())
        @foreach($errors->all() as $error)
             toastr.error("{{ $error }}");
        @endforeach
    @endif


    {{-- file Preview for avatar --}}
    $.uploadPreview({
        input_field: "#image-upload",   // Default: .image-upload
        preview_box: "#image-preview",  // Default: .image-preview
        label_field: "#image-label",    // Default: .image-label
        label_default: "Choose File",   // Default: Choose File
        label_selected: "Change File",  // Default: Change File
        no_label: false,                // Default: false
        success_callback: null          // Default: null
    });




</script>

@stack('js')