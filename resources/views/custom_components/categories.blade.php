<div class="w-full flex flex-wrap items-stretch mb-5">
    @foreach($categories as $category)
        <div class="lg:w-1/4 md:w-1/3 sm:w-1/2 w-full p-2">
            <a href="{{route('products', $category->id)}}" class="block h-full bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 hover:shadow-lg hover:text-green-700 transition">
                <img class="object-cover sm:h-48 w-full" src="{{$category->img ?? '/img/cover.jpg'}}" alt="">
                <h6 class="font-semibold w-full text-center">{{$category->name}}</h6>
                <p>{{$category->description}}</p>
            </a>
        </div>
    @endforeach
</div>
