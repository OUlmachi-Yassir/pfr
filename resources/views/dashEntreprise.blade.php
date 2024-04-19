<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    </head>
    <style>
        .card {
  position: relative;
  width: 400px;
  height: 500px;
  margin: 30px auto;
  box-shadow: 0 0 100px rgba(0,0,0, .3);
  border-radius: 10px;
  background: rgb(0,0,0);
  background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(29,139,253,1) 21%, rgba(255,255,255,1) 82%);
}

.card-header {
  position: relative;
  height: 220px;
  background-size: cover;
  background-position: top;
}

.card-header:after {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom, rgb(5,85,134), rgba(181,181,181, -0.20));
  border-radius: 10px;
}

.image {
  position: absolute;
  margin-top: 100px;
  left: 50%;
  z-index: 99;
  transform: translate(-50%, -50%);
  color: #222;
  font-size: 20px;
  font-weight: 400;
}

.card-header-bar {
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 101;
  width: 100%;
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  clip: rect(0,0,0,0);
  border: none;
  overflow: hidden;
}

.btn-message {
  display: inline-block;
  width: 19.37px;
  height: 16.99px;
  z-index: 100;
  margin-right: 10px;
  margin-top: 10px;
  float: right;
}

.btn-menu {
  display: inline-block;
  background: ;
  z-index: 100;
  width: 19px;
  height: 12.16px;
  margin-left: 10px;
  margin-top: 10px;
  float: left;
}

.card-header-slanted-edge {
  position: absolute;
  bottom: -3px;
  z-index: 1;
  width: 100%;
  right: 0;
  left: 0;
}

.card-body {
  text-align: center;
  padding-left: 10px;
}

.name {
  font-size: 20px;
  font-weight: 700;
  text-transform: uppercase;
  margin: 0 auto;
}

.job-title {
  font-size: 14px;
  font-weight: 300;
  margin-top: 15px;
  color: #919191;
}

.bio {
  font-size: 14px;
  color: #7B7B7B;
  font-weight: 300;
  margin: 10px auto;
  line-height: 20px;
}


    </style>
    <body>
        
    </body>
    </html>
    <nav class="mx-4 shadow-xl rounded-full hover:border-slate-400">
    <div class=" flex flex-wrap items-center justify-between my-2 mx-4">
        <a href="#" class="flex">
        <svg class="h-10 mr-3" width="51" height="70" viewBox="0 0 51 70" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M1 53H27.9022C40.6587 53 51 42.7025 51 30H24.0978C11.3412 30 1 40.2975 1 53Z" fill="#76A9FA"></path><path d="M-0.876544 32.1644L-0.876544 66.411C11.9849 66.411 22.4111 55.9847 22.4111 43.1233L22.4111 8.87674C10.1196 8.98051 0.518714 19.5571 -0.876544 32.1644Z" fill="#A4CAFE"></path><path d="M50 5H23.0978C10.3413 5 0 15.2975 0 28H26.9022C39.6588 28 50 17.7025 50 5Z" fill="#1C64F2"></path></g><defs><clipPath id="clip0"><rect width="51" height="70" fill="white"></rect></clipPath></defs></svg>
            <span class="self-center text-lg font-semibold whitespace-nowrap">FlowBite</span>
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="md:hidden ml-3 text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center" aria-controls="mobile-menu-2" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="hidden md:block w-full md:w-auto" id="mobile-menu">
        <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li>
            <a href="#" class="bg-blue-700 md:bg-transparent text-white block pl-3 pr-4 py-2 md:text-blue-700 md:p-0 rounded focus:outline-none" aria-current="page">Home</a>
            </li>
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0 font-medium flex items-center justify-between w-full md:w-auto">Dropdown <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                    <ul class="py-1" aria-labelledby="dropdownLargeButton">
                    <li>
                        <a href="{{route('dashboard.entreprise')}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('profile.edit')}}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Profile</a>
                    </li>
                    
                    </ul>
                    <div class="py-1">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</button>
                        </form>
                    </div>
                </div>
            </li>
            @if(auth()->user()->role === 'entreprise')
            <li>
            <a href="{{route('myPost')}}" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">My-Post</a>
            </li>
            @endif
            <li>
                
            </li>
            <li>
            <a href="#" class="text-gray-700 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-700 md:p-0">Contact</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
