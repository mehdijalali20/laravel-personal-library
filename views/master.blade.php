<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">         /* csrf توکن */
  <title>{{ config('app.name', 'Laravel') }}</title>            /* نمایش نام سایت */
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">     /* را قرار می دهد public آدرس دایرکتوری  */
</head>
<body>
  <a href="{{ url('/') }}"> Logo </a>                           /* url برای قرار دادن */

  /************************ لینک ورود ثبت نام *************************/

  @if (Route::has('login'))
  @guest
      <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
    @if (Route::has('register'))
      <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
    @endif
  @else
    <li>
      <a href="{{ route('logout') }}">{{ __('Logout') }}</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </li>
  @endguest
  @endif

/************************************************************************/
<div class="row">
  @yield('content')                                         /* برای مشخص کردن جایی برای قرار دادن کد ها داخل آن از طریق فایل دیگر */
</div>
<script src="{{ asset('js/app.js') }}" defer></script>      /* استفاده می شود asset در فراخوانی فایل جاوا اسکریپت هم */

</body>
