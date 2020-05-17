@extends('back.dashboard')

@section('content')
    <div class="content-admin-main">
        <div class="panel panel-default bg-white m-t30">
            <div class="panel-heading wt-panel-heading p-a20">
                <h6 class="panel-tittle m-a0"> ویرایش خبر : {{ $news->title}}</h6>
            </div>
            <div class="panel-body wt-panel-body">
                <div class="container dashboard-list-box list-box-with-icon">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8 mt-3">
                                <form method="post" action="{{route('news.update',$news->id)}}">
                                    {{csrf_field()}}
                                    {{ method_field('PATCH')}}
                                    <div class="form-group">
                                        <label>موضوع(فارسی)</label>
                                        <input id="mytextarea" type="text" name="titlefa" class="form-control"
                                            value=" {{$news->titlefa}}">
                                    </div>
                                    <div class="form-group">
                                        <label>موضوع(لاتین)</label>
                                        <input id="mytextarea" type="text" name="titlela" class="form-control"
                                            value=" {{$news->titlela}} ">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>دانشگاه</label>
                                            <input type="text" name="examuni" class="form-control"
                                                   value="{{$news->examuni}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>نمایش در صفحه اول</label>
                                            <select class="form-control" id="Select1" name="number">
                                                <option @if($news->section_id) checked @endif value="{{$news->section_id}}">{{$news->section_id}}</option>
                                                <option value="6">هیچ کدام</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>توضیحات کوتاه</label>
                                        <textarea id="textareaDes" name="des1"
                                                  class="editor form-control">{{$news->description1}} </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>توضیحات بلند</label>
                                        <textarea id="textareaDes2" name="des2"
                                                  class="editor form-control">{{$news->description2}} </textarea>
                                    </div>
                                    @if(isset($newsTitle))
                                        <div class="form-group">
                                            <label>متون اخبار</label>
                                            <select name="newsTitle" class="form-control" multiple>
                                                @foreach($newsTitle as $newss)
                                                    <option @if($newss->slug == $news->newsTitle) selected
                                                            @endif value="{{$newss->titlefa}}">{{$newss->titlefa}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>امتحان</label>
                                        <select name="exam" class="form-control" multiple>
                                            @foreach($exam as $exams)
                                                <option @if($exams->title==$news->exam) selected
                                                        @endif value="{{$exams->title}}">{{$exams->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>کشور</label>
                                        <select name="country" class="form-control" multiple>
                                            @foreach($country as $countries)
                                                <option @if($countries->country==$news->country) selected
                                                        @endif value="{{$countries->country}}">{{$countries->country}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>بخش</label>
                                        <select name="select" class="form-control">
                                            <option value="آزمون">آزمون</option>
                                            <option value="دانشگاه">دانشگاه</option>
                                            <option value="دوره">دوره</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="photo">تصویر</label>
                                        <input type="hidden" name="photo_id[]" id="product-photo">
                                        <div id="photo" class="dropzone"></div>
                                        <div class="row">
                                            @if(isset($news->photo->id))
                                                <div class="col-sm-3" id="photo_{{$news->photo->id}}" style="margin:2%">
                                                    <img class="img-responsive" src="{{($news->photo->path) }}"
                                                         alt="image">
                                                    <a class="text-danger"
                                                       href="{{route('uni',$news->photo->id)}}">حذف</a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    @if(isset($news->photo->id))
                                        <button type="submit" onclick="productGallery({{$news->photo->id}})"
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
            removePlugins: 'cloudservices , easyimage'
        })
        CKEDITOR.replace('textareaDes2', {
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

    {{--    <script>--}}
    {{--        tinymce.init({--}}
    {{--            selector: '#mytextarea'--}}
    {{--        });--}}
    {{--    </script>--}}
@endsection
