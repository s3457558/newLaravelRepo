@extends('layout.master')
@section('title', 'Car-Sharing')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title">
                <h2>Price</h2>
            </div>

           <table class="content display-tablecontainer" >
               <tr>
                   <th></th>
                   <th><h3>Name</h3></th>
                   <th><h3>Model</h3></th>
                   <th><h3>Price</h3></th>
               </tr>

               <tr>
                   <td><img src="images/1.png"width="300px"></td>
                   <td><font face="Arial" size="4" color="#006400"><strong><h3>Zip around the city<h3></strong></font></td>
                   <td><h3>SPORT<h3></td>
                   <td><h3>$10 per hour<h3></td>
               </tr>
               <tr>
                   <td><img src="images/2.png"width="300px"></td>
                   <td><font face="Arial" size="4" color="#006400"><strong><h3>Going somewhere fun<h3></strong></font></td>
                   <td><h3>SUV<h3></td>
                   <td><h3>$12 per hour<h3></td>
               </tr>
           </table>
        </div>
    </div>
@endsection