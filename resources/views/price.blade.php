@extends('layout.master')
@section('title', 'Car-Sharing')
@section('content')
    <div class="container">
        <div class="content">
            {{--<div class="title">--}}
                {{--<h2>Price</h2>--}}
            {{--</div>--}}

           <table class="content display-tablecontainer" >
               <tr>
                   <th></th>
                   <th>Name</th>
                   <th>Model</th>
                   <th>Price</th>
                   {{--<th>Status</th>--}}
               </tr>

               <tr>
                   <td><img src="images/cars/holden_commodore_sport.png"width="300px"></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>Holden commodore</strong></font></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>Sport Sedan</strong></font></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>$14 per hour</strong></font></td>
               </tr>
               <tr>
                   <td><img src="images/cars/Hyundai_unveils_van.png"width="300px"></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>Hyundai unveils</strong></font></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>Van</strong></font></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>$18 per hour</strong></font></td>
               </tr>

               <tr>
                   <td><img src="images/cars/mazda2_Hatchback.png"width="300px"></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>Mazda2</strong></font></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>Hatchback</strong></font></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>$13 per hour</strong></font></td>
               </tr>

               <tr>
                   <td><img src="images/cars/mercedes_cla_coupe.png"width="300px"></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>Mercedes cla</strong></font></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>Coupe</strong></font></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>$17 per hour</strong></font></td>
               </tr>

               <tr>
                   <td><img src="images/cars/rangeover_autobiography_suv_sport.png"width="300px"></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>Rangeover autobiography</strong></font></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>Sport SUV</strong></font></td>
                   <td><font face="Arial" size="3" color="#000000"><strong>$20 per hour</strong></font></td>
               </tr>
           </table>
        </div>
    </div>
@endsection