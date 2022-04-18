@extends('layouts.dashboard')

@section('title', 'Store Dashboard Product Create')

@section('content')
   <div class="section-content section-dashboard-home" data-aos="fade-up">
      <div class="container-fluid">
         <div class="dashboard-heading">
            <h2 class="dashboard-title">Create Product</h2>
            <p class="dashboard-subtitle">Create your own product</p>
         </div>
         <div class="dashboard-content">
            <form action="">
               <div class="row">
                  <div class="col-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" class="form-control" />
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" class="form-control" />
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control">
                                       <option value="1" selected>Shipping</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="editor" class="form-control"></textarea>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="form-group">
                                    <label>Thumbnails</label>
                                    <input type="file" class="form-control-file" />
                                    <p class="text-muted">Kamu dapat memilih lebih dari satu file</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row my-4">
                  <div class="col text-center">
                     <button type="submit" class="btn btn-success btn-block px-5">Create Product</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
@endsection

@push('addon-script')
   <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
   <script>
      function thisFileUpload() {
         document.getElementById("file").click();
      }
   </script>
   <script>
      CKEDITOR.replace("editor");
   </script>
@endpush
