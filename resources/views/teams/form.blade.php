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
              {{--  <div class="form-group">
                <label for="constructorId" class="control-label col-md-3">Constructor</label>
                <div class="col-md-8">
                  {!! Form::text('constructorId', null, ['class' => 'form-control']) !!}
                </div>
              </div>  --}}
              <div class="form-group">
                <label for="group" class="control-label col-md-3">Group</label>
                <div class="col-md-5">
                  {!! Form::select('constructorId', App\Constructor::orderBy('name', 'asc')->pluck('name','constructorId'), null, ['class' => 'form-control']) !!}
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
                <label for="content" class="control-label col-md-3">Content</label>
                <div class="col-md-8">
                  {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => 2]) !!}
                </div>
              </div>

              <div class="form-group">
                    <label for="image" class="control-label col-md-3">Image</label>
                    <div class="col-md-8">
                      {!! Form::text('image', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="form-group">
                        <label for="thumbnail" class="control-label col-md-3">Thumbnail</label>
                        <div class="col-md-8">
                          {!! Form::text('thumbnail', null, ['class' => 'form-control']) !!}
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
                <button type="submit" class="btn btn-primary">{{ !empty($teamPage->id) ? "Update" : "Save"}}</button>
                <a href="/teams/{{ $teamPage->id }}" class="btn btn-default">Cancel</a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
      <script>
          CKEDITOR.replace( 'content' );
      </script>
    
      
      