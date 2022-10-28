<!-- ==========Preloader========== -->
<div class="preloader">
  <div class="preloader-inner">
    <div class="preloader-icon">
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<!-- ==========Preloader========== -->

<!-- ==========Overlay========== -->
<div class="overlay"></div>
<a href="index.html#" class="scrollToTop">
  <i class="fas fa-angle-up"></i>
</a>
<!-- ==========Overlay========== -->

<!-- ==========Header-Section========== -->
<header class="top-header">
  <div class="header-section">
    <div class="container">
      <div class="header-wrapper">
        <div class="header-top-area-inner">
          <a href="index.html" class="logo">
            <img src="{{ asset('guest/images/manilalotto.png') }}" alt="" width="130" height="50">
          </a>
        </div>
        <div class="right-tools">
          <ul class="menu">
            <li>
              <a href="{{ route('guest.home') }}" class="{{ Route::is('guest.home') ? 'active' : '' }}">Home</a>
            </li>
            <li>
              <a href="{{ route('guest.result') }}" class="{{ Route::is('guest.result') ? 'active' : '' }}">Results</a>
            </li>
            <li>
              <a href="{{ route('guest.contact') }}" class="{{ Route::is('guest.contact') ? 'active' : '' }}">Contact</a>
            </li>
          </ul>
        </div>
        <div class="header-bar d-lg-none">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
    {
      "symbols": [{
          "proName": "FOREXCOM:SPXUSD",
          "title": "S&P 500"
        },
        {
          "proName": "FOREXCOM:NSXUSD",
          "title": "US 100"
        },
        {
          "proName": "FX_IDC:EURUSD",
          "title": "EUR/USD"
        },
        {
          "proName": "BITSTAMP:BTCUSD",
          "title": "Bitcoin"
        },
        {
          "proName": "BITSTAMP:ETHUSD",
          "title": "Ethereum"
        },
        {
          "description": "ETHUSD",
          "proName": "COINBASE:ETHUSD"
        }
      ],
      "showSymbolLogo": true,
      "colorTheme": "light",
      "isTransparent": false,
      "displayMode": "regular",
      "locale": "en"
    }
  </script>
</div>
<!-- TradingView Widget END -->
<!-- ==========Header-Section========== -->