<div class="row col-md-8 col-md-offset-2">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <button type="button" class="close" data-dismiss="alert">×</button>
                * {{$error}} <br>
            @endforeach
        </div>
    @endif
        @if (session('message'))
            <div class="alert alert-info">
                * {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-info">
              * {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        @endif
</div>
