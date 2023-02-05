<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css'])
</head>
<body class="antialiased">
<div class="container mx-auto mt-20 mb-20">

    <div>
        <div class="p-8 flex items-center bg-[#f4f4f5] bg-opacity-50 mt-0 mr-0 mb-8 ml-0 rounded-lg sm:flex-col content-start">
            <form method="GET" action="{{ route('home') }}"
                  class="flex items-center w-full m-0 sm:flex-col sm:items-start md:flex-col md:items-start md:grid md:grid-cols-2 md:gap-3">
                <input class="pt-2 pr-3 pb-2 pl-3 text-sm tracking-wide leading-relaxed rounded-md border-solid border border-[#52525b] border-opacity-25 max-w-[300px] shadow-none placeholder-black placeholder-opacity-30 font-poppins font-normal focus:outline-none md:w-[100%] md:max-w-[none] sm:col-span-2 w-[100%] undefined-[100%] text-[14px]"
                       type="text" placeholder="Search by name" name="keyword" autocomplete="off" autofocus
                       value="{{ $filters['keyword'] ?? null }}">
                <div class="sm:col-span-2 lg:grid lg:grid-cols-2 grid grid-cols-2 min-w-[200px] max-w-[200px] md:min-w-[100%]">
                    <select class="w-full pt-2 pr-3 pb-2 pl-3 text-sm tracking-wide leading-relaxed border-solid border border-[#52525b] border-opacity-25 shadow-none placeholder-black placeholder-opacity-30 font-poppins font-normal focus:outline-none rounded-tl-md rounded-bl-md rounded-br-none rounded-tr-none md:max-w-[none] max-w-[none]"
                            name="min_salary">
                        <option value="" @if((!isset($filters['min_salary'])) || ($filters['min_salary'] ?? null) == null) selected @endif>Select min salary</option>
                        @foreach($salaryRanges as $key => $value)
                            <option @if(isset($filters['min_salary']) && $filters['min_salary'] == $key) selected @endif value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    <select class="w-full pt-2 pr-3 pb-2 pl-3 text-sm tracking-wide leading-relaxed border-solid border border-[#52525b] border-opacity-25 shadow-none placeholder-black placeholder-opacity-30 font-poppins font-normal focus:outline-none rounded-tr-md rounded-br-md rounded-tl-none rounded-bl-none mt-0 mr-0 mb-0 -ml-px md:max-w-[none] max-w-[none]"
                            name="max_salary">
                        <option value="" @if((!isset($filters['min_salary'])) || ($filters['min_salary'] ?? null) == null) selected @endif>Select max salary</option>
                        @foreach($salaryRanges as $key => $value)
                            <option @if(isset($filters['max_salary']) && $filters['max_salary'] == $key) selected @endif value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <select class="w-full pt-2 pr-3 pb-2 pl-3 text-sm tracking-wide leading-relaxed rounded-md border-solid border border-[#52525b] border-opacity-25 h-[2.5rem] max-h-[2.5rem] max-w-[300px] shadow-none font-poppins font-normal focus:outline-none md:max-w-[none] md:col-span-2"
                        name="location">
                    <option value="">Select location</option>
                    @foreach($locations as $location)
                        <option @if(($filters['location'] ?? null) === $location) selected
                                @endif value="{{ $location }}">{{ $location }}</option>
                    @endforeach
                </select>
                <select class="w-full pt-2 pr-3 pb-2 pl-3 text-sm tracking-wide leading-relaxed rounded-md border-solid border border-[#52525b] border-opacity-25 h-[2.5rem] max-h-[2.5rem] max-w-[300px] shadow-none font-poppins font-normal focus:outline-none md:max-w-[none] md:col-span-2"
                        name="experience">
                    <option value="">Select experience</option>
                    @foreach(range(1, 20) as $i)
                        <option @if(($filters['experience'] ?? null) == $i) selected @endif value="{{ $i }}">{{ $i }}
                            years
                        </option>
                    @endforeach
                </select>
                <select class="w-full pt-2 pr-3 pb-2 pl-3 text-sm tracking-wide leading-relaxed rounded-md border-solid border border-[#52525b] border-opacity-25 h-[2.5rem] max-h-[2.5rem] max-w-[300px] shadow-none font-poppins font-normal focus:outline-none md:max-w-[none] md:col-span-2"
                        name="industry">
                    <option value="">Select industry</option>
                    @foreach($industries as $industry)
                        <option @if(($filters['industry'] ?? null) === $industry) selected @endif value="{{ $industry }}">{{ $industry }}</option>
                    @endforeach
                </select>
                <select class="w-full pt-2 pr-3 pb-2 pl-3 text-sm tracking-wide leading-relaxed rounded-md border-solid border border-[#52525b] border-opacity-25 h-[2.5rem] max-h-[2.5rem] max-w-[300px] shadow-none font-poppins font-normal focus:outline-none md:max-w-[none] md:col-span-2"
                        name="functional_area">
                    <option value="">Select functional area</option>
                    @foreach($functionalAreas as $functionalArea)
                        <option @if(($filters['functional_area'] ?? null) === $functionalArea) selected @endif value="{{ $functionalArea }}">{{ $functionalArea }}</option>
                    @endforeach
                </select>
                <select class="w-full pt-2 pr-3 pb-2 pl-3 text-sm tracking-wide leading-relaxed rounded-md border-solid border border-[#52525b] border-opacity-25 h-[2.5rem] max-h-[2.5rem] max-w-[300px] shadow-none font-poppins font-normal focus:outline-none md:max-w-[none] md:col-span-2"
                        name="current_company">
                    <option value="">Select current company</option>
                    @foreach($companies as $company)
                        <option @if(($filters['current_company'] ?? null) === $company) selected @endif value="{{ $company }}">{{ $company }}</option>
                    @endforeach
                </select>
                <select class="w-full pt-2 pr-3 pb-2 pl-3 text-sm tracking-wide leading-relaxed rounded-md border-solid border border-[#52525b] border-opacity-25 h-[2.5rem] max-h-[2.5rem] max-w-[300px] shadow-none font-poppins font-normal focus:outline-none md:max-w-[none] md:col-span-2"
                        name="current_department">
                    <option value="">Select current department</option>
                    @foreach($departments as $department)
                        <option @if(($filters['current_department'] ?? null) === $department) selected @endif value="{{ $department }}">{{ $department }}</option>
                    @endforeach
                </select>
                <div class="w-full flex justify-end">
                </div>
                <div class="flex justify-end">
                    <button class="tracking-wide leading-relaxed pt-2 pr-5 pb-2 pl-5 rounded-md flex items-center space-x-1.5 bg-[#5eead4] bg-opacity-100 text-[#134e4a] text-opacity-100 font-poppins hover:text-[#134e4a] hover:text-opacity-100 hover:bg-[#99f6e4] hover:bg-opacity-100 mb-0 mr-0 mt-0 focus:outline-none text-sm md:flex md:items-center md:justify-center md:col-span-2"
                            type="submit" style="">
                        <i class="inline-block w-[16px] h-[16px]">
                            <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M18.319 14.433A8.001 8.001 0 006.343 3.868a8 8 0 0010.564 11.976l.043.045 4.242 4.243a1 1 0 101.415-1.415l-4.243-4.242a1.116 1.116 0 00-.045-.042zm-2.076-9.15a6 6 0 11-8.485 8.485 6 6 0 018.485-8.485z"
                                      fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="font-poppins lg:block md:block">Search</span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="grid sm:grid-cols-1 items-stretch md:grid-cols-4 grid-cols-4 gap-[2.5rem]">
        @foreach($candidates as $candidate)

            <div class="hover:shadow-none">
                <a class="p-8 flex flex-col items-center rounded-lg border border-solid border-[#e4e4e7] border-opacity-100 hover:shadow-xl hover:scale-105 transform"
                   href="#">
                    <img class="max-w-full w-[64px] h-[64px] rounded-full mt-0 mr-0 mb-2.5 ml-0"
                         src="https://storage.googleapis.com/ycode-prod-uploads/assets/app4180/images/utpbMRjF25aGTIP19vuugwvtuqIHHVQweakPrcbe.png"
                         sizes="128px">
                    <h6 class="text-lg font-semibold m-0 font-poppins text-black text-opacity-100">{{ $candidate->name }}</h6>
                    <span class="font-poppins text-[#71717a] text-opacity-100 font-light text-center text-xs">
                        ₹{{ number_format($candidate->expected_salary, 2) }} per year
                    </span>

                    <span class="flex items-center mt-2 font-poppins text-[#71717a] text-opacity-100 font-light text-center text-xs">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                          <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                        </svg>
                        {{ $candidate->location }}
                    </span>

                    <ul class="mt-4">
                        @foreach($candidate->key_skills as $skill)
                            <li class="inline px-2 py-1 mr-2 border rounded">{{ $skill }}</li>
                        @endforeach
                    </ul>
                    <span class="font-poppins mt-5 text-[#71717a] text-opacity-100 font-light text-center text-xs">
                        Industry: {{ $candidate->industry }}
                    </span>
                    <span class="font-poppins text-[#71717a] text-opacity-100 font-light text-center text-xs">
                        Area: {{ $candidate->functional_area }}
                    </span>
                    <span class="font-poppins text-[#71717a] text-opacity-100 font-light text-center text-xs">
                        Current Company: {{ $candidate->current_company }}
                    </span>
                    <span class="font-poppins text-[#71717a] text-opacity-100 font-light text-center text-xs">
                        Current Department: {{ $candidate->current_department }}
                    </span>
                </a>
            </div>
        @endforeach
    </div>

    <div class="flex mt-10 justify-center">
        {{ $candidates->links() }}
    </div>

</div>
</body>
</html>
