<div class="w-full bg-emerald-500 py-5">
    <h1 class="text-3xl text-center">
        @php
            $hour = date('G') + 7; // RETURN JAM SEKARANG
            $salam = "";
            if($hour >= 6 && $hour < 12){
                $salam = "Selamat Pagi";
            }
            elseif($hour >= 12 && $hour < 16){
                $salam = "Selamat Siang";
            }
            elseif($hour >= 16 && $hour < 18)
            {
                $salam = "Selamat Sore";
            }
            elseif($hour >=18 || $hour < 6)
            {
                $salam = "Selamat Malam";
            }
            else{
                $salam = "Gak ada salam";
            }
        @endphp

        Algoritma Book Store <br>
        {{$salam}}
        @if ($user->grade == "1")
            Pangeran
        @elseif($user->grade == "2")
            Kaisar
        @endif
        {{$user->name}}
    </h1>
</div>
<ul class="flex justify-center my-5 gap-5">
    <li>
        <a href="/{{$user->id}}" class="hover:text-red-600">
            Home
        </a>
    </li>
    <li data-dropdown-toggle="dropdown">
        <a class="hover:text-red-600">
            Category
        </a>
    </li>
    <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            @php
                $categories = App\Models\Category::all();
            @endphp
            @foreach ($categories as $category)
                <li class="px-3 py-5">
                    <a href="/{{$user->id}}/category/{{$category->id}}">
                        {{$category->category}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <li>
        <a href="/{{$user->id}}/contact" class="hover:text-red-600">
            Contact
        </a>
    </li>
    <li>
        <a href="/{{$user->id}}/transaction">
            My Transaction
        </a>
    </li>
</ul>
