        @extends('userDataView.userData')
        @section('userDataContent')
        <form action="">
            <div class=" row card-header">
                <div class="col-sm-6">
                  <h4>
                    <i class="fa fa-question" aria-hidden="true"></i>
                         Write Your Qestion
                  </h4>
                 </div>
                 <div class="col-sm-6">
                     <select name="" class="form-control">
                         <option value="">Select Category</option>
                         <option value="">ABC</option>
                         <option value="">ABC</option>
                     </select>
                 </div>
            </div>
            <div class="card-body">
                <textarea class="form-control" style="height: 300px;"> Botta singh</textarea>
            </div>
            <div class=" row card-footer"> 
                <div class="col-sm-6">
                    <i class="fa fa-picture-o 2x" aria-hidden="true"></i>
                    <a href="">Add Image</a>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="" class="btn btn-success">Publish</a>
                </div>

            </div> 
        </form>   
        @endsection