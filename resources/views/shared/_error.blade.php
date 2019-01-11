@if(count($errors)>0)
    <div class="alert alert-danger mt-4 mb-4">
        <div class="mt-2">
            <b>有错误发生：</b>
        </div>
        <ul class="mt-2 mb-2">
            @foreach($errors->all() as $error)
                <li><i class="fa fa-times mr-2"></i>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif