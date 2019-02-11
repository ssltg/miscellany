<input type="hidden" id="mention-route-entities" value="{{ route('search.mentions') }}"/>
<input type="hidden" id="mention-route-months" value="{{ route('search.months') }}"/>
<input type="hidden" id="summernote-locale" value="{{ str_replace('_', '-', LaravelLocalization::getCurrentLocaleRegional()) }}">

@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js" defer></script>
    <script src="{{ mix('js/summernote.js') }}" defer></script>
    @if (!in_array(LaravelLocalization::getCurrentLocale(), ['en', 'en-US']))
    <script src="/js/summernote/lang/summernote-{{ str_replace('_', '-', LaravelLocalization::getCurrentLocaleRegional()) }}.js" defer></script>
    @endif
    <script src="/js/summernote/plugins/summernote-image-attributes.js" defer></script>
    <script src="/js/summernote/plugins/summernote-image-title.js" defer></script>
    <script src="/js/summernote/plugins/summernote-list-styles.js" defer></script>
    <script src="/js/summernote/plugins/summernote-table-headers.js" defer></script>
    <script src="/js/summernote/plugins/summernote-table-styles.js" defer></script>
@endsection

@section('styles')
    <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
    <style>
        .note-group-select-from-files {
            display: none;
        }
    </style>
@endsection