<x-app-layout>  
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
    @include("admin.navbar")
    <div>
        <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data" >
            @csrf
        <div>
            <label>Name</label>
            <input style="color:blue"; type="tect" name="name" require="" placeholder="Entrer name">
        </div>
        <div>
        <label>Speciality</label>
        <input style="color:blue"; type="text" name="name" require="" placeholder="Entrer the speciality">
        </div>
        <div>
            <input  type="file" name="image" require="" >
        </div>
        <div>
        <input  type="submit" value="save" style="color:blue"; >
        </div>
        </form>
        <div>
        <table bgcolor="black">
          <tr>
            <th style="padding:30px;">Chef Name</th>
            <th style="padding:30px;">Speciality</th>
            <th style="padding:30px;">Image</th>
            <th style="padding:30px;">Action</th>
            <th style="padding:30px;">Action 2</th>
          </tr>
          @foreach($data as $data)
          <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->speciality}}</td>
            <td><img height="100" width="100" src="/foodchef/{{$data->image}}"></td>
            <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
            <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
          </tr>
          @endforeach
        </table>
</div>




    </div>
</div>
    @include("admin.adminscript")
  </body>
</html>