@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'viewquestion'
])

@section('content')

    <!-- Main content -->
    
      <div class="container-fluid"> 
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><strong>Question list</strong></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @if(isset($data))
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Question Code</th>
                    <th>Content</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($data as $item)
                    <tr>
                    <td>{{ $item -> qsn_code}}</td>
                    <td>{{ $item -> qsn_desc}}</td>
                    <td> 
                       <div class="btn-group ">  
                       <div class="btn-group ">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                        <div class="dropdown-menu col-md-2" >        
                        <a class=" dropdown-item" data-toggle="modal" data-target="#transmodal" href="#"><i class="fa fa-fw fa-eye fa-blue"></i>View</a>                  
                        <a class=" dropdown-item" data-toggle="modal" data-target="#transmodal" href="#"><i class="fa fa-minus"></i>Delete</a>            
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                @endif
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
