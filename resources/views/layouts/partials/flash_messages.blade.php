@if(Session::has('message'))
    <div class="alert alert-success">{{Session::get('message')}}</div>
@endif


@if(Session::has('notActive'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ Session::get('notActive') }} <strong><a href="{{url('/')}}">Click here!</a></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
