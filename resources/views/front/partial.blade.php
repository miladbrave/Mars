@foreach($comment as $comments)
    @if($comments->exam_id === $exams->id)
        <div class="container" style="padding: 25px">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1">
                            <img src="{{asset('image/use.jpg')}}" class="img img-rounded img-fluid w-100">
                        </div>
                        <div class="col-md-11">
                            <h5 class="float-right" style="color: red;">{{$comments->name}}</h5>
                            <div class="clearfix"></div>
                            <p style="font-size: 20px">{!! $comments->description !!}</p>
                            <p>
                                <a class="float-left btn text-white btn-danger btn-sm" id="like"> <i
                                        class="fa fa-heart"></i> Like</a>
                                <a class="float-left btn btn-outline-primary btn-sm ml-2 btn-open"
                                   id="reply{{$comments->id}}"> <i class="fa fa-reply"></i> Reply</a>
                            </p>
                            <div class="card-body form-reply" id="f-reply{{$comments->id}}"
                                 style="float: right;width: 70%;display: none">
                                <form method="post" action="{{route('comment.reply')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>نام</label>
                                        <input type="text" name="name" class="form-control"></div>
                                    <div class="form-group">
                                        <label>متن پیام</label>
                                        <textarea class="form-control" name="description" rows="3"></textarea>
                                    </div>
                                    <input type="hidden" name="parent_id" value={{$comments->id}}>
                                    <input type="hidden" name="post_id" value={{$comments->exam_id}}>
                                    <button type="submit" class="btn btn-primary">ارسال</button>
                                </form>

                            </div>
                        </div>
                    </div>
                        @include('front.partial',['comment' => $comments->replies])
                </div>
            </div>
        </div>
    @endif
@endforeach
