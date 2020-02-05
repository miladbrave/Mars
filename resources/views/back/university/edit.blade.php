@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h4 class="panel-tittle m-a0"> ویرایش آزمون جدید{{$university->title}}</h4>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 mt-3">
                                <form method="post" action="{{route('university.update',$university->id)}}">
                                    {{csrf_field()}}
                                    {{ method_field('PATCH')}}
                                    <div class="form-group">
                                        <label>نام دانشگاه</label>
                                        <input type="text" name="title" class="form-control"
                                               value="{{$university->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label>توضیحات</label>
                                        <textarea id="textareaDes" name="des"
                                                  class="ckeditor form-control">{{$university->description}} </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>کشور</label>
                                        <input type="text" class="form-control" name="country"
                                               value="{{$university->country}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="photo">تصویر</label>
                                        <input type="hidden" name="photo_id[]" id="product-photo">
                                        <div id="photo" class="dropzone"></div>
                                        <div class="row">
                                            @foreach($university->photos as $photo)
                                                <div class="col-sm-3" id="photo_{{$photo->id}}" style="margin:2%">
                                                    <img class="img-responsive" src="{{( $photo->path) }}"
                                                         alt="image">
                                                        <a href="{{route('uni',$photo->id)}}" >حذف</a>
                                                </div>
{{--                                                onclick="removeImages({{$photo->id}})"--}}
                                            @endforeach
                                        </div>
                                    </div>
                                    <hr>

                                    <button type="submit" onclick="productGallery({{$university->photos->pluck('id')}})"
                                            class="btn-sm btn-success pull-left">ذخیره
                                    </button>
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
        var photo = [].concat({{$university->photos->pluck('id')}})
        var drop = new Dropzone('#photo', {
            addRemoveLinks: true,
            url: "{{route('photos.store')}}",
            sending: function (file, xhr, formData) {
                formData.append("_token", "{{csrf_token()}}")
            },
            success: function (file, response) {
                photosGallery.push(response.photo_id)
            }
        });
        productGallery = function (photos) {
            if (photos) {
                document.getElementById('product-photo').value = photosGallery.concat(photos)
            } else {
                document.getElementById('product-photo').value = photosGallery
            }
        }
        CKEDITOR.replace('textareaDes', {
            customConfig: 'config.js',
            language: 'fa',
            toolbar: 'simple',
            removePlugins: 'cloudservices , easyimage'
        })
        removeImages = function (id) {
            // var index = photo.indexOf(id)
            // photo.splice(index , 1);
            // document.getElementById('photo_' + id).remove();
        }

    </script>

@endsection
