<div class="modal fade" id="update_news" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-primary modal-lg" role="document">
      <div class="modal-content">
        <form action="{{ route('news.update', $news->id) }}" method="post" enctype="multipart/form-data">
          @csrf 
          @method('PATCH')               
          <div class="modal-header">
            <h4 class="modal-title">Create News Posting</h4>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-3">
                    <img src="" alt="" id="imageShow" style="width: 150px;height:150px;border:1px solid black;margin: 0;">
                </div>
                <div class="col-6">
                    <label for="">Title:</label>
                    <input type="text" name="title" class="form-control mb-3 text-center text-uppercase fname" value="{{$news->title}}">
                    <label for="">Subject:</label>
                    <input type="text" name="subject" class="form-control mb-3 text-center text-uppercase lname" value="{{$news->subject}}">
                </div>   
                <div class="col-3">
                    <label for="">Date:</label>
                    <input type="date" name="date" class="form-control mb-3 text-center text-uppercase mname" value="{{$news->date}}">
                    <label for="">Location:</label>
                    <input type="text" name="location" class="form-control mb-3 text-center text-uppercase" value="{{$news->location}}">
                </div>
            </div>
            <input type="file" name="image" id="image" class=" mb-1" value="{{$news->image}}">
            <div class="row">
            <label for="" class="ml-3">Content:</label>
                <div class="col-12">
                    <textarea name="content" id="" cols="100" rows="10" class="">{{ old('body', $news->content ?? null) }}</textarea>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>