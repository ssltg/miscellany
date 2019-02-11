<input type="hidden" id="mention-route-entities" value="{{ route('search.mentions') }}"/>
<input type="hidden" id="mention-route-months" value="{{ route('search.months') }}"/>

@section('scripts')
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=dncr3mbxeuavdjfsp6hd7m9pvpfntuhiw15fqz6uw1yq4b8a"></script>

    <script>
        var editor_config = {
            path_absolute : "/",
            language: '{{ App::getLocale() == 'en-US' ? 'en' : App::getLocale() }}',
            selector: "textarea.html-editor",
            plugins: [
                "save autosave advlist autolink lists link image hr anchor pagebreak",
                "searchreplace code fullscreen",
                "insertdatetime media nonbreaking table directionality",
                "emoticons paste textpattern",
                "fullpage media"
            ],
            toolbar: "styleselect | bold italic underline strikethrough forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image table media",
            // mobile: {
            //     theme: 'mobile',
            //     plugins: [ 'save', 'lists', 'autolink', 'mention']
            // },
            nanospell_server:"php",
            browser_spellcheck: true,
            relative_urls: false,
            remove_script_host: false,
            branding: false,
            media_live_embeds: true,
            menubar: false,
            themes: "silver",
        };

        tinymce.init(editor_config);
    </script>
@endsection

@section('styles')
@endsection