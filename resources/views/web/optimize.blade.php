@extends('app')

@section('css')
    <link href="{{ asset('/css/components/placeholder.almost-flat.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/components/upload.almost-flat.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/components/form-file.almost-flat.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/components/progress.almost-flat.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-small-1-3 uk-container-center">
            <div class="uk-panel">
                @if (count($errors) > 0)
                    <div class="uk-alert uk-alert-danger">
                        <strong>Whoops!</strong> 看起来你输错了什么。<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="uk-form uk-container-center" role="form" method="POST" action="{{ url('/web/optimize') }}">
                    <fieldset data-uk-margin>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <legend><i class="uk-icon-cloud-upload uk-icon-small"></i>  请上传压缩包</legend>
                        <div id="upload-drop" class="uk-placeholder">
                            将 <b>压缩包</b> 拖拽至此，或 <a class="uk-form-file">选择一个压缩包<input id="upload-select" type="file" name="file"></a>.
                        </div>

                        <div id="progressbar" class="uk-progress uk-hidden">
                            <div class="uk-progress-bar" style="width: 0;">...</div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('/js/components/upload.min.js') }}"></script>
    <script>

        $(function(){

            var progressbar = $("#progressbar"),
                    bar         = progressbar.find('.uk-progress-bar'),
                    settings    = {

                        params: {
                            '_token': '{{ csrf_token() }}'
                        },

                        action: '/optimize', // 上传路径 url

                        allow : '*.(zip|rar)', // 只允许上传图片

                        loadstart: function() {
                            bar.css("width", "0%").text("0%");
                            progressbar.removeClass("uk-hidden");
                        },

                        progress: function(percent) {
                            percent = Math.ceil(percent);
                            bar.css("width", percent+"%").text(percent+"%");
                        },

                        allcomplete: function(response) {

                            bar.css("width", "100%").text("100%");

                            setTimeout(function(){
                                progressbar.addClass("uk-hidden");
                            }, 250);

                            alert("Upload Completed")
                        }
                    };

            var select = UIkit.uploadSelect($("#upload-select"), settings),
                    drop   = UIkit.uploadDrop($("#upload-drop"), settings);
        });

    </script>
@endsection