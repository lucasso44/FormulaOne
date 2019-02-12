<div class="panel-body">
        <div class="form-horizontal">
          <div class="row">
            <div class="col-md-8">
              @if(count($errors))
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <div class="form-group">
                <label for="raceId" class="control-label col-md-3">Race</label>
                <div class="col-md-5">
                  {!! Form::select('raceId', App\Race::orderBy('name', 'asc')->pluck('name','raceId'), null, ['class' => 'form-control']) !!}
                </div>
              </div>
              <div class="form-group">
                <label for="title" class="control-label col-md-3">Title</label>
                <div class="col-md-8">
                  {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
              </div>
      
              <div class="form-group">
                <label for="description" class="control-label col-md-3">Description</label>
                <div class="col-md-8">
                  {!! Form::text('description', null, ['class' => 'form-control']) !!}
                </div>
              </div>

              <div class="form-group">
                    <label for="video" class="control-label col-md-3">Video</label>
                    <div class="col-md-8">
                      {!! Form::text('video', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="thumbnail" class="control-label col-md-3">Thumbnail</label>
                    <div class="col-md-8">
                        {!! Form::text('thumbnail', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="poster1" class="control-label col-md-3">Poster</label>
                    <div class="col-md-8">
                        {!! Form::text('poster1', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

            </div>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-offset-3 col-md-6">
                <button type="submit" class="btn btn-primary">{{ !empty($racePage->id) ? "Update" : "Save"}}</button>
                <a href="/races/{{ $racePage->id }}" class="btn btn-default">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
      <script>
          CKEDITOR.replace( 'content' );
      </script>
    
      
      