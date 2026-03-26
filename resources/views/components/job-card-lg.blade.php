@props(['job'])

<div class="p-4 bg-white/5 rounded-xl flex gap-x-6 border border-transparent hover:border-blue-800 transition-colors duration-300 group">
    <div>
        <img src="{{ $job->employer->logo }}/90" alt="" class="rounded-xl">
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
        <h3 class="group-hover:text-blue-500 transition-colors duration-300 font-bold text-xl mt-1">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $job->schedule }} - From ${{ $job->salary }}</p>
    </div>

    <div>
        <div>
            @foreach($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
    </div>
</div>
