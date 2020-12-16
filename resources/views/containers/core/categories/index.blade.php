@extends('layouts.app')

@section('navbar')
    @include('../components.core.navbar')
@endsection

@section('main-sidebar')
    @include('../components.core.main-sidebar')
@endsection

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
   
    <div class="content-wrapper">
        <!-- Main content -->
        @include('inc.messages')
        <section class="content">

        <div class="card-header">
        <h2 class="card-title">Categories Table</h2>
        

        <div class="card-tools">
        
        

           
            
            <a class="btn btn-primary "href="/core/categories/create" >
            <i class="fas fa-plus-circle"></i> Create new Category
            </a>
           
        </div>
    </div>

    <div class="card">
   
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>ACTION</th>
                    

                </tr>
            </thead>
            <tbody>
                
                @forelse ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name}}</td>
                        <td>{{ $category->description }}</td>
                        

                        <td>

                       

                            <a href="/core/categories/{{$category->id}}/edit" class="btn btn-sm btn-warning"><i class="fas fa-pen-alt"> Edit</i></a> 
                           
                            {!!Form::open(['action' => ['App\Http\Controllers\Core\CategoryController@destroy', $category->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                               
                                {{Form::submit('Delete', ['class' => 'btn btn-danger '])}}

                                
                            {!!Form::close()!!}

                       
                         
                        
                        </td>
       
                        
                    </tr>
                  
                @empty
                    <tr>No Result Found</tr>
                @endforelse
              
                  
            </tbody>
        </table>
        
       
    </div>



 


    <!-- /.card-body -->
  </div>

                

        </section>
        <!-- /.content -->

        <div class="loading"></div>
    </div>
    <!-- /.content-wrapper -->
@endsection

