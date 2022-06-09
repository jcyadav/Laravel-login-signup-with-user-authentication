<!DOCTYPE html>
<html>
<head>
  <title>kmr Registration</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="flex items-center min-h-screen p-4 bg-gray-100 lg:justify-center">
      <div
        class="flex flex-col overflow-hidden bg-white rounded-md shadow-lg max md:flex-row md:flex-1 lg:max-w-screen-md"
      >
        <div
          class="p-4 py-6 text-white bg-blue-500 md:w-80 md:flex-shrink-0 md:flex md:flex-col md:items-center md:justify-evenly"
        >
          <div class="my-3 text-4xl font-bold tracking-wider text-center">
            <a href="#">KMR InfoTech</a>
          </div>
          <p class="mt-6 font-normal text-center text-gray-300 md:mt-0">
           KMR InfoTech is a software design and development company that provides end-to-end development service for web and mobile development.
          </p>
          <p class="flex flex-col items-center justify-center mt-10 text-center">
            <span>Already account?</span>
            <a href="#" class="underline">Get Started!</a>
          </p>
          <p class="mt-6 text-sm text-center text-gray-300">
            Read our <a href="#" class="underline">terms</a> and <a href="#" class="underline">conditions</a>
          </p>
        </div>
        <div class="p-5 bg-white md:flex-1">
          <h3 class="my-4 text-2xl font-semibold text-gray-700">Create Account</h3>
          <form method="post" action="{{route('register-user')}}" class="flex flex-col space-y-5">
          @if(Session::has('success'))
          <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2 role-success">{{Session::get('success')}}</div>
          @endif 
          @if(Session::has('fail'))
          <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2 role-alert>{{Session::get('fail')}}</div>
          @endif    
          @csrf
            <div class="flex flex-col space-y-1">
              <label for="email" class="text-sm font-semibold text-gray-500">Name</label>
              <input
                type="text"
                id="name"
                name="name"
                value="{{old('email')}}"
                autofocus
                class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200"
              />
              <span class="text-red-600">@error('name'){{$message}}@enderror</span> 
            </div>
            <div class="flex flex-col space-y-1">
              <div class="flex items-center justify-between">
                <label for="password" class="text-sm font-semibold text-gray-500">Email</label>
              
              </div>
              <input
                type="email"
                id="email"
                name="email"
                value="{{old('email')}}"
                class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200"
              />
              <span class="text-red-600">@error('email'){{$message}}@enderror</span>
            </div>
          <div class="flex flex-col space-y-1">
              <div class="flex items-center justify-between">
                <label for="password" class="text-sm font-semibold text-gray-500">Password</label>
              
              </div>
              <input
                type="password"
                id="password"
                name="password"
                value="{{old('pasword')}}"
                class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200"
              />
              <span class="text-red-600">@error('password'){{$message}}@enderror</span>
            </div>
            <div class="flex flex-col space-y-1">
              <div class="flex items-center justify-between">
                <label for="password" class="text-sm font-semibold text-gray-500">Phone</label>
              
              </div>
              <input
                type="text"
                id="phone"
                name="phone"
                value="{{old('phone')}}"
                class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200"
              />
              <span class="text-red-600">@error('phone'){{$message}}@enderror</span>
            </div>
      
            <div>
              <button
                type="submit"
                class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-blue-200 focus:ring-4"
              >
                Register
              </button>
              <span>Already Register?</span>
                 <a href="{{url('/')}}" class="text-m text-blue-600 hover:underline focus:text-blue-800">Login</a>
            </div>
            <div class="flex flex-col space-y-5">
            
  <!--             <div class="flex flex-col space-y-4">
                <a
                  href="#"
                  class="flex items-center justify-center px-4 py-2 space-x-2 transition-colors duration-300 border border-blue-500 rounded-md group hover:bg-blue-500 focus:outline-none"
                >
                  <span>
                    <svg class="text-blue-500 group-hover:text-white" width="20" height="20" fill="currentColor">
                      <path
                        d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"
                      ></path>
                    </svg>
                  </span>
                  <span class="text-sm font-medium text-blue-500 group-hover:text-white">Twitter</span>
                </a>
              </div> -->
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>