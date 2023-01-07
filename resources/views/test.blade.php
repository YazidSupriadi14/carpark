@extends('layouts.admin')

@section('content')
  
  <!-- Page Heading -->
          <div class="jumbotron bg-info text-light">
           <h1 class="display-4 text-center">Selamat Datang di Car Parking Website</h1>
          </div>
          <!-- Content Row -->
          <div class="container">
          <div class="row">
      
      <div class="col-12">
      <div class="embed-responsive embed-responsive-21by9">
<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LlRlPv1uQqc" ></iframe>
</div>
          </div>

          <div class="container mt-3">
            <div class="row">
                    <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Plat Number</th>
              <th scope="col">Car in</th>
              <th scope="col">Car Out</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1 ?>
            @forelse($parkings as $parking)
            <tr>
            <th scope="row">{{$i++}}</th>
      <td>{{$parking->plat_number}}</td>
      <td>{{$parking->car_in}}</td>
      <td>{{$parking->car_out}}</td>
            </tr>
            @empty
            <tr>
                <td class="text-center" colspan="7">Data Kosong</td>
           </tr> 
            @endforelse
          </tbody>
        </table>

            </div>
          </div>
       
            </div>
      
          
          </div>
        
         
@endsection