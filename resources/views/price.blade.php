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
                   <th>Name</th>
                   <th>Model</th>
                   <th>Price</th>
               </tr>

               <tr>
                   <td><img src="images/1.png"width="300px"></td>
                   <td><font face="Arial" size="4" color="#006400"><strong>Zip around the city</strong></font></td>
                   <td>SPORT</td>
                   <td>$10 per hour</td>
               </tr>
               <tr>
                   <td><img src="images/2.png"width="300px"></td>
                   <td><font face="Arial" size="4" color="#006400"><strong>Going somewhere fun</strong></font></td>
                   <td>SUV</td>
                   <td>$12 per hour</td>
               </tr>
           </table>
        </div>
    </div>
@endsection