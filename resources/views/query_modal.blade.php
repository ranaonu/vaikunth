<!-- Modal -->
  <div class="modal fade" id="queryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h5 class="modal-title" id="exampleModalLabel">PLAN YOUR TRIP</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          {!! Form::open(['url' => url('/send-query-form'),'id'=>'queryForm',  'class' => 'my_form  queryForm m-t-20 data-parsley-validate novalidate form-control1','enctype'=>'multipart/form-data'] ) !!}
              <div class="row g-3">
                  <div class="col-md-12">
                      <label>Name <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <input type="text" class="form-control border-1 required removeErrorField" id="name" name="name" placeholder="Your Name">
                          
                      </div>
                  </div>
                  <div class="col-md-12">
                      <label for="email">E-mail Id <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <input type="email" class="form-control border-1 required removeErrorField email" id="email" name="email" placeholder="Your Email">
                          
                      </div>
                  </div>


                  <div class="col-md-6">
                      <label for="contact" >Contact No. <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <input type="text" class="form-control border-1 required removeErrorField number" id="phoneno" name="phoneno" placeholder="Contact No">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <label for="travel_date" >Date of Travel <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <input type="date" class="form-control border-1 required removeErrorField" id="travel_date" name="travel_date" placeholder="Travel Date">
                          
                      </div>
                  </div>
                  <div class="col-12">
                      <label for="message" >Requirements <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <textarea class="form-control border-1 required removeErrorField" placeholder="Leave a message here" id="message" name="message" style="height: 160px"></textarea>
                          
                      </div>
                  </div>
              </div>
          {{ Form::close() }}
        </div>
        <div class="modal-footer text-center">
          <button type="button" class="btn btn-primary" type="submit" id="submitQueryForm">Submit</button>
        </div>
      </div>
    </div>
  </div>