<div class=" flex flex-wrap justify-center gap-3">
    
@foreach ($freelancers as $freelancer) 
<div class="w-full max-w-xs overflow-hidden bg-white rounded-lg shadow-lg">
    <img class="object-cover w-full h-56"src="{{ asset('images/' . $freelancer->logo) }}" alt="{{ $freelancer->user->name }}">

    <div class="py-5 text-center">
        <a href="#" class="block text-xl font-bold text-gray-800 " tabindex="0" role="link">{{ $freelancer->user->name }}</a>
        <span class="text-sm text-gray-700 ">{{ $freelancer->fonction }}</span>
    </div>
</div>
@endforeach
</div>



<div class="flex flex-wrap justify-center gap-3">
    @foreach ($freelancers as $freelancer)
        <div class="w-full max-w-xs overflow-hidden bg-white rounded-lg shadow-lg">
            <img class="object-cover w-full h-56" src="{{ asset('images/' . $freelancer->logo) }}" alt="{{ $freelancer->user->name }}">
            <div class="py-5 text-center">
                <a href="#" class="block text-xl font-bold text-gray-800" tabindex="0" role="link">{{ $freelancer->user->name }}</a>
                <span class="text-sm text-gray-700">{{ $freelancer->fonction }}</span>
            </div>
            <!-- Add a data attribute to store freelancer data -->
            <div class="freelancer-details hidden" data-freelancer="{{ json_encode($freelancer) }}"></div>
        </div>
    @endforeach
</div>

<!-- Popup card template -->
<div class="popup-card hidden fixed top-0 left-0 w-full h-full flex items-center justify-center bg-gray-800 bg-opacity-75">
    <div class="card">
        <div class="card-header">
            <div class="card-header-bar">
                <a class="btn-message" href="#"><svg viewBox="0 0 16 16" class="bi bi-chat-dots-fill" fill="white" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                    </svg><span class="sr-only">Message</span></a>
                <a class="btn-menu" href="#"><svg viewBox="0 0 16 16" class="bi bi-list" fill="white" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" fill-rule="evenodd"></path>
                    </svg><span class="sr-only">Menu</span></a>
            </div>
            <span class="image bg-white rounded-full w-[110px] h-[110px]  "><img class="rounded-full h-[100px] w-[100px] mt-1 m-auto" src="" alt=""></span>
            <div class="card-header-slanted-edge"></div>
        </div>
        <div class="card-body">
            <span class="name"></span><br>
            <span class="job-title"></span>
            <div class="bio"></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const freelancerCards = document.querySelectorAll('.w-full.max-w-xs.overflow-hidden.bg-white.rounded-lg.shadow-lg');
        const popupCard = document.querySelector('.popup-card');

        freelancerCards.forEach(card => {
            card.addEventListener('click', function () {
                const freelancerData = JSON.parse(this.querySelector('.freelancer-details').dataset.freelancer);
                // Populate popup card with freelancer data
                popupCard.querySelector('.image img').src = "{{ asset('images/') }}" + '/' + freelancerData.logo;
                popupCard.querySelector('.name').textContent = freelancerData.user.name;
                popupCard.querySelector('.job-title').textContent = freelancerData.fonction;
                popupCard.classList.remove('hidden');
            });
        });

        // Close popup card when clicking outside
        popupCard.addEventListener('click', function (e) {
            if (e.target.classList.contains('popup-card')) {
                this.classList.add('hidden');
            }
        });
    });
</script>









    


