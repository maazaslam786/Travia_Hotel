<div  class="our_room">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Our Rooms</h2>
                <p>Explore our inviting rooms designed to provide you with the ultimate comfort and relaxation. From cozy retreats to spacious suites, each room is thoughtfully appointed with modern amenities and stylish décor. Whether you're traveling for business or leisure, our accommodations offer the perfect blend of luxury and convenience. Discover your ideal sanctuary and make your stay with us truly memorable.</p>
             </div>
          </div>
       </div>
       <div class="row">
         @foreach ($room as $rooms) 
             
            <div class="col-md-4 col-sm-6">
               <div id="serv_hover"  class="room">
                  <div class="room_img">
                     <figure><img style="width:auto; height:200px"  src='room/{{$rooms->image}}' alt="#"/></figure>
                  </div>
                  <div class="bed_room">
                     <h3>{{$rooms->room_title}}</h3>
                     <p>{!! Str::limit($rooms->description,100)!!}</p>
                     <a class="btn btn-primary" href="{{url('room_details',$rooms->id)}}">Room Details</a>
                  </div>
               </div>
            </div>
         @endforeach

         </div>
      </div>
 </div>
