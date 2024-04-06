<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Show User Data Page</h1>
    
    <a href="{{route('user.create')}}">click here</a>
    <br><br>
    @if(session('success'))
        <div id="successMessage">
            {{ session('success') }}
        </div>
    @endif
    <table border="1">
        <thead >Users Data</thead>
        <tbody>
            <tr>
                <td>id</td>
                <td>name</td>
                <td>email</td>
                
                <td>phone</td>
                <!-- <td>address</td> -->
                <td>action</td>
            </tr>
          
            @foreach($user as $User)<tr>
                <td>
                {{ $loop->iteration }}
                </td>console.log('::: ', );
                <td>
                    {{ $User->name}}
                </td>
                <td>
                    {{ $User->email}}
                </td>
                <!-- <td>
                    {{ $User->password}}
                </td> -->
                <td>
                    {{ $User->phone}}
                </td>
                <td>
                    <a href="{{route('user.edit',$User->id)}}" >Edit</a>
                    <a href="{{route('user.destroy',$User->id)}}">Delete</a>
                </td>            </tr>@endforeach
        </tbody>
    </table>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add this script to hide the success message after a certain duration
            setTimeout(function() {
                var successMessage = document.getElementById('successMessage');
                if (successMessage) {
                    successMessage.style.display = 'none';
                }
            }, 5000); // Adjust the duration in milliseconds (e.g., 5000 for 5 seconds)
        });
    </script>
</body>
</html>
