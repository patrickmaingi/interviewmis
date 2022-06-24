@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'addcandidate'
])

@section('content')

    <!-- Main content -->
    
      <div class="container-fluid"> 
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><strong>Add Candidate</strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form class="user" method="POST" action="add_candidate">
               @csrf
                <div class="form-group col-sm-10 col-md-3">
                  <input type="text" 
                   class="form-control form-control-user"
                    id="" aria-describedby=""
                     value="" placeholder="First name..."  name="f_name" required >
                    </div><br>
                    <div class="form-group col-sm-10 col-md-3">
                    <input type="text" 
                   class="form-control form-control-user  "
                    id="" aria-describedby=""
                     value="" placeholder="Middle Nmae..."  name="m_name" required >
                    </div><br>
                    <div class="form-group col-sm-10 col-md-3">
                    <input type="text" 
                   class="form-control form-control-user  "
                    id="" aria-describedby=""
                     value="" placeholder="last name..."  name="l_name" required >
                    </div><br>
                    <div class="form-group col-sm-10 col-md-3">
                  <input type="text" 
                   class="form-control form-control-user"
                    id="" aria-describedby=""
                     value="" placeholder="ID Number..."  name="id_no" required >
                    </div><br>
                    <div class="form-group col-sm-10 col-md-3">
                    <input type="varchar" 
                   class="form-control form-control-user  "
                    id="" aria-describedby=""
                     value="" placeholder="Age..."  name="age" required >
                    </div><br>
                    <div class="form-group col-sm-10 col-md-3">
                    <input type="varchar" 
                   class="form-control form-control-user  "
                    id="" aria-describedby="emailHelp"
                     value="" placeholder="Enter Address..."  name="address" required >
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
