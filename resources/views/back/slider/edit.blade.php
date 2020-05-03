@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0"> ویرایش اسلایدر {{$slider->title}}</h4>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 mt-3">
                                <form method="post" action="{{route('slider.update',$slider->id)}}">
                                    {{csrf_field()}}
                                    {{ method_field('PATCH')}}
                                    <div class="form-group">
                                        <label for="Select1">شماره اسلایدر</label>
                                        <select class="form-control" id="Select1" name="number">
                                            <option @if($slider->number) selected @endif value="{{$slider->number}}">{{$slider->number}}</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>عنوان اول</label>
                                        <input type="text" name="title1" class="form-control"
                                               value="{{$slider->title1}}">
                                    </div>
                                    <div class="form-group">
                                        <label>عنوان دوم</label>
                                        <input type="text" name="title2" class="form-control"
                                               value="{{$slider->title2}}">
                                    </div>
                                    <div class="form-group">
                                        <label>توضیح</label>
                                        <textarea id="textareaDes" name="des" class="ckeditor form-control"
                                        >{{$slider->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>لینک</label>
                                        <input id="link" name="link" class="form-control"
                                            {{$slider->link}}>
                                    </div>
                                    <div class="form-group">
                                        <label for="photo">تصویر</label>
                                        <input type="hidden" name="photo_id[]" id="product-photo">
                                        <div id="photo" class="dropzone"></div>
                                        <div class="row">
                                            @if(isset($slider->photo->id))
                                                <div class="col-sm-3" id="photo_{{$slider->photo->id}}" style="margin:2%">
                                                    <img class="img-responsive" src="{{($slider->photo->path) }}"
                                                         alt="image">
                                                    <a class="text-danger" href="{{route('uni',$slider->photo->id)}}" >حذف</a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    @if(isset($slider->photo->id))
                                        <button type="submit" onclick="productGallery({{$slider->photo->id}})"
                                                class="btn-sm btn-success pull-left">ذخیره
                                        </button>
                                    @else
                                        <button type="submit" onclick="productGallery()"
                                                class="btn-sm btn-success pull-left">ذخیره
                                        </button>
                                    @endif

                                    <br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript" src="{{asset('/back/ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('/front/js/dropzone.min.js')}}"></script>

    <script>
        Dropzone.autoDiscover = false;
        var photosGallery = []
        var drop = new Dropzone('#photo', {
            addRemoveLinks: true,
            maxFiles: 1,
            url: "{{route('photos.store')}}",
            sending: function (file, xhr, formData) {
                formData.append("_token", "{{csrf_token()}}")
            },
            success: function (file, response) {
                photosGallery.push(response.photo_id)
            }
        });
        productGallery = function () {
            document.getElementById('product-photo').value = photosGallery
        }
        CKEDITOR.replace('textareaDes', {
            customConfig: 'config.js',
            language: 'fa',
            removePlugins: 'cloudservices , easyimage'
        })

    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('.editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
