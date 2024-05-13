  <header class="bg-white shadow">
    <div class="countener-class-header">
      <div class="header-name">
        
        <b class="main-name">Faried</b> &nbsp;
        <h2 class="sub-name">Iskandar</h2>
      </div>

      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" id="header-title">
          <h1 class="text-3xl font-bold tracking-tight text-gray-900 text-center">{{ $slot }}</h1>
      </div>
      
    </div>
  </header>
  <style>
    .countener-class-header{
      display: flex;
    }
    #header-title{
      background-color: blueviolet
      width: 50%;
    }
    .header-name{
      display: flex;
      justify-content: center;
      align-items: center;
      width: 50%;
      font-family: cursive;
    }
    .main-name:hover{
      text-decoration: underline;
    }
    .main-name{
      font-size: 1.8rem;
    }
    .sub-name{
      font-size: 1.5rem;
      padding-top:5px;
    }
  </style>
 