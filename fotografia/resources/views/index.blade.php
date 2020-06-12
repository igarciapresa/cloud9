@extends('layouts.app')
@section('title_header', 'Fotografía')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body row" style="display: flex;justify-content: space-around">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(count($photos))
                            @foreach($photos as $photo)
                                <?php
                                $assessment_true = 0
                                ?>
                                <div class="col-6 box_image_one">
                                    <h3>{{$photo->title}}</h3>
                                    <p>Autor: {{$users[$photo->id_user]}}</p>
                                    <img class="box_image" src="images_upload/{{$photo->src_image}}" alt="Image"/>
                                    <p class="description_photo">{{$photo->description}}</p>
                                    @if (Auth::user()->id==$photo->id_user)
                                        <a href="{{route('change_description', $photo->id)}}" class="btn btn-primary"
                                           style="margin: 10px 0px">cambiar descripción
                                        </a>
                                        <form action="borrar/{{$photo->id}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger" onclick="return confirm('¿Seguro que quieres borrar esta foto?')" type="submit">Borrar</button>
                                        </form>
                                    @endif
                                    <div class="box_assessments">
                                        <p>Valoración media:</p>
                                        <div>
                                            <?php
                                                $avg = DB::table('assessments')->where('id_photo', $photo->id)->avg('assessment');
                                            ?>
                                            @if($avg!=null)
                                                <span> {{$avg}}</span>
                                            @else
                                                <span> No tiene valoraciones</span>
                                            @endif
                                        </div>
                                    </div>
                                    @if (Auth::user()->role=='user')
                                        @foreach($assessments as $assessment)
                                            @if($assessment->id_photo==$photo->id)
                                                <p>Tu valoración: {{$assessment->assessment}}
                                                <?php
                                                $assessment_true = 1
                                                ?>
                                            @endif
                                        @endforeach
                                        @if($assessment_true==0)
                                            <form action="{{route('valoration')}}" method="POST"
                                                  style="width: 100%;display: flex;justify-content: space-evenly;">
                                                {{ csrf_field() }}
                                                <input type="hidden" class="form-control" id="id_photo"
                                                       name="id_photo" value="{{$photo->id}}">
                                                <select id="assessment" name="assessment" class="form-control"
                                                        style="width: 60%">
                                                    <option selected>Valoración</option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                </select>
                                                <button class="btn btn-primary" type="submit">Enviar</button>
                                            </form>
                                        @endif

                                    @endif
                                </div>
                            @endforeach

                        @else 
                            <div class="col-8 no_exist_photo">
                                <img src="images/upload_photo.png" alt="Image"/>
                                <h5 style="margin-top: 10px">No hay ninguna fotografía, se el primero en subir una!</h5>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>

        @if (Auth::user()->role=='photographer')
            <a href="{{route('new_photo')}}" class="add_photo_button" title="Añadir nueva fotografía">
                <img src="{{ asset('/images/add_photo.png') }}" style="width: 31px;"/>
            </a>
        @endif

    </div>
@endsection
