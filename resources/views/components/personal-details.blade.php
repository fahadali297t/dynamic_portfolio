 <div class="col-12 col-lg-6 d-flex">
     <div class="card rounded-4 w-100 overflow-hidden">
         <div class="card-body">
             <div class="d-flex align-items-center">
                 <h6 class="mb-5">Personal Details</h6>

             </div>
             <div
                 class="d-flex flex-column align-items-center gap-5 justify-content-center mt-0 p-2 bg-light radius-10 border">
                 <div class="">

                     <div class="card">
                         <div class="card-body">
                             <div class="border p-3 rounded">
                                 <form action="{{ route('dashboard') }}" method="POST" class="row  g-3">
                                     @csrf
                                     <div class="col-12">
                                         <label class="form-label" for="name">Full Name*</label>
                                         <input value="{{ $details->name }}" id="name" name="name"
                                             type="text" class="form-control">
                                     </div>
                                     <div class="col-12">
                                         <label class="form-label" for="email">Email*</label>
                                         <input type="text" value="{{ $details->email }}" id="email"
                                             name="email" class="form-control">
                                     </div>
                                     <div class="col-12">
                                         <label class="form-label" for="number">Phone*</label>
                                         <input type="text" value="{{ $details->phone_number }}" class="form-control"
                                             id="number" name="phone_number">
                                     </div>

                                     <div class="col-12">
                                         <label class="form-label" for="address">Address</label>
                                         <input type="text" value="{{ $details->address }}" class="form-control"
                                             id="address" name="address">
                                     </div>
                                     <hr>
                                     <div class="col-12">
                                         <p class="fs-5">Social Accounts</p>
                                     </div>

                                     <div class="col-12 col-md-6">
                                         <label class="form-label">FaceBook</label>
                                         <input type="text" value="{{ $details->facebook }}" class="form-control"
                                             id="facebook" name="facebook">
                                     </div>
                                     <div class="col-12 col-md-6">
                                         <label class="form-label">Instagram</label>
                                         <input type="text" value="{{ $details->instagram }}" class="form-control"
                                             id="instagram" name="instagram">
                                     </div>
                                     <div class="col-12 col-md-6">
                                         <label class="form-label">Linkedin</label>
                                         <input type="text" value="{{ $details->linkedin }}" class="form-control"
                                             id="linkedin" name="linkedin">
                                     </div>
                                     <div class="col-12 col-md-6">
                                         <label class="form-label">Youtube</label>
                                         <input type="text" value="{{ $details->youtube }}" class="form-control"
                                             id="behance" name="behance">
                                     </div>
                                     <div class="col-12 col-md-6">
                                         <label class="form-label">Fiverr</label>
                                         <input type="text" value="{{ $details->fiverr }}" class="form-control"
                                             id="dribble" name="dribble">
                                     </div>
                                     <div class="col-12 col-md-6">
                                         <label class="form-label">Upwork</label>
                                         <input type="text" value="{{ $details->upwork }}" class="form-control"
                                             id="upwork" name="upwork">
                                     </div>

                                     <input type="hidden" name="id" value="{{ $details->id }}">

                                     {{--  --}}
                                     <div class="col-12">
                                         <div class="d-grid">
                                             <button type="submit" class="btn btn-primary">Update</button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>

                 </div>
                 {{-- <div class="border-end sepration"></div> --}}

             </div>
         </div>
     </div>
 </div>
