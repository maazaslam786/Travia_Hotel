<!DOCTYPE html>
<html>
  <head> 
    
    @include('admin.css')
  
    <style type="text/css">

      .table_deg
      {
          border: 2px solid white;
          margin: auto;
          width: 80%;
          text-align: center;
          margin-top: 40px;
          
      }
  
      .th_deg
      {
          background-color: skyblue;
          padding: 15px;
           
      }
  
      tr{
          border: 3px solid white 
      }
  
      td{
          padding: 10px solid white 
      }
  
      </style>
  </head>
  <body>
    @include('admin.header')
      @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


            <table class='table_deg'>
                <tr>
                    <th class='th_deg'>Name</th>
                    <th class='th_deg'>Email</th>
                    <th class='th_deg'>Phone</th>
                    <th class='th_deg'>Message</th>
                    <th class='th_deg'>Action</th>
                </tr>
                
                @foreach($message as $message)
                <tr>
                    <td>{{$message->name}}</td>
                    <td>{{$message->email }}</td>
                    <td>{{$message->phone}}</td>
                    <td>{{$message->message}}</td>
                    <td>
                       <a class="btn btn-success" href="{{url('send_mail',$message->id)}}">send mail</a>
                    
                    </td>
                </tr> 
               @endforeach

            <table>


          </div>
        </div>
      </div>
      
        @include('admin.footer')
  </body>
</html>