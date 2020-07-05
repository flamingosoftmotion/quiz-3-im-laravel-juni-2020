@extends('layouts.master')
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="row">
                	<div class="col-sm-6">
                		
                    <form action="/artikel" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                       <div class="form-group{{$errors->has('judul') ? ' has-error' : ''}}">
                              <label>Judul</label>
                              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="{{old('judul')}}">
                              @if($errors->has('judul'))
                              <span class="help-block">{{$errors->first('judul')}}</span>
                          @endif
                      </div>
                       
                      <div class="form-group{{$errors->has('isi') ? ' has-error' : ''}}">
                              <label>Isi</label>
                              <textarea type="text" class="form-control" id="isi" name="isi" placeholder="Isi" value="{{old('isi')}}" style="height: 150px;">
                              </textarea>
                              @if($errors->has('isi'))
                              <span class="help-block">{{$errors->first('isi')}}</span>
                          @endif
                      </div>

                      <div class="form-group{{$errors->has('tags') ? ' has-error' : ''}}">
                          <label>Tag</label>
                            <select class="select2bs4" multiple="multiple" data-placeholder="Select a State"
                                    style="width: 100%;" id="tags" name="tags[]">
                              <option value="php">php</option>
                              <option value="laravel">laravel</option>
                              <option value="javascript">javasript</option>
                            </select>
                          @if($errors->has('tags'))
                              <span class="help-block">{{$errors->first('tags')}}</span>
                          @endif
                      </div>
                     
    	            	<div class="tombol_add">
    	            		<button type="submit" class="btn btn-primary">Post!</button>
    	            	</div>
    	            </div>
                </form>   
              </div>
	           </div>
	          <!-- /.col -->
  	        </div>
          <!-- ./row -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
@stop
@section('footer')

 
@stop