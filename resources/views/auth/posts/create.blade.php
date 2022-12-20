@extends('layouts.auth')

@section('title', 'Create Post')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Posts </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Posts</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Post</li>
          </ol>
        </nav>
      </div>
      <div class="row">


        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Create Post</h4>

              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputUsername1">Title</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select name="category" class="form-control">
                    <option disabled selected>Choose Option</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Published</label>
                  <select name="is_publish" class="form-control">
                    <option disabled selected>Choose Option</option>
                    <option value="1">Publish</option>
                    <option value="0">Draft</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>File upload</label>
                  <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea id="summernote" name="description" class="form-control" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
              </form>
            </div>
          </div>
        </div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
    $(document).ready(function() {
        $('summernote').summernote();
    });
</script>

@endsection
