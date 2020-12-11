@extends('../layouts.app')

{{-- @section('third_party_stylesheets')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
  
  

@endsection --}}

@section('navbar')
    @include('../components.site.navbar')
@endsection



@section('main-content')

  

    <div class="bg-light" style="height: 100vh">

    <section class="category">
    
      <div class="col-md-12 p-1">
        <a class="btn btn-default js-scroll-trigger " href="#toplecturers">All</a>
        <a class="btn btn-default js-scroll-trigger " href="#toplecturers">Test</a>
        <a class="btn btn-default  js-scroll-trigger " href="#toplecturers">Test</a>
        <a class="btn btn-default  js-scroll-trigger " href="#toplecturers">Test</a>
        <a class="btn btn-default  js-scroll-trigger " href="#toplecturers">Test</a>
        <a class="btn btn-default  js-scroll-trigger " href="#toplecturers">Test</a>
        <a class="btn btn-default  js-scroll-trigger " href="#toplecturers">Test</a>
        
      </div>
    
      
    </section>

      <section class="content"> 
        <div class="row">



              @forelse ($lessons as $lesson)
                    
                  
                @empty
                    <tr>No Result Found</tr>
                @endforelse


            
        </div>
      </section>
        <!-- /.content -->

        <div class="loading"></div>
    </div>

   

@endsection