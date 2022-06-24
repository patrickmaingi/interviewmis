@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'addquestion'
])

@section('content')

    <!-- Main content -->
    
      <div class="container-fluid"> 
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><strong>Add Question</strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form class="user" method="POST" action="add_question">
               @csrf
                <div class="form-group col-sm-10 col-md-3">
                    <label class="form-label">Question code</label>
                  <input type="varchar" 
                   class="form-control form-control-user"
                    id="" aria-describedby=""
                     value="" placeholder=""  name="qsn_code" required >
                    </div><br>
                    <div class="form-group col-sm-10 col-md-5">
                    <label class="form-label">Question </label>
                    <textarea class="form-control form-control-user"  name= "qsn_desc" cols="100" rows="5" placeholder="Add question..."></textarea><br>
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
