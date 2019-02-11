@if (Auth::user()->editor == 'summernote')
    @include('layouts.widgets.summernote')
@elseif (Auth::user()->editor == 'tinymce5')
    @include('layouts.widgets.tinymce5')
@else
    @include('layouts.widgets.tinymce')
@endif