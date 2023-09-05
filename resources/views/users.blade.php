@extends('layouts.app')
@section('content')
   <div class="container">
      <div class="row page-titles">
         <ol class="breadcrumb">
            <!-- <li class="breadcrumb-item active"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Orders</a></li> -->
         </ol>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
               <div class="card-header">
                  <h4 class="card-title">Users List</h4>
               </div>
               <div class="card-body">
                  <table class="table">
                     <thead>
                        <tr>
                           <th scope="col">Name </th>
                           <th scope="col">Email </th>
                           <th scope="col">Mobile </th>
                           <th scope="col">DOB </th>
                           <th scope="col">Gender</th>
                           <th scope="col">Address</th>
                        </tr>
                     </thead>
                     <tbody>
                           @foreach($users as $value)
                           <?php 
                           ?>
                              <tr>
                                 <td class="range2" > {{$value->name}}</span></td>
                                 <td class="range" >{{$value->email}}</td>
                                 <td class="range1">{{$value->mobile}}</td>
                                 <td class="range1">{{$value->dob}}</td>
                                 <td class="range1">{{$value->gender}}</td>
                                 <td class="range1">{{$value->address}}</td>
                              </tr>       
                           @endforeach 
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection   