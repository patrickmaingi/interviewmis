@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'addinterview'
])

@section('content')

    <!-- Main content -->
    
      <div class="container-fluid"> 
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><strong>Add Interview Session</strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form class="user" method="POST" action="add_interview">
               @csrf
                <div class="form-group col-sm-10 col-md-3">
                  <input type="text" 
                   class="form-control form-control-user"
                    id="" aria-describedby=""
                     value="" placeholder="Interview ref no..."  name="interview_id" required >
                    </div><br>
                    <div class="form-group col-sm-10 col-md-3">
                    <input type="text" 
                   class="form-control form-control-user  "
                    id="" aria-describedby=""
                     value="" placeholder="Interview description..."  name="interview_desc" required >
                    </div><br>

                     <button type="submit" class="btn btn-success">
                        Add
                      </button>
                                        
                    </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    <!-- /.content -->
    
@endsection
