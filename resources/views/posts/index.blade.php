<x-layout>
    <h1>Posts Index page</h1>
    <div>
    
    My name is {{$username}} and i have {{$age}};
    
    <ul>
       @foreach ($posts as $post)
           <li>{{$post}}</li>
       @endforeach
    
    </ul>
    
    </div>
</x-layout>